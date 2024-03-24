<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Free responsive business website template</title>
  <link rel="stylesheet" href="{{ asset('../css/components.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/icons.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/responsee.css') }}" />
  <link rel="stylesheet" href="{{ asset('owl-carousel/owl.carousel.css') }}" />
  <link rel="stylesheet" href="{{ asset('owl-carousel/owl.theme.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/template-style.css') }}">
  <!-- CUSTOM STYLE -->
  <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,700,800&amp;subset=latin-ext" rel="stylesheet">
  <script type="text/javascript" src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
</head>

<!--
    You can change the color scheme of the page. Just change the class of the <body> tag. 
    You can use this class: "primary-color-white", "primary-color-red", "primary-color-orange", "primary-color-blue", "primary-color-aqua", "primary-color-dark" 
    -->

<!--
    Each element is able to have its own background or text color. Just change the class of the element.  
    You can use this class: 
    "background-white", "background-red", "background-orange", "background-blue", "background-aqua", "background-primary" 
    "text-white", "text-red", "text-orange", "text-blue", "text-aqua", "text-primary"
    -->

<body class="size-1520 primary-color-red background-dark">
  <!-- HEADER -->
  <header class="grid">
    <!-- Top Navigation -->
    <nav class="s-12 grid background-none background-primary-hightlight">
      <!-- logo -->
      <a href="{{ route('home') }}" class="m-12 l-3 padding-0.5x logo" style="padding-top: 20px;">
        <img src="img/logo.png">
      </a>
      <div class="top-nav s-12 l-9">
        <ul class="top-ul right chevron">
          <li><a href="{{ route('home') }}">Accueil</a></li>
          <li><a href="{{ route('about') }}">À propos</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- MAIN -->
  <main role="main">
    <!-- TOP SECTION -->
    <header class="grid">
      <div class="s-12 padding-2x">
        <h1 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20">Portail Interne</h1>
        <p class="text-size-20 text-white text-center center text-uppercase">Découvrez les dernières actualités, les ressources et les outils pour soutenir votre travail quotidien et la collaboration au sein de l'entreprise.</p>
      </div>
    </header>


    <!-- SECTION 1 -->
    <section class="grid section margin-bottom background-dark" style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">

      <!-- Texte centré dans son espace -->
      <div class="s-12 m-6" style="display: flex; justify-content: center; flex-direction: column; text-align: left; flex: 1; margin-left: auto; margin-right: auto;">
        <h2 class="text-thin text-size-30 text-white text-uppercase margin-bottom-20">Accédez aux <b>informations clés</b></h2>
        <p style="font-weight: bold;">Explorez les bases de données internes, trouvez des documents importants et restez informés des processus et des meilleures pratiques de l'entreprise.</p>
        <h2 class="text-thin text-size-30 text-white text-uppercase margin-top-40 margin-bottom-20">Utilisez les <b>plateformes de collaboration</b></h2>
        <p style="font-weight: bold;">Connectez-vous avec vos collègues, partagez des idées et travaillez ensemble efficacement, quel que soit l'endroit où vous vous trouvez.</p>
      </div>

      <!-- Image à gauche avec largeur fixe pour les écrans plus grands -->
      <div id="depop-img" class="s-12 m-6" style="padding: 0 10px; flex: 1;">
        <img class="full-img" src="img/img-01.jpg" style="max-width: 100%; height: auto;">
      </div>

    </section>


    <!-- SECTION 2 -->
    <section class="grid margin margin-bottom padding-2x background-primary">
      <div class="s-12 m-6 l-3">
        <span class="timer text-size-50 text-white text-strong">320</span>
        <h3 class="text-uppercase text-strong">Projets en cours</h3>
        <p class="text-size-16 margin-m-bottom-20">Découvrez les initiatives et projets actuels dynamisant notre entreprise.</p>
      </div>

      <div class="s-12 m-6 l-3">
        <span class="timer text-size-50 text-white text-strong">128</span> <span class="text-size-50 text-white text-strong">%</span>
        <h3 class="text-uppercase text-strong">Croissance annuelle</h3>
        <p class="text-size-16 margin-m-bottom-20">L'évolution positive de notre performance globale cette année.</p>
      </div>

      <div class="s-12 m-6 l-3">
        <span class="timer text-size-50 text-white text-strong">89</span><span class="text-size-50 text-white text-strong">/100</span>
        <h3 class="text-uppercase text-strong">Satisfaction employé</h3>
        <p class="text-size-16 margin-m-bottom-20">Note moyenne de satisfaction selon notre dernière enquête interne.</p>
      </div>

      <div class="s-12 m-6 l-3">
        <span class="timer text-size-50 text-white text-strong">24</span><span class="text-size-50 text-white text-strong">/7</span>
        <h3 class="text-uppercase text-strong">Support disponible</h3>
        <p class="text-size-16 margin-m-bottom-20">Notre équipe de support technique est disponible à tout moment pour vous assister.</p>
      </div>
    </section>


  </main>



  <!-- FOOTER -->
  <footer class="grid">
    <!-- Footer - top -->
    <!-- Image-->
    <div class="s-12 l-3 m-row-3 margin-bottom background-image" style="background-image:url(img/img-04.jpg)"></div>

    <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
      <h2 class="text-strong text-uppercase">À propos de nous</h2>
      <p>Retrouvez ici les informations sur la culture de notre entreprise, nos valeurs et notre mission. En savoir plus sur les équipes et l'histoire de notre réussite.</p>
    </div>

    <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
      <h2 class="text-strong text-uppercase">Ou nous sommes</h2>
      <img class="full-img" src="img/map.svg" alt="" />
    </div>

    <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
      <h2 class="text-strong text-uppercase"></h2>
      <p><b class="text-primary margin-right-10">P</b> 0800 4521 800 50</p>
      <p><b class="text-primary margin-right-10">M</b> <a class="text-primary-hover" href="mailto:contact@sampledomain.com">contact@sampledomain.com</a></p>
      <p><b class="text-primary margin-right-10">M</b> <a class="text-primary-hover" href="mailto:office@sampledomain.com">office@sampledomain.com</a></p>
    </div>

    <!-- Footer - bottom -->
    <div class="s-12 text-center margin-bottom">
      <p class="text-size-12">Copyright 2019, Vision Design - graphic zoo</p>
      <p class="text-size-12">All images have been purchased from Bigstock. Do not use the images in your website.</p>
      <p><a class="text-size-12 text-primary-hover" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a></p>
    </div>
  </footer>
  <script type="text/javascript" src="{{ asset('js/responsee.js') }}"></script>
  <script type="text/javascript" src="{{ asset('owl-carousel/owl.carousel.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/template-scripts.js') }}"></script>

</body>

</html>