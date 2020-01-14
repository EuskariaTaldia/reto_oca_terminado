@extends('layouts.master')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Peticiones nueva</li>
        </ol>
    </nav>

    <h2>Formulario para la creacion de una nueva mujer:<h2>

    <form action="#" target="" method="post" name="formDatosPersonales">

        <label for="nombre">Nombre y apellido</label>
        <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre"/>

        <label for="subArea">sub Area</label>
        <input type="text" name="subArea" id="subArea" placeholder="Area de trabajo"/>

        <label for="zonaGeografica">zona geografica</label>
        <input type="text" name="zonaGeografica" id="zonaGeografica" placeholder="de donde es"/>

        <label for="foto">foto</label>
        <input type="file" name="foto" id="foto" placeholder="foto" required />

        <label for="fecha">nacimimento-fallecimiento</label>
        <input type ="date" name="fechas" id="fechas" placeholder="ej: 1950-2005"/><br>

        <label for="mensaje">información</label>
        <textarea name="mensaje" for="mensaje" placeholder="describe brevemente en menos de 300 carácteres" maxlength="300"></textarea>

        <label for="enlace">URL</label>
        <input type="text" name="enlace" id="enlace" placeholder="pagina de informacion"/>

        <input type="submit" name="enviar" value="enviar datos"/>

    </form>

@stop
