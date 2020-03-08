<?php $lang = (empty($_GET['lang']) || $_GET['lang'] == 'es')? true : false; $menu = 'empresa'; ?>
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
    <!--Bloque nuestra compañia-->
    <section class="block-our-company-main">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-12 col-lg-5 pl-lg-5 pt-190 text-center">
                    <h2>Nuestra<br><span>Empresa</span></h2>
                    <p class="text-center">Para nosotros, nuestros pacientes son el alma de nuestra consulta, es por ello que ponemos todos nuestros esfuerzos y conocimientos para brindar a cada persona un tratamiento personalizado y adecuado para mejorar su condición física.</p>
                    <img src="./assets/img/image-empresa-border.png" class="img-border d-none d-lg-inline-block">
                </div>
                <div class="col-12 col-lg-7 pl-lg-5">
                    <div class="content-image bg-pr" style="background-image: url('./assets/img/image-empresa-1.png');"></div>
                </div>
            </div>
            <div class="row mt-0 mt-lg-5">
                <div class="col-12 col-lg-4 pr-lg-5">
                    <div class="content-image bg-pl" style="background-image: url('./assets/img/image-empresa-2.png');"></div>
                </div>
                <div class="col-12 col-lg-8 text-left">
                    <h2 class="title-pr-5">Quienes<br><span>Somos</span></h2>
                    <p>Somos un equipo integral de fisioterapeutas y osteópatas especializados en diferentes ramas, para podernos adaptar a la condición y necesidad de cada una las personas que confían en nosotros.</p>
                    <p>Siempre mantenemos un contacto directo y profesional con cada uno de los pacientes, llevando a cabo una evaluación eficaz, un diagnóstico acertado, un tratamiento integral y un seguimiento exhaustivo de cada uno ellos.</p>
                    <p>Nuestras terapias físicas basadas en las técnicas manipulativas articulares (Mitchell) y de alta velocidad (SAT), análisis y diagnóstico en casos clínicos, análisis y tratamiento del paciente vertiginoso, entre otros han permitido que nuestros pacientes queden satisfechos con los resultados obtenidos con nuestros planes de terapia.</p>
                </div>
            </div>
            <div class="row mt-0 mt-lg-5 flex-column-reverse flex-lg-row">
                <div class="col-12 col-lg-8 pt-120">
                    <p>Somos un equipo integral de fisioterapeutas y osteópatas especializados en diferentes ramas, para podernos adaptar a la condición y necesidad de cada una las personas que confían en nosotros.</p>
                    <p>Siempre mantenemos un contacto directo y profesional con cada uno de los pacientes, llevando a cabo una evaluación eficaz, un diagnóstico acertado, un tratamiento integral y un seguimiento exhaustivo de cada uno ellos.</p>
                    <p>uestras terapias físicas basadas en las técnicas manipulativas articulares (Mitchell) y de alta velocidad (SAT), análisis y diagnóstico en casos clínicos, análisis y tratamiento del paciente vertiginoso, entre otros han permitido que nuestros pacientes queden satisfechos con los resultados obtenidos con nuestros planes de terapia.</p>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <img src="./assets/img/image-empresa-border.png" class="img-border border-two d-none d-lg-inline-block">
                    <h3>JEIMMY<br>GARCÍA</h3>
                </div>
            </div>
            <div class="row mt-0 mt-lg-5">
                <div class="col-12 col-lg-5 text-center">
                    <img src="./assets/img/image-empresa-border.png" class="img-border border-three d-none d-lg-inline-block">
                    <h4>Nuestra<br><span>Misión</span></h4>
                </div>
                <div class="col-12 col-lg-6 pt-100">
                    <p class="type-two">Nuestra misión es poder brindar a cada paciente un tratamiento  global y personalizado a través del acompañamiento en cada etapa y situación de su vida, ayudando a que encuentre su equilibrio entre mente y  cuerpo.</p>
                </div>
            </div>
        </div>
    </section>
    <!--Fin bloque nuestra compañia-->
    <!--Bloque tratamientos-->
    <section class="block-treatments">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 pb-0 pb-lg-5">
                    <h2>FISIOTERAPIA</h2>
                    <a href="" target="_self">
                        <div class="content-image" style="background-image: url('./assets/img/image-treatments-2.png')">
                            <h3>VER TRATAMIENTOS</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-6 pb-0 pb-lg-5">
                    <h2>OSTEOPATÍA</h2>
                    <a href="" target="_self">
                        <div class="content-image" style="background-image: url('./assets/img/image-treatments-1.png')">
                            <h3>VER TRATAMIENTOS</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Fin bloque tratamientos-->
    <!--Bloque programa tu consulta-->
    <?php require_once('block-program-your-consultation.php') ?>
    <!--Fin bloque programa tu consulta-->
    <?php require_once('footer.php') ?>
    <script type="text/javascript" src="./assets/js/bundle.min.js"></script>
</body>

</html>