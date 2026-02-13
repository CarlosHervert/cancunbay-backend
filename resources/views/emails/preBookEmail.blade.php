<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Book Information</title>
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
            background-color: #f4f6f8;
            color: #888;
            padding: 30px 20px;
            text-align: center;
            font-size: 12px;
        }

        .footer a {
            color: #EB008B;
            text-decoration: none;
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
                                            Pre-book Confirmation
                                        @else
                                            Confirmación de Pre-reserva
                                        @endif
                                    </h1>
                                    <p>
                                        @if ($details['language'] === 'ing')
                                            Here are the details of your request.
                                        @else
                                            Aquí están los detalles de tu solicitud.
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
                                            <span class="info-label">Hotel</span>
                                            <span class="info-value">{{ $details['hotel'] }}</span>
                                        </div>
                                        @if (!empty($details['eventUrlBook']))
                                            <div class="info-row">
                                                <span class="info-label">Event Url</span>
                                                <span class="info-value">{{ $details['eventUrlBook'] }}</span>
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
                                                </span>
                                            </div>
                                            <!-- Optional: Price per item if needed, currently showing total only -->
                                        </div>

                                        @if (!empty($details['promocode']))
                                            <div class="item-row">
                                                <div class="item-name" style="color: #EB008B;">
                                                    Promocode: {{ $details['promocode'] }}
                                                </div>
                                            </div>
                                        @endif

                                        <div class="total-row">
                                            <div class="total-label">Total</div>
                                            <div class="total-amount">
                                                $ {{ $details['total'] }} {{ $details['currency'] }}
                                            </div>
                                        </div>

                                        @if (!empty($details['total_promocode']))
                                            <div style="text-align: right; font-size: 13px; color: #666; margin-top: 5px;">
                                                @if ($details['language'] === 'ing')
                                                    Promo Price: <strong>$ {{ $details['total_promocode'] }} {{ $details['currency'] }}</strong>
                                                @else
                                                    Precio Promo: <strong>$ {{ $details['total_promocode'] }} {{ $details['currency'] }}</strong>
                                                @endif
                                            </div>
                                        @endif

                                    </div>
                                </div>
                                <!-- End Receipt Card -->

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
                                <p>
                                    <a href="https://www.cancunbay.com/">www.cancunbay.com</a>
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
