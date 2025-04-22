@extends('layouts.app') 
@vite('resources/css/app.css') 
@vite('resources/js/app.js') 
@section('content') 
<main>
  <article>

    <!-- HERO SECTION -->
    <section class="hero text-center" aria-label="home" id="home">
      <ul class="hero-slider" data-hero-slider>
        <!-- Slide 1 -->
        <li class="slider-item active" data-hero-slider-item>
          <div class="slider-bg">
            <img src="/images/pulpo.png" width="1880" height="950" alt="" class="img-cover">
          </div>
          <p class="label-2 section-subtitle slider-reveal">Auténtica Comida Española</p>
          <h1 class="display-1 hero-title slider-reveal">
            Por el amor a la <br> deliciosa comida española
          </h1>
          <p class="body-2 hero-text slider-reveal">
            Ingredientes con alma, sabores con raíz.
          </p>
          <!-- Botón -->
          <a href="#" class="btn btn-primary slider-reveal">
            <span class="text text-1">Ver Nuestro Menú</span>
            <span class="text text-2" aria-hidden="true">Ver Nuestro Menú</span>
          </a>
        </li>

        <!-- Slide 2 -->
        <li class="slider-item active" data-hero-slider-item>
          <div class="slider-bg">
            <img src="/images/gazpacho.png" width="1880" height="950" alt="" class="img-cover">
          </div>

          <p class="label-2 section-subtitle slider-reveal">Sabores que nos unen</p>

          <h1 class="display-1 hero-title slider-reveal">
            Inspirados por la Tradición
          </h1>

          <p class="body-2 hero-text slider-reveal">
            Memorias en cada plato.
          </p>

          <a href="#" class="btn btn-primary">
            <span class="text text-1">Ver Nuestro Menú</span>
            <span class="text text-2" aria-hidden="true">Ver Nuestro Menú</span>
          </a>
        </li>

        <!-- Slide 3 -->
        <li class="slider-item active" data-hero-slider-item>
          <div class="slider-bg">
            <img src="/images/paellavalenciana.png" width="1880" height="950" alt="" class="img-cover">
          </div>

          <p class="label-2 section-subtitle slider-reveal">Sabor y Cultura en Cada Plato</p>

          <h1 class="display-1 hero-title slider-reveal">
            Cada Sabor Cuenta una <br> Historia
          </h1>

          <p class="body-2 hero-text slider-reveal">
            <span class="accent-text">Cada plato, una historia.</span> Ven y vívela.
          </p>

          <a href="#" class="btn btn-primary">
            <span class="text text-1">Ver Nuestro Menú</span>
            <span class="text text-2" aria-hidden="true">Ver Nuestro Menú</span>
          </a>
        </li>
      </ul>

      <!-- Botón-->
      <button class="slider-btn prev" aria-label="deslizar al anterior" data-prev-btn>
        <ion-icon name="chevron-back"></ion-icon>
      </button>

      <!-- Botón de slide siguiente -->
      <button class="slider-btn next" aria-label="deslizar al siguiente" data-next-btn>
        <ion-icon name="chevron-forward"></ion-icon>
      </button>

      <!-- Botón de reserva -->
      <a href="" class="hero-btn has-after">
        <img src="/images/hero-icon.png" width="48" height="48" alt="icono de reserva">
        <span class="label-2 text-center span">Reserva una Mesa</span>
      </a>

    </section>
  </article>
  {{-- Servicios --}}
  <section class="section service bg-black-10 text-center" aria-label="service">
    <div class="container">
      <p class="section-subtitle label-2">Sabores para la realeza</p>

  <h2 class="headline-1 section-title">Ofrecemos lo mejor de primera categoría</h2>

  <p class="section-text">
  La gastronomía española es una fusión de colores, aromas y emociones. Cada plato cuenta 
  una historia, cada ingrediente refleja una 
  tierra llena de tradición y carácter.
  </p>

  <ul class="grid-list">

    <li>
      <div class="service-card">

        <a href="#" class="has-before hover:shine">
          <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
            <img src="images/Desayuno.png" width="285" height="336" loading="lazy" alt="Desayuno"
              class="img-cover">
          </figure>
        </a>

        <div class="card-content">

          <h3 class="title-4 card-title">
            <a href="#">Desayuno</a>
          </h3>

          <a href="#" class="btn-text hover-underline label-2">Ver Menu</a>

        </div>

      </div>
    </li>

    <li>
      <div class="service-card">

        <a href="#" class="has-before hover:shine">
          <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
            <img src="images/Aperitivos.png" width="285" height="336" loading="lazy" alt="Aperitivos"
              class="img-cover">
          </figure>
        </a>

        <div class="card-content">

          <h3 class="title-4 card-title">
            <a href="#">Aperitivos</a>
          </h3>

          <a href="#" class="btn-text hover-underline label-2">Ver Menu</a>
        </div>
      </li>

      <li>
        <div class="service-card">

          <a href="#" class="has-before hover:shine">
            <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
              <img src="images/Bebida.png" width="285" height="336" loading="lazy" alt="Bebidas"
                class="img-cover">
            </figure>
          </a>

          <div class="card-content">

            <h3 class="title-4 card-title">
              <a href="#">Bebidas</a>
            </h3>

            <a href="#" class="btn-text hover-underline label-2">Ver Menu</a>
</main>

@endsection

