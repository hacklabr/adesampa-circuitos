<?php $this->layout = 'home'; ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/icon" href="<?php $this->asset('home/favicon.ico'); ?>">
        <link rel="icon" type="image/png" href="<?php $this->asset('home/favicon-32x32.png'); ?>" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php $this->asset('home/favicon-16x16.png'); ?>" sizes="16x16">
        <link rel="manifest" href="<?php $this->asset('home//manifest.json'); ?>">
        <link rel="mask-icon" href="<?php $this->asset('home//safari-pinned-tab.svg'); ?>" color="#5bbad5">
        <meta name="apple-mobile-web-app-title" content="Guia de Compras SAMPA">
        <meta name="application-name" content="Guia de Compras SAMPA">
        <meta name="msapplication-TileColor" content="#00aba9">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="<?php $this->asset('home/css/normalize.min.css'); ?>">
        <link rel="stylesheet" href="<?php $this->asset('home/css/main.css'); ?>">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700|Raleway:300,700" rel="stylesheet">  

        <script src="<?php $this->asset('home/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'); ?>"></script>
    </head>
    <body>

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">
                    <img src="<?php $this->asset('home/img/logo-guia-de-compras.svg'); ?>" alt="Guia de Compras SAMPA">
                </h1>
                <h2 class="subtitle hidden-mobile">Lorem ipsum dolor sit amet consectetur</h2>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <h2 class="subtitle visible-mobile">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>

                <section class="lead-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in.</p>

                    <p>In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
                </section>

                <section class="routes">
                    <a href="<?php $this->subdomain('25demarco') ?>">
                        <img src="<?php $this->asset('home/img/logo-vinte-e-cinco.svg'); ?>" alt="Vinte e Cinco de Março">
                    </a>
                    <a href="<?php $this->subdomain('mercadao') ?>">
                        <img src="<?php $this->asset('home/img/logo-mercado-municipal.svg'); ?>" alt="Mercado Municipal">
                    </a>
                    <a href="<?php $this->subdomain('bomretiro') ?>">
                        <img src="<?php $this->asset('home/img/logo-bom-retiro.svg'); ?>" alt="Bom Retiro">
                    </a>
                    <a href="<?php $this->subdomain('santaifigenia') ?>">
                        <img src="<?php $this->asset('home/img/logo-santa-ifigenia.svg'); ?>" alt="Santa Ifigênia">
                    </a>
                    <a href="<?php $this->subdomain('bras') ?>">
                        <img src="<?php $this->asset('home/img/logo-bras.svg'); ?>" alt="Brás">
                    </a>
                </section>


            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <script src="<?php $this->asset('home/js/main.js') ?>"></script>
    </body>
</html>


