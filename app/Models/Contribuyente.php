<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribuyente extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'contribuyentes';

    protected $fillable = ['RFC','Nombre','Regimen','Email','Telefono','Factura_contraseña','Nomina_contraseña','Vencimiento_CSD','Ciec_contraseña','Fiel_contraseña','Vencimiento_fiel','Ev_imss_usuario','Ev_imss_contraseña','Idse_usuario','Idse_contraseña','Sipare_usuario','Sipare_contraseña','Usuario_2','Contraseña_2','Colabora_usuario','Colabora_contraseña','Infonavit_usuario','Infonavit_contraseña','Citas_jal_usuario','Citas_jal_contraseña','Sas_usuario','Sas_contraseña','Extra','tipoFiltro','fechaInicio','fechaFin'];
	
}
