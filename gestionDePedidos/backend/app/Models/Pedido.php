<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'pedidos';
    protected $primaryKey = 'id_pedido';
    protected $fillable = [
        'id_usuario',
        'progreso',
        'Total',
    ];
    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
