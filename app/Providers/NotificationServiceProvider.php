<?php

namespace App\Providers;

use App\Services\Notification\EmailNotificationService;
use App\Services\Notification\SlackNotificationService;
use App\Services\Notification\SmsNotificationService;
use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('notification', function ($app) {
            $driver = config('notification.driver');
            switch ($driver) {
                case 'slack':
                    return new SlackNotificationService();
                case 'sms':
                    return new SmsNotificationService();
                case 'email':
                    return new EmailNotificationService();
                default:
                    return new EmailNotificationService();
            }
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
