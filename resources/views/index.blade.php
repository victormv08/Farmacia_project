<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Farmacia Eleven</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        <link href="{{asset('style/style.css')}}" rel="stylesheet" >

        <style>
            body {
                font-family: 'Nunito';
            }
            .carousel-control .icon-prev, .carousel-control .icon-next {
                font-size: 100px; 
                margin-top: -50px;
                color: #fff;
            }

        </style>
    </head>
    <body class="antialiased" id="body">
        <header>
            <nav class="navbar navbar-expand-lg bg-light shadow-sm border-bottom" style="border-color:#ABB2B9;" id="navbar">
                <div class="container">
                    <a class="navbar-brand" href="">Inicio
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
                                <a class="nav-link" href="{{ route('grafica')}}">{{ __('Gr??fica') }}</a>
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
            <section class="layout_padding mx-3" id="carousel_contener">
                
                    <div class="row">
                        <div class="col-12">
                            @if (Auth::check())
                                <h3 class="ms-3">Bienvenido {{ Auth::user()->name }}</h3>
                            @endif
                            <div id="carouselIndicators" class="carousel slide" data-bs-ride="true">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{URL::asset('imagenes/c3.jpg')}}" class="d-block w-100" alt="Imagen1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{URL::asset('imagenes/c5.jpg')}}" class="d-block w-100" alt="Imagen2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{URL::asset('imagenes/c6.jpg')}}" class="d-block w-100" alt="Imagen3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev justify-content-start" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden" style="color:black;">Previous</span>
                                </button>
                                <button class="carousel-control-next justify-content-end" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                    </div>
              
            </section>
            <div class="container text-center mt-5">
                <h3>Categor??as</h3>
                <div class="row mt-3">
                    <!-- Mostrar mensaje de bienvenida si se ha autenticado, si no, no mostrar nada-->
                    <div class="col">
                        <div class="card" style="width: 18rem; border-color:#FFA07A;">
                            <img src="https://www.bancopopular.com.co/popular/minisites/landing-cuponera-digital/img/salud-belleza.png" class="card-img-top" alt="Salud y Belleza">
                            <div class="card-body">
                                <h5 class="card-title">Salud y Belleza</h5>
                                <p class="card-text">Encuentra todo lo referente a la salud y la belleza.</p>
                                <a href="{{ route('productoPublic.show', 11) }}" class="btn btn" style="background-color:#FFA07A;">Ir a salud y belleza</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">        
                        <div class="card" style="width: 18rem; border-color:#FFA07A;">
                            <img src="https://static.vecteezy.com/system/resources/previews/002/895/071/non_2x/brushing-teeth-rgb-color-icon-toothpaste-and-paste-in-bathroom-towel-for-personal-cleanliness-and-hygiene-isolated-illustration-everyday-bath-routine-simple-filled-line-drawing-vector.jpg" class="card-img-top" alt="Aseo Personal">
                            <div class="card-body">
                                <h5 class="card-title">Aseo Personal</h5>
                                <p class="card-text">Encuentra todo lo referente al Aseo Personal.</p>
                                <a href="{{ route('productoPublic.show', 12) }}" class="btn btn" style="background-color:#FFA07A;">Ir a Aseo Personal</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem; border-color:#FFA07A;">
                            <img src="https://cdn-icons-png.flaticon.com/512/706/706200.png" class="card-img-top" alt="Medicamentos">
                            <div class="card-body">
                                <h5 class="card-title">Medicamentos</h5>
                                <p class="card-text">Encuentra todo lo referente a los Medicamentos</p>
                                <a href="{{ route('productoPublic.show', 10) }}" class="btn btn" style="background-color:#FFA07A;">Ir a Medicamentos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center mt-5">
                <h3>Algunos de nuestros productos</h3>
                <div class="row mt-3">
                    <div class="visually-hidden"> {{$count = 1;}}</div> 
                    @foreach ($productosPublic as $productosPublic) @break($count == 3)
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem; border-color:#76D7C4;">
                                <div class="card-body">
                                    <h5 class="card-title">{{$count++;}}. {{ $productosPublic->nombre_producto }}</h5>
                                    <p class="card-text"><span>Cantidad: </span>{{ $productosPublic->cantidad_producto }}</p>
                                    <p class="card-text"><span>Precio: </span>{{ $productosPublic->precio_producto }}</p>
                                    <p class="card-text"><span>Categor??a: </span>{{ $productosPublic->categorium->nombre_categoria }}</p>
                                    <p class="card-text"><span>Descripci??n: </span>{{ $productosPublic->descripcion_producto }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach                    
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
                        <p style="color:white;">?? 2021 Cuponera Digital. Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>