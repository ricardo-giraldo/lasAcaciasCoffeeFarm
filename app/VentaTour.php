<?php

namespace lasAcaciasCoffeeFarm;

use Illuminate\Database\Eloquent\Model;

class VentaTour extends Model
{
    protected $table = 'VentaTour';
    protected $primaryKey = 'idVentaTour';
    protected $fillable = ['cantidad', 'precio', 'tour_idTour', 'tiquete_idTiquete',];

    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }

    public function tiquete()
    {
        return $this->belongsTo('App\Tiquete');
    }
}
