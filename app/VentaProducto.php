<?php

namespace lasAcaciasCoffeeFarm;

use Illuminate\Database\Eloquent\Model;

class VentaProducto extends Model
{
    protected $table = 'VentaProducto';
    protected $primaryKey = 'idVentaProducto';
    protected $fillable = ['precio', 'producto_idProducto',];

    public function producto()
    {
        return $this->hasMany('App\Producto');
    }
}
