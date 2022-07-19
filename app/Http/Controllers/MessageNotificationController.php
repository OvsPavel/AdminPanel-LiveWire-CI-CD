<?php

namespace App\Http\Controllers;

use App\Events\MessageNotification;
use App\Models\Event;
use App\Models\Station;
use App\Models\StationObject;
use Illuminate\Http\Request;

class MessageNotificationController extends Controller
{
    public function sendMessage(Request $request)
    {
        
        $station = Station::where('id', $request['station'])->first()->title;
        $object = StationObject::where('id', $request['object'])->first()->title;

        $station_model = Station::where('title', $station)->first();
        $object_model = StationObject::where('title', $object)->first();

        $event = new Event();
        $event->station_id = $station_model->id;
        $event->station_object_id = $object_model->id;
        $event->save();
        

        event(new MessageNotification([
            'station' => $station,
            'object' => 'Пожар на Объекте - ' . $object,
        ]));

        return redirect()->route('showSendEventForm');
    }

    public function showSendEventForm()
    {
        $objects = StationObject::all();

        return view('sendMessageForm', compact('objects'));
    }
}
