<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'contenidoTipo',
        'archivo',
        'tipoUsuario',
        'idCategoria',

    ];
}
