'use strict';

/**
 * PRELOADER
 */
const preloader = document.querySelector("[data-preaload]");

window.addEventListener("load", function () {
  preloader.classList.add("loaded"); // Oculta el preloader
  document.body.classList.add("loaded"); // Añade clase al body
});

/**
 * NAVBAR
 */
const navbar = document.querySelector("[data-navbar]"); // Menú de navegación
const navTogglers = document.querySelectorAll("[data-nav-toggler]"); // Botones que abren/cierra el menú
const overlay = document.querySelector("[data-overlay]"); // Fondo oscuro del menú

// Función para alternar el estado del menú
const toggleNavbar = function () {
  navbar.classList.toggle("active"); // Abre/cierra el menú
  overlay.classList.toggle("active"); // Muestra/oculta el overlay
  document.body.classList.toggle("nav-active"); // Bloquea/desbloquea el scroll
};

// Añade el evento a todos los botones que controlan el menú
addEventOnElements(navTogglers, "click", toggleNavbar);

/**
 * HEADER Y BOTÓN DE VOLVER ARRIBA
 */
const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]"); // Botón flotante para volver arriba

let lastScrollPos = 0; // Guarda la posición anterior del scroll

// Oculta el header al bajar, lo muestra al subir
const hideHeader = function () {
  if (lastScrollPos < window.scrollY) {
    header.classList.add("hide");
  } else {
    header.classList.remove("hide");
  }
  lastScrollPos = window.scrollY;
};

window.addEventListener("scroll", function () {
  if (window.scrollY >= 50) {
    header.classList.add("active");
    backTopBtn.classList.add("active"); // Muestra el botón de volver arriba
    hideHeader(); // Llama a la función para ocultar o mostrar el header
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
});

// Función auxiliar para añadir un evento a varios elementos
function addEventOnElements(elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
}

/**
 * HERO SLIDER
 */
const heroSlider = document.querySelector("[data-hero-slider]"); // Contenedor del slider
const heroSliderItems = document.querySelectorAll("[data-hero-slider-item]"); // Diapositivas del slider
const heroSliderPrevBtn = document.querySelector("[data-prev-btn]"); // Botón anterior
const heroSliderNextBtn = document.querySelector("[data-next-btn]"); // Botón siguiente

let currentSlidePos = 0; // Índice actual de la diapositiva
let lastActiveSliderItem = heroSliderItems[0]; // Última diapositiva activa

// Actualiza la posición del slider
const updateSliderPos = function () {
  lastActiveSliderItem.classList.remove("active");
  heroSliderItems[currentSlidePos].classList.add("active");
  lastActiveSliderItem = heroSliderItems[currentSlidePos];
};

// Cambia a la siguiente diapositiva
const slideNext = function () {
  if (currentSlidePos >= heroSliderItems.length - 1) {
    currentSlidePos = 0; // Vuelve al inicio si ya está en la última
  } else {
    currentSlidePos++; // Avanza una posición
  }
  updateSliderPos();
};

heroSliderNextBtn.addEventListener("click", slideNext);

// Cambia a la diapositiva anterior
const slidePrev = function () {
  if (currentSlidePos <= 0) {
    currentSlidePos = heroSliderItems.length - 1; // Va a la última
  } else {
    currentSlidePos--; // Retrocede una posición
  }
  updateSliderPos();
};

heroSliderPrevBtn.addEventListener("click", slidePrev);

/**
 * AUTO SLIDE
 */
let autoSlideInterval;

const autoSlide = function () {
  autoSlideInterval = setInterval(function () {
    slideNext(); // Va a la siguiente diapositiva automáticamente
  }, 7000);
};

// Detiene el auto-slide cuando pasas el mouse sobre los botones
addEventOnElements([heroSliderNextBtn, heroSliderPrevBtn], "mouseover", function () {
  clearInterval(autoSlideInterval);
});

// Reanuda el auto-slide cuando se quita el mouse
addEventOnElements([heroSliderNextBtn, heroSliderPrevBtn], "mouseout", autoSlide);

// Comienza el auto-slide cuando se carga la página
window.addEventListener("load", autoSlide);

/**
 * EFECTO PARALLAX
 */
const parallaxItems = document.querySelectorAll("[data-parallax-item]"); // Elementos con efecto parallax

let x, y;

// Detecta el movimiento del mouse
window.addEventListener("mousemove", function (event) {
  // Calcula posición relativa del mouse
  x = -(event.clientX / window.innerWidth * 10) + 5;
  y = -(event.clientY / window.innerHeight * 10) + 5;

  // Aplica la transformación a cada elemento con parallax
  for (let i = 0, len = parallaxItems.length; i < len; i++) {
    const parallaxSpeed = Number(parallaxItems[i].dataset.parallaxSpeed);
    parallaxItems[i].style.transform = `translate3d(${x * parallaxSpeed}px, ${y * parallaxSpeed}px, 0px)`; // Aplica el movimiento
  }
});

/**
 * FORMULARIO DE RESERVA
 */
document.querySelector('.reservation form').addEventListener('submit', function(event) {
  event.preventDefault(); // Evita la recarga de la página

  let form = this;
  let data = new FormData(form);

  fetch(form.action, {
    method: 'POST',
    body: data,
  })
  .then(response => {
    if (!response.ok) {
      throw new Error("Error en la red");
    }
    return response.json(); // Procesa la respuesta JSON
  })
  .then(data => {
    if (data.success) {
      form.reset(); // Resetea el formulario
      alert(data.message || "¡Reserva realizada con éxito!");
    } else {
      alert(data.message || "Hubo un problema con tu reserva. Por favor, intenta nuevamente.");
    }
  })
  .catch(error => {
    console.error(error); // Muestra el error en la consola
    alert("Ocurrió un error inesperado. Intenta nuevamente más tarde.");
  });
});
