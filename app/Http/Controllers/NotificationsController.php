<?php

namespace App\Http\Controllers;

use App\services\Notifications\Constants\EmailTypes;
use App\User;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    /**
    * Show send email form
    **/
    public function email()
    {
        $users = User::all();
        $emailTypes = EmailTypes::toString();
        return view('notifications.send.email',compact('users'));
    }
}
