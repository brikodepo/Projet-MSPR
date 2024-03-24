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

<body class="size-1520 primary-color-red background-dark" >
    <!-- HEADER -->
    <header class="grid">
        <!-- Top Navigation -->
        <nav class="s-12 grid background-none background-primary-hightlight" >
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
        <section class="grid">
            <!-- Main Carousel -->
            <div class="s-12 margin-bottom carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-hide-arrows background-dark">
                <div class="item background-image" style="background-image:url(img/carousel-01.jpg)">
                    <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">Votre Centre de Ressources Interne</p>
                    <p class="text-padding text-size-20 text-dark text-uppercase background-white">Accédez aux documents, outils et informations essentiels pour votre travail quotidien.</p>
                </div>
                <div class="item background-image" style="background-image:url(img/carousel-02.jpg)">
                    <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">Collaboration et Communication</p>
                    <p class="text-padding text-size-20 text-dark text-uppercase background-white">Connectez-vous avec vos collègues et travaillez ensemble, où que vous soyez.</p>
                </div>
                <div class="item background-image" style="background-image:url(img/carousel-03.jpg)">
                    <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">Innovation et Créativité</p>
                    <p class="text-padding text-size-20 text-dark text-uppercase background-white">Partagez vos idées et trouvez l'inspiration dans notre communauté d'entreprise.</p>
                </div>
            </div>
        </section>

        <!-- SECTION 1 -->
        <section class="grid margin text-center">
            <a href="/dashboard" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-red">
                <i class="icon-sli-speedometer text-size-60 text-white center margin-bottom-15"></i>
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Tableau de Bord</h3>
            </a>
            <a href="/documents" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-blue">
                <i class="icon-sli-docs text-size-60 text-white center margin-bottom-15"></i>
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Documents Internes</h3>
            </a>
            <!-- Image-->
            <img class="m-12 l-6 l-row-2 margin-bottom" src="img/img-06.jpg">

            <a href="/communications" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-orange">
                <i class="icon-sli-speech text-size-60 text-white center margin-bottom-15"></i>
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Communication d'Équipe</h3>
            </a>
            <a href="/tools" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-aqua">
                <i class="icon-sli-wrench text-size-60 text-white center margin-bottom-15"></i>
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Outils et Applications</h3>
            </a>
        </section>

        <!-- SECTION 2 -->
        <section class="grid section margin-bottom background-dark" style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">
            <!-- Image à gauche avec largeur fixe pour les écrans plus grands -->
            <div id="depop-img" class="s-12 m-4" style="padding: 0 10px; flex: 1;">
                <img class="full-img" src="img/img-01.jpg" style="max-width: 100%; height: auto;">
            </div>

            <!-- Texte centré dans son espace -->
            <div class="s-12 m-6" style="display: flex; justify-content: center; flex-direction: column; text-align: center; flex: 1; margin-left: auto; margin-right: auto;">
                <h2 class="text-thin text-size-30 text-white text-uppercase margin-bottom-30">Votre intranet d'entreprise <b>un outil pour faciliter votre quotidien</b></h2>
                <ul style="list-style: none; padding: 0;">
                    <li>Centralisez vos communications et vos documents</li>
                    <li>Collaborez en temps réel avec vos collègues</li>
                    <li>Trouvez rapidement les informations dont vous avez besoin</li>
                    <li>Gérez vos tâches et vos projets en toute simplicité</li>
                    <li>Bénéficiez d'un support technique dédié</li>
                </ul>
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
            <h2 class="text-strong text-uppercase">Nos Contacts</h2>
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