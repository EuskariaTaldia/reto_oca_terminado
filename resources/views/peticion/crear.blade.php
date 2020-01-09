@extends('layouts.master')

@section('content')

    <h2>Formulario para la creacion de una nueva mujer:<h2>
            
    <form action="#" target="" method="get" name="formDatosPersonales">

        <label for="nombre">Nombre y apellido</label>

        <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre"/>

        <label for="apellidos">zona geografica</label>
        <input type="text" name="apellidos" id="apellidos" placeholder="de donde es"/>

        <label for="email">foto</label>
        <input type="file" name="email" id="email" placeholder="email" required />

        <label for="asunto">nacimiento</label>
        <input type ="date" name="asunto" id="asunto"/><br>


        <label for="asunto">fallecimiento</label>
        <input type ="date" name="asunto" id="asunto"/><br>

        <label for="mensaje">información</label>
        <textarea name="mensaje" for="mensaje" placeholder="describe brevemente en menos de 300 carácteres" maxlength="300"></textarea>

        <label for="nombre">URL</label>
        <input type="text" name="nombre" id="nombre" placeholder="pagina de informacion"/>

        <input type="submit" name="enviar" value="enviar datos"/>

    </form>

@stop