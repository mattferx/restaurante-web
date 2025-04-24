@extends('layouts.app')
@vite('resources/css/app.css')
@vite('resources/js/app.js')
@section('content')
  
<!-- 
        - #SERVICE
      -->

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

                </div>

              </div>
            </li>

          </ul>

          <img src="images/shape-1.png" width="246" height="412" loading="lazy" alt="shape"
            class="shape shape-1 move-anim">
          <img src="images/shape-2.png" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">

        </div>
      </section>

       <!-- 
        - #ABOUT
      -->

      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">Nuestra historia</p>

            <h2 class="headline-1 section-title">Cada sabor cuenta una historia</h2>

            <p class="section-text">
            Hoy, Javier es conocido como “el alquimista del sabor español”. En su restaurante, 
            cada plato es una celebración de su cultura: sabores intensos, productos frescos y 
            una pasión que se nota en cada detalle. Para él, cocinar no es solo alimentar, sino 
            contar la historia de un país con cada bocado.
            </p>

            <div class="contact-label">Reservar a través de llamada</div>

            <a href="tel:+51 902106989" class="body-1 contact-number hover-underline">+51 902106989</a>

            <a href="#" class="btn btn-primary">
              <span class="text text-1">Leer más</span>

              <span class="text text-2" aria-hidden="true">Leer más</span>
            </a>

          </div>

          <figure class="about-banner">

            <img src="images/about-banner.jpg" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1">

            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="images/about-abs-image.jpg" width="285" height="285" loading="lazy" alt=""
                class="w-100">
            </div>

            <div class="abs-img abs-img-2 has-before">
              <img src="images/badge-2.png" width="133" height="134" loading="lazy" alt="">
            </div>

          </figure>

          <img src="images/shape-3.png" width="197" height="194" loading="lazy" alt="" class="shape">

        </div>
      </section>


@endsection
