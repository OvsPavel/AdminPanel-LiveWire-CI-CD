<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Emergency;
use App\Models\Station;
use App\Models\StationObject;
use App\Models\SubCategory;
use Livewire\Component;

class ObjectSelect extends Component
{
    public $stations;
    public $stationId = 1;
    public $objects;
    public $objectId;
    public $emergencies;
    public $emergencyId;

    public function mount()
    {
        $this->stations = Station::orderBy('id')->get();
        $this->objects = [];
        $this->emergencies = Emergency::all();

        $this->getObjects();
    }

    public function updatedstationId()
    {
        $this->getObjects();
    }

    public function getObjects()
    {
        if ($this->stationId != '') {
            $this->objects = StationObject::where('station_id', $this->stationId)->get();
            $this->objectId = $this->objects[0]->id;
        } else {
            $this->objectId = [];
        }
    }



    public function render()
    {

        return view('livewire.object-select');
    }
}
