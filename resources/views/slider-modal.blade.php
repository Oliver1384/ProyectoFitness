<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@100&family=Open+Sans:wght@300&family=Sora:wght@100&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet" />

    <!-- BOOSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- BOOSTRAP JAVASCRIPT & JQUERY-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- OWN CODE -->
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}" />
    <script src="{{ asset('js/carousel.js') }}"></script>

</head>

@extends('layouts.template2')

@section('content')
    <div id="caourselOne" class="carousel" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="card">
                    <div class="img-wrapper"><img src="https://picsum.photos/id/200/600/320" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="https://picsum.photos/id/201/600/320" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="https://picsum.photos/id/202/600/320" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="https://picsum.photos/id/203/600/320" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title 4</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="https://picsum.photos/id/204/600/320" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title 5</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="https://picsum.photos/id/225/600/320" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title 6</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="https://picsum.photos/id/206/600/320" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title 7</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="https://picsum.photos/id/220/600/320" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title 8</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="https://picsum.photos/id/208/600/320" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title 9</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div id="caourselTwo" class="carousel" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="card">
                    <div class="img-wrapper"><img src="https://picsum.photos/id/200/600/320" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="https://picsum.photos/id/201/600/320" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="https://picsum.photos/id/202/600/320" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="https://picsum.photos/id/203/600/320" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title 4</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="https://picsum.photos/id/204/600/320" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title 5</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="https://picsum.photos/id/225/600/320" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title 6</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="https://picsum.photos/id/206/600/320" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title 7</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="https://picsum.photos/id/220/600/320" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title 8</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="https://picsum.photos/id/208/600/320" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title 9</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
