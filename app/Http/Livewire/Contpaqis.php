<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contpaqi;
use Livewire\WithFileUploads; 

class Contpaqis extends Component
{
    use WithPagination, WithFileUploads;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $cliente, $NoSerie, $FechaCaducidad, $Sistemas, $Licencia, $Usuarios, $Vendedor, $Certificado;
	public $fechaInicio, $fechaFin;
	public $certificadoFile; // en lugar de $Certificado



	public function render()
	{
		$keyWord = '%' . $this->keyWord . '%';
	
		$query = Contpaqi::where(function ($q) use ($keyWord) {
			$q->where('cliente', 'LIKE', $keyWord)
			  ->orWhere('NoSerie', 'LIKE', $keyWord)
			  ->orWhere('Sistemas', 'LIKE', $keyWord)
			  ->orWhere('Licencia', 'LIKE', $keyWord)
			  ->orWhere('Usuarios', 'LIKE', $keyWord)
			  ->orWhere('Vendedor', 'LIKE', $keyWord)
			  ->orWhere('Certificado', 'LIKE', $keyWord);
		});
	
		if (!empty($this->fechaInicio) && !empty($this->fechaFin)) {
			$query->whereBetween('FechaCaducidad', [$this->fechaInicio, $this->fechaFin]);
		}
	
		return view('livewire.contpaqis.view', [
			'contpaqis' => $query->latest()->paginate(10),
		]);
	}
	
	public function limpiarFiltros()
{
    $this->reset(['keyWord', 'fechaInicio', 'fechaFin']);
}

	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->cliente = null;
		$this->NoSerie = null;
		$this->FechaCaducidad = null;
		$this->Sistemas = null;
		$this->Licencia = null;
		$this->Usuarios = null;
		$this->Vendedor = null;
		$this->certificadoFile = null;
    }

    public function store()
    {
        $this->validate([
		'cliente' => 'required',
		'NoSerie' => 'required',
		'FechaCaducidad' => 'required',
		'Sistemas' => 'required',
		'Licencia' => 'required',
		'Usuarios' => 'required',
		'Vendedor' => 'required',
		'certificadoFile' => 'required|file|mimes:pdf|max:2048',
        ]);

		$path = $this->certificadoFile->store('certificados', 'public');

        Contpaqi::create([ 
			'cliente' => $this-> cliente,
			'NoSerie' => $this-> NoSerie,
			'FechaCaducidad' => $this-> FechaCaducidad,
			'Sistemas' => $this-> Sistemas,
			'Licencia' => $this-> Licencia,
			'Usuarios' => $this-> Usuarios,
			'Vendedor' => $this-> Vendedor,
			'Certificado' => $path, // Solo guardamos la ruta
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Contpaqi Successfully created.');
    }

    public function edit($id)
    {
        $record = Contpaqi::findOrFail($id);
        $this->selected_id = $id; 
		$this->cliente = $record-> cliente;
		$this->NoSerie = $record-> NoSerie;
		$this->FechaCaducidad = $record-> FechaCaducidad;
		$this->Sistemas = $record-> Sistemas;
		$this->Licencia = $record-> Licencia;
		$this->Usuarios = $record-> Usuarios;
		$this->Vendedor = $record-> Vendedor;
		$this->Certificado = $record-> Certificado;
    }

    public function update()
    {
        $this->validate([
		'cliente' => 'required',
		'NoSerie' => 'required',
		'FechaCaducidad' => 'required',
		'Sistemas' => 'required',
		'Licencia' => 'required',
		'Usuarios' => 'required',
		'Vendedor' => 'required',
		'Certificado' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Contpaqi::find($this->selected_id);
            $record->update([ 
			'cliente' => $this-> cliente,
			'NoSerie' => $this-> NoSerie,
			'FechaCaducidad' => $this-> FechaCaducidad,
			'Sistemas' => $this-> Sistemas,
			'Licencia' => $this-> Licencia,
			'Usuarios' => $this-> Usuarios,
			'Vendedor' => $this-> Vendedor,
			'Certificado' => $this-> Certificado
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Contpaqi Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Contpaqi::where('id', $id)->delete();
        }
    }
}