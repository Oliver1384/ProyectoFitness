@extends('layouts.template')

@section('content')


    <div class="container-fluid mt-4" style="background: var(--main-orange);">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center fw-bold fs-1 mt-3">  <span style=" color:var(--main-black)">Elige </span> <span style=" color:var(--main-white)">tu plan </span> </h1>
            <div class="col-6">
                <p class="fst-italic" style="color: var(--main-black)">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem blanditiis corporis deleniti ea eos et fugit in,
                    iure neque nulla numquam odio officiis perspiciatis quas quis sed sint sunt voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, illum ipsa magni necessitatibus neque pariatur quidem!
                    Illo ipsum minus neque veritatis vero? Assumenda corporis impedit libero molestias nemo rerum vero. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut autem debitis dolorem eius, exercitationem ipsa molestiae,
                    mollitia nisi non officia pariatur quidem reiciendis sit sunt velit voluptatum. Dignissimos, vel! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet atque autem culpa cum cupiditate distinctio dolores enim et,
                    explicabo hic incidunt ipsum laborum minus non quidem quo sequi soluta? </p>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-light border border-dark rounded-pill fst-italic mb-3"> Crea tu plan</button>
            </div>

        </div>
    </div>

    <div class="container-fluid" style="background: var(--main-white);">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center fw-bold fs-1 mt-3">  <span style=" color:var(--main-black)">Nuestros </span> <span style=" color:var(--main-orange)">planes </span> </h1>


            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item mb-3 d-flex justify-content-center" data-bs-ride="carousel">


                <a class="d-flex align-items-center" href="#multi-item-example" data-slide="prev">
                <button class="rounded-circle border border-dark" type="button"   data-bs-slide="prev" style="background-color:var(--main-orange) ">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                </a>

                <!--Slides-->
                <div class="carousel-inner" role="">

                    <!--First slide-->
                    <div class="carousel-item active">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-3 ">
                                <div class="card mb-2 border border-dark">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                         alt="Card image cap">
                                    <div class="card-body ">
                                        <h1 class="card-title text-center" style="color:var(--main-black)">Programa 1</h1>
                                        <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ex
                                            ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis voluptas?
                                            Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat?</p>
                                        <button class="btn btn-light border border-dark rounded-pill fst-italic mb-3">Leer más</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 clearfix d-none d-md-block">
                                <div class="card mb-2 border border-dark" style=" color: var(--main-white); background-color: var(--main-black)">
                                    <img class="card-img-top" style="" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h1 class="card-title text-center" style="color:var(--main-white)">Programa 2</h1>
                                        <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ex
                                            ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis voluptas?
                                            Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat?</p>
                                        <button class="btn btn-light border border-dark rounded-pill fst-italic mb-3">Leer más</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 clearfix d-none d-md-block">
                                <div class="card mb-2 border border-dark">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h1 class="card-title text-center" style="color:var(--main-black)">Programa 3</h1>
                                        <p class="card-text  fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ex
                                            ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis voluptas?
                                            Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat?</p>
                                        <button class="btn btn-light border border-dark rounded-pill fst-italic mb-3">Leer más</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/.First slide-->

                    <div class="carousel-item ">

                        <div class="row d-flex justify-content-center">
                            <div class="col-md-3 ">
                                <div class="card mb-2 border border-dark">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                         alt="Card image cap">
                                    <div class="card-body ">
                                        <h1 class="card-title text-center" style="color:var(--main-black)">Programa 4</h1>
                                        <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ex
                                            ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis voluptas?
                                            Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat?</p>
                                        <button class="btn btn-light border border-dark rounded-pill fst-italic mb-3">Leer más</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 clearfix d-none d-md-block">
                                <div class="card mb-2 border border-dark" style=" color: var(--main-white); background-color: var(--main-black)">
                                    <img class="card-img-top" style="" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h1 class="card-title text-center" style="color:var(--main-white)">Programa 5</h1>
                                        <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ex
                                            ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis voluptas?
                                            Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat?</p>
                                        <button class="btn btn-light border border-dark rounded-pill fst-italic mb-3">Leer más</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 clearfix d-none d-md-block">
                                <div class="card mb-2 border border-dark">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h1 class="card-title text-center" style="color:var(--main-black)">Programa 6</h1>
                                        <p class="card-text  fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ex
                                            ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis voluptas?
                                            Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat?</p>
                                        <button class="btn btn-light border border-dark rounded-pill fst-italic mb-3">Leer más</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item ">

                        <div class="row d-flex justify-content-center">
                            <div class="col-md-3 ">
                                <div class="card mb-2 border border-dark">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                         alt="Card image cap">
                                    <div class="card-body ">
                                        <h1 class="card-title text-center" style="color:var(--main-black)">Programa 7</h1>
                                        <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ex
                                            ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis voluptas?
                                            Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat?</p>
                                        <button class="btn btn-light border border-dark rounded-pill fst-italic mb-3">Leer más</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 clearfix d-none d-md-block">
                                <div class="card mb-2 border border-dark" style=" color: var(--main-white); background-color: var(--main-black)">
                                    <img class="card-img-top" style="" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h1 class="card-title text-center" style="color:var(--main-white)">Programa 8</h1>
                                        <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ex
                                            ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis voluptas?
                                            Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat?</p>
                                        <button class="btn btn-light border border-dark rounded-pill fst-italic mb-3">Leer más</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 clearfix d-none d-md-block">
                                <div class="card mb-2 border border-dark">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h1 class="card-title text-center" style="color:var(--main-black)">Programa 9</h1>
                                        <p class="card-text  fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ex
                                            ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis voluptas?
                                            Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat?</p>
                                        <button class="btn btn-light border border-dark rounded-pill fst-italic mb-3">Leer más</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
                <!--/.Slides-->
                <a class="btn-floating d-flex align-items-center" href="#multi-item-example" data-slide="next">
                <button class="rounded-circle border border-dark" type="button"  data-bs-slide="next" style="background-color:var(--main-orange)">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </a>

            </div>
            <!--/.Carousel Wrapper-->


        </div>
    </div>

@endsection
