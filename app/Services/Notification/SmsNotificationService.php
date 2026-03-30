<?php

namespace App\Services\Notification;

class SmsNotificationService implements NotificationServiceInterface
{
    public function send(string $message): string
    {
        return "SMS envoyé avec le message : $message";
    }
}
