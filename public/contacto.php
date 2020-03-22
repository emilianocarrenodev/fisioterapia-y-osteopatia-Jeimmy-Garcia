<?php $lang = (empty($_GET['lang']) || $_GET['lang'] == 'es')? true : false; $menu = 'contacto'; ?>
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
    <!--Bloque titulo contacto-->
    <section class="block-contact-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="./assets/img/icon-calendar-contact.png" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2><?= ($lang)? "PROGRAMA TU CONSULTA" : "PROGRAMA TÚ CONSULTA" ?></h2>
                    <h3><?= ($lang)? "CONTÁCTANOS Y TE RESPONDEREMOS DE INMEDIATO" : "CONTACTA'NS I ET RESPONDREM D'IMMEDIATA" ?></h3>
                </div>
            </div>
        </div>
    </section>
    <!--Fin bloque principal contacto-->
    <!--Bloque titulo contacto-->
    <section class="block-contact-main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 wow slideInLeft" data-wow-delay="0.5s">
                    <form id="form-contact" action="sendmail.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="<?= ($lang)? "Nombre" : "Nom" ?>" name="name" aria-describedby="help-name" required>
                            <small id="help-name" class="form-text text-muted"><?= ($lang)? "Tu nombre completo" : "El teu nom complet" ?></small>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="@" name="email" aria-describedby="help-email" required>
                            <small id="help-email" class="form-text text-muted"><?= ($lang)? "Escribe un email válido" : "Escriu un email vàlid" ?></small>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="19 / 12 / 2020" name="date" aria-describedby="help-date" required>
                            <small id="help-date" class="form-text text-muted"><?= ($lang)? "Fecha estimada para tu cita" : "Data estimada per la teva cita" ?></small>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="<?= ($lang)? "Mensaje" : "Missatge" ?>" name="message" aria-describedby="help-message" required></textarea>
                            <small id="help-message" class="form-text text-muted"><?= ($lang)? "Escribe el motivo de tu cita" : "Escriu el motiu de la teva cita" ?></small>
                        </div>
                        <div class="form-group">
                            <div class="alert alert-success" role="alert">
                                <?= ($lang)? "Mensaje enviado con exito!!!" : "Missatge enviat amb èxit !!!" ?>
                            </div>
                            <div class="alert alert-danger" role="alert">
                                <?= ($lang)? "Error, intente de nuevo por favor!!!" : "Error, intenti de nou si us plau !!!" ?>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary"><?= ($lang)? "ENVIAR" : "ENVIAR" ?></button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1 wow slideInRight" data-wow-delay="0.5s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d5986.31768063651!2d2.1486006235244517!3d41.3923567158405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sPassatge%20Marimon%207%20principal%20primera%20Barcelona%20-%20Espa%C3%B1a!5e0!3m2!1ses-419!2sco!4v1583148334040!5m2!1ses-419!2sco" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>
    <!--Fin bloque principal contacto-->
    <?php require_once('footer.php') ?>
    <script type="text/javascript" src="./assets/js/bundle.min.js"></script>
</body>

</html>