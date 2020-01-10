<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mujer extends Model
{
    // Nombre tabla
    protected $table = 'mujeres';

    // Primay key de la tabla
    protected $primaryKey = 'codMujer';

    public function pregunta() {
        return $this->hasOne('App\Pregunta');
    }

    
    public function area() {
        return $this->hasOne('App\Area');
    }

    
    public function zona() {
        return $this->hasOne('App\Zona');
    }
}
