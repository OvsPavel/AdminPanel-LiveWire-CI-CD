<?php

namespace App\Http\Livewire;

use App\Models\Station;
use App\Models\StationObject;
use Livewire\Component;
use Livewire\WithPagination;

class ObjectsTable extends Component
{

    use WithPagination;

    public $station;
    public $sortField = 'title'; // базовое поле сортировки
    public $sortAsc = true; // базовое направление сортировки
    public $search = '';
    public $showInput = false;
    

    public function mount(Station $station)
    {
      $this->station = $station;
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function delete($id)
    {
        User::find($id)
            ->delete();
    }

    public function render()
    {
        return view('livewire.objects-table', [
            'objects' => StationObject::where('station_id', $this->station->id)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->simplePaginate(10),
                'totalCount' => StationObject::count()
        ]);
    }

}
