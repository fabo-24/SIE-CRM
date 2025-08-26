<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Bitacora;
use App\Models\User;

class BitacoraView extends Component
{
    use WithPagination;
     protected $table = 'bitacora';

    public $search = '';
    protected $paginationTheme = 'bootstrap';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $bitacoras = Bitacora::with('user')
            ->when($this->search, function ($query) {
                $query->where('accion', 'like', '%' . $this->search . '%')
                      ->orWhere('modelo', 'like', '%' . $this->search . '%')
                      ->orWhere('descripcion', 'like', '%' . $this->search . '%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.bitacora.bitacora-view', [
            'bitacoras' => $bitacoras
        ]);
    }
}