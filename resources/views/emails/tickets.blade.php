<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invitation Confirmed</title>
    <style>
        /* Reset & Basics */
        body { margin: 0; padding: 0; background-color: #FDFBF7; font-family: 'Segoe UI', Tahoma, Geneva, sans-serif; -webkit-font-smoothing: antialiased; }
        table { border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { border: 0; display: block; line-height: 100%; outline: none; text-decoration: none; }
        a { text-decoration: none; }

        /* Typography & Colors */
        .text-gold { color: #C5A065; }
        .bg-gold { background-color: #C5A065; }
        .text-dark { color: #2D3748; }
        .text-gray { color: #718096; }

        /* Card Styles */
        .card-container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(197, 160, 101, 0.15);
            overflow: hidden;
            margin-bottom: 25px;
            border: 1px solid #F0EAE0;
        }

        .qr-frame {
            padding: 15px;
            background-color: #FAFAFA;
            border-radius: 8px;
            border: 1px dashed #DCC8A8;
            display: inline-block;
        }

        /* Utility for centering on mobile */
        @media only screen and (max-width: 600px) {
            .mobile-center { text-align: center !important; }
        }
    </style>
</head>
<body style="background-color: #FDFBF7; margin: 0; padding: 40px 0;">

<center>
    <table role="presentation" width="100%" border="0" cellpadding="0" cellspacing="0" style="max-width: 600px;">

        <tr>
            <td align="center" style="padding-bottom: 40px;">

                <div style="margin-bottom: 35px;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 327.46 134.25" style="width: 160px; max-width: 100%; height: auto; display: inline-block;">
                        <defs><style>.cls-1{fill:#224d59;}.cls-2{fill:#63ae45;}</style></defs>
                        <g>
                            <polygon class="cls-1" points="148.89 80.33 120.48 80.33 107.5 96.5 157.64 96.5 162.73 105.42 185.43 105.42 147.07 34.58 133.51 51.47 148.89 80.33"/>
                            <polygon class="cls-1" points="297.5 34.58 297.5 34.58 272.73 34.58 244.71 72.75 216.46 34.58 191.63 34.58 191.6 34.58 191.6 105.42 211.56 105.42 211.56 61.51 244.77 106.4 277.68 61.58 277.68 105.42 297.64 105.42 297.64 34.58 297.5 34.58"/>
                            <rect class="cls-1" x="307.5" y="34.58" width="19.96" height="70.85"/>
                            <polygon class="cls-2" points="118.2 34.58 65.09 134.25 67.05 134.25 147.07 34.58 118.2 34.58"/>
                            <polygon class="cls-2" points="149.8 0 124.42 25.37 149.8 25.37 149.8 0"/>
                            <path class="cls-1" d="M83.39,53.85v-19.27H15.8c-5.59,.17-8.31,1.77-11.17,4.62-2.86,2.86-4.63,6.81-4.63,11.17,0,8.86,6.26,12.66,13,15.99l40.38,19.95H.54v19.11H70.69l13.29-24.95L27.33,53.85h56.06Z"/>
                        </g>
                    </svg>
                </div>

                <div style="margin-bottom: 25px;">
                    <h2 style="margin: 0 0 5px 0; font-size: 26px; font-weight: 800; color: #2D3748; letter-spacing: -0.5px; line-height: 1.2;">
                        {{$event->title_en}}
                    </h2>
                    <h2 style="margin: 0; font-size: 22px; font-weight: 600; color: #4A5568; line-height: 1.4; font-family: 'Segoe UI', Tahoma, sans-serif;">
                        {{$event->title}}
                    </h2>
                </div>

                <div style="width: 50px; height: 3px; background-color: #C5A065; margin: 0 auto 30px auto; border-radius: 2px;"></div>

                <div style="margin-bottom: 15px;" dir="ltr">
                    <p style="margin: 0; font-size: 15px; line-height: 1.6; color: #718096; max-width: 90%; margin: 0 auto;">
                        {{$event->description_en}}
                    </p>
                </div>
                <div style="margin-bottom: 10px;" dir="rtl">
                    <p style="margin: 0; font-size: 15px; line-height: 1.7; color: #C5A065; font-weight: 500; max-width: 90%; margin: 0 auto;">
                        {{$event->description}}
                    </p>
                </div>

            </td>
        </tr>

        <tr>
            <td align="center" style="padding-bottom: 30px;">
                <h1 class="text-dark" style="margin: 0 0 10px 0; font-size: 22px; font-weight: 600;">Welcome, {{ $invitation->invitee_name }}</h1>
                <p class="text-gray" style="margin: 0; font-size: 15px; line-height: 1.6; max-width: 90%;">
                    Thank you for accepting our invitation. Enclosed are your admission tickets.
                    <br>
                    <span style="color: #C5A065; font-size: 14px;">تشرفنا بقبولكم الدعوة. مرفق أدناه بطاقات الدخول الخاصة بكم.</span>
                </p>
            </td>
        </tr>

        <tr>
            <td>
                @foreach ($tickets as $ticket)

                    @if($ticket['label'] === 'Main')
                        <div class="card-container">
                            <div class="bg-gold" style="height: 6px; width: 100%;"></div>

                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center" style="padding: 35px 20px;">

                                        <span style="background-color: #FEF9EF; color: #C5A065; padding: 6px 16px; border-radius: 50px; font-size: 11px; font-weight: bold; letter-spacing: 1px; border: 1px solid #F0EAE0; text-transform: uppercase;">
                                            Official Guest
                                        </span>

                                        <h2 style="margin: 15px 0 5px 0; color: #1a202c; font-size: 22px;">{{ $invitation->invitee_name }}</h2>
                                        @if(!empty($invitation->invitee_position))
                                            <p style="margin: 0 0 25px 0; color: #A0AEC0; font-size: 14px;">{{ $invitation->invitee_position }}</p>
                                        @endif

                                        <table width="100%" cellpadding="0" cellspacing="0" style="margin: 0 0 25px 0; background-color: #FAFAFA; border-radius: 8px; border: 1px dashed #E2E8F0; max-width: 400px;">
                                            <tr>
                                                <td align="center" style="padding: 15px; border-right: 1px dashed #E2E8F0; width: 50%;">
                                                    <div style="font-size: 20px;">📅</div>
                                                    <div style="font-size: 13px; color: #2D3748; font-weight: bold; margin-top: 5px;">{{ $event->date }}</div>
                                                    <div style="font-size: 12px; color: #718096; margin-top: 2px;">{{ $event->from_time }} - {{ $event->to_time }}</div>
                                                </td>
                                                <td align="center" style="padding: 15px; width: 50%;">
                                                    <div style="font-size: 20px;">📍</div>
                                                    <div style="font-size: 13px; color: #2D3748; font-weight: bold; margin-top: 5px;">Location</div>
                                                    <div style="font-size: 12px; color: #718096; margin-top: 2px;">
                                                        <a href="http://maps.google.com/?q={{ $event->address }}" style="color: #C5A065; text-decoration: underline;">View Map</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>

                                        <div class="qr-frame">
                                            <img src="{{ $message->embedData(base64_decode(explode(',', $ticket['qr'])[1]), $ticket['label'] . '.png') }}"
                                                 width="180" height="180" alt="Entrance QR Code">
                                        </div>
                                        <p style="margin: 12px 0 0 0; font-size: 11px; color: #CBD5E0; letter-spacing: 0.5px;">PLEASE SCAN AT ENTRANCE</p>

                                    </td>
                                </tr>
                            </table>
                        </div>

                    @else
                        <div class="card-container" style="border-top: 0; max-width: 500px; margin-left: auto; margin-right: auto;">
                            <div style="background-color: #E2E8F0; height: 6px; width: 100%;"></div>

                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center" style="padding: 25px 20px;">

                                        <h3 style="margin: 0 0 15px 0; color: #718096; font-size: 14px; letter-spacing: 1px; text-transform: uppercase;">Companion Ticket / مرافق</h3>

                                        <div class="qr-frame" style="border-color: #E2E8F0;">
                                            <img src="{{ $message->embedData(base64_decode(explode(',', $ticket['qr'])[1]), $ticket['label'] . '.png') }}"
                                                 width="150" height="150" alt="Guest QR Code">
                                        </div>

                                        <p style="margin: 10px 0 0 0; font-size: 12px; color: #A0AEC0;"># {{ $loop->iteration }}</p>

                                    </td>
                                </tr>
                            </table>
                        </div>
                    @endif

                @endforeach
            </td>
        </tr>

        <tr>
            <td align="center" style="padding: 20px 0;">
                <p style="margin: 5px 0 0 0; font-size: 11px; color: #CBD5E0;">
                    © {{ date('Y') }} SAMI-AEC. All rights reserved.
                </p>
            </td>
        </tr>

    </table>
</center>
</body>
</html>
