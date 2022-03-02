<!DOCTYPE html>
<html lang="es">
<head>
<<<<<<< HEAD
    <title>Proyecto Fitness</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>

    <!-- BOOSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@100&family=Open+Sans:wght@300&family=Sora:wght@100&family=Ubuntu:wght@300&display=swap" rel="stylesheet"/>

    <!-- BOOSTRAP JAVASCRIPT & JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- OWN RESOURCES -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/nav.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
=======
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Fitness</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@100&family=Open+Sans:wght@300&family=Sora:wght@100&family=Ubuntu:wght@300&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet"/>
    <script src="{{ asset('js/nav.js') }}"></script>

>>>>>>> 69331267338f65d59e38b3ab9ce1b1f191ef4363

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
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Inicio</a>
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

    <footer class="footer-movil">
        <div>
        <a href="https://www.instagram.com" target="_blank">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                    <g class="instagram" transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#FFB20F" stroke="none">
                        <path d="M1965 5113 c-633 -29 -1076 -69 -1213 -109 -251 -73 -458 -245 -576
                        -481 -58 -117 -83 -220 -105 -445 -52 -512 -71 -922 -71 -1518 0 -593 18 -991
                        70 -1516 28 -284 71 -419 185 -579 49 -68 159 -177 225 -222 74 -50 184 -101
                        272 -127 107 -31 404 -62 923 -97 252 -17 1223 -23 1526 -10 545 24 1034 69
                        1165 107 309 89 549 329 638 638 27 91 55 334 81 701 27 382 35 635 35 1105 0
                        596 -19 1006 -71 1518 -27 275 -69 410 -172 562 -113 166 -308 306 -511 364
                        -126 37 -607 82 -1131 106 -192 9 -1104 11 -1270 3z m1375 -983 c157 -11 251
                        -34 365 -91 211 -105 367 -302 425 -539 25 -102 39 -421 39 -920 0 -514 -14
                        -860 -38 -952 -70 -270 -220 -455 -454 -563 -138 -64 -207 -75 -552 -86 -341
                        -12 -1191 -5 -1373 11 -132 12 -268 52 -356 105 -32 19 -62 35 -66 35 -5 0
                        -48 39 -97 88 -133 131 -210 280 -244 467 -39 217 -41 253 -37 935 4 571 7
                        677 21 750 84 423 311 673 677 747 148 29 1304 38 1690 13z"/>
                        <path d="M1793 3850 c-270 -30 -444 -175 -516 -429 -21 -75 -21 -88 -22 -846
                        0 -698 2 -777 18 -850 40 -179 138 -310 290 -385 154 -75 145 -75 1007 -75
                        862 0 842 -1 998 76 151 74 247 200 289 376 17 72 18 138 18 843 0 705 -1 771
                        -18 843 -52 222 -193 368 -414 429 -77 21 -92 22 -828 24 -412 1 -783 -2 -822
                        -6z m1739 -270 c109 -74 118 -229 18 -313 -105 -89 -274 -32 -310 104 -23 84
                        24 183 104 220 56 27 141 22 188 -11z m-772 -226 c375 -96 638 -450 616 -829
                        -13 -231 -96 -408 -266 -569 -172 -161 -426 -241 -658 -207 -320 47 -571 256
                        -673 561 -72 216 -42 476 78 673 47 78 161 198 237 250 86 58 198 107 296 128
                        102 23 268 19 370 -7z"/>
                        <path d="M2455 3088 c-83 -15 -185 -71 -264 -144 -225 -208 -225 -556 0 -769
                        82 -77 160 -118 270 -141 352 -74 685 244 631 604 -46 301 -337 507 -637 450z"/>
                    </g>
                </svg>

            </a>
            <a href="https://www.facebook.com" target="_blank">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#FFB20F" stroke="none">
                        <path d="M2185 5109 c-474 -10 -1165 -59 -1349 -95 -339 -66 -626 -332 -715
                        -664 -33 -120 -77 -612 -101 -1110 -14 -289 -14 -1071 0 -1355 25 -514 68
                        -994 101 -1115 66 -247 252 -472 484 -585 127 -62 212 -82 435 -105 844 -85
                        1763 -97 2640 -34 335 24 588 52 670 74 250 69 470 252 585 485 61 124 81 209
                        104 435 85 826 97 1759 36 2630 -24 330 -53 597 -76 680 -82 305 -345 568
                        -649 649 -155 42 -822 96 -1309 106 -135 3 -309 7 -386 8 -77 2 -288 0 -470
                        -4z m1233 -1161 l2 -288 -197 0 c-109 0 -214 -5 -234 -10 -19 -5 -48 -24 -65
                        -41 l-29 -30 -3 -175 -3 -174 267 0 267 0 -7 -92 c-10 -128 -44 -504 -51 -555
                        l-6 -43 -250 0 -249 0 0 -845 0 -845 -340 0 -340 0 0 845 0 845 -167 2 -168 3
                        -3 343 -2 342 163 0 164 0 6 218 c4 178 9 231 27 297 58 216 194 376 379 446
                        117 44 159 48 506 46 l330 -2 3 -287z"/>
                    </g>
                </svg>
            </a>
            <a href="https://www.youtube.com" target="_blank">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#FFB20F" stroke="none">
                        <path d="M2195 5114 c-604 -18 -1281 -72 -1432 -115 -311 -87 -557 -334 -644
                        -644 -30 -109 -72 -549 -100 -1065 -16 -277 -16 -1184 -1 -1455 31 -534 71
                        -961 101 -1070 92 -331 373 -593 704 -660 124 -25 537 -61 982 -87 283 -16
                        1233 -16 1510 0 458 27 872 63 987 88 352 73 644 369 712 720 26 132 62 544
                        88 994 16 279 15 1159 -1 1460 -25 476 -68 953 -96 1059 -72 279 -287 523
                        -555 630 -126 50 -282 72 -750 106 -441 32 -1141 50 -1505 39z m79 -1725 c160
                        -84 361 -188 446 -232 85 -45 241 -126 346 -181 105 -56 295 -155 422 -221
                        127 -66 232 -122 232 -125 0 -5 -176 -98 -505 -268 -99 -51 -263 -136 -365
                        -189 -200 -103 -354 -183 -661 -342 -108 -55 -202 -101 -208 -101 -8 0 -11
                        245 -11 905 0 498 3 905 7 905 3 0 137 -68 297 -151z"/>
                    </g>
                </svg>
            </a>
        </div>
        <p>Copyright © 2022 proyectofitness. Todos los derechos reservados</p>
    </footer>
    <!--
    <footer class="footer-escritorio">
        <div class="iconosEscritorio">
            <a href="https://www.instagram.com" target="_blank">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                    <g class="instagram" transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#FFB20F" stroke="none">
                        <path d="M1965 5113 c-633 -29 -1076 -69 -1213 -109 -251 -73 -458 -245 -576
                        -481 -58 -117 -83 -220 -105 -445 -52 -512 -71 -922 -71 -1518 0 -593 18 -991
                        70 -1516 28 -284 71 -419 185 -579 49 -68 159 -177 225 -222 74 -50 184 -101
                        272 -127 107 -31 404 -62 923 -97 252 -17 1223 -23 1526 -10 545 24 1034 69
                        1165 107 309 89 549 329 638 638 27 91 55 334 81 701 27 382 35 635 35 1105 0
                        596 -19 1006 -71 1518 -27 275 -69 410 -172 562 -113 166 -308 306 -511 364
                        -126 37 -607 82 -1131 106 -192 9 -1104 11 -1270 3z m1375 -983 c157 -11 251
                        -34 365 -91 211 -105 367 -302 425 -539 25 -102 39 -421 39 -920 0 -514 -14
                        -860 -38 -952 -70 -270 -220 -455 -454 -563 -138 -64 -207 -75 -552 -86 -341
                        -12 -1191 -5 -1373 11 -132 12 -268 52 -356 105 -32 19 -62 35 -66 35 -5 0
                        -48 39 -97 88 -133 131 -210 280 -244 467 -39 217 -41 253 -37 935 4 571 7
                        677 21 750 84 423 311 673 677 747 148 29 1304 38 1690 13z"/>
                        <path d="M1793 3850 c-270 -30 -444 -175 -516 -429 -21 -75 -21 -88 -22 -846
                        0 -698 2 -777 18 -850 40 -179 138 -310 290 -385 154 -75 145 -75 1007 -75
                        862 0 842 -1 998 76 151 74 247 200 289 376 17 72 18 138 18 843 0 705 -1 771
                        -18 843 -52 222 -193 368 -414 429 -77 21 -92 22 -828 24 -412 1 -783 -2 -822
                        -6z m1739 -270 c109 -74 118 -229 18 -313 -105 -89 -274 -32 -310 104 -23 84
                        24 183 104 220 56 27 141 22 188 -11z m-772 -226 c375 -96 638 -450 616 -829
                        -13 -231 -96 -408 -266 -569 -172 -161 -426 -241 -658 -207 -320 47 -571 256
                        -673 561 -72 216 -42 476 78 673 47 78 161 198 237 250 86 58 198 107 296 128
                        102 23 268 19 370 -7z"/>
                        <path d="M2455 3088 c-83 -15 -185 -71 -264 -144 -225 -208 -225 -556 0 -769
                        82 -77 160 -118 270 -141 352 -74 685 244 631 604 -46 301 -337 507 -637 450z"/>
                    </g>
                </svg>

            </a>
            <a href="https://www.facebook.com" target="_blank">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#FFB20F" stroke="none">
                        <path d="M2185 5109 c-474 -10 -1165 -59 -1349 -95 -339 -66 -626 -332 -715
                        -664 -33 -120 -77 -612 -101 -1110 -14 -289 -14 -1071 0 -1355 25 -514 68
                        -994 101 -1115 66 -247 252 -472 484 -585 127 -62 212 -82 435 -105 844 -85
                        1763 -97 2640 -34 335 24 588 52 670 74 250 69 470 252 585 485 61 124 81 209
                        104 435 85 826 97 1759 36 2630 -24 330 -53 597 -76 680 -82 305 -345 568
                        -649 649 -155 42 -822 96 -1309 106 -135 3 -309 7 -386 8 -77 2 -288 0 -470
                        -4z m1233 -1161 l2 -288 -197 0 c-109 0 -214 -5 -234 -10 -19 -5 -48 -24 -65
                        -41 l-29 -30 -3 -175 -3 -174 267 0 267 0 -7 -92 c-10 -128 -44 -504 -51 -555
                        l-6 -43 -250 0 -249 0 0 -845 0 -845 -340 0 -340 0 0 845 0 845 -167 2 -168 3
                        -3 343 -2 342 163 0 164 0 6 218 c4 178 9 231 27 297 58 216 194 376 379 446
                        117 44 159 48 506 46 l330 -2 3 -287z"/>
                    </g>
                </svg>
            </a>
            <a href="https://www.youtube.com" target="_blank">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#FFB20F" stroke="none">
                        <path d="M2195 5114 c-604 -18 -1281 -72 -1432 -115 -311 -87 -557 -334 -644
                        -644 -30 -109 -72 -549 -100 -1065 -16 -277 -16 -1184 -1 -1455 31 -534 71
                        -961 101 -1070 92 -331 373 -593 704 -660 124 -25 537 -61 982 -87 283 -16
                        1233 -16 1510 0 458 27 872 63 987 88 352 73 644 369 712 720 26 132 62 544
                        88 994 16 279 15 1159 -1 1460 -25 476 -68 953 -96 1059 -72 279 -287 523
                        -555 630 -126 50 -282 72 -750 106 -441 32 -1141 50 -1505 39z m79 -1725 c160
                        -84 361 -188 446 -232 85 -45 241 -126 346 -181 105 -56 295 -155 422 -221
                        127 -66 232 -122 232 -125 0 -5 -176 -98 -505 -268 -99 -51 -263 -136 -365
                        -189 -200 -103 -354 -183 -661 -342 -108 -55 -202 -101 -208 -101 -8 0 -11
                        245 -11 905 0 498 3 905 7 905 3 0 137 -68 297 -151z"/>
                    </g>
                </svg>
            </a>

        </div>
        <div class="enlacesFooterEscritorio">
            <div class="imagenFooter"></div>
            <div>
                <div>
                    <b>Artículos</b>
                    <p>Artículos destacados</p>
                    <p>Ver nuestro artículos</p>
                </div>
                <div>
                    <b>Podcast</b>
                    <p>Escuchar nuestro podcast</p>
                </div>
                <div>
                    <b>Programas</b>
                    <p>Nuestros programas destacados</p>
                    <p>¡Personaliza tu programa!</p>
                </div>
                <div>
                    <b>Contacto</b>
                    <p>Nuestra ubicación</p>
                </div>
                <p class="copyright">Copyright © 2022 proyectofitness. Todos los derechos reservados</p>
            </div>
        </div>
    </footer>
