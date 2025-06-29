<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; color: #333;">
    <div
        style="max-width: 500px; margin: auto; background: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">

        <!-- Logo/Image -->
        <div style="text-align: center; margin-bottom: 20px;">
            <img src="{{ $message->embed(public_path() . '/realestateLogo.png') }}" alt="Naudi Estate Logo"
                style="max-width: 150px;">
        </div>

        <h2 style="color: #333; text-align: center;">Password Reset Successful</h2>

        <p style="font-size: 16px;">Hello,</p>

        <p style="font-size: 16px;">
            Your new password has been generated successfully. Please find your new password below:
        </p>

        <p
            style="font-size: 18px; font-weight: bold; background: #f0f0f0; padding: 10px; border-radius: 5px; text-align: center;">
            {{ $newPassword }}
        </p>

        <p style="font-size: 16px;">
            For security reasons, we recommend logging in and changing your password as soon as possible.
        </p>

        <p style="font-size: 16px;">
            If you did not request this password reset, please contact our support team immediately.
        </p>

        <p style="font-size: 16px;">
            Thank you,<br>The Support Team
        </p>
    </div>
</body>

</html>
