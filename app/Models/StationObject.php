<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationObject extends Model
{
    use HasFactory;

    public function station()
    {
        return $this->belongsTo(Station::class, 'station_type_id', 'id')->withDefault();
    }
    
    public function stationType()
    {
        return $this->belongsTo(StationType::class, 'station_type_id', 'id')->withDefault();
    }
    
    public function antennaType()
    {
        return $this->belongsTo(AntennaType::class, 'antenna_type_id', 'id')->withDefault();
    }

    public function contractType()
    {
        return $this->belongsTo(ContractType::class, 'contract_type_id', 'id')->withDefault();
    }

    public function sphereOfActivities()
    {
        return $this->belongsTo(SphereOfActivity::class, 'sphere_of_activity_id', 'id')->withDefault();
    }

    public static function search($query)
    {
        return empty($query) 
            ? static::query()
            : static::where(function($q) use ($query) {
                    $q
                        ->where('title', 'LIKE', '%'. $query . '%');
                });
    }
}
