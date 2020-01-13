<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    // Nombre tabla
    protected $table = 'preguntas';

    // Primay key de la tabla
    protected $primaryKey = 'codPregun';


    // Relaciones
    public function mujer() {
        return $this->hasOne('App\Mujer');
    }

}
