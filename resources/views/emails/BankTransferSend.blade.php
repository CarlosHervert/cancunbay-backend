<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Transfer Instructions</title>
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
            background-color: #1ea767;
            padding: 30px 20px;
            text-align: center;
            border-bottom: 1px solid #168f56;
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
            color: #1ea767;
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
            background-color: #f0fdf4;
            padding: 15px 20px;
            border-bottom: 1px solid #dcfce7;
            color: #166534;
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
            word-wrap: break-word;
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
            color: #1ea767;
        }

        /* Button */
        .btn-container {
            text-align: center;
            margin-top: 30px;
        }

        .btn {
            display: inline-block;
            background-color: #1ea767;
            color: #ffffff;
            font-weight: 600;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            box-shadow: 0 4px 6px rgba(30, 167, 103, 0.2);
        }

        /* Footer */
        .footer {
            background-color: #1ea767;
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
                                        Instructions for bank transfer
                                    </h1>
                                    <p>
                                        Dear {{ $details['client'] }}:<br>
                                        This is the necessary information so that you can make your bank transfer. If you have any questions, you can contact us so we can help you.
                                    </p>
                                </div>

                                <!-- Receipt Card -->
                                <div class="receipt-container">
                                    <div class="receipt-header">
                                        Transfer Details
                                    </div>
                                    <div class="receipt-body">
                                        <div class="info-row">
                                            <span class="info-label">Type</span>
                                            <span class="info-value" style="text-transform: capitalize;">{{ $details['type'] }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">Bank name</span>
                                            <span class="info-value">{{ $details['bankName'] }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">Bank code</span>
                                            <span class="info-value">{{ $details['bankCode'] }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">Banck clabe</span>
                                            <span class="info-value">{{ $details['bankClabe'] }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">Bank reference</span>
                                            <span class="info-value">{{ $details['bankReference'] }}</span>
                                        </div>


                                        <!-- Separator -->
                                        <div class="receipt-separator"></div>

                                        <div class="total-row">
                                            <div class="total-label">Amount</div>
                                            <div class="total-amount">
                                                $ {{ number_format($details['amount'], 2) }} {{ $details['currency'] }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Receipt Card -->

                                <div style="text-align: center; margin-top: 20px; color: #666; font-size: 14px; line-height: 1.5;">
                                    <p>Verify that it is the amount mentioned. Once the transfer is done, we will send you an email with the confirmation of your reservation</p>
                                </div>


                            </td>
                        </tr>

                        <!-- Footer -->
                        <tr>
                            <td class="footer">
                                <p style="font-size: 20px; margin-bottom: 10px;"><strong>Get in touch</strong></p>
                                <p style="margin-bottom: 10px;">
                                    +11 111 333 4444 <br>
                                    <a href="mailto:websales@nstoursmexico.com" style="color:#ffffff;">websales@nstoursmexico.com</a>
                                </p>

                                <div style="margin-top: 20px; margin-bottom: 20px;">
                                    <!-- Social Icons -->
                                    <a href="https://facebook.com/" target="_blank" style="margin: 0 5px; text-decoration: none;">
                                        <img src="https://cdn.tools.unlayer.com/social/icons/circle-white/facebook.png" alt="Facebook" width="32" style="width: 32px;">
                                    </a>
                                    <a href="https://instagram.com/" target="_blank" style="margin: 0 5px; text-decoration: none;">
                                        <img src="https://cdn.tools.unlayer.com/social/icons/circle-white/instagram.png" alt="Instagram" width="32" style="width: 32px;">
                                    </a>
                                    <a href="https://email.com/" target="_blank" style="margin: 0 5px; text-decoration: none;">
                                        <img src="https://cdn.tools.unlayer.com/social/icons/circle-white/email.png" alt="Email" width="32" style="width: 32px;">
                                    </a>
                                    <a href="https://whatsapp.com/" target="_blank" style="margin: 0 5px; text-decoration: none;">
                                        <img src="https://cdn.tools.unlayer.com/social/icons/circle-white/whatsapp.png" alt="WhatsApp" width="32" style="width: 32px;">
                                    </a>
                                </div>

                                <p>Copyrights &copy; Ns Tours Mexico</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
