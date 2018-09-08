<?php

namespace lasAcaciasCoffeeFarm;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'Vendedor';
    protected $primaryKey = 'idVendedor';
    protected $fillable = ['nombre_usuario','contrasenia','granja_idGranja',];

    public function granja()
    {
        return $this->belongsTo('App\Granja');
    }
}
