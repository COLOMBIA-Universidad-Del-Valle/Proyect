<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'tb_clientes'; // nombre real de la tabla
    protected $primaryKey = 'id_cliente'; // clave primaria personalizada

    protected $fillable = [
        'usuario',
        'nombre',
        'apellido',
        'telefono',
        'nit',
        'direccion',
        'correo',
        'observaciones',
    ];
}
