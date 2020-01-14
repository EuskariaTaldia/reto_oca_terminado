@extends('layouts.master')

@section('content')

    <h2>Formulario para la creacion de una nueva mujer:</h2>


<!--
    {!! Form::open(['action' => ['peticionController@getPeticion'] 'method' => 'POST']) !!}

    {{ csrf_field() }}

    {{Form::bstext('nombreApellido')}}
    {{Form::bstext('subArea')}}
    {{Form::bstext('zonaGeografica')}}
    {{Form::bstext('foto')}}
    {{Form::bstext('fecha')}}
    {{Form::bstext('mensaje')}}
    {{Form::bstext('URL')}}
    {{Form::submit('enviar')}}

    {!! Form::close()!!}-->



    <!--form action="" method="GET" name="formDatosPersonales">

        <label for="nombreApellido">Nombre y apellido</label>
        <input type="text" name="nombreApellido" id="nombreApellido" placeholder="Escribe tu nombre"/>


        <label for="subArea">sub Area</label>
        <input type="text" name="subArea" id="subArea" placeholder="Area de trabajo"/>

        <label for="zonaGeografica">zona geografica</label>
        <input type="text" name="zonaGeografica" id="zonaGeografica" placeholder="de donde es"/>

        <label for="foto">foto</label>
        <input type="file" name="foto" id="foto" placeholder="foto"  />

        <label for="fecha">nacimimento-fallecimiento</label>
        <input type ="text" name="fechas" id="fechas"  placeholder="ej: 1909-2005"/><br>

        <label for="mensaje">información</label>
        <textarea name="mensaje" for="mensaje" placeholder="describe brevemente en menos de 300 carácteres" maxlength="300"></textarea>

        <label for="enlace">URL</label>
        <input type="text" name="enlace" id="enlace" placeholder="pagina de informacion"/>

        <input type="submit" name="enviar" value="enviar datos"/>

    </!--form -->










@stop
