@extends('layouts.template2')

@section('content')
    <link rel="stylesheet" href="{{ URL::asset('css/plans.css') }}">
    <div class="container-fluid mt-4 planContenido1">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center fw-bold fs-1 mt-3 titulo">
                <span class="span1Contenido1">Elige </span>
                <span class="span2Contenido1 ">tu plan </span>
            </h1>
            <div class="col-6">
                <p class="fst-italic pContenido1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem blanditiis
                    corporis deleniti ea eos et fugit in,
                    iure neque nulla numquam odio officiis perspiciatis quas quis sed sint sunt voluptates. Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit. Fugiat, illum ipsa magni necessitatibus neque pariatur
                    quidem!
                    Illo ipsum minus neque veritatis vero? Assumenda corporis impedit libero molestias nemo rerum vero.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut autem debitis dolorem eius,
                    exercitationem ipsa molestiae,
                    mollitia nisi non officia pariatur quidem reiciendis sit sunt velit voluptatum. Dignissimos, vel! Lorem
                    ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet atque autem culpa cum cupiditate
                    distinctio dolores enim et,
                    explicabo hic incidunt ipsum laborum minus non quidem quo sequi soluta? </p>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-light mb-3 ">Crea tu plan</button>
            </div>

        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title card-title text-center" id="exampleModalLabel">Programa 1</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-6 col-md-6 col-12 mb-3 ">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                alt="Card image cap">
                        </div>
                        <div class="mb-3">
                            <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Eos ex
                                ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis
                                voluptas?
                                Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat? Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. Beatae consequatur dolorem dolorum fugit
                                itaque molestiae molestias mollitia
                                nam nostrum numquam odit officia omnis quae quia repellendus, suscipit tempore.
                                Consequuntur, quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cumque
                                dignissimos doloribus expedita numquam quisquam, vitae. Animi beatae doloribus
                                illo illum incidunt magnam nam perspiciatis, possimus praesentium repellendus repudiandae
                                suscipit.</p>
                            <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Eos ex
                                ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis
                                voluptas?
                                Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat? Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. Beatae consequatur dolorem dolorum fugit
                                itaque molestiae molestias mollitia
                                nam nostrum numquam odit officia omnis quae quia repellendus, suscipit tempore.
                                Consequuntur, quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cumque
                                dignissimos doloribus expedita numquam quisquam, vitae. Animi beatae doloribus
                                illo illum incidunt magnam nam perspiciatis, possimus praesentium repellendus repudiandae
                                suscipit.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid planContenido2">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center fw-bold fs-1 mt-3 titulo"> <span class="span1Contenido2">Nuestros </span> <span
                    class="span2Contenido2">planes </span> </h1>


            <div id="multi-item-example" class="carousel carousel-3" data-bs-interval="false" data-interval="false"
                data-bs-ride="carousel">

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="card mr-1 border border-dark">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                alt="Card image cap">
                            <div class="card-body ">
                                <h1 class="card-title text-center">Programa 1</h1>
                                <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Eos ex
                                    ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat
                                    suscipit veritatis voluptas?
                                    Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur
                                    placeat?</p>
                                <button onclick="" class="btn btn-dark  mb-3 float-end" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo">Leer más</button>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card mr-1 border border-dark">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                alt="Card image cap">
                            <div class="card-body ">
                                <h1 class="card-title text-center">Programa 2</h1>
                                <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Eos ex
                                    ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat
                                    suscipit veritatis voluptas?
                                    Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur
                                    placeat?</p>
                                <button onclick="" class="btn btn-dark  mb-3 float-end" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo">Leer más</button>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card mr-1 border border-dark">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                alt="Card image cap">
                            <div class="card-body ">
                                <h1 class="card-title text-center">Programa 3</h1>
                                <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Eos ex
                                    ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat
                                    suscipit veritatis voluptas?
                                    Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur
                                    placeat?</p>
                                <button onclick="" class="btn btn-dark  mb-3 float-end" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo">Leer más</button>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card mr-1 border border-dark">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                alt="Card image cap">
                            <div class="card-body ">
                                <h1 class="card-title text-center">Programa 4</h1>
                                <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Eos ex
                                    ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat
                                    suscipit veritatis voluptas?
                                    Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur
                                    placeat?</p>
                                <button onclick="" class="btn btn-dark  mb-3 float-end" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo">Leer más</button>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card mr-1 border border-dark">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                alt="Card image cap">
                            <div class="card-body ">
                                <h1 class="card-title text-center">Programa 5</h1>
                                <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Eos ex
                                    ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat
                                    suscipit veritatis voluptas?
                                    Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur
                                    placeat?</p>
                                <button onclick="" class="btn btn-dark  mb-3 float-end" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo">Leer más</button>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card mr-1 border border-dark">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                alt="Card image cap">
                            <div class="card-body ">
                                <h1 class="card-title text-center">Programa 6</h1>
                                <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Eos ex
                                    ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat
                                    suscipit veritatis voluptas?
                                    Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur
                                    placeat?</p>
                                <button onclick="" class="btn btn-dark  mb-3 float-end" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo">Leer más</button>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card mr-1 border border-dark">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                alt="Card image cap">
                            <div class="card-body ">
                                <h1 class="card-title text-center">Programa 7</h1>
                                <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Eos ex
                                    ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat
                                    suscipit veritatis voluptas?
                                    Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur
                                    placeat?</p>
                                <button onclick="" class="btn btn-dark  mb-3 float-end" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo">Leer más</button>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card mr-1 border border-dark">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                alt="Card image cap">
                            <div class="card-body ">
                                <h1 class="card-title text-center">Programa 8</h1>
                                <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Eos ex
                                    ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat
                                    suscipit veritatis voluptas?
                                    Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur
                                    placeat?</p>
                                <button onclick="" class="btn btn-dark  mb-3 float-end" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo">Leer más</button>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    @endsection
