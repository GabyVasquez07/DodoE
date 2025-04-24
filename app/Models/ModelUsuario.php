<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelUsuario extends Model
{
    protected $table = 'tbl_usuarios';
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'password',
        'telefono',
        'direccion',
        'rol_id',
    ];

    public function Eventos()
    {
        return $this->hasMany(ModelEventos::class);
    }
   
}
