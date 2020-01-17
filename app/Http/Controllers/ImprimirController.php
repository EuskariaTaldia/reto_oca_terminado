<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Mujer;
use App\Pregunta;
use App\Area;
use App\Zona;

class ImprimirController extends Controller  {

    public function getGaleria() {
        $arrayMujeres = Mujer::all();
        $arrayZonas = Zona::all();
        $arrayAreas = Area::all();
        
        if(Auth::check() ) {
            $usuario = Auth::user();
        } else {
            $usuario = "anonimo";
        }

        return view('imprimir.galeria', compact("usuario", "arrayMujeres", "arrayAreas", "arrayZonas"));
    }

    
    public function getInformacion($id) {
        $mujer = Mujer::findOrFail($id);
        
        if(Auth::check() ) {
            $usuario = Auth::user();
        } else {
            $usuario = "anonimo";
        }

        return view('imprimir.informacion',  compact("usuario", "mujer"));
    }
    

    public function getPreguntas() {
        $arrayPreguntas = Pregunta::all();
        $arrayMujeres = Mujer::all();

        if(Auth::check() ) {
            $usuario = Auth::user();
        } else {
            $usuario = "anonimo";
        }

        return view('imprimir.preguntas',  compact("usuario", "arrayPreguntas", "arrayMujeres"));
    }


    public function getTablero(Request $request) {
        $gameType = $request->input('gameType');
        $especificacion = $request->input('especificacionSelect');
        $jugador = $request->input('jugador');

        if(Auth::check() ) {
            $usuario = Auth::user();
        } else {
            $usuario = "anonimo";
        }

        return view('imprimir.tablero', compact("usuario", "gameType", "especificacion", "jugador"));
    }

}

?>