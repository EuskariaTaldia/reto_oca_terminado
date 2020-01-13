<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mujer extends Model
{
    // Nombre tabla
    protected $table = 'mujeres';

    // Primay key de la tabla
    protected $primaryKey = 'codMujer';


    // Relaciones    
    public function area() {
        return $this->hasOne('App\Area');
    }

    
    public function zona() {
        return $this->hasOne('App\Zona');
    }
}
