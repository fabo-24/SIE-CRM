<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contribuyente;
use Carbon\Carbon;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;


class Contribuyentes extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $RFC, $Nombre, $Regimen, $Email, $Telefono, $Factura_contraseña, $Nomina_contraseña, $Vencimiento_CSD, $Contraseña_CSD, $Ciec_contraseña, $Fiel_contraseña, $Vencimiento_fiel, $Ev_imss_usuario, $Ev_imss_contraseña, $Idse_usuario, $Idse_contraseña, $Idse_ingreso, $Sipare_usuario, $Sipare_contraseña, $Usuario_2, $Contraseña_2, $Colabora_usuario, $Colabora_contraseña, $Infonavit_usuario, $Infonavit_contraseña, $Citas_jal_usuario, $Citas_jal_contraseña, $Sas_usuario, $Sas_contraseña, $Extra, $tipoFiltro, $fechaInicio, $fechaFin;
	public $search = '';
	public const REGIMENES = [
    1 => '605 - SUELDOS Y SALARIOS',
    2 => '612 - PERSONAS FÍSICAS CON ACTIVIDADES EMPRESARIALES',
    3 => '621 - INCORPORACIÓN FISCAL RIF',
    4 => '626 - RESICO',
    5 => '630 - ENAJENACIÓN ACCIONES BOLSA DE VALORES',
    6 => '603 - PERSONAS MORALES CON FINES NO LUCRATIVOS',
    7 => '625 - PERSONA FÍSICA DE PLATAFORMAS DIGITALES',
    8 => '601 - RÉGIMEN GENERAL DE LEY',
    9 => '611 - INGRESOS POR DIVIDENDOS (SOCIOS Y ACCIONISTAS)',
];

   public function render()
{
    $query = Contribuyente::query();

    if ($this->keyWord) {
    $query->where(function($q) {
        $q->where('Nombre', 'like', '%' . $this->keyWord . '%')
          ->orWhere('RFC', 'like', '%' . $this->keyWord . '%');
    });
	}


    // Filtro por tipo y rango de fechas
    if ($this->tipoFiltro && $this->fechaInicio && $this->fechaFin) {
        if ($this->tipoFiltro == 'fiel') {
            $query->whereBetween('Vencimiento_fiel', [$this->fechaInicio, $this->fechaFin]);
        } elseif ($this->tipoFiltro == 'csd') {
            $query->whereBetween('Vencimiento_CSD', [$this->fechaInicio, $this->fechaFin]);
        }
    }

    return view('livewire.contribuyentes.view', [
        'contribuyentes' => $query->latest()->paginate(10),
    ]);
}

	public function updatedKeyWord()
{
    $this->resetPage();
}

    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->RFC = null;
		$this->Nombre = null;
		$this->Regimen = null;
		$this->Email = null;
		$this->Telefono = null;
		$this->Factura_contraseña = null;
		$this->Nomina_contraseña = null;
		$this->Vencimiento_CSD = null;
		$this->Contraseña_CSD = null;
		$this->Ciec_contraseña = null;
		$this->Fiel_contraseña = null;
		$this->Vencimiento_fiel = null;
		$this->Ev_imss_usuario = null;
		$this->Ev_imss_contraseña = null;
		$this->Idse_usuario = null;
		$this->Idse_contraseña = null;
		$this->Idse_ingreso = null;
		$this->Sipare_usuario = null;
		$this->Sipare_contraseña = null;
		$this->Usuario_2 = null;
		$this->Contraseña_2 = null;
		$this->Colabora_usuario = null;
		$this->Colabora_contraseña = null;
		$this->Infonavit_usuario = null;
		$this->Infonavit_contraseña = null;
		$this->Citas_jal_usuario = null;
		$this->Citas_jal_contraseña = null;
		$this->Sas_usuario = null;
		$this->Sas_contraseña = null;
		$this->Extra = null;
    }

    public function store()
    {
        $this->validate([
            'RFC' => 'required',
            'Nombre' => 'required',
            'Regimen' => 'required',
            // Only these are required, remove the rest
        ]);

        $contribuyente = Contribuyente::create([
            'RFC'                => $this->RFC,
            'Nombre'             => $this->Nombre,
            'Regimen'            => $this->Regimen,
            'Email' => $this->Email,
            'Telefono' => $this->Telefono,
            'Factura_contraseña' => $this->Factura_contraseña,
            'Nomina_contraseña' => $this->Nomina_contraseña,
            'Vencimiento_CSD' => $this->Vencimiento_CSD,
            'Contraseña_CSD' => $this->Contraseña_CSD,
            'Ciec_contraseña' => $this->Ciec_contraseña,
            'Fiel_contraseña' => $this->Fiel_contraseña,
            'Vencimiento_fiel' => $this->Vencimiento_fiel,
            'Ev_imss_usuario' => $this->Ev_imss_usuario,
            'Ev_imss_contraseña' => $this->Ev_imss_contraseña ,
            'Idse_usuario' => $this->Idse_usuario,
            'Idse_contraseña' => $this->Idse_contraseña,
            'Idse_ingreso' => $this->Idse_ingreso,
            'Sipare_usuario' => $this->Sipare_usuario,
            'Sipare_contraseña' => $this->Sipare_contraseña,
            'Usuario_2' => $this->Usuario_2,
            'Contraseña_2' => $this->Contraseña_2,
            'Colabora_usuario' => $this->Colabora_usuario,
            'Colabora_contraseña' => $this->Colabora_contraseña,
            'Infonavit_usuario' => $this->Infonavit_usuario,
            'Infonavit_contraseña' => $this->Infonavit_contraseña,
            'Citas_jal_usuario' => $this->Citas_jal_usuario,
            'Citas_jal_contraseña' => $this->Citas_jal_contraseña,
            'Sas_usuario' => $this->Sas_usuario,
            'Sas_contraseña' => $this->Sas_contraseña,
            'Extra'              => $this->Extra,
        ]);

        $this->registrarBitacora('crear', 'Contribuyente', $contribuyente->id, 'Creación de contribuyente: ' . $contribuyente->Nombre);
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Contribuyente Successfully created.');
    }

    public function edit($id)
    {
        $record = Contribuyente::findOrFail($id);
        $this->selected_id = $id; 
		$this->RFC = $record-> RFC;
		$this->Nombre = $record-> Nombre;
		$this->Regimen = $record-> Regimen;
		$this->Email = $record-> Email;
		$this->Telefono = $record-> Telefono;
		$this->Factura_contraseña = $record-> Factura_contraseña;
		$this->Nomina_contraseña = $record-> Nomina_contraseña;
		$this->Vencimiento_CSD = $record-> Vencimiento_CSD;
		$this->Contraseña_CSD = $record-> Contraseña_CSD;
		$this->Ciec_contraseña = $record-> Ciec_contraseña;
		$this->Fiel_contraseña = $record-> Fiel_contraseña;
		$this->Vencimiento_fiel = $record-> Vencimiento_fiel;
		$this->Ev_imss_usuario = $record-> Ev_imss_usuario;
		$this->Ev_imss_contraseña = $record-> Ev_imss_contraseña;
		$this->Idse_usuario = $record-> Idse_usuario;
		$this->Idse_contraseña = $record-> Idse_contraseña;
		$this->Idse_ingreso = $record-> Idse_ingreso;
		$this->Sipare_usuario = $record-> Sipare_usuario;
		$this->Sipare_contraseña = $record-> Sipare_contraseña;
		$this->Usuario_2 = $record-> Usuario_2;
		$this->Contraseña_2 = $record-> Contraseña_2;
		$this->Colabora_usuario = $record-> Colabora_usuario;
		$this->Colabora_contraseña = $record-> Colabora_contraseña;
		$this->Infonavit_usuario = $record-> Infonavit_usuario;
		$this->Infonavit_contraseña = $record-> Infonavit_contraseña;
		$this->Citas_jal_usuario = $record-> Citas_jal_usuario;
		$this->Citas_jal_contraseña = $record-> Citas_jal_contraseña;
		$this->Sas_usuario = $record-> Sas_usuario;
		$this->Sas_contraseña = $record-> Sas_contraseña;
		$this->Extra = $record-> Extra;
    }

   public function update()
	{
	    $this->validate([
	        'RFC'    => 'required',
	        'Nombre' => 'required',
	        'Regimen'=> 'required',
	        // Only these are required, remove the rest
	    ]);

	    if ($this->selected_id) {
	        $contribuyente = Contribuyente::find($this->selected_id);

	        $contribuyente->update([
	            'RFC'                  => $this->RFC,
	            'Nombre'               => $this->Nombre,
	            'Regimen'              => $this->Regimen,
	            'Email' => $this->Email,
	            'Telefono' => $this->Telefono,
	            'Factura_contraseña' => $this->Factura_contraseña,
	            'Nomina_contraseña' => $this->Nomina_contraseña,
	            'Vencimiento_CSD' => $this->Vencimiento_CSD,
				'Contraseña_CSD'       => $this->Contraseña_CSD,
	            'Ciec_contraseña'      => $this->Ciec_contraseña,
	            'Fiel_contraseña'      => $this->Fiel_contraseña,
	            'Vencimiento_fiel'     => $this->Vencimiento_fiel,
	            'Ev_imss_usuario'      => $this->Ev_imss_usuario,
	            'Ev_imss_contraseña'   => $this->Ev_imss_contraseña,
	            'Idse_usuario'         => $this->Idse_usuario,
	            'Idse_contraseña'      => $this->Idse_contraseña,
				'Idse_ingreso'         => $this->Idse_ingreso,
	            'Sipare_usuario'       => $this->Sipare_usuario,
	            'Sipare_contraseña'    => $this->Sipare_contraseña,
	            'Usuario_2'            => $this->Usuario_2,
	            'Contraseña_2'         => $this->Contraseña_2,
	            'Colabora_usuario'     => $this->Colabora_usuario,
	            'Colabora_contraseña'  => $this->Colabora_contraseña,
	            'Infonavit_usuario'    => $this->Infonavit_usuario,
	            'Infonavit_contraseña' => $this->Infonavit_contraseña,
	            'Citas_jal_usuario'    => $this->Citas_jal_usuario,
	            'Citas_jal_contraseña' => $this->Citas_jal_contraseña,
	            'Sas_usuario'          => $this->Sas_usuario,
	            'Sas_contraseña'       => $this->Sas_contraseña,
	            'Extra'                => $this->Extra,
	        ]);

	        $this->registrarBitacora(
	            'editar',
	            'Contribuyente',
	            $contribuyente->id,
	            'Edición de contribuyente: ' . $contribuyente->Nombre
	        );

	        $this->resetInput();
	        $this->dispatchBrowserEvent('closeModal');
	        session()->flash('message', 'Contribuyente successfully updated.');
	    }
	}

	public function filtrar()
{
    $this->resetPage();
}
	public function getClaseVencimiento($fecha)
	{
	    if (!$fecha) return '';
	
	    $hoy = Carbon::now()->startOfDay();
	    $venc = Carbon::parse($fecha)->startOfDay();
	
	    if ($venc->isSameDay($hoy) || $venc->lt($hoy)) {
	        return 'table-danger'; // Vencido o se vence hoy
	    }
	
	    if ($venc->month === $hoy->month && $venc->year === $hoy->year) {
	        return 'table-warning'; // Se vence este mes
	    }
	
	    return ''; // Sin alerta
	}
	private function registrarBitacora($accion, $modelo, $modelo_id, $descripcion = null)
	{
	    Bitacora::create([
	        'user_id' => Auth::id(),
	        'accion' => $accion,
	        'modelo' => $modelo,
	        'modelo_id' => $modelo_id,
	        'descripcion' => $descripcion,
	    ]);
	}

	public function destroy($id)
	{
	    try {
	        // Arrojará ModelNotFoundException si no existe
	        $contribuyente = Contribuyente::findOrFail($id);

	        $contribuyente->delete();

	        $this->registrarBitacora(
	            'eliminar',
	            'Contribuyente',
	            $contribuyente->id,
	            'Eliminación de contribuyente: ' . $contribuyente->Nombre
	        );

	    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
	        session()->flash('error', 'Contribuyente no encontrado, no se pudo eliminar.');
	    }
	}

}