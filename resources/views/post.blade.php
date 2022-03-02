@extends('layouts.template2')

<link rel="stylesheet" href="{{ asset('/css/post_body.css') }}" />

@section('content')
    <div id="article">
        <div class="m-0 p-0 row">
            <div class="col-12" style="background:url('images/articles/Article_Main.png');">
                <div class="background_article"></div>
                <div class="title_article">
                    <h1>Vestibulum gravida, tortor id luctus facilisis.</h1>
                </div>
            </div>
            <div class="m-0 p-0 col-12">
                <div class="body_article">
                    <div class="message">
                        <hr />
                        <section>
                            <h1>Lorem ipsum:</h1>
                            <q>¿Vestibulum ante ipsum primis in faucibus orci luctus et ultrices?</q>
                            <q>¿Vestibulum ante ipsum primis in faucibus orci luctus et ultrices?</q>
                            <p>Etiam et tempor est. Nunc malesuada orci eu ante pretium, vel consectetur est semper</p>
                            <p>Morbi eget elementum magna, et cursus ante. Duis molestie sagittis ante, in finibus orci.
                                Curabitur ullamcorper erat nisl, ac efficitur libero aliquam sed. Morbi purus odio, laoreet
                                consectetur tincidunt vel, luctus sit amet dolor. Maecenas lobortis mattis massa, vel
                                commodo diam ullamcorper in. Quisque imperdiet efficitur eleifend. Nunc a justo congue,
                                fermentum eros eget, mollis augue. Etiam pretium massa sed libero pretium, semper vulputate
                                eros mattis. In quis elementum tellus. Fusce malesuada sodales arcu, vitae condimentum massa
                                sagittis at. In bibendum volutpat quam, eget auctor dolor volutpat sit amet. Phasellus id
                                ligula ut odio fringilla maximus.</p>
                        </section>
                        <hr />
                        <section>
                            <h1>Nullam sagittis ex in pulvinar sodales:</h1>
                            Etiam et tempor est. Nunc malesuada orci eu ante pretium, vel consectetur est semper. Morbi eget
                            elementum magna, et cursus ante. Duis molestie sagittis ante, in finibus orci. Curabitur
                            ullamcorper erat nisl, ac efficitur libero aliquam sed. Morbi purus odio, laoreet consectetur
                            tincidunt vel, luctus sit amet dolor. Maecenas lobortis mattis massa, vel commodo diam
                            ullamcorper in. Quisque imperdiet efficitur eleifend. Nunc a justo congue, fermentum eros eget,
                            mollis augue. Etiam pretium massa sed libero pretium, semper vulputate eros mattis. In quis
                            elementum tellus. Fusce malesuada sodales arcu, vitae condimentum massa sagittis at. In bibendum
                            volutpat quam, eget auctor dolor volutpat sit amet. Phasellus id ligula ut odio fringilla
                            maximus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            <br /><br />
                            Vestibulum efficitur erat quam, et malesuada nunc vulputate in. Vestibulum ante ipsum primis in
                            faucibus orci luctus et ultrices posuere cubilia curae; Fusce sit amet efficitur velit. Etiam
                            auctor, orci eu porta dignissim, enim massa vestibulum orci, vitae convallis leo metus a dolor.
                            Donec sit amet velit dui. Phasellus at accumsan felis. Aliquam id ante a arcu auctor
                            sollicitudin ut non mi. Maecenas placerat eget ex nec vehicula. Cras non velit vehicula,
                            bibendum ex vitae, tempus justo. Suspendisse gravida posuere ante non porta. Duis felis tellus,
                            rhoncus quis augue ac, molestie eleifend dui. Aliquam erat volutpat. Maecenas ultrices semper
                            cursus. Vestibulum feugiat dui elit, ut porttitor nunc feugiat laoreet. Nam turpis dolor,
                            ullamcorper nec dignissim a, iaculis in nibh.
                            <br /><br />
                            Nullam sagittis ex in pulvinar sodales. Maecenas non nibh mattis, tristique elit ac, blandit
                            lacus. Nunc interdum dolor at tellus auctor, ac feugiat velit convallis. Integer sed turpis
                            metus. Suspendisse consectetur dui laoreet ex blandit, nec elementum est efficitur. Fusce at
                            orci nec nulla auctor imperdiet vitae vel eros. Morbi nec turpis et augue aliquet sodales. Duis
                            eget neque rutrum sem tincidunt aliquet sed non eros. Aenean diam sem, pretium et ipsum sit
                            amet, scelerisque tempor justo. Donec quis odio id magna vestibulum tempus. Vivamus et risus eu
                            ante ornare eleifend et mollis ipsum. Donec mollis ligula vitae turpis viverra, non laoreet
                            metus efficitur. </p>
                        </section>
                        <hr />
                    </div>
                    <div class="profile">
                        <div class="profile_avatar">
                            <img src="http://127.0.0.1:8000/images/provisional-desarrollo/avatar.png"
                                alt="Nombre del entrenador">
                        </div>
                        <div class="profile_info">
                            <p class="profile_name">
                                Juan Antonio
                            </p>
                            <p class="profile_description">
                                Entrenador personal, experto en dietética
                            </p>
                        </div>
                        <div class="profile_social_media">
                            <a href="#">
                                <img src="{{ asset('images/iconos/trainer_instagram.svg') }}" alt="Instagram" />
                            </a>
                            <a href="#">
                                <img src="{{ asset('images/iconos/trainer_facebook.svg') }}" alt="Instagram" />
                            </a>
                            <a href="#">
                                <img src="{{ asset('images/iconos/trainer_linkedin.svg') }}" alt="Instagram" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="footer_article">
                </div>
            </div>
        </div>
    </div>
@endsection
