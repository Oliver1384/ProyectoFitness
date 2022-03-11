<!DOCTYPE html>
<html lang="es">

<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto Fitness</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/favicon.png') }}" />
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('/images/favicon.png') }}" />

    <!-- BOOSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- BOOSTRAP JAVASCRIPT & JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@100&family=Open+Sans:wght@300&family=Sora:wght@100&family=Ubuntu:wght@300&display=swap" rel="stylesheet" />

    <!-- OWN RESOURCES -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}" />

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/nav.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>

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
            @if(auth()->user())
            <li><a href="{{ url('/admin') }}">ADMIN</a></li>
            @endif
        </ul>


    </div>



    <nav class="nav-principal">
        <div class="burger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <figure>
            <img src="{{ asset('images/logo/navbar-logo_110x50.png') }}" alt="logo de proyecto fitness" />
        </figure>

        <ul class="nav-escritorio">
            <li class="nav-item ">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Inicio</a>
            </li>
            <!--<li class="nav-item">
                <a class="nav-link {{-- Request::is('Tienda')?'active':'' --}}" aria-current="page" href="{{ url('/Tienda') }}">Tienda</a>
            </li>-->
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


            @if(@Auth::user())
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" id="logout" href="{{ url('/admin') }}">
                                Admin
                            </a>
                            <a class="dropdown-item" id="logout" href="{{ url('/admin/planes') }}">
                                planes
                            </a>
                            <a class="dropdown-item" id="logout" href="{{ url('/admin/posts') }}">
                                posts
                            </a>
                            <a class="dropdown-item" id="logout" href="{{ url('/admin/podcasts') }}">
                                podcasts
                            </a>
                            <a class="dropdown-item" id="logout" href="{{ url('/admin/contacto') }}">
                                contacto
                            </a>
                            <a class="dropdown-item" id="logout" href="{{ url('/admin/usuarios') }}">
                                usuarios
                            </a>
                            <a class="dropdown-item" id="logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                    @endif

        </ul>

    </nav>

    @yield('content')
    <footer class="footer-movil">
        <div>
            <a href="https://www.instagram.com" target="_blank">
                <img src="{{ asset('images/footer/instagram_movil.svg') }}" alt="Instagram" />
            </a>
            <a href="https://www.facebook.com" target="_blank">
                <img src="{{ asset('images/footer/facebook_movil.svg') }}" alt="Facebook" />
            </a>
            <a href="https://www.youtube.com" target="_blank">
                <img src="{{ asset('images/footer/youtube_movil.svg') }}" alt="Youtube" />
            </a>
        </div>
        <p>Copyright © 2022 proyectofitness. Todos los derechos reservados</p>
    </footer>
    <footer class="footer-escritorio">
        <figure class="imagenFooter">
        </figure>
        <div class="contenido-footer">
            <div class="iconosEscritorio">
                <a href="https://www.instagram.com" target="_blank">
                    <img src="{{ asset('images/footer/instagram.svg') }}" alt="Instagram" />
                </a>
                <a href="https://www.facebook.com" target="_blank">
                    <img src="{{ asset('images/footer/facebook.svg') }}" alt="Facebook" />
                </a>
                <a href="https://www.youtube.com" target="_blank">
                    <img src="{{ asset('images/footer/youtube.svg') }}" alt="Youtube" />
                </a>
            </div>
            <div class="enlacesFooterEscritorio">

                <section class="footer-izquierdo">
                    <div>
                        <b>Artículos</b>
                        <p>Artículos destacados</p>
                        <p>Ver nuestro artículos</p>

                    </div>

                </section>
                <section class="footer-derecho">
                    <div>
                        <b>Podcast</b>
                        <p>Escuchar nuestro podcast</p>

                    </div>

                </section>
                <section class="footer-izquierdo">

                    <div>
                        <b>Programas</b>
                        <p>Nuestros programas destacados</p>
                        <p>¡Personaliza tu programa!</p>

                    </div>
                </section>
                <section class="footer-derecho">

                    <div>
                        <b>Contacto</b>
                        <p>Nuestra ubicación</p>

                    </div>
                </section>

            </div>
            <p class="copyright">Copyright © 2022 proyectofitness. Todos los derechos reservados</p>

        </div>

    </footer>
</body>

</html>
