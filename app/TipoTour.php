<?php

namespace lasAcaciasCoffeeFarm;

use Illuminate\Database\Eloquent\Model;

class TipoTour extends Model
{
    protected $table = 'TipoTour';
    protected $primaryKey = 'idTipoTour';
    protected $fillable = ['descripcion',];

    public function tour()
    {
        return $this->hasMany('App\Tour');
    }
}
