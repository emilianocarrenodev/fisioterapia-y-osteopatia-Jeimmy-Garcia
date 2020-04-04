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
                    <div class="col-12 col-lg-6 wow slideInLeft" data-wow-delay="0.5s">
                        <img src="./assets/img/image-osteopatria-treatments-1.png" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6 pl-3 pl-lg-5 wow slideInRight" data-wow-delay="0.5s">
                        <h1><?= ($lang)? "OSTEOPATÍA" : "OSTEOPATIA" ?></h1>
                        <p><?= ($lang)? "La osteopatía es una técnica manual,  desarrollada por Andrew Taylor Still, (1828 -1917) médico y cirujano americano, que busca a través de la manipulación de los diferentes tejidos del cuerpo,  activar los mecanismos de autocuración y regulación del organismo. La valoración del paciente se hace desde la globalidad, para poder llegar a un correcto diagnóstico y un tratamiento específico de cada individuo y de cada patología." : "L'osteopatia és una tècnica manual, desenvolupada per Andrew Taylor Still, (1828-1917) metge i cirurgià americà, que busca a través de la manipulació dels diferents teixits del cos, activar els mecanismes d'autocuració i regulació de l'organisme. La valoració del pacient es fa des de la globalitat, per poder arribar a un correcte diagnòstic i un tractament específic de cada individu i de cada patologia." ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-container-osteopatia">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 text-center wow slideInLeft" data-wow-delay="0.5s">
                        <div class="container-main-top">
                            <h2><?= ($lang)? "Nuestros<br><span>Servicios</span>" : "Els nostres<br><span>Serveis</span>" ?></h2>
                            <p><?= ($lang)? "Encontramos varios tipos de tratamientos osteopáticos que permiten tratar cada uno de los diferentes sistemas:" : "Trobem diversos tipus de tractaments osteopàtics que permeten tractar cadascun dels diferents sistemes:" ?></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 wow slideInRight" data-wow-delay="0.5s">
                        <img src="./assets/img/image-osteopatria-treatments-2.png" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8 pr-3 pr-lg-5">
                        <div class="row wow slideInLeft" data-wow-delay="0.5s">
                            <div class="col-12 col-lg-6 pr-3 pr-lg-5">
                                <h3><?= ($lang)? "Osteopatía<br>estructural:" : "Osteopatia<br>estructural:" ?></h3>
                                <p><?= ($lang)? "Enfocada al tratamiento del aparato neuro-músculo-esquelético." : "Enfocada al tractament de l'aparell neuro-múscul-esquelètic." ?></p>
                            </div>
                            <div class="col-12 col-lg-6 pl-3 pl-lg-5">
                                <h3><?= ($lang)? "Osteopatía<br>craneal sacral:" : "Osteopatia<br>cranial sacral" ?></h3>
                                <p><?= ($lang)? "Enfocada a la estructura comprendida entre el sacro y el cráneo, sistema meníngeo y sistema nervioso central." : "Enfocada a l'estructura compresa entre el sacre i el crani, sistema meningia i sistema nerviós central." ?></p>
                            </div>
                        </div>
                        <div class="row wow slideInLeft" data-wow-delay="0.5s">
                            <div class="col-12 col-lg-6 pr-3 pr-lg-5">
                                <h3><?= ($lang)? "Osteopatía<br>osteomuscular" : "Osteopatia<br>osteomuscular" ?></h3>
                                <p><?= ($lang)? "Enfocada al tratamiento de  lesiones del aparato osteomuscular, tales como tendinopatías, desgarros musculares, artrosis, escoliosis, entre otros." : "Enfocada al tractament de lesions de l'aparell osteomuscular, com ara tendinopaties, esquinçaments musculars, artrosi, escoliosi, entre d'altres." ?></p>
                            </div>
                            <div class="col-12 col-lg-6 pl-3 pl-lg-5">
                                <h3><?= ($lang)? "Osteopatía para el sistema<br>neurológico y vascular" : "Osteopatia per al sistema<br>neurològic i vascular" ?></h3>
                                <p><?= ($lang)? "Enfocada en la valoración y en el tratamiento de neuralgias  y problemas vasculares tales como ciática, túnel del carpo, neuralgias faciales, migrañas, problemas de sueño." : "Enfocada en la valoració i en el tractament de neuràlgies i problemes vasculars com ara ciàtica, túnel del carp, neuràlgies facials, migranyes, problemes de son." ?></p>
                            </div>
                        </div>
                        <div class="row wow slideInLeft" data-wow-delay="0.5s">
                            <div class="col-12 col-lg-6 pr-3 pr-lg-5">
                                <h3><?= ($lang)? "Osteopatía<br>obstétrica" : "Osteopatia<br>obstètrica" ?></h3>
                                <p><?= ($lang)? "Enfocada al seguimiento y  tratamiento del embarazo, problemas del suelo pélvico e inguinales, problemas de adaptación de la postura, tratamiento de episiotomías y todas las adaptaciones y bloqueos presentes en el postparto, entre otros." : "Enfocada al seguiment i tractament de l'embaràs, problemes del sòl pèlvic i inguinals, problemes d'adaptació de la postura, tractament de episiotomies i totes les adaptacions i bloquejos presents en el postpart, entre d'altres." ?></p>
                            </div>
                            <div class="col-12 col-lg-6 pl-3 pl-lg-5">
                                <h3><?= ($lang)? "Osteopatía sistema<br>respiratorio y orofarínge" : "Osteopatia sistema<br>respiratori i orofaringi" ?></h3>
                                <p><?= ($lang)? "Enfocada en la valoración y el tratamiento de patologías del sistema orofacial y respiratorio tales como bronquitis, disfagias, problemas del habla, problemas de ATM,  obstrucción de lagrimales." : "Enfocada en la valoració i el tractament de patologies del sistema orofacial i respiratori com ara bronquitis, disfàgies, problemes de la parla, problemes d'ATM, obstrucció de lacrimals." ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 pl-3 pl-lg-5">
                        <div class="row">
                            <div class="col-12 wow slideInRight" data-wow-delay="0.5s">
                                <h3><?= ($lang)? "Osteopatía<br>visceral:" : "Osteopatia<br>Visceral:" ?></h3>
                                <p><?= ($lang)? "Enfocada a valorar y tratar todo lo relacionado con el sistema visceral, como por ejemplo, problemas de gastritis, reflujo gastroesofágico, hernia de hiato, digestiones pesadas, colon irritable, hemorroides,  espasmos abdominales, problemas endocrinos y hormonales, entre otros" : "Enfocada a valorar i tractar tot el relacionat amb el sistema visceral, com per exemple, problemes de gastritis, reflux gastroesofàgic, hèrnia de hiat, digestions pesades, còlon irritable, hemorroides, espasmes abdominals, problemes endocrins i hormonals, entre d'altres." ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 wow slideInRight" data-wow-delay="0.5s">
                                <h3><?= ($lang)? "Osteopatía<br>Pediátrica" : "Osteopatia<br>Pediatrica" ?></h3>
                                <p><?= ($lang)? "La osteopatía pediátrica abarca el tratamiento en el que se utilizan técnicas manuales, adaptadas y específicas para los bebés y los niños. En esta rama de la osteopatía se diagnostican las disfunciones de movilidad del tejido que pueden tener los bebés y los niños desde su nacimiento y a lo largo de su desarrollo.  Dentro de las diferentes disfunciones podemos encontrar: Asimetrías craneales, cólicos del lactante, problemas de reflujo, insomnio, escoliósis, problemas digestivos (reflujo, gases y estreñimiento), otitis, bronquitis, bronquiolitis, neumonía." : "L'osteopatia pediatrica abasta el tractament en que s'utilitzen tècniques manuals, adaptades i específiques per als nadons i els nens. En aquesta branca de l'osteopatia es diagnostiquen les disfuncions de mobilitat del teixit que poden tenir els nadons i els nens des del seu naixement i al llarg del seu desenvolupament. Dins de les diferents disfuncions podem trobar: Asimetries cranials, còlics del lactant, problemes de reflux, insomni, escoliosi, problemes digestius (reflux, gasos i restrenyiment), otitis, bronquitis, bronquiolitis, pneumònia." ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h4><?= ($lang)? "FISIOTERAPIA" : "FISIOTERÀPIA" ?></h4>
                    <a href="./tratamientos-fisioterapia.php?lang=<?= ($lang)? "es" : "ca" ?>" target="_self" class="btn btn-info"><?= ($lang)? 'VER TRATAMIENTOS' :'VEURE TRACTAMENTS' ?></a>
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