<?php

namespace lasAcaciasCoffeeFarm;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = 'Administrador';
    protected $primaryKey = 'idAdministrador';
    protected $fillable = ['nombre_usuario','contrasenia','granja_idGranja',];

    public function granja()
    {
        return $this->belongsTo('lasAcaciasCoffeeFarm\LasAcacias');
    }
}
