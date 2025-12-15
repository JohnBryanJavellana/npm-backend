<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $subject ?? 'Welcome to ' . config('app.name') }}</title>
</head>
<body style="font-family: Arial, sans-serif; background: #e8f0fe; color: #333; margin: 0; padding: 20px;">
    <div style="background: #ffffff; border-radius: 10px; padding: 30px; max-width: 600px; margin: auto; box-shadow: 0 4px 10px rgba(0,0,0,0.05); text-align: center;">
    
        <img src="{{ $message->embed(public_path('system-images/62334fcadd0d9e6d0a152aca.png')) }}" 
             alt="National Maritime Polytechnic" 
             style="height: 80px; width: auto; margin-bottom: 20px;">
    
        <h2 style="color: #1a237e;">{{ config('app.name') }}</h2>  

        <p style="font-size: 15px; line-height: 1.6;">
           Welcome! We’re pleased to inform you that your account has been successfully created on the 
            <strong>{{ config('app.name') }}</strong>.
        </p>

        <p style="font-size: 15px; line-height: 1.6;">
            You can now log in and explore available training sessions, resources, and updates designed to help you grow and develop your skills.
        </p>

        <a href="{{ $details['portal_link'] ?? url('/') }}" style="display: inline-block; background-color: #1a73e8; color: #fff; padding: 12px 25px; border-radius: 6px; text-decoration: none; font-weight: bold;">
          {{ config('app.name') }}
        </a>

        <p style="font-size: 15px; color: #333; margin-top: 25px;">
            Please refer to the attachments below for your <strong>QR code</strong>.
        </p>

        <p style="font-size: 14px; color: #555; margin-top: 25px;">
            If you have any questions or need assistance, feel free to reach out to our support team at 
            <a href="mailto:{{ config('mail.from.address') }}" style="color: #1a73e8;">{{ config('mail.from.address') }}</a>.
        </p>

        <hr style="margin: 30px 0; border: none; border-top: 1px solid #eee;">

        <p style="font-size: 13px; color: #777;">
            Thank you and welcome aboard,<br>
            <strong>{{ config('app.name') }} Team</strong>
        </p>
    </div>
</body>
</html>
