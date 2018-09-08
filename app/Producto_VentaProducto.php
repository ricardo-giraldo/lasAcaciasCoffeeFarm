<?php

namespace lasAcaciasCoffeeFarm;

use Illuminate\Database\Eloquent\Model;

class Producto_VentaProducto extends Model
{
    protected $table = 'Producto_VentaProducto';
    protected $fillable = ['producto_idProducto', 'ventaProducto_idVentaProducto','cantidad'];
}
