<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Inicio<!--{{ config('app.name', 'Laravel') }}-->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->

                @if(Auth::check())

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

                </ul>
                @endif

                <!-- Right Side Of Navbar -->
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
                            <a id="navbarDropdown" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}<span class="caret"> |</span> 
                                    
                                    {{ __('Salir') }}
                                </a>
                    

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

    <!-- Mostrar cada uno de los productos mediante Cards de Bootstrap -->
    <div class="container">
        <div class="row">
            @foreach ($productosPublic as $productosPublic)
            <div class="col-md-4">
                <div class="card" style="width: 18rem; border-color:#FFA07A;">
                    <img src="https://cdn-icons-png.flaticon.com/512/1312/1312307.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $productosPublic->nombre_producto }}</h5>
                        <p class="card-text"><span>Cantidad: </span>{{ $productosPublic->cantidad_producto }}</p>
                        <p class="card-text"><span>Precio: </span>{{ $productosPublic->precio_producto }}</p>
                        <p class="card-text"><span>Categoria: </span>{{ $productosPublic->categorium->nombre_categoria }}</p>
                        <p class="card-text"><span>Deipcion: </span>{{ $productosPublic->descripcion_producto }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>