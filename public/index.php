<?php $lang = (empty($_GET['lang']) || $_GET['lang'] == 'es')? true : false; $menu = 'index'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>JEIMMY GARCIAS</title>
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" sizes="any">
    <link rel="stylesheet" type="text/css" href="./assets/css/bundle.min.css">
</head>

<body data-page="#page-index">
    <?php require_once('header.php') ?>
    <!--Slider principal-->
    <section class="block-banner-main">
        <div id="slider-main" class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('./assets/img/header.png');">
                    <div class="container">
                        <h1><?= ($lang)? 'Tu cuerpo es tu compañero de vida.<br><span>Cuídalo, escúchalo, atiéndelo' : 'El cos és el teu company de vida.<br><span>Cuida’l, escolta’l, tingues cura d’ell ' ?></span></h1>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url('./assets/img/header.png');">
                    <div class="container">
                        <h1><?= ($lang)? 'Tu cuerpo es tu compañero de vida.<br><span>Cuídalo, escúchalo, atiéndelo' : 'El cos és el teu company de vida.<br><span>Cuida’l, escolta’l, tingues cura d’ell ' ?></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Fin slider principal-->
    <!--Bloque tratamientos-->
    <section class="block-treatments">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 wow slideInLeft" data-wow-delay="0.5s">
                    <h2>FISIOTERAPIA</h2>
                    <a href="./tratamientos-fisioterapia.php?lang=<?= ($lang)? "es" : "ca" ?>" target="_self">
                        <div class="content-image" style="background-image: url('./assets/img/image-treatments-2.png')">
                            <h3><?= ($lang)? 'VER TRATAMIENTOS' :'VEURE TRACTAMENTS' ?></h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-6 wow slideInRight" data-wow-delay="0.5s">
                    <h2>OSTEOPATÍA</h2>
                    <a href="./tratamientos-osteopatia.php?lang=<?= ($lang)? "es" : "ca" ?>" target="_self">
                        <div class="content-image" style="background-image: url('./assets/img/image-treatments-1.png')">
                            <h3><?= ($lang)? 'VER TRATAMIENTOS' :'VEURE TRACTAMENTS' ?></h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Fin bloque tratamientos-->
    <!--Bloque nuestro equipo-->
    <section class="block-our-team">
        <div class="container wow fadeIn" data-wow-delay="0.5s">
            <div class="row">
                <div class="col-12">
                    <h2>JEIMMY GARCÍA</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p><?= ($lang)? "Nuestra consulta está especializada en fisioterapia y osteopatía con profesionales de más de 20 años de experiencia en el cuidado de cada paciente. Nuestras terapias combinan el arte de la salud y la ciencia del tratamiento funcional para alcanzar la recuperación integral de cada uno de nuestros pacientes." : "La nostra consulta està especialitzada en fisioteràpia i osteopatia amb professionals de més de 20 anys d'experiència en la cura de cada pacient. Les nostres teràpies combinen l'art de la salut i la ciència del tractament funcional per assolir la recuperació integral de cadascun dels nostres pacients." ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="./empresa.php?lang=<?= ($lang)? "es" : "ca" ?>" target="_self" class="btn btn-info"><?= ($lang)? 'NUESTRO EQUIPO' :'NOSTRE EQUIP' ?></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <img src="./assets/img/logo-nuestro-equipo.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!--Fin nuestro equipo-->
    <!--Bloque programa tu consulta-->
    <?php require_once('block-program-your-consultation.php') ?>
    <!--Fin bloque programa tu consulta-->
    <?php require_once('footer.php') ?>
    <script type="text/javascript" src="./assets/js/bundle.min.js"></script>
</body>

</html>