<?php

namespace App\Http\Controllers;
use App\Peticion;
use App\Area;
use App\Zona;
use Illuminate\Http\Request;

    class PeticionController extends Controller  {

        public function getFormulario() {
            $arrayAreas = Area::all();
            $arrayZonas = Zona::all();

            return view('peticion.crear', compact("arrayZonas", "arrayAreas"));
        }

        public function getTabla() {
            $peticion = Peticion::all();

            return view('peticion.tabla', ["arraypeticiones" => $peticion]);
        }
        
        // Recoger datos para insertar en la base de datos
        public function guardar(request $request) {
            $peticion = new Peticion;

            $peticion->area = $request->area;
            $peticion->nombre = $request->nombre;
            $peticion->fechas = $request->fecha;
            $peticion->subarea = $request->subArea;
            $peticion->datos = $request->información;
            $peticion->enlace = $request->enlace;
            $peticion->codZona = $request->pais;
            $peticion->zona = $request->zona;
            $peticion->fotografia = $request->foto;

            $peticion->save();

            return redirect()->route('home');

        }
    }
?>