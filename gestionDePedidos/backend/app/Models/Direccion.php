<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_usuario',
        'ciudad',
        'estado',
        'numero_casa',
        'codigo_postal',
        'calle',
    ];
}

