<?php

use App\Mail\EmailSender;
use App\Mail\ForgotPassword;
use App\services\Notifications\Notification;
use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $notification = resolve(Notification::class);
    $notification->sendEmail(User::find(2), new ForgotPassword);
});
