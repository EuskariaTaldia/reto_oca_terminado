@extends('layouts.master')

@section('content')

    <div class="modal backgroundImg" id="myModal" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ELIGE TU MODO DE JUEGO</h5>
                </div>
                
                <input type="hidden" id="arrayAreas" name="arrayAreas" value="{{$arrayAreas}}">
                <input type="hidden" id="arrayZonas" name="arrayZonas" value="{{$arrayZonas}}">

                <form method="POST" action="{{url('/imprimirTablero')}}" class="myForm" id="PostJugar">
                    @csrf

                    <div class="modal-body">
                        <div class="row justify-content-center">

                            <div class="col-md-15">

                                {{-- TIPO DE JUEGO --}}
                                <div class="input-group mb-3 mySelect">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Tipo de juego</label>
                                    </div>

                                    <div class="custom-select rbJugadores">
                                        <input type="radio" name="gameType" value="conPreguntas" id="conPreguntas" checked> Con Preguntas<br>
                                        <input type="radio" name="gameType" value="sinPreguntas" id="sinPreguntas"> Sin Preguntas<br>
                                    </div>
                                </div>


                                {{-- FILTRO --}}
                                <div class="input-group mb-3" id="filtrado" style="display:none;">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Filtro</label>
                                    </div>
                                    
                                    <select class="custom-select" name="filtro" id="filtradoSelect">
                                        {{-- Aqui deberia de ir un select a la base de datoss --}}
                                        <option value="azar" selected>Al azar</option>
                                        <option value="campo">Campo</option>
                                        <option value="zona">Geografico</option>
                                    </select>
                                </div>


                                {{-- ESPECIFICACION --}}
                                <div class="input-group mb-3" id="especificacion" style="display:none;">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Especificacion</label>
                                    </div>

                                    <select class="custom-select" name="especificacionSelect" id="especificacionSelect">

                                        {{-- Aqui deberia de ir un select que depende el anterior --}}
                                        <option value="" style="visibility:hidden"></option>

                                    </select> 
                                </div>


                                {{-- JUGADORES --}}
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Jugadores</label>
                                    </div>
                
                                    <input type="number" class="custom-select inputJugadores" min="1" max="5" value="1" name="jugador" required>
                                </div>
                            </div>
                        </div>

                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Borrar</button>
                        <button type="submit" class="btn btn-dark">Jugar</button>    
                    </div>

                </div>
            </form>

        </div>
    </div>

@endsection
