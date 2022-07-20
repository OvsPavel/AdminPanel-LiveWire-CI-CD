<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    use HasFactory;


    public function type()
    {
        return $this->hasOne(EmergencyType::class, 'id', 'emergency_type_id')->withDefault();
    }
}
