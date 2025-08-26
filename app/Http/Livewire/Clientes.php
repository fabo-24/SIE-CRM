<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cliente;

class Clientes extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $RazonSocial, $Contacto, $Numero, $WhatsApp, $Correo, $Contacto2, $Numero2, $Observacion;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.clientes.view', [
            'clientes' => Cliente::latest()
						->orWhere('RazonSocial', 'LIKE', $keyWord)
						->orWhere('Contacto', 'LIKE', $keyWord)
						->orWhere('Numero', 'LIKE', $keyWord)
						->orWhere('WhatsApp', 'LIKE', $keyWord)
						->orWhere('Correo', 'LIKE', $keyWord)
						->orWhere('Contacto2', 'LIKE', $keyWord)
						->orWhere('Numero2', 'LIKE', $keyWord)
						->orWhere('Observacion', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->RazonSocial = null;
		$this->Contacto = null;
		$this->Numero = null;
		$this->WhatsApp = null;
		$this->Correo = null;
		$this->Contacto2 = null;
		$this->Numero2 = null;
		$this->Observacion = null;
    }

    public function store()
    {
        $this->validate([
		'RazonSocial' => 'required',
		'Contacto' => 'required',
		'Numero' => 'required',
		'WhatsApp' => 'required',
		'Correo' => 'required',
		'Contacto2' => 'required',
		'Numero2' => 'required',
		'Observacion' => 'required',
        ]);

        Cliente::create([ 
			'RazonSocial' => $this-> RazonSocial,
			'Contacto' => $this-> Contacto,
			'Numero' => $this-> Numero,
			'WhatsApp' => $this-> WhatsApp,
			'Correo' => $this-> Correo,
			'Contacto2' => $this-> Contacto2,
			'Numero2' => $this-> Numero2,
			'Observacion' => $this-> Observacion
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Cliente Successfully created.');
    }

    public function edit($id)
    {
        $record = Cliente::findOrFail($id);
        $this->selected_id = $id; 
		$this->RazonSocial = $record-> RazonSocial;
		$this->Contacto = $record-> Contacto;
		$this->Numero = $record-> Numero;
		$this->WhatsApp = $record-> WhatsApp;
		$this->Correo = $record-> Correo;
		$this->Contacto2 = $record-> Contacto2;
		$this->Numero2 = $record-> Numero2;
		$this->Observacion = $record-> Observacion;
    }

    public function update()
    {
        $this->validate([
		'RazonSocial' => 'required',
		'Contacto' => 'required',
		'Numero' => 'required',
		'WhatsApp' => 'required',
		'Correo' => 'required',
		'Contacto2' => 'required',
		'Numero2' => 'required',
		'Observacion' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Cliente::find($this->selected_id);
            $record->update([ 
			'RazonSocial' => $this-> RazonSocial,
			'Contacto' => $this-> Contacto,
			'Numero' => $this-> Numero,
			'WhatsApp' => $this-> WhatsApp,
			'Correo' => $this-> Correo,
			'Contacto2' => $this-> Contacto2,
			'Numero2' => $this-> Numero2,
			'Observacion' => $this-> Observacion
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Cliente Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Cliente::where('id', $id)->delete();
        }
    }
}