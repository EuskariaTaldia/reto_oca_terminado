<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Peticion;
use App\Area;
use App\Zona;

class PeticionController extends Controller  {

    public function getFormulario() {
        $arrayAreas = Area::all();
        $arrayZonas = Zona::all();

        if(Auth::check() ) {
            $usuario = Auth::user();
        } else {
            $usuario = "anonimo";
        }

        return view('peticion.crear', compact("usuario", "arrayZonas", "arrayAreas"));
    }

    public function getTabla() {
        $arrayPeticiones = Peticion::all();
        
        if(Auth::check()    ) {
            $usuario = Auth::user();
        } else {
            $usuario = "anonimo";
        }

        return view('peticion.tabla', compact("usuario", "arrayPeticiones"));
    }
    
    // Recoger datos para insertar en la base de datos
    public function guardar(request $request) {
        $peticion = new Peticion;

        $peticion->codArea = $request->area; //INT
        $peticion->nombreMujer = $request->nombre;
        $peticion->fechas = $request->fecha;
        $peticion->subArea = $request->subArea;
        $peticion->datos = $request->información; // Text
        $peticion->enlace = $request->enlace;
        $peticion->codZona = $request->zona; //INT
        $peticion->zona = $request->pais;
        $peticion->fotografia = $request->foto;
        $peticion->codUsu = Auth::user()->id;

        $peticion->save();

        return redirect()->route('home');

    }
}
?>