<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bitacora extends Model
{
    use HasFactory;
    protected $table = 'bitacora';
    protected $fillable = [
        'user_id',
        'accion',
        'modelo',
        'modelo_id',
        'descripcion',
    ];

    /**
     * Relación con el usuario que hizo la acción.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    /**
     * Relación dinámica al modelo afectado (opcional).
     */
    public function modeloAfectado()
    {
        $modeloClass = "App\\Models\\" . $this->modelo;

        // Verifica que la clase exista para evitar errores
        if (class_exists($modeloClass)) {
            return $this->belongsTo($modeloClass, 'modelo_id');
        }

        return null;
    }
}
