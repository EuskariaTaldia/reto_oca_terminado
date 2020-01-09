<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeticionController extends Controller
{
    public function getFormulario() {
        return view('peticion.crear');
    }

    public function getTabla() {
        return view('peticion.tabla');
    }
}
