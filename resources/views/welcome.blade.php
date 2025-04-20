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

@endsection
