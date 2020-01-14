@extends('layouts.master')

@section('content')

    <h2>Formulario para la creacion de una nueva mujer:</h2>

    <form method="POST" action="" name="formDatosPersonales">
        @csrf

        <label for="nombreApellido">Nombre y apellido</label>'
        <input id="nombreApellido" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" autofocus>
        @error('nombre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror


        <label for="area">Area</label>        
        <select class="form-control @error('area') is-invalid @enderror" name="area" id="area" autofocus>
            @foreach ($arrayAreas as $areas)
                <option value="{{$areas['codArea']}}">{{$areas['area']}}</option>
            @endforeach                
        </select>
        @error('area')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror


        <label for="subArea">Sub Area</label>        
        <input id="subArea" type="text" class="form-control @error('subArea') is-invalid @enderror" name="subArea" autofocus>
        @error('subArea')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror


        <label for="zona">Zona geografica</label>
        <input type="text" class="form-control @error('zona') is-invalid @enderror" name="zona" autofocus/>
        @error('zona')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror


        <label for="foto">Foto (URL)</label>
        <input type="text" class="form-control @error('foto') is-invalid @enderror" name="foto" autofocus/>
        @error('foto')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        
        <label for="fecha">Fecha</label>
        <input type="text" class="form-control @error('fecha') is-invalid @enderror" name="fecha" placeholder="Ej: 1909-1990" autofocus/>
        @error('fecha')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        
        <label for="información">Información</label>
        <textarea type="text" class="form-control @error('información') is-invalid @enderror" name="información" maxlength="300" autofocus></textarea>
        @error('información')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror


        <label for="enlace">Información URL</label>
        <input type="text" class="form-control @error('enlace') is-invalid @enderror" name="enlace" autofocus/>
        @error('enlace')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="submit" name="enviar" value="Enviar datos"/>

   </form>










@stop
