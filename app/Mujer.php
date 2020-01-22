<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mujer extends Model
{
    // Nombre tabla
    protected $table = 'mujeres';

    // Primay key de la tabla
    protected $primaryKey = 'id';

    // Columnas que contiene
    protected $fillable = [
        'codArea', 'nombre', 'fechas', 'subarea', 'datos', 'datos_eus',
        'datos_ing', 'enlace', 'codZona', 'zona', 'fotografia',
    ];

    // Relaciones    
    public function area() {
        return $this->hasOne('App\Area');
    }

    
    public function zona() {
        return $this->hasOne('App\Zona');
    }

    
}
