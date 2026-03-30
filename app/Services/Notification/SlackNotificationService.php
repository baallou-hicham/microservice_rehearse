<?php

namespace App\Services\Notification;

class SlackNotificationService implements NotificationServiceInterface
{
    public function send($message): string
    {
        // Logique d'envoi de notification via Slack
        return "Notification envoyée via Slack : " . $message;
    }
}
