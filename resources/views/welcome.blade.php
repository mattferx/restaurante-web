@extends('layouts.app')
@vite('resources/css/app.css')
@vite('resources/js/app.js')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mirazur</title>
</head>
<body>
<section class="reservation">
  <div class="container">
    <div class="form reservation-form bg-black-10">
      <form action="" class="form-left">
        <h2 class="headline-1 text-center">Reservación Online</h2>
        <p class="form-text text-center">
          Solicitud de reserva <a href="tel:+88123123456" class="link">+51 999999999</a>
          o complete el formulario de pedido
        </p>
        <!-- ... resto del formulario igual ... -->
      </form>

      <div class="form-right text-center" style="background-image: url('images/form-pattern.png')">
        <h2 class="headline-1 text-center">Contáctenos</h2>
        <p class="contact-label">Solicitud de Reserva</p>
        <a href="tel:+88123123456" class="body-1 contact-number hover-underline">+51 999999999</a>
        <div class="separator"></div>
        <p class="contact-label">Ubicación</p>
        <address class="body-4">
          Calle del Restaurante, Ciudad Deliciosa, <br>
          Barcelona 9578, España
        </address>
        <p class="contact-label">Horario de Almuerzo</p>
        <p class="body-4">
          Lunes a Domingo <br>
          11.00 am - 2.30pm
        </p>
        <p class="contact-label">Horario de Cena</p>
        <p class="body-4">
          Lunes a Domingo <br>
          05.00 pm - 10.00pm
        </p>
      </div>
    </div>
  </div>
</section>
<section class="section features text-center" aria-label="features">
  <div class="container">
    <p class="section-subtitle label-2">Por Qué Elegirnos</p>
    <h2 class="headline-1 section-title">Nuestras Fortalezas</h2>
    <ul class="grid-list">
      <li class="feature-item">
        <div class="feature-card">
          <div class="card-icon">
            <img src="images/features-icon-1.png" width="100" height="80" loading="lazy" alt="icon">
          </div>
          <h3 class="title-2 card-title">Comida Higiénica</h3>
          <p class="label-1 card-text">Lorem Ipsum es simplemente texto de relleno de imprenta.</p>
        </div>
      </li>
      <li class="feature-item">
        <div class="feature-card">
          <div class="card-icon">
            <img src="images/features-icon-2.png" width="100" height="80" loading="lazy" alt="icon">
          </div>
          <h3 class="title-2 card-title">Ambiente Fresco</h3>
          <p class="label-1 card-text">Lorem Ipsum es simplemente texto de relleno de imprenta.</p>
        </div>
      </li>
      <li class="feature-item">
        <div class="feature-card">
          <div class="card-icon">
            <img src="images/features-icon-3.png" width="100" height="80" loading="lazy" alt="icon">
          </div>
          <h3 class="title-2 card-title">Chefs Expertos</h3>
          <p class="label-1 card-text">Lorem Ipsum es simplemente texto de relleno de imprenta.</p>
        </div>
      </li>
      <li class="feature-item">
        <div class="feature-card">
          <div class="card-icon">
            <img src="images/features-icon-4.png" width="100" height="80" loading="lazy" alt="icon">
          </div>
          <h3 class="title-2 card-title">Eventos y Fiestas</h3>
          <p class="label-1 card-text">Lorem Ipsum es simplemente texto de relleno de imprenta.</p>
        </div>
      </li>
    </ul>
    
  </div>
</section>

      <!-- 
        - #PPROXIMOS EVENTOS
      -->

      <section class="section event bg-black-10" aria-label="event">
        <div class="container">

          <p class="section-subtitle label-2 text-center">Actualizaciones recientes</p>

          <h2 class="section-title headline-1 text-center">Próximo evento</h2>

          <ul class="grid-list">

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="images/event-1.jpg" width="350" height="450" loading="lazy"
                    alt="Sabor tan bueno que intentarás comer con los ojos." class="img-cover">

                  <time class="publish-date label-2" datetime="2025-04-22">22/04/2025</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Sabor de los alimentos</p>

                  <h3 class="card-title title-2 text-center">
                  Sabor tan bueno que intentarás comer con los ojos.
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="images/event-2.jpg" width="350" height="450" loading="lazy"
                    alt="Sabor tan bueno que intentarás comer con los ojos." class="img-cover">

                  <time class="publish-date label-2" datetime="2025-04-22">22/04/2025</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Healthy Food</p>

                  <h3 class="card-title title-2 text-center">
                  Sabor tan bueno que intentarás comer con los ojos.
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="images/event-4.jpg" width="350" height="450" loading="lazy"
                    alt="Sabor tan bueno que intentarás comer con los ojos." class="img-cover">

                  <time class="publish-date label-2" datetime="2025-04-22">22/04/2025</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Recipie</p>

                  <h3 class="card-title title-2 text-center">
                  Sabor tan bueno que intentarás comer con los ojos.
                  </h3>
                </div>

              </div>
            </li>

          </ul>

          <a href="#" class="btn btn-primary">
            <span class="text text-1">Ver Nuestro Blog</span>

            <span class="text text-2" aria-hidden="true">Ver Nuestro Blog</span>
          </a>

        </div>
      </section>

    </article>
  </main>



</body>
</html>


@endsection
