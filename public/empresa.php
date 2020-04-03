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
                <div class="col-12 col-lg-5 pl-lg-5 pt-190 text-center wow slideInLeft" data-wow-delay="0.5s">
                    <h2><?= ($lang)? 'Nuestra<br><span>Empresa</span>' : 'La nostra<br><span>Empresa</span>' ?></h2>
                    <p class="text-center"><?= ($lang)? "Para nosotros, nuestros pacientes son el alma de nuestra consulta, es por ello que ponemos todos nuestros esfuerzos y conocimientos para brindar a cada persona un tratamiento personalizado y adecuado para mejorar su condición física." : "Per a nosaltres, els nostres pacients són l'ànima de la nostra consulta, és per aquest motiu que posem tots els nostres esforços i coneixements per a oferir a cada persona un tractament personalitzat i adequat per a millorar la seva condició física." ?></p>
                    <img src="./assets/img/image-empresa-border.png" class="img-border d-none d-lg-inline-block">
                </div>
                <div class="col-12 col-lg-7 pl-lg-5 wow slideInRight" data-wow-delay="0.5s">
                    <div class="content-image bg-pr" style="background-image: url('./assets/img/image-empresa-1.png');"></div>
                </div>
            </div>
            <div class="row mt-0 mt-lg-5">
                <div class="col-12 col-lg-4 pr-lg-5 wow slideInLeft" data-wow-delay="0.5s">
                    <div class="content-image bg-pl" style="background-image: url('./assets/img/image-empresa-2.png');"></div>
                </div>
                <div class="col-12 col-lg-8 text-left wow slideInRight" data-wow-delay="0.5s">
                    <h2 class="title-pr-5"><?= ($lang)? 'Quienes<br><span>Somos</span>' : 'QUI<br><span>SOM</span>' ?></h2>
                    <p><?= ($lang)? 'Somos un equipo integral de fisioterapeutas y osteópatas especializados en diferentes ramas, para podernos adaptar a la condición y necesidad de cada una las personas que confían en nosotros.' : 'Som un equip integral de fisioterapeutes i osteòpates especialitzats en diferents branques, per poder-nos adaptar a la condició i necessitat de cadascuna de les persones que confien en nosaltres.' ?></p>
                    <p><?= ($lang)? 'Siempre mantenemos un contacto directo y profesional con cada uno de los pacientes, llevando a cabo una evaluación eficaz, un diagnóstico acertado, un tratamiento integral y un seguimiento exhaustivo de cada uno ellos.' : 'Sempre mantenim un contacte directe i professional amb cadascun dels pacients, portant a terme una avaluació eficaç, un diagnòstic encertat, un tractament integral i un seguiment exhaustiu de cadascun d’ells.' ?></p>
                    <p><?= ($lang)? "Nuestras terapias físicas basadas en las técnicas manipulativas articulares (Mitchell) y de alta velocidad (SAT), análisis y diagnóstico en casos clínicos, análisis y tratamiento del paciente vertiginoso, entre otros han permitido que nuestros pacientes queden satisfechos con los resultados obtenidos con nuestros planes de terapia." : "Les nostres teràpies físiques basades en les tècniques manipulatives articulars (Mitchell) i d'alta velocitat (SAT), anàlisi i diagnòstic en casos clínics, anàlisi i tractament del pacient vertiginós, entre d'altres han permès que els nostres pacients quedin satisfets amb els resultats obtinguts amb els nostres plans de teràpia." ?></p>
                </div>
            </div>
            <div class="row mt-0 mt-lg-5 flex-column-reverse flex-lg-row">
                <div class="col-12 col-lg-8 pt-120 wow slideInLeft" data-wow-delay="0.5s">
                    <p><?= ($lang)? "Toda mi vida me he interesado por el bienestar de las personas, por todo lo relacionado con el deporte y la salud. Siempre me he implicado en cada uno de los tratamientos de los pacientes que han acudido a mi consulta durante todos estos años de vida profesional. Han sido años maravillosos de crecimiento personal y profesional que me han encaminado a entender al ser humano como un conjunto de alma-cuerpo-esencia. El hecho de especializarme en diferentes ramas de la fisioterapia y osteopatía me han permitido tratar a cada paciente de forma integral y personalizada consiguiendo los mejores resultados." : "Tota la meva vida m'he interessat pel benestar de les persones, per tot el relacionat amb l'esport i la salut. Sempre m'he implicat en cadascun dels tractaments dels pacients que han acudit a la meva consulta durant tots aquests anys de vida professional. Han estat anys meravellosos de creixement personal i professional que m'han encaminat a entendre a l'ésser humà com un conjunt d'ànima-cos-essència. El fet d’especialitzar-me en diferents branques de la fisioteràpia i osteopatia m'han permès tractar a cada pacient de forma integral i personalitzada aconseguint els millors resultats." ?></p>
                    <p><?= ($lang)? "Las diferentes especialidades en que me he formado, tales como el área uroginecológica y reeducación de suelo pélvico, obstetricia, la pediatría, el preparto, parto y posparto, el área neurológica y osteomuscular, me han dado una gran experiencia para realizar un plan de trabajo personalizado que beneficia no sólo a cada individuo en mente y cuerpo sino también a nivel familiar." : "Les diferents especialitats en que m’he format, com ara l'àrea uroginecològica i reeducació de sòl pèlvic, obstetricia, la pediatria, el prepart, part i postpart, l'àrea neurològica i osteomuscular, m'han donat una gran experiència per a realitzar un pla de treball personalitzat que beneficia no només a cada individu en ment i cos sinó també a nivell familiar." ?></p>
                    <p><?= ($lang)? "Viviana Acuña Fisioterapeuta y Osteópata D.O, apasionada y enamorada de su profesión. Ha realizado formaciones dentro de la osteopatía del embarazo y la ginecología, tratamiento osteopático infantil, terapia respiratoria en bebés y adultos, osteopatía pediátrica, técnicas para la manipulación de tejidos de alta velocidad (sados), mareos y problemas del sistema vestibular , clínica del terapeuta con casos clínicos y ayudar a encontrar el equilibrio entre el cuerpo y su naturaleza." : "Viviana Acuña Fisioterapèuta i Osteopata D.O, apassionada i enamorada de la seva professió. Ha realitzat formacions dins de la osteopatía de l'embaràs i la ginecologia, tractament osteopàtic infantil, teràpia respiratòria en nadons i adults, osteopatia pediátrica, tècniques per a la manipulació de teixits d'alta velocitat (sats), marejos i problemes del sistema vestibular, clínica del terapeuta amb casos clínics i ajudar a trobar l'equilibri entre el cos i la seva naturalesa." ?></p>
                </div>
                <div class="col-12 col-lg-4 text-center wow slideInRight" data-wow-delay="0.5s">
                    <img src="./assets/img/image-empresa-border.png" class="img-border border-two d-none d-lg-inline-block">
                    <h3>JEIMMY<br>GARCÍA</h3>
                </div>
            </div>
            <div class="row mt-0 mt-lg-5">
                <div class="col-12 col-lg-5 text-center wow slideInLeft" data-wow-delay="0.5s">
                    <img src="./assets/img/image-empresa-border.png" class="img-border border-three d-none d-lg-inline-block">
                    <h4><?= ($lang)? "Nuestra<br><span>Misión</span>" : "La nostra<br><span>Missiò</span>" ?></h4>
                </div>
                <div class="col-12 col-lg-6 pt-100 wow slideInRight" data-wow-delay="0.5s">
                    <p class="type-two"><?= ($lang)? "Nuestra misión es poder brindar a cada paciente un tratamiento  global y personalizado a través del acompañamiento en cada etapa y situación de su vida, ayudando a que encuentre su equilibrio entre mente y  cuerpo." : "La nostra missió és poder oferir a cada pacient un tractament global i personalitzat a través de l'acompanyament en cada etapa i situació de la seva vida, ajudant a que trobi el seu equilibri entre la ment i el cos." ?></p>
                </div>
            </div>
        </div>
    </section>
    <!--Fin bloque nuestra compañia-->
    <!--Bloque tratamientos-->
    <section class="block-treatments">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 wow slideInLeft" data-wow-delay="0.5s">
                    <h2><?= ($lang)? "FISIOTERAPIA" : "FISIOTERÀPIA" ?></h2>
                    <a href="./tratamientos-fisioterapia.php?lang=<?= ($lang)? "es" : "ca" ?>" target="_self">
                        <div class="content-image" style="background-image: url('./assets/img/image-treatments-2.png')">
                            <h3><?= ($lang)? 'VER TRATAMIENTOS' :'VEURE TRACTAMENTS' ?></h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-6 wow slideInRight" data-wow-delay="0.5s">
                    <h2><?= ($lang)? "OSTEOPATÍA" : "OSTEOPATIA" ?></h2>
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
    <!--Bloque programa tu consulta-->
    <?php require_once('block-program-your-consultation.php') ?>
    <!--Fin bloque programa tu consulta-->
    <?php require_once('footer.php') ?>
    <script type="text/javascript" src="./assets/js/bundle.min.js"></script>
</body>

</html>