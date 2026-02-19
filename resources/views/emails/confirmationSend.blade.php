<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        /* Base styles */
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f8;
            color: #333333;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
        }

        td {
            padding: 0;
        }

        img {
            border: 0;
            -ms-interpolation-mode: bicubic;
        }

        /* Container */
        .wrapper {
            width: 100%;
            table-layout: fixed;
            background-color: #f4f6f8;
            padding-bottom: 40px;
        }

        .main-container {
            background-color: #ffffff;
            margin: 0 auto;
            max-width: 600px;
            width: 100%;
            border-radius: 8px;
            /* Rounded corners */
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        /* Header */
        .header {
            background-color: #EB008B;
            padding: 30px 20px;
            text-align: center;
            border-bottom: 1px solid #d4007d;
        }

        .logo {
            max-width: 180px;
            height: auto;
        }

        /* Content */
        .content {
            padding: 40px 30px;
        }

        .intro-text {
            text-align: center;
            margin-bottom: 30px;
            color: #555;
            font-size: 16px;
            line-height: 1.5;
        }

        .intro-title {
            color: #EB008B;
            font-size: 24px;
            font-weight: 700;
            margin: 0 0 10px 0;
            text-transform: uppercase;
        }

        /* Receipt Card Style */
        .receipt-container {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            background-color: #ffffff;
            overflow: hidden;
        }

        .receipt-header {
            background-color: #fafafa;
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
            color: #777;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }

        .receipt-body {
            padding: 20px;
        }

        .info-row {
            margin-bottom: 12px;
            font-size: 14px;
        }

        .info-label {
            color: #888;
            font-weight: 500;
            display: inline-block;
            width: 40%;
            vertical-align: top;
        }

        .info-value {
            color: #333;
            font-weight: 600;
            display: inline-block;
            width: 58%;
        }

        /* Dashed Separator (The "Tear" line) */
        .receipt-separator {
            border-top: 2px dashed #dcdcdc;
            margin: 25px -20px;
            /* Negative margin to stretch full width */
            position: relative;
        }

        .receipt-separator:before,
        .receipt-separator:after {
            content: "";
            display: block;
            width: 20px;
            height: 20px;
            background-color: #f4f6f8;
            /* Match body bg */
            border-radius: 50%;
            position: absolute;
            top: -11px;
        }

        .receipt-separator:before {
            left: -10px;
        }

        .receipt-separator:after {
            right: -10px;
        }

        /* Purchase Details Section */
        .purchase-details-title {
            font-size: 16px;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .purchase-details-title img {
            width: 20px;
            margin-right: 10px;
            opacity: 0.6;
        }

        .item-row {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .item-name {
            color: #333;
            font-weight: 500;
            flex: 1;
            padding-right: 15px;
        }

        .item-price {
            color: #333;
            font-weight: 600;
            white-space: nowrap;
        }

        .item-meta {
            font-size: 12px;
            color: #999;
            margin-top: 2px;
            display: block;
        }

        .total-row {
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total-label {
            font-size: 16px;
            font-weight: 700;
            color: #333;
        }

        .total-amount {
            font-size: 24px;
            font-weight: 800;
            color: #EB008B;
        }

        /* Policy Section (New for Confirmation) */
        .policy-section {
            margin-top: 30px;
            font-size: 12px;
            color: #666;
            line-height: 1.6;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }

        .policy-title {
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .policy-item {
            margin-bottom: 8px;
            display: block;
        }

        /* Button */
        .btn-container {
            text-align: center;
            margin-top: 30px;
        }

        .btn {
            display: inline-block;
            background-color: #EB008B;
            color: #ffffff;
            font-weight: 600;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            box-shadow: 0 4px 6px rgba(235, 0, 139, 0.2);
        }

        /* Footer */
        .footer {
            background-color: #00a6ce;
            /* Requested blue color */
            color: #ffffff;
            padding: 30px 20px;
            text-align: center;
            font-size: 13px;
        }

        .footer a {
            color: #ffffff;
            text-decoration: underline;
        }

        /* Responsive */
        @media only screen and (max-width: 600px) {
            .content {
                padding: 20px;
            }

            .info-label {
                width: 100%;
                display: block;
                margin-bottom: 2px;
            }

            .info-value {
                width: 100%;
                display: block;
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td style="padding: 20px 0;">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="main-container">

                        <!-- Header -->
                        <tr>
                            <td class="header">
                                <a href="https://www.cancunbay.com/" target="_blank">
                                    <img src="https://www.cancunbay.com/images/layout/logo.png" alt="Cancun Bay Logo" class="logo">
                                </a>
                            </td>
                        </tr>

                        <!-- Content -->
                        <tr>
                            <td class="content">

                                <div class="intro-text">
                                    <h1 class="intro-title">
                                        @if ($details['language'] === 'ing')
                                            Thanks for your purchase!
                                        @else
                                            ¡Gracias por tu compra!
                                        @endif
                                    </h1>
                                    @if ($details['status'] === 'pending' && isset($details['merch']) && $details['merch'] === 'Clip')
                                        <div style="background-color: #fff3cd; color: #856404; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #ffeeba; text-align: left;">
                                            @if ($details['language'] === 'ing')
                                                <strong>Payment Pending:</strong> Your payment via Clip is currently being processed. This is not yet a final booking confirmation; you will receive a final confirmation once the payment is approved.
                                            @else
                                                <strong>Pago Pendiente:</strong> Tu pago a través de Clip está aun no esta cubierto. Esta no es una confirmación total de reserva; recibirás la confirmación final una vez que el pago sea aprobado.
                                            @endif
                                        </div>
                                    @endif
                                    <p>
                                        @if ($details['language'] === 'ing')
                                            Here is your booking confirmation.
                                        @else
                                            Aquí está la confirmación de tu reserva.
                                        @endif
                                    </p>
                                </div>

                                <!-- Receipt Card -->
                                <div class="receipt-container">
                                    <div class="receipt-header">
                                        @if ($details['language'] === 'ing')
                                            Client Information
                                        @else
                                            Información del Cliente
                                        @endif
                                    </div>
                                    <div class="receipt-body">
                                        <div class="info-row">
                                            <span class="info-label">
                                                @if ($details['language'] === 'ing')
                                                    Name
                                                @else
                                                    Nombre
                                                @endif
                                            </span>
                                            <span class="info-value">{{ $details['client'] }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">Email</span>
                                            <span class="info-value">{{ $details['email'] }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">
                                                @if ($details['language'] === 'ing')
                                                    Phone
                                                @else
                                                    Teléfono
                                                @endif
                                            </span>
                                            <span class="info-value">{{ $details['phone'] }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">
                                                @if ($details['language'] === 'ing')
                                                    Location
                                                @else
                                                    Ubicación
                                                @endif
                                            </span>
                                            <span class="info-value">{{ $details['city'] }}, {{ $details['country'] }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">
                                                @if ($details['language'] === 'ing')
                                                    Booking Code
                                                @else
                                                    Código Reserva
                                                @endif
                                            </span>
                                            <span class="info-value">{{ $details['codeBook'] }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">
                                                @if ($details['language'] === 'ing')
                                                    Customer ID
                                                @else
                                                    ID Cliente
                                                @endif
                                            </span>
                                            <span class="info-value">{{ $details['payment_clients_id'] }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">
                                                @if ($details['language'] === 'ing')
                                                    Payment Code
                                                @else
                                                    Código Pago
                                                @endif
                                            </span>
                                            <span class="info-value">{{ $details['authorization'] }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">
                                                @if ($details['language'] === 'ing')
                                                    Pickup
                                                @else
                                                    Recogida
                                                @endif
                                            </span>
                                            <span class="info-value">{{ $details['hotel'] }}</span>
                                        </div>
                                        @if (!empty($details['promocode']))
                                            <div class="info-row">
                                                <span class="info-label">Promocode</span>
                                                <span class="info-value" style="color: #EB008B;">{{ $details['promocode'] }}</span>
                                            </div>
                                        @endif

                                        <!-- The "Tear" Line -->
                                        <div class="receipt-separator"></div>

                                        <!-- Purchase Details -->
                                        <div class="purchase-details-title">
                                            <!-- Simple icon SVG -->
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#EB008B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 8px;">
                                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                                            </svg>
                                            @if ($details['language'] === 'ing')
                                                Purchase Details
                                            @else
                                                Detalle de tu compra
                                            @endif
                                        </div>

                                        <div class="item-row">
                                            <div class="item-name">
                                                {{ $details['nameTour'] }}
                                                <span class="item-meta">
                                                    {{ $details['date'] }} •
                                                    {{ $details['adults'] }} @if ($details['language'] === 'ing')
                                                        Adults
                                                    @else
                                                        Adultos
                                                    @endif
                                                    @if ($details['child'] > 0), {{ $details['child'] }} @if ($details['language'] === 'ing')
                                                            Children
                                                        @else
                                                            Niños
                                                        @endif
                                                    @endif
                                                    <br>
                                                    @if ($details['language'] === 'ing')
                                                        Duration:
                                                    @else
                                                        Duración:
                                                    @endif {{ $details['duration'] }}
                                                </span>
                                            </div>
                                            <!-- Optional: Price per item if needed, currently showing total only -->
                                        </div>

                                        <div class="total-row">
                                            <div class="total-label">Total</div>
                                            <div class="total-amount">
                                                $ {{ $details['total'] }} {{ $details['currency'] }}
                                            </div>
                                        </div>

                                        @if (isset($details['discount']) && $details['discount'] > 0)
                                            <div style="text-align: right; font-size: 13px; color: #666; margin-top: 5px;">
                                                @if ($details['language'] === 'ing')
                                                    Discount Applied
                                                @else
                                                    Descuento Aplicado
                                                @endif
                                            </div>
                                        @endif

                                    </div>
                                </div>
                                <!-- End Receipt Card -->

                                <!-- Cancellation Policy Section -->
                                <div class="policy-section">
                                    <div class="policy-title">
                                        @if ($details['language'] === 'ing')
                                            Cancellation Policy
                                        @else
                                            Política de Cancelación
                                        @endif
                                    </div>
                                    <p>
                                        @if ($details['language'] === 'ing')
                                            Cancellations Request will be only by e-mail to websales@cancunbay.com as MANDATORY.
                                        @else
                                            La solicitud de cancelaciones será únicamente por correo electrónico a websales@cancunbay.com como OBLIGATORIO.
                                        @endif
                                    </p>
                                    <ul style="padding-left: 20px; margin: 0;">
                                        <li class="policy-item">
                                            @if ($details['language'] === 'ing')
                                                Cancellations made 48 hrs before your service = 100% refund
                                            @else
                                                Cancelaciones realizadas 48 hrs antes de su servicio = 100% reembolso
                                            @endif
                                        </li>
                                        <li class="policy-item">
                                            @if ($details['language'] === 'ing')
                                                Cancellations made between 36 hrs and 48 hrs before your service = 80% refund
                                            @else
                                                Cancelaciones realizadas entre 36 hrs y 48 hrs antes de su servicio = 80% de reembolso
                                            @endif
                                        </li>
                                        <li class="policy-item">
                                            @if ($details['language'] === 'ing')
                                                Cancellations made in a reservation paid with Paypal only apply for a refund of 80% tops
                                            @else
                                                Las cancelaciones realizadas en una reserva pagada con Paypal solo aplican o un reembolso del 80% de los tops
                                            @endif
                                        </li>
                                        <li class="policy-item">
                                            @if ($details['language'] === 'ing')
                                                Cancellations made between 24 hrs and 36 hrs before your service = 50% refund
                                            @else
                                                Cancelaciones realizadas entre 24 hrs y 36 hrs antes de su servicio = 50% de reembolso
                                            @endif
                                        </li>
                                        <li class="policy-item">
                                            @if ($details['language'] === 'ing')
                                                Cancellations made less than 24 hrs before your service = no refund
                                            @else
                                                Cancelaciones realizadas con menos de 24 hrs antes de su servicio = sin reembolso
                                            @endif
                                        </li>
                                        <li class="policy-item">
                                            @if ($details['language'] === 'ing')
                                                No show = no refund
                                            @else
                                                No presentación = sin reembolso
                                            @endif
                                        </li>
                                        <li class="policy-item">
                                            @if ($details['language'] === 'ing')
                                                IMPORTANT: Tour Combos do not apply for a partial refund. If you do one tour from the combo, the cancelation or the refund does not apply
                                            @else
                                                IMPORTANTE: Tour Combos no aplica para reembolso parcial. Si haces un tour del combo no aplica la cancelación ni el reembolso
                                            @endif
                                        </li>
                                        <li class="policy-item">
                                            @if ($details['language'] === 'ing')
                                                These policies are not applied in cases of hurricane, tropical storms, or natural phenomenons. In these cases the policy of change of date of the tour will be observed
                                            @else
                                                Estas políticas no se aplican en casos de huracanes, tormentas tropicales o fenómenos naturales. En estos casos se observará la política de cambio de fecha del tour
                                            @endif
                                        </li>
                                        <li class="policy-item">
                                            @if ($details['language'] === 'ing')
                                                Date or Schedule changes in reservations for "Hotel-Airport" are only allowed 24 hours in advance
                                            @else
                                                Cambios de Fecha u Horario en reservas de “Hotel-Aeropuerto” solo se permiten con 24 horas de anticipación
                                            @endif
                                        </li>
                                        <li class="policy-item">
                                            @if ($details['language'] === 'ing')
                                                The policy of 100% refund does not apply on reservations with promotional codes or discounts, even if the cancellation is made 48 hours prior to the service. In these cases the refund will only be of 80% tops
                                            @else
                                                La política de devolución del 100% no aplica en reservas con códigos promocionales o descuentos, aún si la cancelación se realiza 48 horas antes del servicio. En estos casos la devolución será únicamente del 80% como máximo
                                            @endif
                                        </li>
                                    </ul>
                                </div>


                                <!-- Action Button -->
                                <div class="btn-container">
                                    <a href="https://www.cancunbay.com/" class="btn">
                                        @if ($details['language'] === 'ing')
                                            Visit Website
                                        @else
                                            Visitar Sitio Web
                                        @endif
                                    </a>
                                </div>

                            </td>
                        </tr>

                        <!-- Footer -->
                        <tr>
                            <td class="footer">
                                <p>&copy; Cancun Bay Tours. All rights reserved.</p>
                                <p style="margin-top: 10px;">
                                    <strong>Toll free USA/CAN:</strong> +1(888) 257-5547 | <strong>MEX:</strong> 01(984)242-0070 <br>
                                    <a href="mailto:websales@cancunbay.com" style="color:#ffffff;">websales@cancunbay.com</a>
                                </p>
                                <p style="margin-top: 10px;">
                                    <a href="https://www.cancunbay.com/" style="color:#ffffff;">www.cancunbay.com</a>
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
