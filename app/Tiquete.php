<?php

namespace lasAcaciasCoffeeFarm;

use Illuminate\Database\Eloquent\Model;

class Tiquete extends Model
{
    protected $table = 'Tiquete';
    protected $primaryKey = 'idTiquete';
    protected $fillable = ['numero', 'precio', 'hospedaje_idHospedaje',];

    public function hospedaje()
    {
        return $this->belongsTo('App\Hospedaje');
    }

    public function ventaTour()
    {
        return $this->hasMany('App\VentaTour');
    }
}
