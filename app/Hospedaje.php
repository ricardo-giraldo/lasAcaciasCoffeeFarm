<?php

namespace lasAcaciasCoffeeFarm;

use Illuminate\Database\Eloquent\Model;

class Hospedaje extends Model
{
    protected $table = 'Hospedaje';
    protected $primaryKey = 'idHospedaje';
    protected $fillable = ['nombre', 'granja_idGranja',];

    public function granja()
    {
        return $this->belongsTo('lasAcaciasCoffeeFarm\LasAcacias');
    }

    public function tiquete()
    {
        return $this->belongsTo('lasAcaciasCoffeeFarm\Tiquete');
    }
}
