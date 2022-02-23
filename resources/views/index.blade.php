@extends('layouts.template2')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/podcasts.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">

<div class="col-12">
    <div id="main-article" class="text-main-white bg-main-orange">
        <div class="article-effect" style="background:url('images/articles/Article_Main.png');"></div>
        <div class="article-content">
            <h1 class="article-title">
                <span class="text-black">Artículo</span> <span class="text-white">principal</span>
            </h1>
            <div class="article-button">
                <button class="btn btn-light">Leer más</button>
            </div>
        </div>
    </div>
</div>

<div class="podcastCategoria podcast-index">
    <h2>PODCAST <br><span>MÁS RECIENTE</span></h2>
    <div>
        <div class="podcast">
            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
            <div>
                <div>
                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                </div>
                <audio controls="controls">
                    <source src="#" type="audio/mpeg" />
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="podcast">
            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
            <div>
                <div>
                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                </div>
                <audio controls="controls">
                    <source src="#" type="audio/mpeg" />
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="podcast">
            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
            <div>
                <div>
                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                </div>
                <audio controls="controls">
                    <source src="#" type="audio/mpeg" />
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="podcast">
            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
            <div>
                <div>
                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                </div>
                <audio controls="controls">
                    <source src="#" type="audio/mpeg" />
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="podcast">
            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
            <div>
                <div>
                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                </div>
                <audio controls="controls">
                    <source src="#" type="audio/mpeg" />
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="podcast">
            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
            <div>
                <div>
                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                </div>
                <audio controls="controls">
                    <source src="#" type="audio/mpeg" />
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
    </div>
</div>
<div class="planes">
    <h2>PLANES<span> PERSONALIZADOS</span></h2>
</div>
<div class="productos">
    <h2>PRODUCTOS<span> ESTRELLA</span></h2>
</div>
<div class="entrenadores">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="entrenador">
            <article>
                <figure>
                    <img src="{{asset('images/provisional-desarrollo/avatar.png')}}" alt="">
                </figure>
                <div class="datos-entrenador">
                    <p class="entrenador-nombre">Luis Morote</p>
                    <p class="grado">Experto en dietética</p>
                    <div class="redes">
                        <a href="#">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#2A2B2A" stroke="none">
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
                        <a href="#">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#2A2B2A" stroke="none">
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
                        <a href="#">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 256 256">
                                <g fill="none">
                                    <path d="M0 18.338C0 8.216 8.474 0 18.92 0h218.16C247.53 0 256 8.216 256 18.338v219.327C256 247.79 247.53 256 237.08 256H18.92C8.475 256 0 247.791 0 237.668V18.335z" fill="#2A2B2A"/>
                                    <path d="M77.796 214.238V98.986H39.488v115.252H77.8zM58.65 83.253c13.356 0 21.671-8.85 21.671-19.91-.25-11.312-8.315-19.915-21.417-19.915-13.111 0-21.674 8.603-21.674 19.914 0 11.06 8.312 19.91 21.169 19.91h.248zM99 214.238h38.305v-64.355c0-3.44.25-6.889 1.262-9.346 2.768-6.885 9.071-14.012 19.656-14.012 13.858 0 19.405 10.568 19.405 26.063v61.65h38.304v-66.082c0-35.399-18.896-51.872-44.099-51.872-20.663 0-29.738 11.549-34.78 19.415h.255V98.99H99.002c.5 10.812-.003 115.252-.003 115.252z" fill="#fff"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <div class="carousel-item">
    <div class="entrenador">
            <article>
                <figure>
                    <img src="{{asset('images/provisional-desarrollo/avatar.png')}}" alt="">
                </figure>
                <div class="datos-entrenador">
                    <p class="entrenador-nombre">Pablo Déniz</p>
                    <p class="grado">Experto en dietética</p>
                    <div class="redes">
                        <a href="#">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#2A2B2A" stroke="none">
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
                        <a href="#">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#2A2B2A" stroke="none">
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
                        <a href="#">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 256 256">
                                <g fill="none">
                                    <path d="M0 18.338C0 8.216 8.474 0 18.92 0h218.16C247.53 0 256 8.216 256 18.338v219.327C256 247.79 247.53 256 237.08 256H18.92C8.475 256 0 247.791 0 237.668V18.335z" fill="#2A2B2A"/>
                                    <path d="M77.796 214.238V98.986H39.488v115.252H77.8zM58.65 83.253c13.356 0 21.671-8.85 21.671-19.91-.25-11.312-8.315-19.915-21.417-19.915-13.111 0-21.674 8.603-21.674 19.914 0 11.06 8.312 19.91 21.169 19.91h.248zM99 214.238h38.305v-64.355c0-3.44.25-6.889 1.262-9.346 2.768-6.885 9.071-14.012 19.656-14.012 13.858 0 19.405 10.568 19.405 26.063v61.65h38.304v-66.082c0-35.399-18.896-51.872-44.099-51.872-20.663 0-29.738 11.549-34.78 19.415h.255V98.99H99.002c.5 10.812-.003 115.252-.003 115.252z" fill="#fff"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <div class="carousel-item">
        <div class="entrenador">
            <article>
                <figure>
                    <img src="{{asset('images/provisional-desarrollo/avatar.png')}}" alt="">
                </figure>
                <div class="datos-entrenador">
                    <p class="entrenador-nombre">Carlos Pérez</p>
                    <p class="grado">Experto en dietética</p>
                    <div class="redes">
                        <a href="#">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#2A2B2A" stroke="none">
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
                        <a href="#">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#2A2B2A" stroke="none">
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
                        <a href="#">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 256 256">
                                <g fill="none">
                                    <path d="M0 18.338C0 8.216 8.474 0 18.92 0h218.16C247.53 0 256 8.216 256 18.338v219.327C256 247.79 247.53 256 237.08 256H18.92C8.475 256 0 247.791 0 237.668V18.335z" fill="#2A2B2A"/>
                                    <path d="M77.796 214.238V98.986H39.488v115.252H77.8zM58.65 83.253c13.356 0 21.671-8.85 21.671-19.91-.25-11.312-8.315-19.915-21.417-19.915-13.111 0-21.674 8.603-21.674 19.914 0 11.06 8.312 19.91 21.169 19.91h.248zM99 214.238h38.305v-64.355c0-3.44.25-6.889 1.262-9.346 2.768-6.885 9.071-14.012 19.656-14.012 13.858 0 19.405 10.568 19.405 26.063v61.65h38.304v-66.082c0-35.399-18.896-51.872-44.099-51.872-20.663 0-29.738 11.549-34.78 19.415h.255V98.99H99.002c.5 10.812-.003 115.252-.003 115.252z" fill="#fff"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
</div>
</div>
@endsection
