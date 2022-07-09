<?php

namespace App\Http\Controllers;

use App\Events\MessageNotification;
use Illuminate\Http\Request;

class MessageNotificationController extends Controller
{
    public function sendMessage($title, $content, $status)
    {        
        event(new MessageNotification([
            'title' => $title,
            'content' => $content,
            'status' => $status
        ]));
    }
}
