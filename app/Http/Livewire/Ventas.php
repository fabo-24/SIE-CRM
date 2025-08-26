<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Venta;

class Ventas extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $Cliente, $Fecha, $Contacto, $Actividad, $ProcesoActividad, $Vendedor, $Asesor, $Costo, $Factura, $Poliza, $Horario, $Sistemas, $Soporte, $Contabilidad, $Programacion, $Diseño, $MKT, $Nom, $Equipo, $Antiviru, $Curso, $PostVenta, $status;
	public $fecha_inicio, $fecha_fin;

	public function render()
{
    $keyWord = '%'.$this->keyWord.'%';

    $ventas = Venta::query()
        ->when($this->keyWord, function($query) use ($keyWord) {
            $query->where(function($q) use ($keyWord) {
                $q->where('Cliente', 'LIKE', $keyWord)
                  ->orWhere('Fecha', 'LIKE', $keyWord)
                  ->orWhere('Contacto', 'LIKE', $keyWord)
                  ->orWhere('Actividad', 'LIKE', $keyWord)
                  ->orWhere('ProcesoActividad', 'LIKE', $keyWord)
                  ->orWhere('Vendedor', 'LIKE', $keyWord)
                  ->orWhere('Asesor', 'LIKE', $keyWord)
                  ->orWhere('Costo', 'LIKE', $keyWord)
                  ->orWhere('Factura', 'LIKE', $keyWord)
                  ->orWhere('Poliza', 'LIKE', $keyWord)
                  ->orWhere('Horario', 'LIKE', $keyWord)
                  ->orWhere('Sistemas', 'LIKE', $keyWord)
                  ->orWhere('Soporte', 'LIKE', $keyWord)
                  ->orWhere('Contabilidad', 'LIKE', $keyWord)
                  ->orWhere('Programacion', 'LIKE', $keyWord)
                  ->orWhere('Diseño', 'LIKE', $keyWord)
                  ->orWhere('MKT', 'LIKE', $keyWord)
                  ->orWhere('Nom', 'LIKE', $keyWord)
                  ->orWhere('Equipo', 'LIKE', $keyWord)
                  ->orWhere('Antiviru', 'LIKE', $keyWord)
                  ->orWhere('Curso', 'LIKE', $keyWord)
                  ->orWhere('PostVenta', 'LIKE', $keyWord)
                  ->orWhere('status', 'LIKE', $keyWord);
            });
        })
        ->when($this->fecha_inicio, function ($query) {
            $query->where('Fecha', '>=', $this->fecha_inicio);
        })
        ->when($this->fecha_fin, function ($query) {
            $query->where('Fecha', '<=', $this->fecha_fin);
        })
        ->orderByDesc('Fecha')
        ->paginate(10);

    return view('livewire.ventas.view', compact('ventas'));
}
public function aplicarFiltroFecha()
{
    $this->resetPage(); // reinicia paginación al aplicar filtro
}

