@extends('layouts.template2')


@section('content')
<link href="{{ asset('css/contacto.css') }}" rel="stylesheet" />

<div class="contacto-container">
    <h1><span class="sobre">SOBRE </span><span class="nosotros">NOSOTROS</span></h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe placeat odit nobis, ea impedit harum, doloribus eum quia, incidunt minus soluta dolores reprehenderit minima labore vero suscipit. Perferendis, ut aperiam?
        Vitae, neque? Sit totam dolorem architecto itaque voluptate, laboriosam obcaecati fugiat perferendis hic magni voluptatibus distinctio adipisci ea eveniet unde quidem magnam nemo maiores deleniti ab officia asperiores. Reprehenderit, nihil!
    </p>
</div>
<div class="info-container">

    <div class="datos-container">
        <div class="telefono">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFB20F" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>
                <p>+34 928 60 28 44</p>
        </div>
        <div class="ubicacion">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFB20F" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg>
            <p>Cam. de la Cruz, 22, 35400 Arucas, Las Palmas</p>
        </div>

        <div class="email">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFB20F" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
            </svg>
            <p> 35013842@gobiernodecanarias.org </p>
        </div>
    </div>

</div>
<div class="mapa">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3518.8150659728444!2d-15.523223085226956!3d28.121665613769323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc40936c672bb2a7%3A0x2acd25e282651713!2sIES%20Arucas-Domingo%20Rivero!5e0!3m2!1ses!2ses!4v1645555589532!5m2!1ses!2ses" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</div>

@endsection
