<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Confirmation</title>
</head>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4;">
    <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0"
        style="max-width: 600px; background-color: #ffffff; margin-top: 20px;">
        <tr>
            <td style="text-align: center; padding: 20px;">
                <img src="{{ url('/img/unique_events_logo.png') }}" alt="ROLLERVERSE Logo"
                    style="max-width: 150px; margin-bottom: 20px;">
            </td>
        </tr>
        <tr>
            <td style="text-align: center; background-color: #007bff; color: white; padding: 20px;">
                <h1 style="margin: 0; font-size: 24px;">Ticket Confirmed!</h1>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px; text-align: center;">
                <p>Hi <strong>{{ $user_name }}</strong>,</p>
                <p>Thanks for choosing <strong>Unique Event Management</strong>.</p>
                <div style="margin: 20px 0;">
                    <img src="{{ $qr_code}}" alt="QR Code" style="max-width: 150px;">
                </div>
                {{-- <div>
                    <a href="#"
                        style="display: inline-block; background-color: #333; color: white; text-decoration: none; padding: 10px 20px; margin-right: 10px; border-radius: 5px;">Add
                        to Apple Wallet</a>
                    <a href="#"
                        style="display: inline-block; background-color: #28a745; color: white; text-decoration: none; padding: 10px 20px; border-radius: 5px;">Add
                        to Google Wallet</a>
                </div> --}}
            </td>
        </tr>
        <tr>
            <td style="background-color: #f8f9fa; padding: 20px; text-align: center;">
                <p style="margin: 0;"><strong>When:</strong> Dec 31, 2024</p>
                <p style="margin: 0;"><strong>Where:</strong> Unique Event Management</p>
                <a href="uniqueeventmanagements.com"
                    style="display: inline-block; background-color: #007bff; color: white; text-decoration: none; padding: 10px 20px; margin-top: 10px; border-radius: 5px;">Get
                    Directions</a>
            </td>
        </tr>
    </table>
</body>

</html>
