$(document).ready(function () {
    // Cargamos los controladores:
    var carousels = document.querySelectorAll(".carousel");
    var controlers = new Array(2);

    // Por c
    for (let i = 0; i < carousels.length; i++) {
        controlers[i] = {
            'carouselWidth': $(carousels[i]).find('.carousel-inner')[0].scrollWidth,
            'cardWidth': $(carousels[i]).find('.carousel-item').width(),
            'scrollPosition': 0,
        }

        // Listeners:
        $(carousels[i]).find('.carousel-control-next').on("click", function () {
            moveNext(carousels[i], controlers[i]);
        });

        $(carousels[i]).find('.carousel-control-prev').on("click", function () {
            movePrev(carousels[i], controlers[i]);
        });

    }
});

function moveNext(carousel, controler) {
    // Si la nueva posición no es mayor al tamaño máximo del scroll,
    // lo movemos hacia la derecha. En caso contrario, vuelva a la primera
    // posición.
    if (controler.scrollPosition < controler.carouselWidth - controler.cardWidth * 4) {
        controler.scrollPosition += controler.cardWidth;
    } else {
        controler.scrollPosition = 0;
    }

    // Animamos el carrousel:
    $(carousel).find('.carousel-inner').animate({
        scrollLeft: controler.scrollPosition
    }, 600
    );

}

function movePrev(carousel, controler) {
    // Si la nueva posición es mayor al tamaño máximo del scroll,
    // lo movemos hacia la izquierda. En caso contrario, va a la última
    // posición.
    if (controler.scrollPosition > 0) {
        controler.scrollPosition -= controler.cardWidth;
    } else {
        controler.scrollPosition = controler.carouselWidth;
    }

    // Animamos el carrousel:
    $(carousel).find('.carousel-inner').animate({
        scrollLeft: controler.scrollPosition
    }, 600
    );
}

/*

// En caso de que el tamaño mínimo sea 768 hacemos el código:
if (window.matchMedia("(min-width: 768px)").matches) {

    // Eliminamos la clase slide:
    $(multipleCardCarousel).removeClass("slide");


    // Avanzamos:
    $("#carouselExampleControls .carousel-control-next").on("click", function () {

        // Si la nueva posición no es mayor al tamaño máximo del scroll,
        // lo movemos hacia la derecha. En caso contrario, vuelva a la primera
        // posición.
        if (scrollPosition < carouselWidth - cardWidth * 4) {
            scrollPosition += cardWidth;
        } else {
            scrollPosition = 0;
        }

        // Animamos el carrousel:
        $("#carouselExampleControls .carousel-inner").animate(
            { scrollLeft: scrollPosition },
            600
        );

    });

    // Retrocedemos:
    $("#carouselExampleControls .carousel-control-prev").on("click", function () {

        // Si la nueva posición es mayor al tamaño máximo del scroll,
        // lo movemos hacia la izquierda. En caso contrario, va a la última
        // posición.
        if (scrollPosition > 0) {
            scrollPosition -= cardWidth;
        } else {
            scrollPosition = carouselWidth;
        }

        // Animamos el carrousel:
        $("#carouselExampleControls .carousel-inner").animate(
            { scrollLeft: scrollPosition },
            600
        );
    });
} else {
    // En caso contrario será un slide normal y corriente.
    $(multipleCardCarousel).addClass("slide");
}


var lastScrollLeft = 0;
$(window).scroll(function () {
    var documentScrollLeft = $(document).scrollLeft();
    if (lastScrollLeft != documentScrollLeft) {
        console.log('scroll x');
        lastScrollLeft = documentScrollLeft;
    }
});

$(window).resize(function () {
    // Parámetros de confirmación:
    let newCarouselWidth = $(".carousel-inner")[0].scrollWidth;

    // Ha crecido:
    if (newCarouselWidth > carouselWidth) {
        scrollPosition += (newCarouselWidth - carouselWidth);
    } else {
        scrollPosition += (newCarouselWidth - carouselWidth);
    }

    cardWidth = $(".carousel-item").width();
});

});
*/