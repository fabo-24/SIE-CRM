<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soporte extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'soportes';

    protected $fillable = ['Fecha_ini','Fecha_fin','Hora_ini','Hora_fin','Tiempo','Cliente','Asunto','Ejecutivo','Stat','Evidencia','PostVenta','Sistema','Comentarios','VersionSistem','VersionWindows','PaqueteriaOffice','Status'];
	
}
