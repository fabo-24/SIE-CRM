<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contpaqi extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'contpaqis';

    protected $fillable = ['cliente','NoSerie','FechaCaducidad','Sistemas','Licencia','Usuarios','Vendedor','Certificado'];
	
}
