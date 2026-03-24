<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Book Return Reminder - {{ config('app.name') }}</title>
</head>
<body style="font-family: Arial, sans-serif; background: #e8f0fe; color: #333; margin: 0; padding: 20px;">
    <div style="background: #ffffff; border-radius: 10px; padding: 30px; max-width: 600px; margin: auto; box-shadow: 0 4px 10px rgba(0,0,0,0.05); text-align: center;">

        {{-- Use embed() directly to attach the image --}}
        <img src="{{ $message->embed(public_path('system-images/62334fcadd0d9e6d0a152aca.png')) }}" 
             alt="{{ config('app.name') }}" 
             style="height: 80px; width: auto; margin-bottom: 20px;">

        <h2 style="color: #1a237e;">{{ config('app.name') }}</h2>  

        <p style="font-size: 15px; line-height: 1.6;">
           Hello {{ $userName }},
        </p>

        <p style="font-size: 15px; line-height: 1.6;">
           This is a friendly reminder that your borrowed book:
        </p>

        <p style="font-size: 16px; font-weight: bold; margin: 10px 0;">
           {{ $bookTitle }}
        </p>

        <p style="font-size: 15px; line-height: 1.6;">
           is due for return on <strong>{{ $dueDate }}</strong>.
        </p>

        <p style="font-size: 15px; line-height: 1.6;">
           Please make sure to return it on time to avoid any overdue fines.
        </p>

        <hr style="margin: 30px 0; border: none; border-top: 1px solid #eee;">

        <p style="font-size: 13px; color: #777;">
            Thank you,<br>
            <strong>{{ config('app.name') }} Team</strong>
        </p>
    </div>
</body>
</html>