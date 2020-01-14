<?php

namespace App\Http\Controllers;

use App\Peticion;
use Illuminate\Http\Request;

class PeticionController extends Controller
{
    public function getFormulario() {
        return view('peticion.crear');
    }

    public function getTabla() {

        $peticion = peticion::all();


        return view('peticion.tabla',["arraypeticiones" => $peticion]);
    }
        // recoger datos para insertar en la base de datos
    public function store(request $request){

        $peticion = new Peticion;

        $peticion->nombre = $request->nombre;
        $peticion->subArea = $request->subArea;
        $peticion->geografia = $request->zonaGeografica;
        $peticion->urlFoto = $request->foto;
        $peticion->fecha = $request->fecha;
        $peticion->descripcion = $request->mensaje;
        $peticion->url = $request->enlace;

        $peticion->save();

        //return redirect('home');

    }
}
