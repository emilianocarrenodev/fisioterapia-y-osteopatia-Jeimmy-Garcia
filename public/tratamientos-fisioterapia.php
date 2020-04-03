<?php $lang = (empty($_GET['lang']) || $_GET['lang'] == 'es')? true : false; $menu = 'tratamientos'; ?>
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
    <!--Bloque tratamientos fisioterapia-->
    <section class="block-physiotherapy-treatments">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 pr-lg-0">
                    <div class="content-image wow slideInLeft" data-wow-delay="0.5s" style="background-image: url('./assets/img/image-treatments-2.png');"></div>
                    <div class="container-left-main wow slideInLeft" data-wow-delay="0.5s">
                        <h2><?= ($lang)? "Nuestros<br><span>Servicios</span>" : "Els nostres<br><span>Serveis</span>" ?></h2>
                        <p><?= ($lang)? "buscamos ofrecer un programa de rehabilitación diferente para cada individuo, adaptado a sus necesidades físicas, personales, sociales y emocionales" : "Busquem oferir un procés de rehabilitació diferent per a cada individu, adaptat a les seves necessitats físiques, personals, socials i emocionals:" ?></p>
                    </div>
                    <img src="./assets/img/image-physiotherapy-treatments-2.png" class="img-fluid wow slideInLeft" data-wow-delay="0.5s">
                </div>
                <div class="col-12 col-lg-7 bg-main mt-5 pt-0 pt-lg-3">
                    <div class="container-p-main wow slideInRight" data-wow-delay="0.5s">
                        <h1><?= ($lang)? "FISIOTERAPIA" : "FISIOTERÀPIA" ?></h1>
                        <p><?= ($lang)? "A lo largo de los años la fisioterapia se ha ido consolidando como el arte y la ciencia del tratamiento funcional que busca el bienestar de las personas. La fisioterapia se ha ido transformando en una ciencia multidisciplinar para poder dar en cada tratamiento un servicio INTEGRAL y PERSONALIZADO, donde cada paciente se implica en su proceso de rehabilitación." : "Al llarg dels anys la fisioteràpia s'ha anat consolidant com l'art i la ciència del tractament funcional que busca el benestar de les persones. La fisioteràpia s'ha anat transformant en una ciència multidisciplinar per poder donar a cada tractament un servei INTEGRAL i PERSONALITZAT, on cada pacient s'implica del seu procés de rehabilitació." ?></p>
                    </div>
                    <div class="row wow slideInRight" data-wow-delay="0.5s">
                        <div class="col-12 col-lg-6">
                            <ul>
                                <li><?= ($lang)? "Drenaje linfático<br>manual" : "Drenatge limfàtic<br>manual" ?></li>
                                <li><?= ($lang)? "Reeducación<br>Postural" : "Reeducació<br>Postural" ?></li>
                                <li><?= ($lang)? "Masajes<br>descontracturantes" : "Massatges<br>descontracturants" ?></li>
                                <li><?= ($lang)? "Preparación al parto<br>y rehabilitación<br>post parto" : "Preparació al part<br>i rehabilitació<br> postpart" ?></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-6">
                            <ul>
                                <li><?= ($lang)? "Ejercicio<br>terapéutico" : "Exercici<br>terapèutic" ?></li>
                                <li><?= ($lang)? "Consciencia corporal<br>y respiratoria" : "Consciència corporal<br>i respiratòria" ?></li>
                                <li><?= ($lang)? "Consciencia corporal CORE<br>(trabajo de activación muscular)" : "CORE<br>(treball d'activació muscular)" ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="container-p-main type-two wow slideInRight" data-wow-delay="0.5s">
                        <h2><?= ($lang)? "Pilates<br><span>Funcional</span>" : "Pilates<br><span>Funcional</span>" ?></h2>
                        <p><?= ($lang)? "El Pilates es una técnica de rehabilitación que se ha incluido dentro de las actividades físicas. Tiene una base teórico científica muy especializada que busca trabajar el centro de nuestro control muscular (CORE) y el uso de la mente buscando el equilibrio de todo el cuerpo. Con la técnica de Pilates se trabajan las necesidades de cada persona y se armonizan  procesos de aprendizaje bidireccional, concentración, consciencia corporal y el ejercicio físico." : "El Pilates és una tècnica de rehabilitació que s'ha inclòs dins de les activitats físiques. Té una base teòrica científica molt especialitzada que busca treballar el centre del nostre control muscular (CORE) i l'ús de la ment buscant l'equilibri de tot el cos. Amb la tècnica de Pilates es treballa les necessitats de cada persona i s'harmonitzen processos d'aprenentatge bidireccional, concentració, consciència corporal i l'exercici físic." ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h3><?= ($lang)? "OSTEOPATÍA" : "OSTEOPATIA" ?></h3>
                    <a href="./tratamientos-osteopatia.php?lang=<?= ($lang)? "es" : "ca" ?>" target="_self" class="btn btn-info"><?= ($lang)? 'VER TRATAMIENTOS' :'VEURE TRACTAMENTS' ?></a>
                </div>
            </div>
        </div>
    </section>
    <!--Fin bloque tratamientos fisioterapia-->
    <!--Bloque programa tu consulta-->
    <?php require_once('block-program-your-consultation.php') ?>
    <!--Fin bloque programa tu consulta-->
    <?php require_once('footer.php') ?>
    <script type="text/javascript" src="./assets/js/bundle.min.js"></script>
</body>

</html>