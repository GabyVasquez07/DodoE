<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelEventos extends Model
{
    protected $table = 'tbl_eventos';
    protected $fillable = [
        'fk_usuario',
        'nombre_evento',
        'descripcion',
        'fecha_evento',
        'hora_evento',
        'ubicacion',
        'estado',
        'asistentes'
    ];

    public function Eventos()
    {
        return $this->belongsTo(ModelUsuario::class);
    }
}
