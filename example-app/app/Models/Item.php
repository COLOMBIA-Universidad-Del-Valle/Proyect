<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'tb_items';

    protected $fillable = [
        'cotizacion_id',
        'descripcion',
        'cantidad',
        'precio'
    ];

    public $timestamps = false;
}
