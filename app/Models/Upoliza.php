<?php
// app/Models/Upoliza.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upoliza extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'upolizas';

    protected $fillable = [
        'poliza_id',
        'fecha',
        'inicio',
        'fin',
        'duracion',
        'ajuste',
        'caso',
        'bloques_consumidos',
        'descuento',
        'atendio',
    ];

    protected $casts = [
        'fecha'              => 'date',
        'inicio'             => 'datetime:H:i:s',
        'fin'                => 'datetime:H:i:s',
        'duracion'           => 'datetime:H:i:s',
        'ajuste'             => 'datetime:H:i:s',
        'bloques_consumidos' => 'decimal:2',
        'descuento'          => 'decimal:2',
    ];

    /**
     * Cada uso pertenece a una póliza.
     */
    public function poliza()
    {
        return $this->belongsTo(Poliza::class, 'poliza_id', 'id');
    }

    /**
     * Al crear un uso, descontar bloques automáticamente.
     * Al eliminarlo, devolver los bloques.
     */
    protected static function booted()
    {
        static::created(function (Upoliza $uso) {
            $uso->poliza()->decrement('bloques_disponibles', $uso->bloques_consumidos);
        });

        static::deleted(function (Upoliza $uso) {
            $uso->poliza()->increment('bloques_disponibles', $uso->bloques_consumidos);
        });
    }
}
