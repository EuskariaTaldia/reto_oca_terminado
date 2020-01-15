<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <div class="logoDiv">
            <a class="navbar-brand" href="/ocaMujeres/public/home" style="color:#777">
                <object data="../resources/images/logo.svg" type="image/svg+xml" class="logo">
                    <img src="../resources/images/logo.png"/>
                </object> 
                
                <div class="logoTxt"> DESAYUNOS <br> FEMINISTAS </div>
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::is('home') ? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/home')}}">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span> Juego
                    </a>
                </li>
                
                <li class="nav-item dropdown  {{ Request::is('imprimir') && ! Request::is('imprimir/informacion')? 'active' : ''}}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Galeria
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/imprimirGaleria')}}">Informacion</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('/imprimirPreguntas')}}">Preguntas</a>
                    </div>
                  </li>

        

                {{-- Esto solo tiene que aparecer cuando esta logeado --}}
                @if(Auth::check())
                    <li class="nav-item {{  Request::is('peticion/crear') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/crearPeticion')}}">
                            <span>&#10010</span> Añadir mujer
                        </a>
                    </li>
                @endif

                {{-- Esto solo tiene que aparecer cuando esta logeado el ADMIN --}}
                @if(Auth::check() && Auth::user()->admin==1)
                    <li class="nav-item {{  Request::is('peticion/tabla') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/tablaPeticiones')}}"> Gestionar peticiones </a>
                    </li>
                @endif                

            </ul>

            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                    {{-- Comprobamos si el usuario esta iniciado --}}
                    @if(Auth::check())
                        <form action="{{ url('/logout') }}" method="POST" class="navForm">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link">
                                Cerrar sesión -> {{$usuario ?? ''}}
                            </button>
                        </form>
                        
                    @else        
                                    
                        <form action="{{ url('/login') }}" method="GET" class="navForm loginBtn">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link fa fa-user">
                                Iniciar sesión
                            </button>
                           
                        </form>                    

                    @endif

                </li>
            </ul>
        </div>
    </div>
</nav>
