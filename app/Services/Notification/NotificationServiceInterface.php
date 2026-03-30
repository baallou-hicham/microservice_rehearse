<?php

namespace App\Services\Notification;

interface NotificationServiceInterface
{
    public function send(string $message): string;
}
