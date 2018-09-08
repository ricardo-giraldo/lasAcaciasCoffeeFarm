<?php

namespace lasAcaciasCoffeeFarm;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'Tour';
    protected $primaryKey = 'idTour';
    protected $fillable = ['precio', 'granja_idGranja', 'tipoTour',];

    public function granja()
    {
        return $this->belongsTo('App\Granja');
    }

    public function tipoTour()
    {
        return $this->belongsTo('App\TipoTour');
    }
}
