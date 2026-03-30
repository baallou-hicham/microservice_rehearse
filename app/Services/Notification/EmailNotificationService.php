<?php

namespace App\Services\Notification;

class EmailNotificationService implements NotificationServiceInterface
{
    public function send(string $message): string
    {
        return "Email envoyé avec le message : $message";
    }
}
