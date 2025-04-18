<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mirazur</title>
  <meta name="title" content="Mirazur">
  <link rel="shortcut icon" href="./images/loguito.svg" type="image/svg+xml">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <!-- 
    - precarga de imágenes 
  -->
  {{-- <link rel="preload" as="image" href="/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="/images/hero-slider-3.jpg"> --}}
</head>

<body id="inicio">
  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Mirazur</p>
  </div>

  <!-- 
    - #BARRA SUPERIOR
  -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
           Carrer del Bisbe, 08002 Barcelona, España
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Horario: 8:00 am a 10:00 pm</span>
      </div>

      <a href="tel:+51 902106989" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">+51 902106989</span>
      </a>

      <div class="separator"></div>

      <a href="reservas@restaurante.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">reservas@restaurante.com</span>
      </a>

    </div>
  </div>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="/images/mirazurrojo.svg" width="160" height="50" alt="Grilli - Inicio">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="cerrar menú" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="/images/mirazurrojo.svg" width="160" height="50" alt="Grilli - Inicio">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#inicio" class="navbar-link hover-underline active">
              <div class="separator"></div>
              <span class="span">Inicio</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#menu" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Menús</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#nosotros" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Nosotros</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Nuestros Chefs</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Contacto</span>
            </a>
          </li>

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">Visítanos</p>

          <address class="body-4">
            📍 Carrer del Bisbe,, <br>
            08002 Barcelona, España
          </address>

          <p class="body-4 navbar-text">Abierto: 9:30 am - 2:30pm</p>

          <a href="reservas@mirazur.com" class="body-4 sidebar-link">reservas@mirazur.com</a>

          <div class="separator"></div>

          <p class="contact-label">Solicitud de Reserva</p>

          <a href="tel:+51 902106989" class="body-1 contact-number hover-underline">
            +51 902106989
          </a>
        </div>

      </nav>

      <a href="#" class="btn btn-secondary">
        <span class="text text-1">Reservar Mesa</span>
        <span class="text text-2" aria-hidden="true">Reservar Mesa</span>
      </a>

      <button class="nav-open-btn" aria-label="abrir menú" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
    
  </header>
  