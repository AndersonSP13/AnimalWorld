/*MENU HAMBURGUESA RESPONSIVE*/
let menu = document.querySelector('#menu-icon');
let navlist =document.querySelector('.navlist');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
}

// Agregar o quitar una clase al elemento body para evitar la barra de desplazamiento horizontal
document.body.classList.toggle('no-scroll-x', navlist.classList.contains('open'));
