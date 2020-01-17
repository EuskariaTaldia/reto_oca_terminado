@extends('layouts.master')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Peticiones</li>
        </ol>
    </nav>

    {{-- TABLA NUEVA

    <div class="table-responsive" id="sailorTableArea">
        <table id="sailorTable" class="table table-striped table-bordered" width="100%">
    
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fechas</th>
                    <th>Area</th>
                    <th>Subarea</th>
                    <th>Zona Geografica</th>
                    <th>País</th>
                    <th>Foto</th>
                    <th>URL</th>
                    <th>Información</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td>Tiger</td>
                    <td>Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>5421</td>
                    <td>t.nixon@datatables.net</td>
                </tr>
                
                <tr>
                    @foreach ($arrayPeticiones as $peticion)
                        <td>Donna</td>
                        <td>Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                        <td>4226</td>
                        <td>d.snider@ datatables.net</td>
                    </tr>

                    @endforeach

            </tbody>
        </table>
    </div>
--}}


    <div class="table-responsive" id="sailorTableArea">
        <table id="sailorTable" class="table table-striped table-bordered settingsTable" width="100%">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Fechas</th>
                    <th>Area</th>
                    <th>Subarea</th>
                    <th>Localidad</th>
                    <th>País</th>
                    <th>Foto</th>
                    <th>URL</th>
                    <th>Información</th>
                    <th>Opciones</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    @foreach ($arrayPeticiones as $peticion)
                        <td id="codUsu"> <input class="inputSetting" type="text" id="codUsu" name="usuario" value="{{$peticion["codUsu"]}}" readonly></td>
                        <td id="nombreMujer"> <input class="inputSetting {{$peticion["nombreMujer"]}}" type="text" id="nombreMujer" name="nombreMujer" value="{{$peticion["nombreMujer"]}}" readonly></td>
                        <td id="fechas"> <input class="inputSetting {{$peticion["nombreMujer"]}}" type="text" name="fechas" value="{{$peticion["fechas"]}}" readonly></td>
                        <td id="codArea"> <input class="inputSetting {{$peticion["nombreMujer"]}}" type="text" name="codArea" value="{{$peticion["codArea"]}}" readonly></td>
                        <td id="subArea"> <input class="inputSetting {{$peticion["nombreMujer"]}}" type="text" name="subArea" value="{{$peticion["subArea"]}}" readonly></td>
                        <td id="zonaGeografica"> <input class="inputSetting {{$peticion["nombreMujer"]}}" type="text" name="zona" value="{{$peticion["codZona"]}}" readonly></td>
                        <td id="pais"> <input class="inputSetting {{$peticion["nombreMujer"]}}" type="text" name="pais" value="{{$peticion["zona"]}}" readonly></td>
                        <td id="foto"> <input class="inputSetting {{$peticion["nombreMujer"]}}" type="text" name="foto" value="{{$peticion["fotografia"]}}" readonly></td>
                        <td id="enlace"> <input class="inputSetting {{$peticion["nombreMujer"]}}" type="text" name="enlace" value="{{$peticion["enlace"]}}" readonly></td>
                        <td id="datos"> <input class="inputSetting {{$peticion["nombreMujer"]}}" type="text" name="datos" value="{{$peticion["datos"]}}" readonly></td>
                        <td>
                            <!-- BOTONES DE LAS OPCIONES CORRESPONDIENTES -->
                            <div class="commentsIcon">
                                <button type="submit" name="btnDeleteUser" class="{{$peticion["nombreMujer"]}}">
                                    <i class="fa fa-lg fa-trash-o"></i>
                                </button>

                                <button type="button" name="btnEditUser" href="#confirmModal" data-toggle="modal">
                                    <i class="fa fa-lg fa-edit iconEditUser"></i>
                                </button>
                            </div>                            
                        </td>
                </tr>
                    @endforeach
            </tbody>

        </table>

    {{-- MODAL CONFIRMACION BORRAR

    <div class="modal small hide fade confirmModal" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="confirmModalLabel">Delete Confirmation</h3>
        </div>

        <div class="modal-body">
            <p class="error-text">Are you sure you want to delete the user?</p>
        </div>

        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button class="btn btn-danger" data-dismiss="modal">Delete</button>
        </div>
    </div> --}}


@stop
