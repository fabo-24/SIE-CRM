<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenaza extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'amenazas';

    protected $fillable = ['Antivitus','ClienteAnt','FechaCaducidad','Equipos','Licencias'];
	
}
