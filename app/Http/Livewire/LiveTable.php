<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class LiveTable extends Component
{
    use WithPagination;

    public $sortField = 'name'; // базовое поле сортировки
    public $sortAsc = true; // базовое направление сортировки
    public $search = '';
    public $showInput = false;

    protected $listeners = ['delete'];

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
        return view('livewire.live-table', [
            'users' => User::search($this->search)
            ->where('role_id', '!=', 1)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->simplePaginate(10),
            'totalCount' => User::where('role_id', '!=', 1)->count(),
        ]);
    }
}
