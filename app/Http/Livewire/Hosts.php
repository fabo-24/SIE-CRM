<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Host;

class Hosts extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $Correo, $Contraseña, $Vencimiento, $Plan;
    public $fechaInicio, $fechaFin;

    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';
    
        $query = Host::where(function ($q) use ($keyWord) {
            $q->where('Correo', 'LIKE', $keyWord)
              ->orWhere('Contraseña', 'LIKE', $keyWord)
              ->orWhere('Plan', 'LIKE', $keyWord);
        });
    
        if (!empty($this->fechaInicio) && !empty($this->fechaFin)) {
            $query->whereBetween('Vencimiento', [$this->fechaInicio, $this->fechaFin]);
        }
    
        return view('livewire.hosts.view', [
            'hosts' => $query->latest()->paginate(10),
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
		$this->Correo = null;
		$this->Contraseña = null;
		$this->Vencimiento = null;
		$this->Plan = null;
    }

    public function store()
    {
        $this->validate([
		'Correo' => 'required',
		'Contraseña' => 'required',
		'Vencimiento' => 'required',
		'Plan' => 'required',
        ]);

        Host::create([ 
			'Correo' => $this-> Correo,
			'Contraseña' => $this-> Contraseña,
			'Vencimiento' => $this-> Vencimiento,
			'Plan' => $this-> Plan
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Host Successfully created.');
    }

    public function edit($id)
    {
        $record = Host::findOrFail($id);
        $this->selected_id = $id; 
		$this->Correo = $record-> Correo;
		$this->Contraseña = $record-> Contraseña;
		$this->Vencimiento = $record-> Vencimiento;
		$this->Plan = $record-> Plan;
    }

    public function update()
    {
        $this->validate([
		'Correo' => 'required',
		'Contraseña' => 'required',
		'Vencimiento' => 'required',
		'Plan' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Host::find($this->selected_id);
            $record->update([ 
			'Correo' => $this-> Correo,
			'Contraseña' => $this-> Contraseña,
			'Vencimiento' => $this-> Vencimiento,
			'Plan' => $this-> Plan
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Host Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Host::where('id', $id)->delete();
        }
    }
}