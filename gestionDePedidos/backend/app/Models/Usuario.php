<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_usuario'; // Clave primaria de la tabla

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
    ];

    public $timestamps = true; // Para manejar created_at y updated_at
}
