<?php

namespace lasAcaciasCoffeeFarm;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    protected $table = 'TipoProducto';
    protected $primaryKey = 'idTipoProducto';
    protected $fillable = ['descripcion',];

    public function producto()
    {
        return $this->hasMany('App\Producto');
    }
}
