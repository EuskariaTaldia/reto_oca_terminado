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
        'codUsu', 'nombreMujer', 'fechas', 'codArea', 'subArea', 'datos', 'enlace',
        'codZona', 'zona', 'fotografia', 

    ];

    // Relaciones
    public function usuario() {
        return $this->hasOne('App\User');
    }

    public function zona() {
        return $this->hasOne('App\Zona');
    }

    public function area() {
        return $this->hasOne('App\Area');
    }

}
