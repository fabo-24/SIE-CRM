<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Upoliza;

class Upolizas extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $poliza_id, $fecha, $inicio, $fin, $duracion, $ajuste, $caso, $bloques_consumidos, $descuento, $atendio;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.upolizas.view', [
            'upolizas' => Upoliza::latest()
						->orWhere('poliza_id', 'LIKE', $keyWord)
						->orWhere('fecha', 'LIKE', $keyWord)
						->orWhere('inicio', 'LIKE', $keyWord)
						->orWhere('fin', 'LIKE', $keyWord)
						->orWhere('duracion', 'LIKE', $keyWord)
						->orWhere('ajuste', 'LIKE', $keyWord)
						->orWhere('caso', 'LIKE', $keyWord)
						->orWhere('bloques_consumidos', 'LIKE', $keyWord)
						->orWhere('descuento', 'LIKE', $keyWord)
						->orWhere('atendio', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->poliza_id = null;
		$this->fecha = null;
		$this->inicio = null;
		$this->fin = null;
		$this->duracion = null;
		$this->ajuste = null;
		$this->caso = null;
		$this->bloques_consumidos = null;
		$this->descuento = null;
		$this->atendio = null;
    }

    public function store()
    {
        $this->validate([
		'poliza_id' => 'required',
		'bloques_consumidos' => 'required',
		'descuento' => 'required',
        ]);

        Upoliza::create([ 
			'poliza_id' => $this-> poliza_id,
			'fecha' => $this-> fecha,
			'inicio' => $this-> inicio,
			'fin' => $this-> fin,
			'duracion' => $this-> duracion,
			'ajuste' => $this-> ajuste,
			'caso' => $this-> caso,
			'bloques_consumidos' => $this-> bloques_consumidos,
			'descuento' => $this-> descuento,
			'atendio' => $this-> atendio
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Upoliza Successfully created.');
    }

    public function edit($id)
    {
        $record = Upoliza::findOrFail($id);
        $this->selected_id = $id; 
		$this->poliza_id = $record-> poliza_id;
		$this->fecha = $record-> fecha;
		$this->inicio = $record-> inicio;
		$this->fin = $record-> fin;
		$this->duracion = $record-> duracion;
		$this->ajuste = $record-> ajuste;
		$this->caso = $record-> caso;
		$this->bloques_consumidos = $record-> bloques_consumidos;
		$this->descuento = $record-> descuento;
		$this->atendio = $record-> atendio;
    }

    public function update()
    {
        $this->validate([
		'poliza_id' => 'required',
		'bloques_consumidos' => 'required',
		'descuento' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Upoliza::find($this->selected_id);
            $record->update([ 
			'poliza_id' => $this-> poliza_id,
			'fecha' => $this-> fecha,
			'inicio' => $this-> inicio,
			'fin' => $this-> fin,
			'duracion' => $this-> duracion,
			'ajuste' => $this-> ajuste,
			'caso' => $this-> caso,
			'bloques_consumidos' => $this-> bloques_consumidos,
			'descuento' => $this-> descuento,
			'atendio' => $this-> atendio
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Upoliza Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Upoliza::where('id', $id)->delete();
        }
    }
}