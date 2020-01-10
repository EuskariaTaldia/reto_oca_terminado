@extends('layouts.master')

@section('content')

    <div class="modal" id="myModal" style="background-image:url('../resources/images/feminismo.jpg');" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Elige tu modo de juego</h5>
                </div>

                
                <form method="POST" action="{{url('/imprimirTablero')}}">
                    @csrf

                    <div class="modal-body">
                        <div class="row justify-content-center">     
                                                    
                            <div class="col-md-9">
                            
                                {{-- TIPO DE JUEGO --}}
                                <div class="input-group mb-3 mySelect">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Tipo de juego</label>
                                    </div>

                                    <div class="custom-select rbJugadores">
                                        <input type="radio" name="gameType" value="conPreguntas" checked> Con Preguntas<br>
                                        <input type="radio" name="gameType" value="sinPreguntas"> Sin Preguntas<br>
                                    </div>
                                </div>        
            
            
                                {{-- FILTRO --}}
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Filtro</label>
                                    </div>
            
                                    <select class="custom-select" required>
                                        <option selected>Elige la opción</option>
                                        {{-- Aqui deberia de ir un select a la base de datoss --}}
                                        <option value="1">Al azar</option>
                                        <option value="2">Campo</option>
                                        <option value="3">Geografico</option>
                                        <option value="4">Siglo</option>
                                    </select>
                                </div>        
            
            
                                {{-- ESPECIFICACION --}}
                                <div class="input-group mb-3" >
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Especificacion</label>
                                    </div>
            
                                    <select class="custom-select" required>
                                        <option selected>Elige la opción</option>
                                        {{-- Aqui deberia de ir un select que depende el anterior --}}
                                        <option value="1">Al azar</option>
                                        <option value="2">Campo</option>
                                        <option value="3">Geografico</option>
                                        <option value="4">Siglo</option>
                                    </select>
                                </div>     


                                {{-- JUGADORES --}}
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Jugadores</label>
                                    </div>
            
                                    <input type="number" class="custom-select inputJugadores" min="1" max="5" value="1" required>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Jugar</button>
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Borrar</button>  
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@endsection
