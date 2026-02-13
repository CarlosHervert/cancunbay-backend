<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Request</title>
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
            background-color: #1a2d4e;
            /* Original Dark Blue */
            padding: 30px 20px;
            text-align: center;
            border-bottom: 1px solid #14233c;
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
            color: #0394EE;
            /* Original Light Blue Accent */
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
            background-color: #f0f8ff;
            /* Very light blue background */
            padding: 15px 20px;
            border-bottom: 1px solid #e1ecf4;
            color: #1a2d4e;
            /* Original Dark Blue for header text */
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
            width: 30%;
            vertical-align: top;
        }

        .info-value {
            color: #333;
            font-weight: 600;
            display: inline-block;
            width: 68%;
            word-wrap: break-word;
        }

        .message-block {
            margin-top: 15px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 4px;
            color: #555;
            font-style: italic;
            border-left: 3px solid #0394EE;
            /* Original Light Blue Accent */
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

        /* Footer */
        .footer {
            background-color: #1a2d4e;
            /* Original Dark Blue for consistent theme */
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
                                            Contact Request
                                        @else
                                            Información de contacto
                                        @endif
                                    </h1>

                                </div>

                                <!-- Receipt Card -->
                                <div class="receipt-container">
                                    <div class="receipt-header">
                                        @if ($details['language'] === 'ing')
                                            Contact Details
                                        @else
                                            Detalles de Contacto
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

                                        <!-- Message Section -->
                                        <div class="info-row" style="margin-top: 20px;">
                                            <span class="info-label" style="width: 100%; display: block; margin-bottom: 5px;">
                                                @if ($details['language'] === 'ing')
                                                    Message
                                                @else
                                                    Mensaje
                                                @endif
                                            </span>
                                            <div class="message-block">
                                                {{ $details['message'] }}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- End Receipt Card -->

                            </td>
                        </tr>

                        <!-- Footer -->
                        <tr>
                            <td class="footer">
                                <p>&copy; Cancun Bay Tours. All rights reserved.</p>
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
