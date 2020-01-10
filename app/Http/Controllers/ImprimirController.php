<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImprimirController extends Controller
{

    public function getGaleria() {
        return view('imprimir.galeria');
    }

    public function getInformacion() {
        return view('imprimir.informacion');
    }
    

    public function getPreguntas() {
        return view('imprimir.preguntas');
    }


    public function getTablero(Request $request) {
        $gameType = $request->input('gameType');
        $gameType = $request->input('gameType');
        $gameType = $request->input('gameType');

        return view('imprimir.tablero');
    }

}
