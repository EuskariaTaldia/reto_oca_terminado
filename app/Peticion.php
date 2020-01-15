<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    // Nombre tabla
    protected $table = 'peticiones';

   // Primay key de la tabla
    protected $primaryKey = 'codPeti';

    // No necesitamos tener 
    public $timestamps = false;

    // Columnas que contiene
    protected $fillable = [
        'nombrePeti', 'datosPeti', 'codUsu',
    ];

}
