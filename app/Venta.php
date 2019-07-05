<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'venta';
    
    protected $fillable = ['id', 'fecha', 'precio_total', 'item_total'];

    public function has_producto()
    {
        return $this->belongsToMany(Productos::class,'venta_productos','id_venta','id_producto');
    }
}
