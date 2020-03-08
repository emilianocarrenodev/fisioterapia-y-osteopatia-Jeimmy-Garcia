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
    <!--Bloque tratamientos osteopatía-->
    <section class="block-osteopatia-treatments">
        <div class="bg-container-osteopatia-main">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <img src="./assets/img/image-osteopatria-treatments-1.png" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6 pl-3 pl-lg-5">
                        <h1>OSTEOPATÍA</h1>
                        <p>La osteopatía es una técnica manual,  desarrollada por Andrew Taylor Still, (1828 -1917) médico y cirujano americano, que busca a través de la manipulación de los diferentes tejidos del cuerpo,  activar los mecanismos de autocuración y regulación del organismo. La valoración del paciente se hace desde la globalidad, para poder llegar a un correcto diagnóstico y un tratamiento específico de cada individuo y de cada patología.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-container-osteopatia">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 text-center">
                        <div class="container-main-top">
                            <h2>Nuestros<br><span>Servicios</span></h2>
                            <p>Encontramos tres tipos de tratamientos osteopáticos que permiten tratar cada uno de los diferentes sistemas</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="./assets/img/image-osteopatria-treatments-2.png" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8 pr-3 pr-lg-5">
                        <div class="row">
                            <div class="col-12 col-lg-6 pr-3 pr-lg-5">
                                <h3>Osteopatía<br>estructural:</h3>
                                <p>Enfocada al tratamiento del aparato neuro-músculo-esquelético.</p>
                            </div>
                            <div class="col-12 col-lg-6 pl-3 pl-lg-5">
                                <h3>Osteopatía<br>craneal sacral:</h3>
                                <p>Enfocada a la estructura comprendida entre el sacro y el cráneo, sistema meníngeo y sistema nervioso central.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 pr-3 pr-lg-5">
                                <h3>Osteopatia<br>osteomuscular</h3>
                                <p>Enfocada al tratamiento de  lesiones del aparato osteomuscular, tales como tendinopatías, desgarros musculares, artrosis, escoliosis, entre otros.</p>
                            </div>
                            <div class="col-12 col-lg-6 pl-3 pl-lg-5">
                                <h3>Osteopatía para el sistema<br>neurológico y vascular</h3>
                                <p>Enfocada en la valoración y en el tratamiento de neuralgias  y problemas vasculares tales como ciática, túnel del carpo, neuralgias faciales, migrañas, problemas de sueño.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 pr-3 pr-lg-5">
                                <h3>Osteopatía<br>obstétrica</h3>
                                <p>Enfocada al seguimiento y  tratamiento del embarazo, problemas del suelo pélvicoe inguinales, problemas de adaptación de la postura, tratamiento de episiotomías y todas las adaptaciones y bloqueos presentes en el postparto, entre otros.</p>
                            </div>
                            <div class="col-12 col-lg-6 pl-3 pl-lg-5">
                                <h3>Osteopatía sistema<br>respiratorio y orofarínge</h3>
                                <p>Enfocada en la valoración y el tratamiento de patologías del sistema orofacial y respiratorio tales como bronquitis, disfagias, problemas del habla, problemas de ATM,  obstrucción de lagrimales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 pl-3 pl-lg-5">
                        <div class="row">
                            <div class="col-12">
                                <h3>Osteopatía<br>visceral:</h3>
                                <p>Enfocada a valorar y tratar todo lo relacionado con el sistema visceral, como por ejemplo, problemas de gastritis, reflujo gastroesofágico, hernia de hiato, digestiones pesadas, colon irritable, hemorroides,  espasmos abdominales, problemas endocrinos y hormonales, entre otros</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h3>Osteopatía<br>Pediátrica</h3>
                                <p>La osteopatía pediátrica abarca el tratamiento en el que se utilizan técnicas manuales, adaptadas y específicas para los bebés y los niños. En esta rama de la osteopatía se diagnostican las disfunciones de movilidad del tejido que pueden tener los bebes y los niños desde su nacimiento y a lo largo de su desarrollo.  Dentro de las diferentes disfunciones podemos encontrar: Asimetrías craneales, cólicos del lactante, problemas de reflujo, insomnio, escoliósis, problemas digestivos (reflujo, gases y estreñimiento), otitis, bronquitis, bronquiolitis, neumonia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4>FISIOTERAPIA</h4>
                    <a href="./tratamientos-fisioterapia.php" target="_self" class="btn btn-info">VER TRATAMIENTOS</a>
                </div>
            </div>
        </div>
    </section>
    <!--Fin bloque tratamientos osteopatía-->
    <!--Bloque programa tu consulta-->
    <?php require_once('block-program-your-consultation.php') ?>
    <!--Fin bloque programa tu consulta-->
    <?php require_once('footer.php') ?>
    <script type="text/javascript" src="./assets/js/bundle.min.js"></script>
</body>

</html>