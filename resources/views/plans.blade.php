@extends('layouts.template2')

@section('content')

    <link rel="stylesheet" href="{{ URL::asset('css/plans.css') }}">
    <div class="container-fluid mt-4 planContenido1" >
        <div class="row d-flex justify-content-center">
            <h1 class="text-center fw-bold fs-1 mt-3 titulo">  <span class="span1Contenido1">Elige </span> <span class="span2Contenido1 ">tu plan </span> </h1>
            <div class="col-6">
                <p class="fst-italic pContenido1" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem blanditiis corporis deleniti ea eos et fugit in,
                    iure neque nulla numquam odio officiis perspiciatis quas quis sed sint sunt voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, illum ipsa magni necessitatibus neque pariatur quidem!
                    Illo ipsum minus neque veritatis vero? Assumenda corporis impedit libero molestias nemo rerum vero. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut autem debitis dolorem eius, exercitationem ipsa molestiae,
                    mollitia nisi non officia pariatur quidem reiciendis sit sunt velit voluptatum. Dignissimos, vel! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet atque autem culpa cum cupiditate distinctio dolores enim et,
                    explicabo hic incidunt ipsum laborum minus non quidem quo sequi soluta? </p>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-light border border-dark rounded-pill fst-italic mb-3 btn-lg"> Crea tu plan</button>
            </div>

        </div>
    </div>

    <div class="container-fluid planContenido2">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center fw-bold fs-1 mt-3 titulo">  <span class="span1Contenido2">Nuestros </span> <span class="span2Contenido2">planes </span> </h1>


            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide  carousel-multi-item mb-3 d-flex justify-content-center"  data-bs-interval="false"  data-interval="false" data-bs-ride="carousel">

                <div class="d-flex align-items-center">
                <a  href="#multi-item-example" data-slide="prev">
                <button onclick="cerrarMasInformacion()" class="rounded-circle border border-dark btn-lg mx-3" type="button"   data-bs-slide="prev" >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                </a>
                </div>

                <!--Slides-->
                <div class="carousel-inner" role="">

                    <!--First slide-->
                    <div class="carousel-item active">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-4 col-md-6 col-12 ">
                                <div class="card mb-2 border border-dark">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                         alt="Card image cap">
                                    <div class="card-body ">
                                        <h1 class="card-title text-center" >Programa 1</h1>
                                        <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ex
                                            ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis voluptas?
                                            Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat?</p>
                                        <button onclick="masInformacion(this)" class="btn btn-light border border-dark rounded-pill fst-italic mb-3 float-end" >Leer más</button>
                                        <p class="masInformacion card-text fst-italic p-3 mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dignissimos dolorem dolores doloribus est id magni
                                                minima molestiae obcaecati officiis, perferendis possimus praesentium recusandae sapiente similique tenetur vel vero?</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 clearfix col-md-6 d-md-block clearfix d-none d-xl-block">
                                <div class="card mb-2 border border-dark">
                                    <img class="card-img-top" style="" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h1 class="card-title text-center" >Programa 2</h1>
                                        <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ex
                                            ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis voluptas?
                                            Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat?</p>
                                        <button onclick="masInformacion(this)" class="btn btn-light border border-dark rounded-pill fst-italic mb-3 float-end" >Leer más</button>
                                        <p class="masInformacion card-text fst-italic p-3 mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dignissimos dolorem dolores doloribus est id magni
                                            minima molestiae obcaecati officiis, perferendis possimus praesentium recusandae sapiente similique tenetur vel vero?</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 clearfix d-none col-md-6 d-md-none clearfix d-none d-xl-block">
                                <div class="card mb-2 border border-dark">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h1 class="card-title text-center" >Programa 3</h1>
                                        <p class="card-text  fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ex
                                            ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis voluptas?
                                            Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat?</p>
                                        <button onclick="masInformacion(this)" class="btn btn-light border border-dark rounded-pill fst-italic mb-3 float-end" >Leer más</button>
                                        <p class="masInformacion card-text fst-italic p-3 mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dignissimos dolorem dolores doloribus est id magni
                                            minima molestiae obcaecati officiis, perferendis possimus praesentium recusandae sapiente similique tenetur vel vero?</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/.First slide-->

                    <div class="carousel-item ">

                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-4 col-md-6 ">
                                <div class="card mb-2 border border-dark">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                         alt="Card image cap">
                                    <div class="card-body ">
                                        <h1 class="card-title text-center">Programa 4</h1>
                                        <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ex
                                            ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis voluptas?
                                            Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat?</p>
                                        <button onclick="masInformacion(this)" class="btn btn-light border border-dark rounded-pill fst-italic mb-3 float-end" >Leer más</button>
                                        <p class="masInformacion card-text fst-italic p-3 mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dignissimos dolorem dolores doloribus est id magni
                                            minima molestiae obcaecati officiis, perferendis possimus praesentium recusandae sapiente similique tenetur vel vero?</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 clearfix col-md-6 d-md-block clearfix d-none d-xl-block">
                                <div class="card mb-2 border border-dark" >
                                    <img class="card-img-top" style="" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h1 class="card-title text-center" >Programa 5</h1>
                                        <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ex
                                            ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis voluptas?
                                            Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat?</p>
                                        <button onclick="masInformacion(this)" class="btn btn-light border border-dark rounded-pill fst-italic mb-3 float-end" >Leer más</button>
                                        <p class="masInformacion card-text fst-italic p-3 mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dignissimos dolorem dolores doloribus est id magni
                                            minima molestiae obcaecati officiis, perferendis possimus praesentium recusandae sapiente similique tenetur vel vero?</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 clearfix d-none col-md-6 d-md-none clearfix d-none d-xl-block">
                                <div class="card mb-2 border border-dark">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h1 class="card-title text-center" >Programa 6</h1>
                                        <p class="card-text  fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ex
                                            ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis voluptas?
                                            Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat?</p>
                                        <button onclick="masInformacion(this)" class="btn btn-light border border-dark rounded-pill fst-italic mb-3 float-end" >Leer más</button>
                                        <p class="masInformacion card-text fst-italic p-3 mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dignissimos dolorem dolores doloribus est id magni
                                            minima molestiae obcaecati officiis, perferendis possimus praesentium recusandae sapiente similique tenetur vel vero?</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item ">

                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-4 col-md-6 ">
                                <div class="card mb-2 border border-dark">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                         alt="Card image cap">
                                    <div class="card-body ">
                                        <h1 class="card-title text-center" >Programa 7</h1>
                                        <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ex
                                            ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis voluptas?
                                            Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat?</p>
                                        <button onclick="masInformacion(this)" class="btn btn-light border border-dark rounded-pill fst-italic mb-3 float-end" >Leer más</button>
                                        <p class="masInformacion card-text fst-italic p-3 mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dignissimos dolorem dolores doloribus est id magni
                                            minima molestiae obcaecati officiis, perferendis possimus praesentium recusandae sapiente similique tenetur vel vero?</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 clearfix d-none col-md-6 d-md-none clearfix d-none d-xl-block">
                                <div class="card mb-2 border border-dark" >
                                    <img class="card-img-top" style="" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h1 class="card-title text-center" >Programa 8</h1>
                                        <p class="card-text fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ex
                                            ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis voluptas?
                                            Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat?</p>
                                        <button onclick="masInformacion(this)" class="btn btn-light border border-dark rounded-pill fst-italic mb-3 float-end" >Leer más</button>
                                        <p class="masInformacion card-text fst-italic p-3 mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dignissimos dolorem dolores doloribus est id magni
                                            minima molestiae obcaecati officiis, perferendis possimus praesentium recusandae sapiente similique tenetur vel vero?</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 clearfix d-none col-md-6 d-md-none clearfix d-none d-xl-block">
                                <div class="card mb-2 border border-dark">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h1 class="card-title text-center" >Programa 9</h1>
                                        <p class="card-text  fst-italic p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ex
                                            ercitationem ipsam magni molestiae necessitatibus nisi, placeat repellat suscipit veritatis voluptas?
                                            Ab, architecto at consequatur dolorem eligendi incidunt laborum pariatur placeat?</p>
                                        <button onclick="masInformacion(this)" class="btn btn-light border border-dark rounded-pill fst-italic mb-3 float-end" >Leer más</button>
                                        <p class="masInformacion card-text fst-italic p-3 mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dignissimos dolorem dolores doloribus est id magni
                                            minima molestiae obcaecati officiis, perferendis possimus praesentium recusandae sapiente similique tenetur vel vero?</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <script>
                        function masInformacion(btn) {
                            let span = btn.nextSibling.nextSibling;
                            //console.log(btn.nextSibling.nextSibling);
                            //btn.nextSibling.nextSibling.style.display = "block";
                            span.style.display === "none" ? span.style.display = "block" : span.style.display = "none";
                        }
                        function cerrarMasInformacion (){
                            let data = document.querySelectorAll(".masInformacion");
                           
                            for (var i = 0; i < data.length; i++) {
                                data[i].style.display = "none";
                            }
                        }
                    </script>

                </div>
                <!--/.Slides-->
                <div class="d-flex align-items-center">
                <a  href="#multi-item-example" data-slide="next">
                <button onclick="cerrarMasInformacion()" class="rounded-circle border border-dark btn-lg mx-3" type="button"  data-bs-slide="next" >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </a>
                </div>

            </div>
            <!--/.Carousel Wrapper-->


        </div>
    </div>

@endsection
