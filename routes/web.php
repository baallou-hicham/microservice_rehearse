<?php

use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notification', [NotificationController::class, 'sendNotification']);

// Route::get('manual-notification', function() {
//     // Création manuelle d'une instance du service de notification
//     $notificationService = app()->make(App\Services\Notification\NotificationServiceInterface::class);
//     return $notificationService->send("Bonjour, ceci est une notification manuelle!");
// });

Route::get('/facade-test', function() {
    return Notification::send("Bonjour, ceci est une notification via la façade!");
});