public function clearFilters()
{
    $this->fecha_inicio = null;
    $this->fecha_fin = null;
    $this->resetPage(); // reinicia paginación también
}

    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->Cliente = null;
		$this->Fecha = null;
		$this->Contacto = null;
		$this->Actividad = null;
		$this->ProcesoActividad = null;
		$this->Vendedor = null;
		$this->Asesor = null;
		$this->Costo = null;
		$this->Factura = null;
		$this->Poliza = null;
		$this->Horario = null;
		$this->Sistemas = null;
		$this->Soporte = null;
		$this->Contabilidad = null;
		$this->Programacion = null;
		$this->Diseño = null;
		$this->MKT = null;
		$this->Nom = null;
		$this->Equipo = null;
		$this->Antiviru = null;
		$this->Curso = null;
		$this->PostVenta = null;
		$this->status = null;
    }

    public function store()
    {
        $this->validate([
		'Cliente' => 'required',
		'Fecha' => 'required',
		'Contacto' => 'required',
		'Actividad' => 'required',
		'ProcesoActividad' => 'required',
		'Vendedor' => 'required',
		'Asesor' => 'required',
		'Costo' => 'required',
		'Factura' => 'required',
		'Poliza' => 'required',
		'Horario' => 'required',
		'Sistemas' => 'required',
		'Soporte' => 'required',
		'Contabilidad' => 'required',
		'Programacion' => 'required',
		'Diseño' => 'required',
		'MKT' => 'required',
		'Nom' => 'required',
		'Equipo' => 'required',
		'Antiviru' => 'required',
		'Curso' => 'required',
		'PostVenta' => 'required',
		'status' => 'required',
        ]);

        Venta::create([ 
			'Cliente' => $this-> Cliente,
			'Fecha' => $this-> Fecha,
			'Contacto' => $this-> Contacto,
			'Actividad' => $this-> Actividad,
			'ProcesoActividad' => $this-> ProcesoActividad,
			'Vendedor' => $this-> Vendedor,
			'Asesor' => $this-> Asesor,
			'Costo' => $this-> Costo,
			'Factura' => $this-> Factura,
			'Poliza' => $this-> Poliza,
			'Horario' => $this-> Horario,
			'Sistemas' => $this-> Sistemas,
			'Soporte' => $this-> Soporte,
			'Contabilidad' => $this-> Contabilidad,
			'Programacion' => $this-> Programacion,
			'Diseño' => $this-> Diseño,
			'MKT' => $this-> MKT,
			'Nom' => $this-> Nom,
			'Equipo' => $this-> Equipo,
			'Antiviru' => $this-> Antiviru,
			'Curso' => $this-> Curso,
			'PostVenta' => $this-> PostVenta,
			'status' => $this-> status
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Venta Successfully created.');
    }

    public function edit($id)
    {
        $record = Venta::findOrFail($id);
        $this->selected_id = $id; 
		$this->Cliente = $record-> Cliente;
		$this->Fecha = $record-> Fecha;
		$this->Contacto = $record-> Contacto;
		$this->Actividad = $record-> Actividad;
		$this->ProcesoActividad = $record-> ProcesoActividad;
		$this->Vendedor = $record-> Vendedor;
		$this->Asesor = $record-> Asesor;
		$this->Costo = $record-> Costo;
		$this->Factura = $record-> Factura;
		$this->Poliza = $record-> Poliza;
		$this->Horario = $record-> Horario;
		$this->Sistemas = $record-> Sistemas;
		$this->Soporte = $record-> Soporte;
		$this->Contabilidad = $record-> Contabilidad;
		$this->Programacion = $record-> Programacion;
		$this->Diseño = $record-> Diseño;
		$this->MKT = $record-> MKT;
		$this->Nom = $record-> Nom;
		$this->Equipo = $record-> Equipo;
		$this->Antiviru = $record-> Antiviru;
		$this->Curso = $record-> Curso;
		$this->PostVenta = $record-> PostVenta;
		$this->status = $record-> status;
    }

    public function update()
    {
        $this->validate([
		'Cliente' => 'required',
		'Fecha' => 'required',
		'Contacto' => 'required',
		'Actividad' => 'required',
		'ProcesoActividad' => 'required',
		'Vendedor' => 'required',
		'Asesor' => 'required',
		'Costo' => 'required',
		'Factura' => 'required',
		'Poliza' => 'required',
		'Horario' => 'required',
		'Sistemas' => 'required',
		'Soporte' => 'required',
		'Contabilidad' => 'required',
		'Programacion' => 'required',
		'Diseño' => 'required',
		'MKT' => 'required',
		'Nom' => 'required',
		'Equipo' => 'required',
		'Antiviru' => 'required',
		'Curso' => 'required',
		'PostVenta' => 'required',
		'status' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Venta::find($this->selected_id);
            $record->update([ 
			'Cliente' => $this-> Cliente,
			'Fecha' => $this-> Fecha,
			'Contacto' => $this-> Contacto,
			'Actividad' => $this-> Actividad,
			'ProcesoActividad' => $this-> ProcesoActividad,
			'Vendedor' => $this-> Vendedor,
			'Asesor' => $this-> Asesor,
			'Costo' => $this-> Costo,
			'Factura' => $this-> Factura,
			'Poliza' => $this-> Poliza,
			'Horario' => $this-> Horario,
			'Sistemas' => $this-> Sistemas,
			'Soporte' => $this-> Soporte,
			'Contabilidad' => $this-> Contabilidad,
			'Programacion' => $this-> Programacion,
			'Diseño' => $this-> Diseño,
			'MKT' => $this-> MKT,
			'Nom' => $this-> Nom,
			'Equipo' => $this-> Equipo,
			'Antiviru' => $this-> Antiviru,
			'Curso' => $this-> Curso,
			'PostVenta' => $this-> PostVenta,
			'status' => $this-> status
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Venta Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Venta::where('id', $id)->delete();
        }
    }
}