document.addEventListener("DOMContentLoaded", ()=>{
   

    const close_nav = document.querySelector('.close-nav');
    close_nav.addEventListener('click', cerrarNavegador);

    const burger =  document.querySelector('.burger');
    burger.addEventListener("click", abrirNavegador);

})



function cerrarNavegador(){
    const nav_movil =  document.querySelector('.nav-movil');
    nav_movil.style.display = "none";
}

function abrirNavegador(){
    const nav_movil =  document.querySelector('.nav-movil');
    nav_movil.style.display = "inherit";
}