<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Amenaza;

class Amenazas extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $Antivitus, $ClienteAnt, $FechaCaducidad, $Equipos, $Licencias;
    public $fechaInicio, $fechaFin; // Propiedades para el filtro de fechas

    public function render()
    {
        $keyWord = '%'.$this->keyWord .'%';
        $query = Amenaza::query();

        // Aplicar filtro de búsqueda por palabra clave
        if ($this->keyWord) {
            $query->where(function ($q) use ($keyWord) {
                $q->orWhere('Antivitus', 'LIKE', $keyWord)
                  ->orWhere('ClienteAnt', 'LIKE', $keyWord)
                  ->orWhere('FechaCaducidad', 'LIKE', $keyWord)
                  ->orWhere('Equipos', 'LIKE', $keyWord)
                  ->orWhere('Licencias', 'LIKE', $keyWord);
            });
        }

        // Aplicar filtro de rango de fechas
        if ($this->fechaInicio && $this->fechaFin) {
            $query->whereBetween('FechaCaducidad', [$this->fechaInicio, $this->fechaFin]);
        }

        return view('livewire.amenazas.view', [
            'amenazas' => $query->latest()->paginate(10),
        ]);
    }

    public function limpiarFiltro()
    {
        $this->fechaInicio = null;
        $this->fechaFin = null;
    }

	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->Antivitus = null;
		$this->ClienteAnt = null;
		$this->FechaCaducidad = null;
		$this->Equipos = null;
		$this->Licencias = null;
    }

    public function store()
    {
        $this->validate([
		'Antivitus' => 'required',
		'ClienteAnt' => 'required',
		'FechaCaducidad' => 'required',
		'Equipos' => 'required',
		'Licencias' => 'required',
        ]);

        Amenaza::create([ 
			'Antivitus' => $this-> Antivitus,
			'ClienteAnt' => $this-> ClienteAnt,
			'FechaCaducidad' => $this-> FechaCaducidad,
			'Equipos' => $this-> Equipos,
			'Licencias' => $this-> Licencias
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Amenaza Successfully created.');
    }

    public function edit($id)
    {
        $record = Amenaza::findOrFail($id);
        $this->selected_id = $id; 
		$this->Antivitus = $record-> Antivitus;
		$this->ClienteAnt = $record-> ClienteAnt;
		$this->FechaCaducidad = $record-> FechaCaducidad;
		$this->Equipos = $record-> Equipos;
		$this->Licencias = $record-> Licencias;
    }

    public function update()
    {
        $this->validate([
		'Antivitus' => 'required',
		'ClienteAnt' => 'required',
		'FechaCaducidad' => 'required',
		'Equipos' => 'required',
		'Licencias' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Amenaza::find($this->selected_id);
            $record->update([ 
			'Antivitus' => $this-> Antivitus,
			'ClienteAnt' => $this-> ClienteAnt,
			'FechaCaducidad' => $this-> FechaCaducidad,
			'Equipos' => $this-> Equipos,
			'Licencias' => $this-> Licencias
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Amenaza Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Amenaza::where('id', $id)->delete();
        }
    }
}