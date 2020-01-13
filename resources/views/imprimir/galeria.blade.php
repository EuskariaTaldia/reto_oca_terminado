@extends('layouts.master')

@section('content')

    <h2>Imprimir Galeria:<h2>
    {{-- FILTRADO --}}
    <div class="fondoFiltrado">
        <h2>Filtrado</h2>
        <div class="row">
            <div class="form-group col">
                <label for="estu">Estudios:</label>
                <select class="form-control " name=" " id="estu">
                    <option value="SinFiltro">Sin Filtro</option>
                    <option value="Historia">Historia</option>
                    <option value="Derecho">Derecho</option>
                    <option value="Antropologia">Antropología</option>
                    <option value="Geografia">Geografía</option>
                    <option value="Filosofia">Filosofía</option>
                    <option value="Psicologia">Psicología</option>
                    <option value="Economia">Economía</option>
                    <option value="Sociologia">Sociología</option>
                    <option value="Pedagogía">Pedagogía</option>
                </select>
            </div>

                <div class="form-group col">
                    <label for="geo">Geografico:</label>
                    <select class="form-control" id="geo">
                        <option value="SinFiltro">Sin Filtro</option>
                        <option value="Europa">Europa</option>
                        <option value="Norteamerica">Norteamérica</option>
                        <option value="AmericaLatina">América Latina</option>
                        <option value="Asia">Asia</option>
                        <option value="Oceania">Oceanía</option>
                        <option value="Africa">África</option>
                    </select>
                </div>
            
                <div class="form-group col align-self-end">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="
                            padding-right: 0px;
                            padding-bottom: 0px;
                            padding-top: 0px;
                            padding-left: 0px;
                            border-right-width: 0px;
                            border-top-width: 0px;
                            border-bottom-width: 0px;
                            border-left-width: 0px;">
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option value="anio" selected>Año</option>
                                    <option value="siglo">Siglo</option>
                                </select>
                            </span>
                        </div>
                        
                        <input id="de" type="text" class="form-control" placeholder="Desde">
                        <input id="a" type="text" class="form-control" placeholder="Hasta">
                    </div>
                </div>
            </div>

            <a href="{{ url('galeriaPregun')}}" class="btn btn-light" >Galeria Preguntas</a>
        </div>



        <div class="fondo">
        
        {{-- LEYENDA --}}
        <h6 style="display: flex;justify-content: center;align-items: center;color:white">Leyenda</h6>
        <div class="leyenda">
            <div class="row d-flex justify-content-center" style="margin-bottom: 20px;">
                <div class="cuadrado border-top border-left" style="background-color:#bf8000;">Historia</div>
                <div class="cuadrado border-top border-left" style="background-color:white;">Derecho</div>
                <div class="cuadrado border-top border-left" style="background-color:#ff8000;">Antropología</div>
                <div class="cuadrado border-top border-left" style="background-color:#e30400;">Geografía</div>
                <div class="cuadrado border-top border-left" style="background-color:#780053;color:white;">Filosofía</div>
                <div class="cuadrado border-top border-left" style="background-color: #004cb0;">Psicología</div>
                <div class="cuadrado border-top border-left" style="background-color:#ff6171;">Economía</div>
                <div class="cuadrado border-top border-left" style="background-color:#ffea00;">Sociología</div>
                <div class="cuadrado border-top border-left" style="background-color:#1aab00;">Pedagogía</div>
            </div>
        </div>
    


        {{-- INICIO DE CARTAS --}}
        <div class="row">
  
        @foreach ($arraymujeres as $mujer)
            
            <div class="col-3 columnas">
            
                @if($mujer["codArea"]=="1")
                    <div class="historia card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;">
                @elseif($mujer["codArea"]=="2")
                    <div class="derecho card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;">
                @elseif($mujer["codArea"]=="3")
                    <div class="antropologia card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;">
                @elseif($mujer["codArea"]=="4")
                    <div class="geografia card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;">
                @elseif($mujer["codArea"]=="5")
                    <div class="filosofia card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;">
                @elseif($mujer["codArea"]=="6")
                    <div class="psicologia card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;">
                @elseif($mujer["codArea"]=="7")
                    <div class="economia card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;">
                @elseif($mujer["codArea"]=="8")
                    <div class="sociologia card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;">
                @elseif($mujer["codArea"]=="9")
                    <div class="pedagogia card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;">
                @endif

                @if($mujer["fotografia"]==null)
                    <img class="card-img-top imagenMujer" src="https://image.flaticon.com/icons/png/512/23/23030.png" alt="Argazkia 1">
                @else
                    <img class="card-img-top imagenMujer" src="{{$mujer["fotografia"]}}" alt="Argazkia 1">
                @endif
                
                
                
                <div class="card-body">
                    <h5 class=" 
                        @if($mujer["codArea"]=="2" || $mujer["codArea"]=="8") colorLetra

                        @endif card-title">{{$mujer["nombre"]}}</h5>


                    <h6 class="
                        @if($mujer["codArea"]=="2" || $mujer["codArea"]=="8") colorLetra

                        @endif ">Año/Siglo: {{$mujer["fechas"]}}</h6>


                    <h6 class="
                        @if($mujer["codArea"]=="2" || $mujer["codArea"]=="8") colorLetra

                        @endif ">Zona: {{$mujer["zona"]}}</h6>


                    <h6 class="
                        @if($mujer["codArea"]=="2" || $mujer["codArea"]=="8") colorLetra
                    
                        @endif ">Estudios: {{$mujer["subarea"]}}</h6>
                        
                    <a class="btn btn-secondary" href="{{$mujer["enlace"]}}">Fuente</a>
                    <a href="{{ url('imprimirInformacion/'.$mujer["codMujer"]) }}" class="btn btn-dark " role="button" aria-pressed="true">Información</a>

                </div>
            </div>
            </div>
            @endforeach
                 
           
        </div>
    </div>

@stop