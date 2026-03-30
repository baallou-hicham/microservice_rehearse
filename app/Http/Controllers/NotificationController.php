<?php

namespace App\Http\Controllers;

use App\Services\Notification\NotificationServiceInterface;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    // Propriété pour stocker le service de notification
    protected $notificationService;
    // Injection de dépendances via le constructeur
    public function __construct(NotificationServiceInterface $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function sendNotification() {
        $message = "Test dynamique de notification";
        // Appel du service de notification pour envoyer le message
        $result = $this->notificationService->send($message);
        return $result;
    }
}
