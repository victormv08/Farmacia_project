<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.plot.ly/plotly-2.14.0.min.js"></script>
    <link href="{{asset('style/style.css')}}" rel="stylesheet" >
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light shadow-sm border-bottom" style="border-color:#ABB2B9;" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Inicio<!--{{ config('app.name', 'Farmacia Eleven') }}-->
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    @if (Auth::check())
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('productos.index') }}">{{ __('Productos') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categoria.index') }}">{{ __('Categorias') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Nuevo Administrador') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('grafica')}}">{{ __('Gráfica') }}</a>
                        </li>
                    </ul>
                        
                    @endif
                    
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" href="{{ route('logout') }}" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}</a>
                                    <ul class="dropdown-menu">
                                        <li >
                                            <a id="navbarDropdown" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item" v-pre> 
                                                    {{ __('Salir') }}</a>
                                        </li>
                                    </ul>
                        

                                <div  aria-labelledby="navbarDropdown">

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="row">
            <div class="col-lg-">
                <div class="container" id="grafica">

                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container mt-4">
            <div class="row">
                <div class="col p-4">
                <a href="#">
                    <img src="https://previews.123rf.com/images/frender/frender1609/frender160901727/62766002-signo-de-interrogaci%C3%B3n-3d-aislado-en-el-fondo-blanco.jpg" alt="Acerca de nosotros" title="Acerca de nosotros" width="25" height="25"></a></li>
                </a>
                </div>
                <div class="col p-4">
                <a href="#">
                    <img src="https://es.seaicons.com/wp-content/uploads/2016/02/phone-icon.png" alt="Contacto" title="Contacto" height="25" width="25">
                </a>
                </div>
                <div class="col p-4">
                <a href="#">
                    <img src="{{URL::asset('imagenes/facebook.png')}}" alt="Facebook" title="Facebook" height="25" width="25" ></img>
                </a>
                </div>
                <div class="col p-4">
                <a href="#">
                    <img src="https://iconarchive.com/download/i97807/bokehlicia/pacifica/twitter.ico" alt="Twitter" title="Twitter" height="25" width="25" ></img>
                </a>
                </div>
                <div class="col p-4">
                <a href="#"> 
                    <img src="https://freepngimg.com/download/logo/69768-logo-computer-layout-instagram-icons-png-file-hd.png" alt="Instagram" title="Instagram" height="25" width="25" ></img>
                </a>
                </div>
            </div>
            <div class="row">
                <div class="col text-center mt-3">
                    <p style="color:white;">© 2021 Cuponera Digital. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="/js/consumirGraficaApi.js"></script>

</body>
