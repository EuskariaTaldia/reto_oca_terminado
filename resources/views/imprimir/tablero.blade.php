@extends('layouts.master')

@section('content')


  {{-- VALORES RECOGIDOS POR EL FORMULARIO --}}
    <input type="hidden" id="tipoJuego" name="tipoJuego" value="{{$gameType}}">
    <input type="hidden" id="especificacion" name="especificacion" value="{{$especificacion}}">
    <input type="hidden" id="jugador" name="jugador" value="{{$jugador}}">
  {{-- -------------------------------------------------------------------------------------------  --}}
  
  <script src="../resources/js/main.js"></script>


    {{-- MODAL PERDIDA DE TURNO --}}
  <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <h3 class="modal-title" id="lineModalLabel">My Modal</h3>
        </div>

        <div class="modal-body">
          <h2>Has perdido el turno</h2>
            <!-- content goes here -->
        </div>

        <div class="modal-footer">
          <div class="btn-group btn-group-justified" role="group" aria-label="group button">
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    {{-- LAYOUT --}}
    <div class="grid-layout">
      <div class="container sidecontenedor">
          <div class="fotoMujer"></div>
          <div class="textoMujer"></div>
        <p>This is some text.</p>
      </div>
      
      <div class="container tablero">            
          
        <h2 id="tiro" style="clear:left;"></h2>
        <h2 id="turno" style="clear:left;"></h2>
        
        <div class="tabla" id="tabla"></div>
        <nav class="fixed-bottom ">
          <div id="die1" class="dice"></div>
          <button onclick="onclikar()">Tira el Dado</button>
          <button onclick="valores(1,26)"> Dado trampa</button> 
        <nav>
      </div>
    </div>
@stop