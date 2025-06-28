<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Enquiry Received</title>
</head>

<body style="margin: 0; padding: 0; background-color: #f4f4f4; font-family: Arial, sans-serif;">
    <table cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="padding: 30px 0;">
                <table align="center" cellpadding="0" cellspacing="0" width="600"
                    style="background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.05);">

                    {{-- Logo Section --}}
                    <tr>
                        <td style="text-align: center; padding: 20px;">
                            <img src="{{asset("assets/realestateLogo.png")}}" alt="Naudi Estate Logo"
                                style="max-width: 150px;">
                        </td>
                    </tr>

                    {{-- Header Section --}}
                    <tr>
                        <td style="background-color: #004080; padding: 20px; border-radius: 0;">
                            <h2 style="color: #ffffff; margin: 0;">New Enquiry Received</h2>
                        </td>
                    </tr>

                    {{-- Content Section --}}
                    <tr>
                        <td style="padding: 30px;">
                            <p style="font-size: 16px; color: #333;">You've received a new enquiry from your website.
                                Details are below:</p>

                            <table cellpadding="5" cellspacing="0" width="100%" style="margin-top: 20px;">
                                <tr>
                                    <td width="30%" style="font-weight: bold; color: #004080;">Name:</td>
                                    <td>{{ $clientName }}</td>
                                </tr>
                                <tr>
                                    <td width="30%" style="font-weight: bold; color: #004080;">Email:</td>
                                    <td>{{ $clientEmail }}</td>
                                </tr>
                                <tr>
                                    <td width="30%" style="font-weight: bold; color: #004080;">Message:</td>
                                    <td style="white-space: pre-line;">{{ $clientMessage }}</td>
                                </tr>
                            </table>

                            <p style="margin-top: 30px; font-size: 14px; color: #666;">Please follow up with this client
                                as soon as possible.</p>
                        </td>
                    </tr>

                    {{-- Footer --}}
                    <tr>
                        <td
                            style="background-color: #f0f0f0; padding: 15px; text-align: center; border-radius: 0 0 8px 8px;">
                            <p style="margin: 0; font-size: 12px; color: #999;">&copy; {{ date('Y') }} Naudi Estate.
                                All rights reserved.</p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>

</html>
