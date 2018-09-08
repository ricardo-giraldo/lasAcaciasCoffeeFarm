<?php

namespace lasAcaciasCoffeeFarm;

use Illuminate\Database\Eloquent\Model;

class LasAcacias extends Model
{
    protected $table = 'Granja';
    protected $primaryKey = 'idGranja';
    protected $fillable = ['nombre_Granja',];

    public function adminstrador()
    {
        return $this->belongsTo('lasAcaciasCoffeeFarm\Adminstrador');
    }

    public function vendedor()
    {
        return $this->belongsTo('lasAcaciasCoffeeFarm\Vendedor');
    }

    public function hospedaje()
    {
        return $this->hasMany('lasAcaciasCoffeeFarm\Hospedaje');
    }

    public function tour()
    {
        return $this->hasMany('lasAcaciasCoffeeFarm\Tour');
    }

    public function producto()
    {
        return $this->hasMany('lasAcaciasCoffeeFarm\Producto');
    }
}


