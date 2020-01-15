<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mujer;
use App\Pregunta;
use App\Area;
use App\Zona;

    class ImprimirController extends Controller  {

        public function getGaleria() {
            $arrayMujeres = Mujer::all();
            $arrayZonas = Zona::all();
            $arrayAreas = Area::all();

            return view('imprimir.galeria', compact("arrayMujeres", "arrayAreas", "arrayZonas"));
        }

        
        public function getInformacion($id) {
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
            $filtro = $request->input('filtro');
            $especificacion = $request->input('especificacionSelect');
            $jugador = $request->input('jugador');

            return view('imprimir.tablero', compact("gameType", "filtro", "especificacion", "jugador"));
        }

    }

?>