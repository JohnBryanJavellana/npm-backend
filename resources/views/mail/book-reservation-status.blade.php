<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $subject ?? 'Email from ' . config('app.name') }}</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f9fafb; color: #333; margin: 0; padding: 20px;">
    <div style="background: #fff; border-radius: 8px; padding: 30px; max-width: 600px; margin: auto; box-shadow: 0 2px 8px rgba(0,0,0,0.05); text-align: center;">

        <!-- Embedded image -->
        <img src="{{ $message->embed(public_path('system-images/62334fcadd0d9e6d0a152aca.png')) }}"
             alt={{ config('app.name') }}
             style="height: 40px; width: auto; margin-bottom: 20px;">

        <h2 style="color: #111;">Hello {{ $user->fname ?? 'there' }},</h2>
        <p style="font-size: 15px;">We’re excited to welcome you to <strong>{{ config('app.name') }}</strong>soon!</p>
        <p style="font-size: 15px;">This is a sample email template for the library email project.</p>
        <p style="font-size: 15px;">Book Reservation Status: <strong>{{ $details['status'] }}</strong></p>

        <p style="margin: 25px 0;">
            <a href="{{ $actionUrl ?? url('/') }}"
               style="background-color: #4f46e5; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block;">
               View Details
            </a>
        </p>

        <p style="font-size: 14px; color: #555;">Thanks,<br>{{ config('app.name') }}</p>
    </div>
</body>
</html>
