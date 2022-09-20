// Menu Hamburguesa

// Escuchamos cuando se le de click al menu
document.querySelector(".bars__menu").addEventListener("click", animateBars);

// Seleccionamos las lineas del menu
const line1__bars = document.querySelector(".line1__bars-menu");
const line2__bars = document.querySelector(".line2__bars-menu");
const line3__bars = document.querySelector(".line3__bars-menu");
const containerMenu = document.querySelector(".container-menu");

function animateBars() {
    line1__bars.classList.toggle("activeline1__bars-menu");
    line2__bars.classList.toggle("activeline2__bars-menu");
    line3__bars.classList.toggle("activeline3__bars-menu");
    containerMenu.classList.toggle("activecontainer-menu")
}