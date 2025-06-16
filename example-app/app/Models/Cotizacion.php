<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    protected $table = 'tb_cotizaciones';
    protected $primaryKey = 'id_cotizacion';
    public $timestamps = false;

    protected $fillable = ['usuario', 'cliente', 'fecha_cotizacion', 'estado'];

    public function items()
    {
        return $this->hasMany(Item::class, 'cotizacion_id', 'id_cotizacion');
    }
}
