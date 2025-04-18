'use strict';

/**
 * PRELOADER 
 */
const preloader = document.querySelector("[data-preaload]");

window.addEventListener("load", function () {
  preloader.classList.add("loaded");
  document.body.classList.add("loaded");
});

/**
 * NAVBAR 
 */
const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]"); // Btn 
const overlay = document.querySelector("[data-overlay]"); // Fondo oscuro al abrir menú

const toggleNavbar = function () {
  navbar.classList.toggle("active"); // Abre/cierra el menú
  overlay.classList.toggle("active"); // Muestra/oculta el overlay
  document.body.classList.toggle("nav-active"); // Bloquea el scroll
}

// Añade evento click a todos los botones que abren el menú
addEventOnElements(navTogglers, "click", toggleNavbar);

/**
 * HEADER Y BTN
 */
const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]"); // Botón flotante

let lastScrollPos = 0;

const hideHeader = function () {
  // Oculta el header al bajar, lo muestra al subir
  if (lastScrollPos < window.scrollY) {
    header.classList.add("hide");
  } else {
    header.classList.remove("hide");
  }
  lastScrollPos = window.scrollY;
}

window.addEventListener("scroll", function () {
  // Activa efectos después de 50px de scroll
  if (window.scrollY >= 50) {
    header.classList.add("active"); 
    backTopBtn.classList.add("active"); // Muestra botón
    hideHeader();
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
});

// Función auxiliar para múltiples event listeners
function addEventOnElements(elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
}