<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mujer;
use App\Pregunta;

class ImprimirController extends Controller
{

    public function getGaleria() {
        $mujeres = Mujer::all();

        return view('imprimir.galeria', ["arraymujeres" => $mujeres]);
    }

    
    public function getInformacion($id){
        $mujer = Mujer::findOrFail($id);

        return view('imprimir.informacion', ['mujer'=> $mujer]);
    }
    

    public function getPreguntas() {
        $preguntas = Pregunta::all();
        $mujeres = Mujer::all();

        return view('imprimir.preguntas', ["arraypreguntas" => $preguntas], ["arraymujeres" => $mujeres]);
    }


    public function getTablero(Request $request) {
        $gameType = $request->input('gameType');
        $filtro = $request->filtro;
        $especificacion = $request->especificacion;
        $jugador = $request->input('jugador');

        return view('imprimir.tablero', ["gameType" => $gameType], ["filtro" => $filtro], ["especificacion" => $especificacion], ["jugador" => $jugador]);
    }

}
