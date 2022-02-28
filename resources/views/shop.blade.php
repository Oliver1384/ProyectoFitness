@extends('layouts.template2')
<link href="{{ asset('css/tienda.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/podcasts.css') }}" rel="stylesheet"/>
@section('content')
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
