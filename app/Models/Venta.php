<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'ventas';

    protected $fillable = ['Cliente','Fecha','Contacto','Actividad','ProcesoActividad','Vendedor','Asesor','Costo','Factura','Poliza','Horario','Sistemas','Soporte','Contabilidad','Programacion','Diseño','MKT','Nom','Equipo','Antiviru','Curso','PostVenta','status'];
	
}
