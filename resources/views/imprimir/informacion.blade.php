@extends('layouts.master')

@section('content')

    <h2>Informacion mujeres: <h2>

    <div class="fondoInfo row myRow">
        <div class="col-lg-4 col-md-12">
            {{-- TODO: La Imagen de la película --}}
            @if($mujer->fotografia==null)
                <img class="impFotoMujer" src="https://image.flaticon.com/icons/png/512/23/23030.png" alt="Argazkia 1">
            @else
                <img class="impFotoMujer" src="{{$mujer->fotografia}}" alt="Argazkia 1">
            @endif
        </div>

        <div class="col-lg-1"></div>

        <div class="col-lg-7 col-md-12">
            {{-- TODO: Datos de la película --}}
            <h2>{{$mujer->nombre}}</h2>
            <h5> Año: {{$mujer->fechas}}</h5>
            <h5> Sub-Area: {{$mujer->subarea}}</h5>
            <h5> Zona: {{$mujer->zona}}</h5>
            <h5> Datos:</h5><p> {{$mujer->datos}}</p>

            <a href="{{ url('galeria')}} " class="btn btn-secondary">< Volver a la Galeria</a> 
            <a class="btn btn-dark" href="{{$mujer->enlace}}">Fuente</a>
            <input class="btn btn-dark" type="button" name="imprimir" value="Imprimir Datos" onclick="window.print();">
        </div>
    </div>    

@stop