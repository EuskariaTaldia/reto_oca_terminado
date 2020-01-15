<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    // Nombre tabla
    protected $table = 'areas';

    // Primay key de la tabla
    protected $primaryKey = 'codArea';

    // Columnas que contiene
    protected $fillable = [
        'area', 'area_ing', 'area_eus',
    ];

}
