<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Aspel;

class Aspels extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $Certificado, $cliente, $CDA, $NoSerie, $Usuario, $Contraseña, $Licenciamiento, $Sistemas, $Timbres, $Observaciones, $RedVpn, $ContraVpn, $FechaCaducidad;
	public $fechaInicio, $fechaFin;

	public function render()
	{
		$query = Aspel::query();
	
		// Filtro por palabra clave
		if ($this->keyWord) {
			$keyWord = '%' . $this->keyWord . '%';
			$query->where(function ($q) use ($keyWord) {
				$q->orWhere('cliente', 'LIKE', $keyWord)
					->orWhere('CDA', 'LIKE', $keyWord)
					->orWhere('NoSerie', 'LIKE', $keyWord)
					->orWhere('Usuario', 'LIKE', $keyWord)
					->orWhere('Contraseña', 'LIKE', $keyWord)
					->orWhere('Licenciamiento', 'LIKE', $keyWord)
					->orWhere('Sistemas', 'LIKE', $keyWord)
					->orWhere('Timbres', 'LIKE', $keyWord)
					->orWhere('Observaciones', 'LIKE', $keyWord)
					->orWhere('RedVpn', 'LIKE', $keyWord)
					->orWhere('ContraVpn', 'LIKE', $keyWord)
					->orWhere('FechaCaducidad', 'LIKE', $keyWord);
			});
		}
	
		// Filtro por rango de fechas
		if ($this->fechaInicio && $this->fechaFin) {
			$query->whereBetween('FechaCaducidad', [$this->fechaInicio, $this->fechaFin]);
		}
	
		return view('livewire.aspels.view', [
			'aspels' => $query->latest()->paginate(10),
		]);
	}
	public function limpiarFiltros()
	{
		$this->reset(['fechaInicio', 'fechaFin', 'keyWord']);
	}
		
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->cliente = null;
		$this->CDA = null;
		$this->NoSerie = null;
		$this->Usuario = null;
		$this->Contraseña = null;
		$this->Licenciamiento = null;
		$this->Sistemas = null;
		$this->Timbres = null;
		$this->Observaciones = null;
		$this->RedVpn = null;
		$this->ContraVpn = null;
		$this->FechaCaducidad = null;
    }

    public function store()
    {
        $this->validate([
		'cliente' => 'required',
		'CDA' => 'required',
		'NoSerie' => 'required',
		'Usuario' => 'required',
		'Contraseña' => 'required',
		'Licenciamiento' => 'required',
		'Sistemas' => 'required',
		'Timbres' => 'required',
		'Observaciones' => 'required',
		'RedVpn' => 'required',
		'ContraVpn' => 'required',
		'FechaCaducidad' => 'required',
        ]);

        Aspel::create([ 
			'cliente' => $this-> cliente,
			'CDA' => $this-> CDA,
			'NoSerie' => $this-> NoSerie,
			'Usuario' => $this-> Usuario,
			'Contraseña' => $this-> Contraseña,
			'Licenciamiento' => $this-> Licenciamiento,
			'Sistemas' => $this-> Sistemas,
			'Timbres' => $this-> Timbres,
			'Observaciones' => $this-> Observaciones,
			'RedVpn' => $this-> RedVpn,
			'ContraVpn' => $this-> ContraVpn,
			'FechaCaducidad' => $this-> FechaCaducidad
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Aspel Successfully created.');
    }

    public function edit($id)
    {
        $record = Aspel::findOrFail($id);
        $this->selected_id = $id; 
		$this->cliente = $record-> cliente;
		$this->CDA = $record-> CDA;
		$this->NoSerie = $record-> NoSerie;
		$this->Usuario = $record-> Usuario;
		$this->Contraseña = $record-> Contraseña;
		$this->Licenciamiento = $record-> Licenciamiento;
		$this->Sistemas = $record-> Sistemas;
		$this->Timbres = $record-> Timbres;
		$this->Observaciones = $record-> Observaciones;
		$this->RedVpn = $record-> RedVpn;
		$this->ContraVpn = $record-> ContraVpn;
		$this->FechaCaducidad = $record-> FechaCaducidad;
    }

    public function update()
    {
        $this->validate([
		'cliente' => 'required',
		'CDA' => 'required',
		'NoSerie' => 'required',
		'Usuario' => 'required',
		'Contraseña' => 'required',
		'Licenciamiento' => 'required',
		'Sistemas' => 'required',
		'Timbres' => 'required',
		'Observaciones' => 'required',
		'RedVpn' => 'required',
		'ContraVpn' => 'required',
		'FechaCaducidad' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Aspel::find($this->selected_id);
            $record->update([ 
			'cliente' => $this-> cliente,
			'CDA' => $this-> CDA,
			'NoSerie' => $this-> NoSerie,
			'Usuario' => $this-> Usuario,
			'Contraseña' => $this-> Contraseña,
			'Licenciamiento' => $this-> Licenciamiento,
			'Sistemas' => $this-> Sistemas,
			'Timbres' => $this-> Timbres,
			'Observaciones' => $this-> Observaciones,
			'RedVpn' => $this-> RedVpn,
			'ContraVpn' => $this-> ContraVpn,
			'FechaCaducidad' => $this-> FechaCaducidad
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Aspel Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Aspel::where('id', $id)->delete();
        }
    }
}