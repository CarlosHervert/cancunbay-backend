<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use App\PaymentClient;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ClipController extends Controller
{
    /**
     * Genera una preferencia de pago (Checkout) en Clip
     */
    public function createPreference(Request $request)
    {
        $apiKey = env('CLIP_API_KEY_PRODUCTION');
        $apiSecret = env('CLIP_API_SECRET_PRODUCTION');
        $authHeader = base64_encode($apiKey . ':' . $apiSecret);
        $baseUrl = 'https://api-gw.payclip.com/checkout';

        // Buscamos al cliente para tener sus datos si es necesario
        $client = PaymentClient::find($request->clientId);

        $redirectionBaseUrl = $request->input('baseUrl') ?? "https://www.cancunbay.com.mx/checkout";
        if ($redirectionBaseUrl === "http://localhost:3000/checkout") {
            $redirectionBaseUrl = "https://www.cancunbay.com.mx/checkout";
        }

        $clientId = $request->clientId;

        $data = [
            'amount' => (float) $request->total,
            'currency' => 'MXN',
            'purchase_description' => 'Tour: ' . ($request->tourData['name'] ?? 'Reserva Cancunbay'),
            'redirection_url' => [
                'success' => $redirectionBaseUrl . "?status=success&clientId=" . $clientId,
                'error'   => $redirectionBaseUrl . "?status=error&clientId=" . $clientId,
                'default' => $redirectionBaseUrl
            ],
            'metadata' => [
                'me_reference_id' => (string) $request->clientId,
                'customer_info' => [
                    'name'  => $client->name  ?? '',
                    'email' => $client->email ?? '',
                    'phone' => $client->phone ?? ''
                ]
            ]
        ];

        Log::info('Clip Request: createPreference', ['url' => $baseUrl, 'data' => $data]);
        try {
            $response = Http::withHeaders([
                'x-api-key'     => 'Basic ' . $authHeader,
                'Accept'        => 'application/vnd.com.payclip.v2+json',
                'Content-Type'  => 'application/json',
            ])->post($baseUrl, $data);

            Log::info('Clip Response: createPreference', [
                'status' => $response->status(),
                'body' => $response->json()
            ]);

            if ($response->successful()) {
                $responseData = $response->json();
                $paymentRequestId = $responseData['payment_request_id'] ?? null;

                // Guardar el payment_request_id en la tabla de pagos para referencia
                Payment::where('payment_clients_id', $clientId)
                    ->update([
                        'authorization' => $paymentRequestId,
                        'merch' => 'Clip'
                    ]);

                return response()->json([
                    'status' => 'success',
                    'checkout_url' => $responseData['payment_request_url'] ?? null,
                    'payment_request_id' => $paymentRequestId,
                    'client' => $client
                ]);
            }

            Log::error('Clip API Error', [
                'status' => $response->status(),
                'body' => $response->body()
            ]);

            return response()->json([
                'status' => 'error',
                'message' => 'Error al contactar con Clip',
                'details' => $response->json()
            ], $response->status());
        } catch (\Exception $e) {
            Log::error('Clip Integration Exception', [
                'message' => $e->getMessage()
            ]);

            return response()->json([
                'status' => 'error',
                'message' => 'Excepción en la integración de Clip'
            ], 500);
        }
    }


    /**
     * Consulta el estado real del pago en Clip
     */
    public function verifyPaymentStatus(Request $request)
    {
        $clientId = $request->clientId;
        // Buscamos el registro del pago para obtener el authorization (payment_request_id)
        $payment = Payment::where('payment_clients_id', $clientId)->first();

        if (!$payment || !$payment->authorization) {
            return response()->json(['status' => 'error', 'message' => 'No se encontró el ID de pago'], 404);
        }

        $apiKey = env('CLIP_API_KEY_PRODUCTION');
        $apiSecret = env('CLIP_API_SECRET_PRODUCTION');
        $authHeader = base64_encode($apiKey . ':' . $apiSecret);

        $baseUrl = 'https://api-gw.payclip.com/checkout/' . $payment->authorization;

        Log::info('Clip Request: verifyPaymentStatus', ['url' => $baseUrl]);
        try {
            $response = Http::withHeaders([
                'x-api-key' => 'Basic ' . $authHeader,
                'Accept'    => 'application/vnd.com.payclip.v2+json',
            ])->get($baseUrl);

            Log::info('Clip Response: verifyPaymentStatus', [
                'status' => $response->status(),
                'body' => $response->json()
            ]);

            if ($response->successful()) {
                $data = $response->json();
                $clipStatus = $data['status'] ?? '';

                // PAID -> Pago con tarjeta completado
                // PENDING -> Probablemente efectivo (OXXO) o espera de pago
                // EXPIRED / CANCELLED -> Rejected
                $finalStatus = 'pending';
                if ($clipStatus === 'PAID') {
                    $finalStatus = 'complet';
                } elseif ($clipStatus === 'EXPIRED' || $clipStatus === 'CANCELLED') {
                    $finalStatus = 'rejected';
                }

                return response()->json([
                    'status' => 'success',
                    'clip_status' => $clipStatus,
                    'final_status' => $finalStatus,
                    'payment_id' => $payment->authorization
                ]);
            }

            return response()->json(['status' => 'error', 'message' => 'Error al consultar Clip'], 500);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Webhook o Callback para verificar el pago (opcional si se usa redirección simple)
     */
    public function verifyPayment(Request $request)
    {
        // Aquí se recibiría la confirmación de Clip si se configura el webhook
        Log::info('Clip Webhook received', $request->all());
        return response()->json(['status' => 'ok']);
    }
}
