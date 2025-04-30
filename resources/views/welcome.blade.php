@extends('layouts.app') 
@vite('resources/css/app.css') 
@vite('resources/js/app.js')

@section('content') 
<main>
  <article>

    <!-- HERO -->
    <section class="hero text-center" aria-label="inicio" id="home"> 
      <ul class="hero-slider" data-hero-slider> // Lista para el slider hero

        {{-- Primer slide del hero --}}
        <li class="slider-item active" data-hero-slider-item>
          <div class="slider-bg">
            <img src="/images/hero-slider-1.jpg" width="1880" height="950" alt="" class="img-cover">
          </div>

          <p class="label-2 section-subtitle slider-reveal">Donde empieza la historia</p>
          
          <h1 class="display-1 hero-title slider-reveal">
            Por el Amor a la Comida Española
          </h1>

          <p class="body-2 hero-text slider-reveal">
            Ingredientes con alma, sabores con raíz
          </p>

          <a href="#" class="btn btn-primary slider-reveal">
            <span class="text text-1">Ver Nuestro Menú</span>
            <span class="text text-2" aria-hidden="true">Ver Nuestro Menú</span>
          </a>
        </li>

        {{-- Segundo slide del hero --}}
        <li class="slider-item active" data-hero-slider-item>
          <div class="slider-bg">
            <img src="/images/hero-slider-2.jpg" width="1880" height="950" alt="" class="img-cover">
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

        {{-- Tercer slide del hero --}}
        <li class="slider-item active" data-hero-slider-item>
          <div class="slider-bg">
            <img src="/images/hero-slider-3.jpg" width="1880" height="950" alt="" class="img-cover">
          </div>

          <p class="label-2 section-subtitle slider-reveal">Sabor y Cultura en Cada Plato</p>
          
          <h1 class="display-1 hero-title slider-reveal">
            Cada Sabor Cuenta una <br> Historia
          </h1>

          <p class="body-2 hero-text slider-reveal">
            Cada plato, una historia. Ven y vívela.
          </p>

          <a href="#" class="btn btn-primary">
            <span class="text text-1">Ver Nuestro Menú</span>
            <span class="text text-2" aria-hidden="true">Ver Nuestro Menú</span>
          </a>
        </li>

      </ul>
    
      {{-- Botones de navegación del slider --}}
      <button class="slider-btn prev" aria-label="deslizar al anterior" data-prev-btn>
        <ion-icon name="chevron-back"></ion-icon>
      </button>

      <button class="slider-btn next" aria-label="deslizar al siguiente" data-next-btn>
        <ion-icon name="chevron-forward"></ion-icon>
      </button>

      {{-- Botón de reserva flotante --}}
      <a href="#contacto" class="hero-btn has-after">
        <img src="/images/hero-icon.png" width="48" height="48" alt="ícono de reserva">
        <span class="label-2 text-center span">Reservar Mesa</span>
      </a>
    </section>
    
    <!-- SERVICIO -->
    <section class="section service bg-black-10 text-center" aria-label="servicio">
      <div class="container">

        <p class="section-subtitle label-2">Tradición que se saborea</p>

        <h2 class="headline-1 section-title">Ofrecemos lo mejor</h2>

        <p class="section-text">
          Platos con historia, sabores con alma. Cada detalle celebra lo que somos.
        </p>

        <ul class="grid-list">

          {{-- Tarjeta de Desayunos --}}
          <li>
            <div class="service-card">

              <a href="#" class="has-before hover:shine">
                <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                  <img src="/images/Desayuno.png" width="285" height="336" loading="lazy" alt="Desayunos"
                    class="img-cover">
                </figure>
              </a>

              <div class="card-content">

                <h3 class="title-4 card-title">
                  <a href="#">Desayunos</a>
                </h3>

                <a href="#" class="btn-text hover-underline label-2">Ver Menú</a>

              </div>

            </div>
          </li>

          {{-- Tarjeta de Entradas --}}
          <li>
            <div class="service-card">

              <a href="#" class="has-before hover:shine">
                <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                  <img src="/images/Aperitivos.png" width="285" height="336" loading="lazy" alt="Entradas"
                    class="img-cover">
                </figure>
              </a>

              <div class="card-content">

                <h3 class="title-4 card-title">
                  <a href="#">Entradas</a>
                </h3>

                <a href="#" class="btn-text hover-underline label-2">Ver Menú</a>

              </div>

            </div>
          </li>

          {{-- Tarjeta de Bebidas --}}
          <li>
            <div class="service-card">

              <a href="#" class="has-before hover:shine">
                <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                  <img src="/images/Bebida.png" width="285" height="336" loading="lazy" alt="Bebidas"
                    class="img-cover">
                </figure>
              </a>

              <div class="card-content">

                <h3 class="title-4 card-title">
                  <a href="#">Bebidas</a>
                </h3>

                <a href="#" class="btn-text hover-underline label-2">Ver Menú</a>

              </div>

            </div>
          </li>

        </ul>

        {{-- Elementos decorativos --}}
        <img src="/images/shape-1.png" width="246" height="412" loading="lazy" alt="forma"
          class="shape shape-1 move-anim">
        <img src="/images/shape-2.png" width="343" height="345" loading="lazy" alt="forma"
          class="shape shape-2 move-anim">

      </div>
    </section>

    <!-- SOBRE NOSOTROS -->
    <section class="section about text-center" aria-labelledby="about-label" id="nosotros">
      <div class="container">

        <div class="about-content">

          <p class="label-2 section-subtitle" id="about-label">Nuestra Historia</p>

          <h2 class="headline-1 section-title">Un legado con sabor</h2>

          <p class="section-text">
            Desde 1950, llevamos la esencia de España a tu mesa. Tradición, sabor y familia en cada plato.  
            Nacimos como un pequeño rincón familiar donde se compartían recetas heredadas y momentos inolvidables. Cada ingrediente que usamos, cada plato que servimos, lleva consigo la historia de generaciones, la riqueza de nuestra tierra y la calidez de un hogar.
            Para nosotros, cocinar no es solo preparar comida: es conectar contigo, es revivir memorias, es rendir homenaje a lo que somos. Y cada vez que te sientas en nuestra mesa, pasas a ser parte de esta historia que sigue viva.
          </p>

        </div>

        {{-- Banner con imágenes --}}
        <figure class="about-banner">
          <img src="/images/about-banner.jpg" width="570" height="570" loading="lazy" alt="banner sobre nosotros"
            class="w-100" data-parallax-item data-parallax-speed="1">
          <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
            <img src="/images/about-abs-image.jpg" width="285" height="285" loading="lazy" alt="" class="w-100">
          </div>
          <div class="abs-img abs-img-2 has-before">
            <img src="/images/badge-2.png" width="133" height="134" loading="lazy" alt="">
          </div>
        </figure>
        <img src="/images/shape-3.png" width="197" height="194" loading="lazy" alt="" class="shape">
      </div>
    </section>

    <!-- PLATO ESPECIAL -->
    <section class="special-dish text-center" aria-labelledby="dish-label">

      <div class="special-dish-banner">
        <img src="/images/Paella1.jpeg" width="940" height="900" loading="lazy" alt="Paella Valenciana" class="img-cover">
      </div>

      <div class="special-dish-content bg-black-10">
        <div class="container">

          <img src="/images/badge-1.png" width="28" height="41" loading="lazy" alt="Recomendación" class="abs-img">

          <p class="section-subtitle label-2">Joyas de Nuestra Cocina</p>

          <h2 class="headline-1 section-title">Paella Valenciana</h2>

          <p class="section-text">
            La auténtica paella valenciana, preparada con arroz bomba, conejo, pollo, garrofó y judías verdes. 
            Un viaje a los campos de Valencia en cada bocado, cocinado lentamente en fuego de leña para capturar 
            la esencia de la tradición mediterránea.
          </p>

          <div class="wrapper">
            <del class="del body-3">€38.00</del>
            <span class="span body-1">€32.00</span>
          </div>

          <a href="#" class="btn btn-primary">
            <span class="text text-1">Descubrir Nuestra Carta</span>
            <span class="text text-2" aria-hidden="true">Descubrir Nuestra Carta</span>
          </a>

        </div>
      </div>

      <img src="/images/shape-4.png" width="179" height="359" loading="lazy" alt="" class="shape shape-1">
      <img src="/images/shape-8.png" width="351" height="462" loading="lazy" alt="" class="shape shape-2">

    </section>

    <!-- MENÚ -->
    <section class="section menu" aria-label="menu-label" id="menu">
      <div class="container">

        <p class="section-subtitle text-center label-2">Sabores con Historia</p>

        <h2 class="headline-1 section-title text-center">Nuestras Tradiciones</h2>

        <ul class="grid-list">

          {{-- Item Gazpacho Andaluz --}}
          <li>
            <div class="menu-card hover:card">

              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="/images/menu1.jpg" width="100" height="100" loading="lazy" alt="Gazpacho Andaluz" class="img-cover">
              </figure>

              <div>

                <div class="title-wrapper">
                  <h3 class="title-3">
                    <a href="#" class="card-title">Gazpacho Andaluz</a>
                  </h3>

                  <span class="badge label-1">Estacional</span>

                  <span class="span title-2">€8.50</span>
                </div>

                <p class="card-text label-1">
                  Fresco y vibrante, preparado con tomates maduros, pepino, pimiento y nuestro aceite de oliva virgen extra.
                </p>

              </div>

            </div>
          </li>

          {{-- Item Pulpo a la Gallega --}}
          <li>
            <div class="menu-card hover:card">

              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="/images/menu2.jpg" width="100" height="100" loading="lazy" alt="Pulpo a la Gallega" class="img-cover">
              </figure>

              <div>

                <div class="title-wrapper">
                  <h3 class="title-3">
                    <a href="#" class="card-title">Pulpo a la Gallega</a>
                  </h3>

                  <span class="span title-2">€24.00</span>
                </div>

                <p class="card-text label-1">
                  Tierno pulpo cocido a la perfección, con patata, pimentón de La Vera y nuestro aceite de oliva.
                </p>

              </div>

            </div>
          </li>

          {{-- Item Tortilla Española --}}
          <li>
            <div class="menu-card hover:card">

              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="/images/menu3.jpg" width="100" height="100" loading="lazy" alt="Tortilla Española" class="img-cover">
              </figure>

              <div>

                <div class="title-wrapper">
                  <h3 class="title-3">
                    <a href="#" class="card-title">Tortilla Española</a>
                  </h3>

                  <span class="span title-2">€12.00</span>
                </div>

                <p class="card-text label-1">
                  Clásico atemporal con huevos camperos, patatas y cebolla caramelizada, jugosa en su punto exacto.
                </p>

              </div>

            </div>
          </li>

          {{-- Item Cochinillo Segoviano --}}
          <li>
            <div class="menu-card hover:card">

              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="/images/menu4.jpg" width="100" height="100" loading="lazy" alt="Cochinillo Segoviano" class="img-cover">
              </figure>

              <div>

                <div class="title-wrapper">
                  <h3 class="title-3">
                    <a href="#" class="card-title">Cochinillo Segoviano</a>
                  </h3>

                  <span class="badge label-1">Especialidad</span>

                  <span class="span title-2">€42.00</span>
                </div>

                <p class="card-text label-1">
                  Tradición castellana: piel crujiente y carne tierna, horneado lentamente según receta centenaria.
                </p>

              </div>

            </div>
          </li>

          {{-- Item Croquetas de Jamón --}}
          <li>
            <div class="menu-card hover:card">

              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="/images/menu5.jpg" width="100" height="100" loading="lazy" alt="Croquetas de Jamón" class="img-cover">
              </figure>

              <div>

                <div class="title-wrapper">
                  <h3 class="title-3">
                    <a href="#" class="card-title">Croquetas de Jamón</a>
                  </h3>

                  <span class="span title-2">€14.00</span>
                </div>

                <p class="card-text label-1">
                  Cremosas por dentro, crujientes por fuera, elaboradas con jamón ibérico de bellota y bechamel casera.
                </p>

              </div>

            </div>
          </li>

          {{-- Item Churros con Chocolate --}}
          <li>
            <div class="menu-card hover:card">

              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="/images/menu6.jpg" width="100" height="100" loading="lazy" alt="Churros con Chocolate" class="img-cover">
              </figure>

              <div>

                <div class="title-wrapper">
                  <h3 class="title-3">
                    <a href="#" class="card-title">Churros con Chocolate</a>
                  </h3>

                  <span class="span title-2">€9.00</span>
                </div>

                <p class="card-text label-1">
                  Crujientes churros artesanales acompañados de espeso chocolate a la taza, tradición madrileña.
                </p>

              </div>

            </div>
          </li>

        </ul>

        <img src="/images/shape-5.png" width="921" height="1036" loading="lazy" alt="" class="shape shape-2 move-anim">
        <img src="/images/shape-6.png" width="343" height="345" loading="lazy" alt="" class="shape shape-3 move-anim">

      </div>
    </section>

    <!-- RESERVA -->
    <section class="reservation" id="contacto">
      <div class="container">
        <div class="form reservation-form bg-black-10">
          <form action="{{ route('reservations.store') }}" method="POST" class="form-left">
            @csrf
            <h2 class="headline-1 text-center">Reserva Online</h2>
            <div class="input-wrapper">
              <input type="text" name="name" placeholder="Tu Nombre" autocomplete="off" class="input-field" required>
              <input type="tel" name="phone" placeholder="Número de Teléfono" autocomplete="off" class="input-field" required>
            </div>
            <div class="input-wrapper">
              <div class="icon-wrapper">
                <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                <select name="person" class="input-field" required>
                  <option value="1-person">1 Persona</option>
                  <option value="2-person">2 Personas</option>
                  <option value="3-person">3 Personas</option>
                  <option value="4-person">4 Personas</option>
                  <option value="5-person">5 Personas</option>
                  <option value="6-person">6 Personas</option>
                  <option value="7-person">7 Personas</option>
                </select>
                <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
              </div>
              <div class="icon-wrapper">
                <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>
                <input type="date" name="reservation-date" class="input-field" min="{{ date('Y-m-d') }}" required>
                <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
              </div>
              <div class="icon-wrapper">
                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                <select name="time" class="input-field" required>
                  <option value="08:00">08:00 am</option>
                  <option value="09:00">09:00 am</option>
                  <option value="10:00">10:00 am</option>
                  <option value="11:00">11:00 am</option>
                  <option value="12:00">12:00 pm</option>
                  <option value="13:00">01:00 pm</option>
                  <option value="14:00">02:00 pm</option>
                  <option value="15:00">03:00 pm</option>
                  <option value="16:00">04:00 pm</option>
                  <option value="17:00">05:00 pm</option>
                  <option value="18:00">06:00 pm</option>
                  <option value="19:00">07:00 pm</option>
                  <option value="20:00">08:00 pm</option>
                  <option value="21:00">09:00 pm</option>
                  <option value="22:00">10:00 pm</option>
                </select>
                <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
              </div>
            </div>
            <textarea name="message" placeholder="Mensaje" autocomplete="off" class="input-field"></textarea>
            <button type="submit" class="btn btn-secondary-3">
              <span class="text text-1">Reservar Mesa</span>
              <span class="text text-2" aria-hidden="true">Reservar Mesa</span>
            </button>
          </form>
          <div class="form-right text-center" style="background-image: url('/images/form-pattern.png')">
            <h2 class="headline-1 text-center">Contáctenos</h2>
            <p class="contact-label">¿Tienes alguna duda o necesitas hacer un cambio en tu reserva?</p>
            <a href="https://wa.me/983134672?text=Hola,%20tengo%20una%20duda%20sobre%20mi%20reserva" class="body-1 contact-number hover-underline">
              Escríbenos por WhatsApp
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- CARACTERÍSTICAS -->
    <section class="section features text-center" aria-label="características">
      <div class="container">

        <p class="section-subtitle label-2">La Esencia de Nuestra Casa</p>

        <h2 class="headline-1 section-title">Razones para Disfrutarnos</h2>

        <ul class="grid-list">

          {{-- Característica 1: Ingredientes --}}
          <li class="feature-item">
            <div class="feature-card">

              <div class="card-icon">
                <img src="/images/features-icon-1.png" width="100" height="80" loading="lazy" alt="Ingredientes auténticos">
              </div>

              <h3 class="title-2 card-title">Ingredientes con Raíz</h3>

              <p class="label-1 card-text">
                Seleccionamos personalmente cada producto de pequeños productores españoles, garantizando autenticidad y máxima calidad en cada plato.
              </p>

            </div>
          </li>

          {{-- Característica 2: Ambiente --}}
          <li class="feature-item">
            <div class="feature-card">

              <div class="card-icon">
                <img src="/images/features-icon-2.png" width="100" height="80" loading="lazy" alt="Ambiente acogedor">
              </div>

              <h3 class="title-2 card-title">Ambiente con Alma</h3>

              <p class="label-1 card-text">
                Nuestro espacio evoca la calidez de las tabernas tradicionales con el refinamiento contemporáneo, creando memorias en cada visita.
              </p>

            </div>
          </li>

          {{-- Característica 3: Chefs --}}
          <li class="feature-item">
            <div class="feature-card">

              <div class="card-icon">
                <img src="/images/features-icon-3.png" width="100" height="80" loading="lazy" alt="Chefs expertos">
              </div>

              <h3 class="title-2 card-title">Sabiduría Culinaria</h3>

              <p class="label-1 card-text">
                Nuestros chefs, formados en las tradiciones familiares españolas, reinterpretan lo clásico con respeto e innovación.
              </p>

            </div>
          </li>

          {{-- Característica 4: Eventos --}}
          <li class="feature-item">
            <div class="feature-card">

              <div class="card-icon">
                <img src="/images/features-icon-4.png" width="100" height="80" loading="lazy" alt="Eventos culturales">
              </div>

              <h3 class="title-2 card-title">Celebraciones con Sabor</h3>

              <p class="label-1 card-text">
                Organizamos veladas especiales con música flamenca, catas de vino y cenas temáticas que transportan a las regiones de España.
              </p>

            </div>
          </li>

        </ul>

        <img src="/images/shape-7.png" width="208" height="178" loading="lazy" alt="decoración" class="shape shape-1">
        <img src="/images/shape-8.png" width="120" height="115" loading="lazy" alt="decoración" class="shape shape-2">

      </div>
    </section>

    <!-- EVENTOS -->
    <section class="section event bg-black-10" aria-label="evento">
      <div class="container">

        <p class="section-subtitle label-2 text-center">Vivencias Gastronómicas</p>

        <h2 class="section-title headline-1 text-center">Próximas Experiencias</h2>

        <ul class="grid-list">

          {{-- Evento 1: Noche de Flamenco --}}
          <li>
            <div class="event-card has-before hover:shine">

              <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                <img src="/images/opcion1.jpg" width="350" height="450" loading="lazy"
                  alt="Noche de Flamenco y Tapas" class="img-cover">

                <time class="publish-date label-2" datetime="2025-04-26">26/04/2025</time>
              </div>

              <div class="card-content">
                <p class="card-subtitle label-2 text-center">Cultura y Gastronomía</p>

                <h3 class="card-title title-2 text-center">
                  Noche de Flamenco y Tapas
                </h3>
                <p class="label-1">
                  Una velada donde el compás del flamenco se fusiona con los sabores más auténticos de Andalucía.
                </p>
              </div>

            </div>
          </li>

          {{-- Evento 2: Ruta de Vinos --}}
          <li>
            <div class="event-card has-before hover:shine">

              <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                <img src="/images/opcion2.jpg" width="350" height="450" loading="lazy"
                  alt="Ruta de Vinos Españoles" class="img-cover">

                <time class="publish-date label-2" datetime="2025-04-26">26/04/2025</time>
              </div>

              <div class="card-content">
                <p class="card-subtitle label-2 text-center">Enología y Maridaje</p>

                <h3 class="card-title title-2 text-center">
                  Ruta de Vinos Españoles
                </h3>
                <p class="label-1">
                  Descubre cinco denominaciones de origen acompañadas de quesos y embutidos seleccionados.
                </p>
              </div>

            </div>
          </li>

          {{-- Evento 3: Taller de Paellas --}}
          <li>
            <div class="event-card has-before hover:shine">

              <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                <img src="/images/opcion3.jpg" width="350" height="450" loading="lazy"
                  alt="Taller de Paellas" class="img-cover">

                <time class="publish-date label-2" datetime="2025-04-26">26/04/2025</time>
              </div>

              <div class="card-content">
                <p class="card-subtitle label-2 text-center">Cocina en Vivo</p>

                <h3 class="card-title title-2 text-center">
                  Taller de Paellas Tradicionales
                </h3>
                <p class="label-1">
                  Aprende los secretos del arroz valenciano de la mano de nuestro chef estrella.
                </p>
              </div>

            </div>
          </li>

        </ul>

      </div>
    </section>