<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CabinetTable extends Component
{
    use WithPagination;

    public $user;
    public $sortField = 'emergency_id'; // базовое поле сортировки
    public $sortAsc = true; // базовое направление сортировки

    protected $listeners = ['accessEvent', 'closeEvent', 'newEvent'];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function newEvent()
    {
        return $this->render();
    }


    public function accessEvent($id)
    {
        $this->event = Event::find($id);

        $this->event->user_id = Auth::id();
        $this->event->is_accepted = 1;
        $this->event->accept_time = Carbon::now();
        $this->event->save();
    }

    public function closeEvent($id)
    {
        $this->event = Event::find($id);

        $this->event->user_id = Auth::id();
        $this->event->is_closed = 1;
        $this->event->close_time = Carbon::now();
        $this->event->save();
    }

    public function mount()
    {
        $this->user = Auth::user();
    }


    public function render()
    {
        return view('livewire.cabinet-table', [
            'new_events' => Event::with('emergencyType', 'emergencyType')->where('station_id', $this->user->station_id)
                ->where('is_accepted', 0)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->get(),
            'news_events_count' => Event::where('station_id', $this->user->station_id)
                ->where('is_accepted', 0)->count(),
            'accepted_events' => Event::with('emergencyType', 'emergencyType')->where('station_id', $this->user->station_id)
                ->where('is_accepted', 1)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->get(),

            'accepted_events_count' => Event::where('station_id', $this->user->station_id)
                ->where('is_accepted', 1)
                ->count(),

            'unclosed_events_count' => Event::where('station_id', $this->user->station_id)
                ->where('is_accepted', 1)
                ->where('is_closed', 0)
                ->count(),
        ]);
    }
}