-->
<footer class="footer-escritorio">
        <figure class="imagenFooter">
        </figure>
        <div class="contenido-footer">
            <div class="iconosEscritorio">
                <a href="https://www.instagram.com" target="_blank">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                        <g class="instagram" transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#FFB20F" stroke="none">
                            <path d="M1965 5113 c-633 -29 -1076 -69 -1213 -109 -251 -73 -458 -245 -576
                            -481 -58 -117 -83 -220 -105 -445 -52 -512 -71 -922 -71 -1518 0 -593 18 -991
                            70 -1516 28 -284 71 -419 185 -579 49 -68 159 -177 225 -222 74 -50 184 -101
                            272 -127 107 -31 404 -62 923 -97 252 -17 1223 -23 1526 -10 545 24 1034 69
                            1165 107 309 89 549 329 638 638 27 91 55 334 81 701 27 382 35 635 35 1105 0
                            596 -19 1006 -71 1518 -27 275 -69 410 -172 562 -113 166 -308 306 -511 364
                            -126 37 -607 82 -1131 106 -192 9 -1104 11 -1270 3z m1375 -983 c157 -11 251
                            -34 365 -91 211 -105 367 -302 425 -539 25 -102 39 -421 39 -920 0 -514 -14
                            -860 -38 -952 -70 -270 -220 -455 -454 -563 -138 -64 -207 -75 -552 -86 -341
                            -12 -1191 -5 -1373 11 -132 12 -268 52 -356 105 -32 19 -62 35 -66 35 -5 0
                            -48 39 -97 88 -133 131 -210 280 -244 467 -39 217 -41 253 -37 935 4 571 7
                            677 21 750 84 423 311 673 677 747 148 29 1304 38 1690 13z"/>
                            <path d="M1793 3850 c-270 -30 -444 -175 -516 -429 -21 -75 -21 -88 -22 -846
                            0 -698 2 -777 18 -850 40 -179 138 -310 290 -385 154 -75 145 -75 1007 -75
                            862 0 842 -1 998 76 151 74 247 200 289 376 17 72 18 138 18 843 0 705 -1 771
                            -18 843 -52 222 -193 368 -414 429 -77 21 -92 22 -828 24 -412 1 -783 -2 -822
                            -6z m1739 -270 c109 -74 118 -229 18 -313 -105 -89 -274 -32 -310 104 -23 84
                            24 183 104 220 56 27 141 22 188 -11z m-772 -226 c375 -96 638 -450 616 -829
                            -13 -231 -96 -408 -266 -569 -172 -161 -426 -241 -658 -207 -320 47 -571 256
                            -673 561 -72 216 -42 476 78 673 47 78 161 198 237 250 86 58 198 107 296 128
                            102 23 268 19 370 -7z"/>
                            <path d="M2455 3088 c-83 -15 -185 -71 -264 -144 -225 -208 -225 -556 0 -769
                            82 -77 160 -118 270 -141 352 -74 685 244 631 604 -46 301 -337 507 -637 450z"/>
                        </g>
                    </svg>

                </a>
                <a href="https://www.facebook.com" target="_blank">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#FFB20F" stroke="none">
                            <path d="M2185 5109 c-474 -10 -1165 -59 -1349 -95 -339 -66 -626 -332 -715
                            -664 -33 -120 -77 -612 -101 -1110 -14 -289 -14 -1071 0 -1355 25 -514 68
                            -994 101 -1115 66 -247 252 -472 484 -585 127 -62 212 -82 435 -105 844 -85
                            1763 -97 2640 -34 335 24 588 52 670 74 250 69 470 252 585 485 61 124 81 209
                            104 435 85 826 97 1759 36 2630 -24 330 -53 597 -76 680 -82 305 -345 568
                            -649 649 -155 42 -822 96 -1309 106 -135 3 -309 7 -386 8 -77 2 -288 0 -470
                            -4z m1233 -1161 l2 -288 -197 0 c-109 0 -214 -5 -234 -10 -19 -5 -48 -24 -65
                            -41 l-29 -30 -3 -175 -3 -174 267 0 267 0 -7 -92 c-10 -128 -44 -504 -51 -555
                            l-6 -43 -250 0 -249 0 0 -845 0 -845 -340 0 -340 0 0 845 0 845 -167 2 -168 3
                            -3 343 -2 342 163 0 164 0 6 218 c4 178 9 231 27 297 58 216 194 376 379 446
                            117 44 159 48 506 46 l330 -2 3 -287z"/>
                        </g>
                    </svg>
                </a>
                <a href="https://www.youtube.com" target="_blank">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#FFB20F" stroke="none">
                            <path d="M2195 5114 c-604 -18 -1281 -72 -1432 -115 -311 -87 -557 -334 -644
                            -644 -30 -109 -72 -549 -100 -1065 -16 -277 -16 -1184 -1 -1455 31 -534 71
                            -961 101 -1070 92 -331 373 -593 704 -660 124 -25 537 -61 982 -87 283 -16
                            1233 -16 1510 0 458 27 872 63 987 88 352 73 644 369 712 720 26 132 62 544
                            88 994 16 279 15 1159 -1 1460 -25 476 -68 953 -96 1059 -72 279 -287 523
                            -555 630 -126 50 -282 72 -750 106 -441 32 -1141 50 -1505 39z m79 -1725 c160
                            -84 361 -188 446 -232 85 -45 241 -126 346 -181 105 -56 295 -155 422 -221
                            127 -66 232 -122 232 -125 0 -5 -176 -98 -505 -268 -99 -51 -263 -136 -365
                            -189 -200 -103 -354 -183 -661 -342 -108 -55 -202 -101 -208 -101 -8 0 -11
                            245 -11 905 0 498 3 905 7 905 3 0 137 -68 297 -151z"/>
                        </g>
                    </svg>
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
<<<<<<< HEAD
=======
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
>>>>>>> 69331267338f65d59e38b3ab9ce1b1f191ef4363
</body>
</html>
