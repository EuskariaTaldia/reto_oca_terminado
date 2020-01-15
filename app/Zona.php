<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{

    // Nombre tabla
    protected $table = 'zona';

    // Primay key de la tabla
    protected $primaryKey = 'codZona';
    
    // Columnas que contiene
    protected $fillable = [
        'zona', 'zona_ing', 'zona_eus',
    ];


    // Relaciones
    public function mujer() {
        return $this->hasOne('App\Mujer');
    }

}
