@extends('layouts.app')
@vite('resources/css/app.css')
@vite('resources/js/app.js')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/app.css">
</head>
<body>
  <!-- Aquí va todo el contenido principal -->
<!--  Hero section  1:08:06-->
  <main>
    <article>
    <!--
    HERO
    -->
      <section class="hero text-center" aria-label="home" id="home"> 

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>
            <div class="slider-bg">
              <img src="/images/hero-slider-1.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Traditional & Hygine</p>
            
            <h1 class="display-1 hero-title slider-reveal">
              For the love of <br>
              delicious food
              
              <p class="body-2 hero-text slider-reveal">
                Come with family & feel joy of mouthwatering food
              </p>
              
              <a href="#" class="btn btn-primary slider-reveal">

                <span class="text text-1">View Our Menu</span>

                <span class="text text-2" aria-hidden="true">View Our Menu</span>

              </a>
            </h1>
          </li>

          <li class="slider-item active" data-hero-slider-item>
            <div class="slider-bg">
              <img src="/images/hero-slider-2.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Delightful experience</p>
            
            <h1 class="display-1 hero-title slider-reveal">
              Flavors Inspired by <br>
              the Seasons
              
              <p class="body-2 hero-text slider-reveal">
                Come with family & feel joy of mouthwatering food
              </p>
              
              <a href="#" class="btn btn-primary">

                <span class="text text-1">View Our Menu</span>

                <span class="text text-2" aria-hidden="true">View Our Menu</span>

              </a>
            </h1>
          </li>

          <li class="slider-item active" data-hero-slider-item>
            <div class="slider-bg">
              <img src="/images/hero-slider-3.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Delightful experience</p>
            
            <h1 class="display-1 hero-title slider-reveal">
              Where every flavor <br>
              thells a story
              
              <p class="body-2 hero-text slider-reveal">
                Come with family & feel joy of mouthwatering food
              </p>
              
              <a href="#" class="btn btn-primary">

                <span class="text text-1">View Our Menu</span>

                <span class="text text-2" aria-hidden="true">View Our Menu</span>

              </a>
            </h1>
          </li>

        </ul>
      
        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" datanext-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="" class="hero-btn has-after">
          <img src="/images/hero-icon.png" width="48" height="48" alt="booking icon">
          <span class="label-2 text-center span">Book A Tab</span>
        </a>

      </section>
    </article>
  </main>
</body>
</html>
@endsection
