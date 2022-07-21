<?php

namespace App\Http\Controllers;

use App\Events\MessageNotification;
use App\Models\Emergency;
use App\Models\EmergencyType;
use App\Models\Event;
use App\Models\Station;
use App\Models\StationObject;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageNotificationController extends Controller
{
    public function sendMessage(Request $request)
    {

        $station = Station::where('id', $request['station'])->first()->title;
        $object = StationObject::where('id', $request['object'])->first()->title;
        $emergency = Emergency::where('id', $request['emergency'])->first()->title;

        $station_model = Station::where('title', $station)->first();
        $object_model = StationObject::where('title', $object)->first();
        $emergency_model = Emergency::where('title', $emergency)->first();

        $emergencyType = EmergencyType::find($emergency_model->emergency_type_id)->title;

        $newEventsCount = Auth::user()->station->events->count();

        $event = new Event();
        $event->station_id = $station_model->id;
        $event->station_object_id = $object_model->id;
        $event->emergency_id = $emergency_model->id;
        if ($request['title']) {

            $event->title = $request['title'];
        }
        $event->start_time = Carbon::now();
        $event->save();


        event(new MessageNotification([
            'newEventsCount' => $newEventsCount,
            'emergencyType' => $emergencyType,
            'station' => $station,
            'message' =>  $emergency . ' на Объекте - ' . $object,
        ]));

        return redirect()->route('showSendEventForm');
    }

    public function showSendEventForm()
    {
        $objects = StationObject::all();
        $emergencies = Emergency::all();

        return view('sendMessageForm', compact('objects', 'emergencies'));
    }
}
