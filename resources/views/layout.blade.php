<!DOCTYPE html>
<html>

<head>
    <title>Proyecto Fitness</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@100&family=Open+Sans:wght@300&family=Sora:wght@100&family=Ubuntu:wght@300&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-main-black">
        <div class="container-fluid">
          <a class="navbar-brand logo-name">
              <img src="images/logo/navbar-logo_110x50.png" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('Tienda') ? 'active' : '' }}" aria-current="page" href="/Tienda">Tienda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('Podcasts') ? 'active' : '' }}" aria-current="page" href="/Podcasts">Podcasts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('Posts') ? 'active' : '' }}" aria-current="page" href="/Posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('Planes') ? 'active' : '' }}" aria-current="page" href="/Planes">Planes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('Contacto') ? 'active' : '' }}" aria-current="page" href="/Contacto">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--/.Navbar-->
    
    <!--Contenido-->
    @yield('content')
    <!--/.Contenido-->

    
    <!--Footer-->
    
    <!--/.Footer-->

    <!--JavaScript-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--/.JavaScript-->
</body>

</html>
