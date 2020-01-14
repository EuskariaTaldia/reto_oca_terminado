@extends('layouts.master')

@section('content')

<div id="settingsTable" class="hoc clear">
  <h2>Peticiones sobre nuevas mujeres: <h2>
    <table>
        <tr>
            <th>nombre apellido</th>
            <th>subarea</th>
            <th>zonaGeografica</th>
            <th>foto</th>
            <th>mensaje</th>
            <th>fecha</th>
            <th>url</th>
        </tr>

        <tr>

            @foreach ($arraypeticiones as $peticion)

            <td id="nombreApellido"> <input class="inputSetting" type="text" id="nombreApellido" name="nombreApellido" value="{{$peticion["nombreApellido"]}}" readonly></td>
            <td id="subArea"> <input class="inputSetting " type="text" name="subArea" value="{{$peticion["subArea"]}}" readonly></td>
            <td id="zonaGeografica"> <input class="inputSetting " type="text" name="zonaGeografica" value="{{$peticion["zonaGeografica"]}}" readonly></td>
            <td id="foto"> <input class="inputSetting " type="text" name="foto" value="{{$peticion["foto"]}}" readonly></td>
            <td id="fecha"> <input class="inputSetting " type="text" name="fecha" value="{{$peticion["fecha"]}}" readonly></td>
            <td id="mensaje"> <input class="inputSetting " type="text" name="mensaje" value="{{$peticion["mensaje"]}}" readonly></td>
            <td id="enlace"> <input class="inputSetting " type="text" name="enlace" value="{{$peticion["enlace"]}}" readonly></td>
            <td>
                <!-- BOTONES DE LAS OPCIONES CORRESPONDIENTES -->
                <div class="commentsIcon">
                    <button type="submit" name="btnDeleteUser" class="btn btn-dark">
                      aceptar
                    </button>

                    <button type="button" name="btnEditUser" class="btn btn-dark">
                        denegar
                    </button>
                </div>
            </td>




        </tr>
        @endforeach

</div>
@stop
