<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Station extends Model
{
    use HasFactory;

    public function objects()
    {
        return $this->hasMany(StationObject::class, 'station_id', 'id');
    }

    public function events()
    {
        return $this->hasMany(Event::class, 'station_id', 'id');
    }

    public function lastEvent()
    {
        if (count($this->events) == 0) {
            return '';
        }
            $lastEventTime = $this->events->last()->created_at;

            return $lastEventTime->format('d.m.Y H:i:s');
        
    }
}
