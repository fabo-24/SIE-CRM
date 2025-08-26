<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspel extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'aspels';

    protected $fillable = ['cliente','CDA','NoSerie','Usuario','Contraseña','Licenciamiento','Sistemas','Timbres','Observaciones','RedVpn','ContraVpn','FechaCaducidad'];
	
}
