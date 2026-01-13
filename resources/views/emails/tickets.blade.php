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

        /* Typography & Colors */
        .text-gold { color: #C5A065; }
        .bg-gold { background-color: #C5A065; }
        .text-dark { color: #2D3748; }
        .text-gray { color: #718096; }

        /* Card Styles */
        .card-container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(197, 160, 101, 0.15); /* ظل ذهبي خفيف */
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
    </style>
</head>
<body style="background-color: #FDFBF7; margin: 0; padding: 20px 0;">



<center>
    <table role="presentation" width="100%" border="0" cellpadding="0" cellspacing="0" style="max-width: 550px;">

        <tr>
            <td align="center" style="padding-bottom: 30px;">
                <h2 style="margin: 0; color: #C5A065; letter-spacing: 3px; text-transform: uppercase; font-size: 24px;">{{$event->title_en}}</h2>
            </td>
        </tr>

        <tr>
            <td align="center" style="padding-bottom: 30px;">
                <h1 class="text-dark" style="margin: 0 0 10px 0; font-size: 22px; font-weight: 600;">Welcome, {{ $invitation->invitee_name }}</h1>
                <p class="text-gray" style="margin: 0; font-size: 15px; line-height: 1.6; max-width: 90%;">
                    Thank you for accepting our invitation. Enclosed are your admission tickets.                    <br>
                    <span style="color: #C5A065; font-size: 14px;">تشرفنا بقبولكم الدعوة. ننتظركم بكل شغف لتشاركونا هذه التجربة المميزة.</span>
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
                                    <td align="center" style="padding: 30px 20px;">

                                        <span style="background-color: #FEF9EF; color: #C5A065; padding: 6px 16px; border-radius: 50px; font-size: 11px; font-weight: bold; letter-spacing: 1px; border: 1px solid #F0EAE0;">
                                            Main
                                        </span>

                                        <h2 style="margin: 15px 0 5px 0; color: #1a202c; font-size: 20px;">{{ $invitation->invitee_name }}</h2>
                                        @if(!empty($invitation->invitee_position))
                                            <p style="margin: 0 0 20px 0; color: #A0AEC0; font-size: 14px;">{{ $invitation->invitee_position }}</p>
                                        @endif

                                        <table width="100%" cellpadding="0" cellspacing="0" style="margin: 10px 0 25px 0; background-color: #FDFBF7; border-radius: 8px;">
                                            <tr>
                                                <td align="center" style="padding: 12px; border-right: 1px solid #E2E8F0; width: 50%;">
                                                    <div style="font-size: 18px;">📅</div>
                                                    <div style="font-size: 13px; color: #4A5568; font-weight: bold; margin-top: 4px;">{{ $event->date }}</div>
                                                    <div style="font-size: 12px; color: #718096;">{{ $event->from_time }} - {{ $event->to_time }}</div>
                                                </td>
                                                <td align="center" style="padding: 12px; width: 50%;">
                                                    <div style="font-size: 18px;">📍</div>
                                                    <div style="font-size: 13px; color: #4A5568; font-weight: bold; margin-top: 4px;">Location</div>
                                                    <div style="font-size: 12px; color: #718096;"><a href="https://maps.app.goo.gl/sxQ26WDKgV5s8M1R6">{{ $event->address }}</a></div>
                                                </td>
                                            </tr>
                                        </table>

                                        <div class="qr-frame">
                                            <img src="{{ $message->embedData(base64_decode(explode(',', $ticket['qr'])[1]), $ticket['label'] . '.png') }}"
                                                 width="200" height="200" alt="Entrance QR Code">
                                        </div>
                                        <p style="margin: 12px 0 0 0; font-size: 11px; color: #CBD5E0;">Scan at entrance / امسح الرمز للدخول</p>

                                    </td>
                                </tr>
                            </table>
                        </div>

                    @else
                        <div class="card-container" style="border-top: 0;">
                            <div style="background-color: #E2E8F0; height: 6px; width: 100%;"></div>

                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center" style="padding: 25px 20px;">

                                        <h3 style="margin: 0 0 15px 0; color: #718096; font-size: 16px; letter-spacing: 1px;">GUEST PASS / زائر</h3>

                                        <div class="qr-frame" style="border-color: #E2E8F0;">
                                            <img src="{{ $message->embedData(base64_decode(explode(',', $ticket['qr'])[1]), $ticket['label'] . '.png') }}"
                                                 width="200" height="200" alt="Guest QR Code">
                                        </div>

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
                <p style="margin: 0; font-size: 12px; color: #A0AEC0;">

                </p>
                <p style="margin: 5px 0 0 0; font-size: 11px; color: #CBD5E0;">
                    &copy; {{ date('Y') }} SAMI-AEC. All rights reserved.
                </p>
            </td>
        </tr>

    </table>
</center>
</body>
</html>
