<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Soporte;

class Soportes extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $Fecha_ini, $Fecha_fin, $Hora_ini, $Hora_fin, $Tiempo, $Cliente, $Asunto, $Ejecutivo, $Stat, $Evidencia, $PostVenta, $Sistema, $Comentarios, $VersionSistem, $VersionWindows, $PaqueteriaOffice, $Status;
	public $searchFechaInicio;
	public $searchFechaFin;
    public function render()
{
    $keyWord = '%' . $this->keyWord . '%';

    $query = Soporte::query();

    // Filtro de búsqueda textual
    if ($this->keyWord) {
        $query->where(function($q) use ($keyWord) {
            $q->orWhere('Fecha_ini', 'LIKE', $keyWord)
              ->orWhere('Fecha_fin', 'LIKE', $keyWord)
              ->orWhere('Hora_ini', 'LIKE', $keyWord)
              ->orWhere('Hora_fin', 'LIKE', $keyWord)
              ->orWhere('Tiempo', 'LIKE', $keyWord)
              ->orWhere('Cliente', 'LIKE', $keyWord)
              ->orWhere('Asunto', 'LIKE', $keyWord)
              ->orWhere('Ejecutivo', 'LIKE', $keyWord)
              ->orWhere('Stat', 'LIKE', $keyWord)
              ->orWhere('Evidencia', 'LIKE', $keyWord)
              ->orWhere('PostVenta', 'LIKE', $keyWord)
              ->orWhere('Sistema', 'LIKE', $keyWord)
              ->orWhere('Comentarios', 'LIKE', $keyWord)
              ->orWhere('VersionSistem', 'LIKE', $keyWord)
              ->orWhere('VersionWindows', 'LIKE', $keyWord)
              ->orWhere('PaqueteriaOffice', 'LIKE', $keyWord)
              ->orWhere('Status', 'LIKE', $keyWord);
        });
		
    }

    // Filtro por rango de fechas
    if ($this->searchFechaInicio && $this->searchFechaFin) {
        $query->whereBetween('Fecha_ini', [$this->searchFechaInicio, $this->searchFechaFin]);
    }
	
    return view('livewire.soportes.view', [
        'soportes' => $query->orderBy('id', 'desc')->paginate(10),
		
    ]);
	
}

	public function limpiarFiltroFechas()
	{
	    $this->reset(['searchFechaInicio', 'searchFechaFin']);
	}

    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->Fecha_ini = null;
		$this->Fecha_fin = null;
		$this->Hora_ini = null;
		$this->Hora_fin = null;
		$this->Tiempo = null;
		$this->Cliente = null;
		$this->Asunto = null;
		$this->Ejecutivo = null;
		$this->Stat = null;
		$this->Evidencia = null;
		$this->PostVenta = null;
		$this->Sistema = null;
		$this->Comentarios = null;
		$this->VersionSistem = null;
		$this->VersionWindows = null;
		$this->PaqueteriaOffice = null;
		$this->Status = null;
    }

    public function store()
    {
        $this->validate([
		'Fecha_ini' => 'required',
		'Fecha_fin' => 'required',
		'Hora_ini' => 'required',
		'Hora_fin' => 'required',
		'Tiempo' => 'required',
		'Cliente' => 'required',
		'Asunto' => 'required',
		'Ejecutivo' => 'required',
		'Stat' => 'required',
		//'Evidencia' => 'required',
		//'PostVenta' => 'required',
		//'Sistema' => 'required',
		//'Comentarios' => 'required',
		//'VersionSistem' => 'required',
		//'VersionWindows' => 'required',
		//'PaqueteriaOffice' => 'required',
		//'Status' => 'required',
        ]);

        Soporte::create([ 
			'Fecha_ini' => $this-> Fecha_ini,
			'Fecha_fin' => $this-> Fecha_fin,
			'Hora_ini' => $this-> Hora_ini,
			'Hora_fin' => $this-> Hora_fin,
			'Tiempo' => $this-> Tiempo,
			'Cliente' => $this-> Cliente,
			'Asunto' => $this-> Asunto,
			'Ejecutivo' => $this-> Ejecutivo,
			'Stat' => $this-> Stat,
			'Evidencia' => $this-> Evidencia,
			'PostVenta' => $this-> PostVenta,
			'Sistema' => $this-> Sistema,
			'Comentarios' => $this-> Comentarios,
			'VersionSistem' => $this-> VersionSistem,
			'VersionWindows' => $this-> VersionWindows,
			'PaqueteriaOffice' => $this-> PaqueteriaOffice,
			'Status' => $this-> Status
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Soporte Successfully created.');
    }

    public function edit($id)
    {
        $record = Soporte::findOrFail($id);
        $this->selected_id = $id; 
		$this->Fecha_ini = $record-> Fecha_ini;
		$this->Fecha_fin = $record-> Fecha_fin;
		$this->Hora_ini = $record-> Hora_ini;
		$this->Hora_fin = $record-> Hora_fin;
		$this->Tiempo = $record-> Tiempo;
		$this->Cliente = $record-> Cliente;
		$this->Asunto = $record-> Asunto;
		$this->Ejecutivo = $record-> Ejecutivo;
		$this->Stat = $record-> Stat;
		$this->Evidencia = $record-> Evidencia;
		$this->PostVenta = $record-> PostVenta;
		$this->Sistema = $record-> Sistema;
		$this->Comentarios = $record-> Comentarios;
		$this->VersionSistem = $record-> VersionSistem;
		$this->VersionWindows = $record-> VersionWindows;
		$this->PaqueteriaOffice = $record-> PaqueteriaOffice;
		$this->Status = $record-> Status;
    }

    public function update()
    {
        $this->validate([
		'Fecha_ini' => 'required',
		'Fecha_fin' => 'required',
		'Hora_ini' => 'required',
		'Hora_fin' => 'required',
		'Tiempo' => 'required',
		'Cliente' => 'required',
		'Asunto' => 'required',
		'Ejecutivo' => 'required',
		'Stat' => 'required',
		//'Evidencia' => 'required',
		//'PostVenta' => 'required',
		//'Sistema' => 'required',
		//'Comentarios' => 'required',
		//'VersionSistem' => 'required',
		//'VersionWindows' => 'required',
		//'PaqueteriaOffice' => 'required',
		//'Status' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Soporte::find($this->selected_id);
            $record->update([ 
			'Fecha_ini' => $this-> Fecha_ini,
			'Fecha_fin' => $this-> Fecha_fin,
			'Hora_ini' => $this-> Hora_ini,
			'Hora_fin' => $this-> Hora_fin,
			'Tiempo' => $this-> Tiempo,
			'Cliente' => $this-> Cliente,
			'Asunto' => $this-> Asunto,
			'Ejecutivo' => $this-> Ejecutivo,
			'Stat' => $this-> Stat,
			'Evidencia' => $this-> Evidencia,
			'PostVenta' => $this-> PostVenta,
			'Sistema' => $this-> Sistema,
			'Comentarios' => $this-> Comentarios,
			'VersionSistem' => $this-> VersionSistem,
			'VersionWindows' => $this-> VersionWindows,
			'PaqueteriaOffice' => $this-> PaqueteriaOffice,
			'Status' => $this-> Status
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Soporte Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Soporte::where('id', $id)->delete();
        }
    }
}