<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Poliza;

class Polizas extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $cliente, $contacto, $fecha_inicio, $fecha_fin, $bloques_contratados, $bloques_disponibles, $estado, $observaciones;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.polizas.view', [
            'polizas' => Poliza::latest()
						->orWhere('cliente', 'LIKE', $keyWord)
						->orWhere('contacto', 'LIKE', $keyWord)
						->orWhere('fecha_inicio', 'LIKE', $keyWord)
						->orWhere('fecha_fin', 'LIKE', $keyWord)
						->orWhere('bloques_contratados', 'LIKE', $keyWord)
						->orWhere('bloques_disponibles', 'LIKE', $keyWord)
						->orWhere('estado', 'LIKE', $keyWord)
						->orWhere('observaciones', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->cliente = null;
		$this->contacto = null;
		$this->fecha_inicio = null;
		$this->fecha_fin = null;
		$this->bloques_contratados = null;
		$this->bloques_disponibles = null;
		$this->estado = null;
		$this->observaciones = null;
    }

    public function store()
    {
        $this->validate([
		'cliente' => 'required',
		'bloques_contratados' => 'required',
		'bloques_disponibles' => 'required',
		'estado' => 'required',
        ]);

        Poliza::create([ 
			'cliente' => $this-> cliente,
			'contacto' => $this-> contacto,
			'fecha_inicio' => $this-> fecha_inicio,
			'fecha_fin' => $this-> fecha_fin,
			'bloques_contratados' => $this-> bloques_contratados,
			'bloques_disponibles' => $this-> bloques_disponibles,
			'estado' => $this-> estado,
			'observaciones' => $this-> observaciones
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Poliza Successfully created.');
    }

    public function edit($id)
    {
        $record = Poliza::findOrFail($id);
        $this->selected_id = $id; 
		$this->cliente = $record-> cliente;
		$this->contacto = $record-> contacto;
		$this->fecha_inicio = $record-> fecha_inicio;
		$this->fecha_fin = $record-> fecha_fin;
		$this->bloques_contratados = $record-> bloques_contratados;
		$this->bloques_disponibles = $record-> bloques_disponibles;
		$this->estado = $record-> estado;
		$this->observaciones = $record-> observaciones;
    }

    public function update()
    {
        $this->validate([
		'cliente' => 'required',
		'bloques_contratados' => 'required',
		'bloques_disponibles' => 'required',
		'estado' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Poliza::find($this->selected_id);
            $record->update([ 
			'cliente' => $this-> cliente,
			'contacto' => $this-> contacto,
			'fecha_inicio' => $this-> fecha_inicio,
			'fecha_fin' => $this-> fecha_fin,
			'bloques_contratados' => $this-> bloques_contratados,
			'bloques_disponibles' => $this-> bloques_disponibles,
			'estado' => $this-> estado,
			'observaciones' => $this-> observaciones
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Poliza Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Poliza::where('id', $id)->delete();
        }
    }
}