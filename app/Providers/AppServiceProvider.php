<?php

namespace App\Providers;

use App\Models\BookReservation;
use App\Observers\BookReservationObserver;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ResetPassword::createUrlUsing(function ($user, string $token) {
            return config('app.frontend_url') . '/reset-password?token=' . $token . '&email=' . urlencode($user->email);
        });

        BookReservation::observe(BookReservationObserver::class);

        // VerifyEmail::toMailUsing(function ($notifiable, $url) {
        //     $frontendUrl = config('app.frontend_url');
        //     $verificationUrl = $frontendUrl . '/email/verify/' . $notifiable->getKey() . '/' . $notifiable->getEmailVerificationSignature();

        //     return (new MailMessage)
        //         ->subject('Verify Email Address')
        //         ->line('Click the button below to verify your email address.')
        //         ->action('Verify Email Address', $verificationUrl);
        // });

        \Validator::extend('base64_image', function ($attribute, $value, $parameters, $validator) {
            try {
                if (base64_encode(base64_decode(explode(',', $value)[1] ?? $value, true)) === (explode(',', $value)[1] ?? $value)) {
                    $data = explode(',', $value);
                    $img = imagecreatefromstring(base64_decode($data[1] ?? $data[0]));
                    return $img !== false;
                }
                return false;
            } catch (\Exception $e) {
                return false;
            }
        });
    }
}
