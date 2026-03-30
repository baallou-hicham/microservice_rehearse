<?php

namespace App\Providers;

use App\Services\Notification\EmailNotificationService;
use App\Services\Notification\NotificationServiceInterface;
use App\Services\Notification\SlackNotificationService;
use App\Services\Notification\SmsNotificationService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Bind classique : une nouvelle instance à chaque résolution
        // $this->app->bind(NotificationServiceInterface::class, function ($app) {
        //     $driver = config('notification.driver');
        //     switch ($driver) {
        //         case 'slack':
        //             return new SlackNotificationService();
        //         case 'sms':
        //             return new SmsNotificationService();
        //         case 'email':
        //             return new EmailNotificationService();
        //         default:
        //             return new EmailNotificationService();
        //     }
        // });

        // Exemple singleton : la même instance à chaque résolution
        // $this->app->singleton(NotificationServiceInterface::class, EmailNotificationService::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
