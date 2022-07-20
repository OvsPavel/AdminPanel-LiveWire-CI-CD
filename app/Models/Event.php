<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable =[
        'station_id',
        'station_object_id',
        'emergency_id',
        'title',
        'user_id',
        'start_time',
        'is_accepted',
        'accept_time',
        'is_closed',
        'close_time'
    ];

    public function emergencyType()
    {
        return $this->hasOneThrough(EmergencyType::class, Emergency::class, 'emergency_type_id', 'id', 'emergency_id');
    }

    public function emergency()
    {
        return $this->hasOne(Emergency::class, 'id', 'emergency_id')->withDefault();    
    }

    public function stationObject()
    {
        return $this->hasOne(StationObject::class, 'id', 'station_object_id')->withDefault();
    }
}