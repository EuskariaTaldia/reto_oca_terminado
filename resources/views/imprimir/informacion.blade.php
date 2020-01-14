@extends('layouts.master')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{url('/imprimirGaleria')}}">Galeria</a></li>
            <li class="breadcrumb-item active" aria-current="page">Informacion</li>
        </ol>
    </nav>

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
            <h5>Zona:{{$mujer->zona}}</h5>
            <h5> Datos:</h5><p> {{$mujer->datos}}</p>

            <a class="btn btn-secondary" href="{{$mujer->enlace}}">Fuente</a>
            <input class="btn btn-dark" type="button" name="imprimir" value="Imprimir Datos" onclick="window.print();">
        </div>
    </div>    

@stop