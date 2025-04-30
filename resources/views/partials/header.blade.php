<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Mirazur</title> 
  <meta name="title" content="Mirazur"> 
  <script src="/path/to/your/js/file.js"></script> 
  <link rel="shortcut icon" href="./images/loguito.svg" type="image/svg+xml"> 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  @vite('resources/css/app.css')

<body id="inicio">
  
  <!-- Preloader con animación -->
  <div class="preload" data-preaload>
    <div class="circle"></div> 
    <p class="text">Mirazur</p> 
  </div>

  <!-- Barra superior con información de contacto -->
  <div class="topbar">
    <div class="container">
      <!-- Elemento de dirección -->
      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon> 
        </div>
        <span class="span">
           Carrer del Bisbe, 08002 Barcelona 
        </span>
      </address>

      <div class="separator"></div> 

      <!-- Elemento de horario -->
      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>
        <span class="span">Horario: 8:00 am a 10:00 pm</span> 
      </div>

      <div class="separator"></div> 

      <!-- Enlace de correo electrónico -->
      <a href="reservas@rmirazur.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon> 
        </div>
        <span class="span">reservas@mirazur.com</span> 
      </a>
    </div>
  </div>

  <!-- Cabecera principal del sitio -->
  <header class="header" data-header>
    <div class="container">
      <!-- Logo principal -->
      <a href="#" class="logo">
        <img src="/images/mirazurrojo.svg" width="160" height="50" alt="Grilli - Inicio"> 
      </a>

      <!-- Menú de navegación principal -->
      <nav class="navbar" data-navbar>
        <!-- Botón para cerrar el menú (visible en móvil) -->
        <button class="close-btn" aria-label="cerrar menú" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <!-- Logo dentro del menú (para versión móvil) -->
        <a href="#" class="logo">
          <img src="/images/mirazurrojo.svg" width="160" height="50" alt="Grilli - Inicio">
        </a>

        <!-- Lista de elementos del menú -->
        <ul class="navbar-list">
          <!-- Elemento del menú - Inicio -->
          <li class="navbar-item">
            <a href="#inicio" class="navbar-link hover-underline active">
              <div class="separator"></div>
              <span class="span">Inicio</span>
            </a>
          </li>

          <!-- Elemento del menú - Menús -->
          <li class="navbar-item">
            <a href="#menu" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Menús</span>
            </a>
          </li>

          <!-- Elemento del menú - Nosotros -->
          <li class="navbar-item">
            <a href="#nosotros" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Nosotros</span>
            </a>
          </li>

          <!-- Elemento del menú - Contacto -->
          <li class="navbar-item">
            <a href="#contacto" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Contacto</span>
            </a>
          </li>
        </ul>

        <!-- Información de contacto en el menú (para móvil) -->
        <div class="text-center">
          <p class="headline-1 navbar-title">Visítanos</p>
        
          <address class="body-4">
            📍 Carrer del Bisbe,<br>
            08002 Barcelona
          </address>
        
          <p class="body-4 navbar-text">Abierto: 8:00 am - 10:00pm</p>
        
          <a href="mailto:reservas@mirazur.com" class="body-4 sidebar-link">reservas@mirazur.com</a>
        
          <div class="separator"></div>
        
          <p class="contact-label">¿Tienes dudas sobre tu reserva?</p>
        
          <a href="https://wa.me/51983134672?text=Hola,%20tengo%20una%20duda%20sobre%20mi%20reserva" class="body-1 contact-number hover-underline">
            Escríbenos por WhatsApp
          </a>
        </div>
      </nav>

      <!-- Botón para reservar mesa -->
      <a href="#contacto" class="btn btn-secondary">
        <span class="text text-1">Reservar Mesa</span>
        <span class="text text-2" aria-hidden="true">Reservar Mesa</span>
      </a>

      <!-- Botón para abrir el menú (versión móvil) -->
      <button class="nav-open-btn" aria-label="abrir menú" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <!-- Overlay para el menú móvil -->
      <div class="overlay" data-nav-toggler data-overlay></div>
    </div>
  </header>