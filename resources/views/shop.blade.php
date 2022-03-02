<<<<<<< HEAD
<<<<<<< Updated upstream
@extends('layouts.template')

=======
@extends('layouts.template2')
<link href="{{ asset('css/tienda.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/podcasts.css') }}" rel="stylesheet"/>
>>>>>>> Stashed changes
=======
@extends('layouts.template2')
<link href="{{ asset('css/tienda.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/podcasts.css') }}" rel="stylesheet"/>
>>>>>>> 69331267338f65d59e38b3ab9ce1b1f191ef4363
@section('content')
<section class="productoEstrella">
    <div>
        <h1>NUESTRO PRODUCTO <span>MÁS VENDIDO</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti est vitae harum aperiam ipsa rem sequi at labore, cumque, ipsum laboriosam, totam reiciendis officia magnam voluptas autem. Sed, est totam.</p>
        <p class="precio">25€</p>
    </div>
    <figure>
        <img src="{{ asset('images/provisional-desarrollo/producto.png') }}" alt="">
    </figure>
</section>
    <main>
        <h1>Nuestros productos</h1>
        <div class="productos">
            <article class="producto">
                <figure>
                    <img src="{{asset('images/provisional-desarrollo/producto.png')}}" alt="">
                </figure>
                <div class="info-producto">
                    <p class="info">NOMBRE PRODUCTO <span class="precio">25€</span></p>
                    <p class="descripcion">Lorem ipsum. Dolore, ipsum reprehenderit. Reprehenderit laborum doloremque sint qui omnis aut neque!</p>
                </div>
            </article>
            <article class="producto">
                <figure>
                    <img src="{{asset('images/provisional-desarrollo/producto.png')}}" alt="">
                </figure>
                <div class="info-producto">
                    <p class="info">NOMBRE PRODUCTO <span class="precio">25€</span></p>
                    <p class="descripcion">Lorem ipsum. Dolore, ipsum reprehenderit. Reprehenderit laborum doloremque sint qui omnis aut neque!</p>
                </div>
            </article>
            <article class="producto">
                <figure>
                    <img src="{{asset('images/provisional-desarrollo/producto.png')}}" alt="">
                </figure>
                <div class="info-producto">
                    <p class="info">NOMBRE PRODUCTO <span class="precio">25€</span></p>
                    <p class="descripcion">Lorem ipsum. Dolore, ipsum reprehenderit. Reprehenderit laborum doloremque sint qui omnis aut neque!</p>
                </div>
            </article>
            <article class="producto">
                <figure>
                    <img src="{{asset('images/provisional-desarrollo/producto.png')}}" alt="">
                </figure>
                <div class="info-producto">
                    <p class="info">NOMBRE PRODUCTO <span class="precio">25€</span></p>
                    <p class="descripcion">Lorem ipsum. Dolore, ipsum reprehenderit. Reprehenderit laborum doloremque sint qui omnis aut neque!</p>
                </div>
            </article>
            <article class="producto">
                <figure>
                    <img src="{{asset('images/provisional-desarrollo/producto.png')}}" alt="">
                </figure>
                <div class="info-producto">
                    <p class="info">NOMBRE PRODUCTO <span class="precio">25€</span></p>
                    <p class="descripcion">Lorem ipsum. Dolore, ipsum reprehenderit. Reprehenderit laborum doloremque sint qui omnis aut neque!</p>
                </div>
            </article>
            <article class="producto">
                <figure>
                    <img src="{{asset('images/provisional-desarrollo/producto.png')}}" alt="">
                </figure>
                <div class="info-producto">
                    <p class="info">NOMBRE PRODUCTO <span class="precio">25€</span></p>
                    <p class="descripcion">Lorem ipsum. Dolore, ipsum reprehenderit. Reprehenderit laborum doloremque sint qui omnis aut neque!</p>
                </div>
            </article>
            <article class="producto">
                <figure>
                    <img src="{{asset('images/provisional-desarrollo/producto.png')}}" alt="">
                </figure>
                <div class="info-producto">
                    <p class="info">NOMBRE PRODUCTO <span class="precio">25€</span></p>
                    <p class="descripcion">Lorem ipsum. Dolore, ipsum reprehenderit. Reprehenderit laborum doloremque sint qui omnis aut neque!</p>
                </div>
            </article>
            <article class="producto">
                <figure>
                    <img src="{{asset('images/provisional-desarrollo/producto.png')}}" alt="">
                </figure>
                <div class="info-producto">
                    <p class="info">NOMBRE PRODUCTO <span class="precio">25€</span></p>
                    <p class="descripcion">Lorem ipsum. Dolore, ipsum reprehenderit. Reprehenderit laborum doloremque sint qui omnis aut neque!</p>
                </div>
            </article>
            <article class="producto">
                <figure>
                    <img src="{{asset('images/provisional-desarrollo/producto.png')}}" alt="">
                </figure>
                <div class="info-producto">
                    <p class="info">NOMBRE PRODUCTO <span class="precio">25€</span></p>
                    <p class="descripcion">Lorem ipsum. Dolore, ipsum reprehenderit. Reprehenderit laborum doloremque sint qui omnis aut neque!</p>
                </div>
            </article>
            <article class="producto">
                <figure>
                    <img src="{{asset('images/provisional-desarrollo/producto.png')}}" alt="">
                </figure>
                <div class="info-producto">
                    <p class="info">NOMBRE PRODUCTO <span class="precio">25€</span></p>
                    <p class="descripcion">Lorem ipsum. Dolore, ipsum reprehenderit. Reprehenderit laborum doloremque sint qui omnis aut neque!</p>
                </div>
            </article>
            <article class="producto">
                <figure>
                    <img src="{{asset('images/provisional-desarrollo/producto.png')}}" alt="">
                </figure>
                <div class="info-producto">
                    <p class="info">NOMBRE PRODUCTO <span class="precio">25€</span></p>
                    <p class="descripcion">Lorem ipsum. Dolore, ipsum reprehenderit. Reprehenderit laborum doloremque sint qui omnis aut neque!</p>
                </div>
            </article>
            <article class="producto">
                <figure>
                    <img src="{{asset('images/provisional-desarrollo/producto.png')}}" alt="">
                </figure>
                <div class="info-producto">
                    <p class="info">NOMBRE PRODUCTO <span class="precio">25€</span></p>
                    <p class="descripcion">Lorem ipsum. Dolore, ipsum reprehenderit. Reprehenderit laborum doloremque sint qui omnis aut neque!</p>
                </div>
            </article>

        </div>
    </main>
    <div class="controls ocultarEscritorio">
        <button><</button>
        <button>></button>
    </div>
    <div id="paginator" class="paginadorEscritorio ocultarMovil">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link active" href="#">«</a></li>
                <li class="page-item"><a class="page-link active" href="#"><</a></li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link active" href="#">></a></li>
                <li class="page-item"><a class="page-link active" href="#">»</a></li>
            </ul>
        </nav>
    </div>
@endsection
