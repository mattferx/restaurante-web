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
            <img src="{{asset('images/desayuno.jpg') }}" width="285" height="336" loading="lazy" alt="Desayuno"
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
            <img src="{{asset('images/aperitivo.jpg')}}" width="285" height="336" loading="lazy" alt="Aperitivos"
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
              <img src="{{asset('images/bebida.jpg')}}" width="285" height="336" loading="lazy" alt="Bebidas"
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
          <img src="{{asset('images/shape-1.png')}}" width="246" height="412" loading="lazy" alt="shape"
            class="shape shape-1 move-anim">
          <img src="{{asset('images/shape-2.png')}}" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">
        </div>
      </section>

      <!--Acerca de nosotros-->
      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">Nuestra historia</p>

            <h2 class="headline-1 section-title">Cada sabor cuenta una historia</h2>

            <p class="section-text">
              La gastronomía española es fruto de siglos de historia, mezcla de culturas y 
              tradiciones que han dejado una profunda huella en sus sabores. De la influencia romana y árabe a los productos traídos de América, cada región ha aportado sus propias especialidades, creando una cocina diversa, rica y reconocida en todo el mundo. España celebra su pasión por la comida a través de platos emblemáticos como la paella, el jamón ibérico y las tapas, auténticos símbolos de su identidad culinaria.
            </p>
            <div class="contact-label">Reservar a través de llamada</div>

            <a href="tel:+804001234567" class="body-1 contact-number hover-underline">+80 (400) 123 4567</a>

            <a href="#" class="btn btn-primary">
              <span class="text text-1">leer más</span>

              <span class="text text-2" aria-hidden="true">leer más</span>
            </a>

          </div>

          <figure class="about-banner">
            <img src="{{asset('images/about-banner.jpg')}}" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1">

            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="{{asset('images/about-abs-image.jpg')}}" width="285" height="285" loading="lazy" alt=""
                class="w-100">
            </div>

            <div class="abs-img abs-img-2 has-before">
              <img src="{{asset('images/badge-2.png')}}" width="133" height="134" loading="lazy" alt="">
            </div>

          </figure>
          <img src="{{asset('images/shape-3.png')}}" width="197" height="194" loading="lazy" alt="" class="shape">
        </div>
      </section>


      <!--platillos especiales-->

      <section class="special-dish text-center" aria-labelledby="dish-label">

        <div class="special-dish-banner">
          <img src="{{asset('images/special-dish-banner.jpg')}}" width="940" height="900" loading="lazy" alt="special dish"
            class="img-cover">
        </div>

        <div class="special-dish-content bg-black-10">
          <div class="container">

            <img src="{{asset('images/badge-1.png')}}" width="28" height="41" loading="lazy" alt="badge" class="abs-img">

            <p class="section-subtitle label-2">Platilos especiales</p>

            <h2 class="headline-1 section-title">Paella Valenciana</h2>
            <p class="section-text">
              La Paella Valenciana es el alma de la cocina española: una mezcla vibrante de arroz, pollo, conejo y verduras frescas, cocinados lentamente con azafrán y especias tradicionales. Un festín de sabores auténticos que celebra nuestras raíces mediterráneas.
            </p>
            <div class="wrapper">
              <del class="del body-3">$40.00</del>

              <span class="span body-1">$20.00</span>
            </div>

            <a href="#" class="btn btn-primary">
              <span class="text text-1">View All Menu</span>

              <span class="text text-2" aria-hidden="true">View All Menu</span>
            </a>

          </div>
        </div>

        <img src="{{asset('images/shape-4.png')}}" width="179" height="359" loading="lazy" alt="" class="shape shape-1">

        <img src="{{asset('images/shape-9.png')}}" width="351" height="462" loading="lazy" alt="" class="shape shape-2">
      </section>     


      <!--Selección de menu's-->
      <!-- 
        - #MENU
      -->

      <section class="section menu" aria-label="menu-label" id="menu">
        <div class="container">

          <p class="section-subtitle text-center label-2">Selección especial</p>

          <h2 class="headline-1 section-title text-center">Selección de Platos Principales</h2>

          <ul class="grid-list">

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{asset('images/dish-1.jpg')}}" width="100" height="100" loading="lazy" alt="Greek Salad"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Saj azerbaiyano</a>
                    </h3>

                    <span class="badge label-1">Seasonal</span>

                    <span class="span title-2">$25.50</span>
                  </div>

                  <p class="card-text label-1">
                    Ingredientes: aguacate, carne de cangrejo, cebolla morada, ensalada de cangrejo, pimiento rojo relleno y pimiento verde.
                  </p>
                </div>
              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{asset('images/dish-2.jpeg')}}" width="100" height="100" loading="lazy" alt="Lasagne"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Spaghetti alle vongole</a>
                    </h3>

                    <span class="span title-2">$40.00</span>
                  </div>

                  <p class="card-text label-1">
                    Ingredientes: espaguetis, almejas, ajo, aceite de oliva, vino blanco, perejil fresco, sal y pimienta.
                  </p>


                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{asset('images/dish-3.jpg')}}" width="100" height="100" loading="lazy" alt="Butternut Pumpkin"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Paella de camarones</a>
                    </h3>

                    <span class="span title-2">$10.00</span>
                  </div>

                  <p class="card-text label-1">
                    Ingredientes: arroz, camarones, calamares, mejillones, almejas, pimiento rojo, guisantes, tomate, ajo, aceite de oliva, caldo de pescado, azafrán, sal y pimienta.
                  </p>


                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{asset('images/dish-4.jpg')}}" width="100" height="100" loading="lazy" alt="Tokusen Wagyu"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Papa con champiñones</a>
                    </h3>

                    <span class="badge label-1">New</span>

                    <span class="span title-2">$39.00</span>
                  </div>

                  <p class="card-text label-1">
                    Ingredientes: papas, champiñones, ajo, cebolla, aceite de oliva, sal, pimienta y perejil fresco.
                  </p>


                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{asset('images/dish-5.jpg')}}" width="100" height="100" loading="lazy" alt="Olivas Rellenas"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Albondigas con salsa de Tomate</a>
                    </h3>

                    <span class="span title-2">$25.00</span>
                  </div>

                  <p class="card-text label-1">
                    Ingredientes: carne molida de res, carne molida de cerdo, pan rallado, huevo, ajo, perejil, sal, pimienta, tomate triturado, cebolla, aceite de oliva y hierbas aromáticas.
                  </p>


                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{asset('images/dish-6.jpg')}}" width="100" height="100" loading="lazy" alt="Opu Fish"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Paella de Mariscos</a>
                    </h3>

                    <span class="span title-2">$49.00</span>
                  </div>

                  <p class="card-text label-1">
                    Ingredientes: arroz, camarones, calamares, mejillones, almejas, pimiento rojo, guisantes, tomate, ajo, aceite de oliva, caldo de pescado, azafrán, sal y pimienta.
                  </p>


                </div>

              </div>
            </li>

          </ul>

          <p class="menu-text text-center">
            During winter daily from <span class="span">7:00 pm</span> to <span class="span">9:00 pm</span>
          </p>

          <a href="#" class="btn btn-primary">
            <span class="text text-1">View All Menu</span>

            <span class="text text-2" aria-hidden="true">View All Menu</span>
          </a>

          <img src="{{asset('images/shape-5.png')}}" width="921" height="1036" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">
          <img src="{{asset('images/shape-6.png')}}" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-3 move-anim">

        </div>
      </section>
</main>




@endsection

