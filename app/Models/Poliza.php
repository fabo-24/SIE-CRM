<?php
// app/Models/Poliza.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poliza extends Model
{
    use HasFactory;

    protected $table = 'polizas';

    /**
     * Los atributos que se pueden asignar masivamente.
     */
    protected $fillable = [
        'cliente',
        'contacto',
        'fecha_inicio',
        'fecha_fin',
        'bloques_contratados',
        'bloques_disponibles',
        'estado',
        'observaciones',
    ];

    /**
     * Casts para convertir tipos.
     */
    protected $casts = [
        'fecha_inicio'        => 'date',
        'fecha_fin'           => 'date',
        'bloques_contratados' => 'decimal:2',
        'bloques_disponibles' => 'decimal:2',
    ];

    /**
     * Relación: una póliza tiene muchos usos.
     */
    public function usos()
    {
        return $this->hasMany(UsoPoliza::class, 'poliza_id');
    }
}
