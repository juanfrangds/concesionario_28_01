<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Marca;

class Coche extends Model
{
    protected $filable=['matricula', 'modelo', 'color', 'tipo', 'klms','pvp','foto', 'marca_id'];

    //un coche tendra una unica marca en la relacion 1:n marcas coches
    public function marca(){
        return $this->belongTo(Marca::class);
    }
}
