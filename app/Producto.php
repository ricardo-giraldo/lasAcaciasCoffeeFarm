<?php

namespace lasAcaciasCoffeeFarm;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'Producto';
    protected $primaryKey = 'idProducto';
    protected $fillable = ['nombre', 'precio', 'tipoProducto' 'granja_idGranja',];

    public function granja()
    {
        return $this->belongsTo('lasAcaciasCoffeeFarm\LasAcacias');
    }

    public function tipoProducto()
    {
        return $this->belongsTo('lasAcaciasCoffeeFarm\TipoProducto');
    }

    public function ventaProducto()
    {
        return $this->hasMany('lasAcaciasCoffeeFarm\VentaProducto');
    }
}
