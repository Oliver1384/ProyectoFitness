let iteracion = 0;
let podcasts = document.querySelectorAll('.ocultarEscritorio .podcast');
let botonAvanzar = document.querySelector('.avanzar');
let botonRetroceder = document.querySelector('.retroceder');
botonRetroceder.addEventListener('click', restarIteracion);
botonAvanzar.addEventListener('click', sumarIteracion);
mostrar();
function mostrar() {
    for (let i = 0; i < podcasts.length ; i++) {
        if (i < iteracion+5 && i >= iteracion) {
            podcasts[i].style.display = 'flex';
        } else {
            podcasts[i].style.display = 'none';
        }
    }
}
function restarIteracion() {
    if (iteracion >= 5 ) {
        iteracion -= 5;
        mostrar();
    }
}
function sumarIteracion() {
    if (iteracion+5 <= podcasts.length) {
        iteracion += 5;
        mostrar();
    }
}
