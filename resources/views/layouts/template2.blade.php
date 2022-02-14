<!DOCTYPE html>
<html lang="es">
<head>
    <title>Proyecto Fitness</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@100&family=Open+Sans:wght@300&family=Sora:wght@100&family=Ubuntu:wght@300&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet"/>
    <script src="{{ asset('js/nav.js') }}"></script>

</head>
<body>
    <div class="nav-movil">
        <div class="header">
            <p class="close-nav">X</p>
        </div>
        <ul>
            <li><a href="{{ url('/') }}">INICIO</a></li>
            <li><a href="{{ url('/Tienda') }}">TIENDA</a></li>
            <li><a href="{{ url('/Podcasts') }}">PODCASTS</a></li>
            <li><a href="{{ url('/Posts') }}">POSTS</a></li>
            <li><a href="{{ url('/Planes') }}">PLANES</a></li>
            <li><a href="{{ url('/Contacto') }}">CONTACTO</a></li>
        </ul>
    </div>
    <nav class="nav-principal">
            <div class="burger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <figure>
                <img src="{{ asset('images/logo/navbar-logo_110x50.png') }}" alt="logo de proyecto fitness"/>
            </figure>
            
               <ul class="nav-escritorio">
                    <li class="nav-item ">
                        <a class="nav-link {{ Request::is('Inicio') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('Tienda') ? 'active' : '' }}" aria-current="page" href="{{ url('/Tienda') }}">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('Podcasts') ? 'active' : '' }}" aria-current="page" href="{{ url('Podcasts')  }}">Podcasts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('Posts') ? 'active' : '' }}" aria-current="page" href="{{ url('/Posts')  }}">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('Planes') ? 'active' : '' }}" aria-current="page" href="{{ url('/Planes')  }}">Planes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('Contacto') ? 'active' : '' }}" aria-current="page" href="{{ url('/Contacto') }}">Contacto</a>
                    </li>
                </ul>
    </nav>


    @yield('content')

    <footer>
        <div>
            <img src="{{ asset('images/iconos/instagram.svg') }}" alt="">
            <img src="{{ asset('images/iconos/facebook.svg') }}" alt="">
            <img src="{{ asset('images/iconos/youtube.svg') }}" alt="">
        </div>
        <p>Copyright © 2022 proyectofitness. Todos los derechos reservados</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
