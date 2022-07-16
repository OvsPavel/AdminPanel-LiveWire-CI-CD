<?php

namespace App\Http\Controllers;

use App\Events\MessageNotification;
use Illuminate\Http\Request;

class MessageNotificationController extends Controller
{
    public function sendMessage(Request $request)
    {        
        event(new MessageNotification([
            'title' => $request['title'],
            'content' => $request['content'],
            'status' => $request['status']
        ]));

        return redirect()->route('showSendEventForm');
    }

    public function showSendEventForm()
    {
        return view('sendMessageForm');
    }
}
