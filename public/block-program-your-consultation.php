<section class="block-program-your-consultation">
    <div class="container-fluid wow fadeIn" data-wow-delay="0.5s">
        <div class="row">
            <div class="col-12">
                <img src="./assets/img/icon-calendar.png" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2><?= ($lang)? 'PROGRAMA TU CONSULTA' : 'PROGRAMA LA TEVA CONSULTA' ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="./contacto.php" target="_self" class="btn btn-link"><?= ($lang)? 'CONTÁCTANOS' : 'CONTACTE' ?></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3><?= ($lang)? 'MEDIOS DE PAGO' : 'MITJANS DE PAGAMENT' ?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img src="./assets/img/icon-credit-card.png" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container-menu-footer">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link <?= ($menu=='index')? 'active' : '' ?>" href="./"><?= ($lang)? 'INICIO' : 'INICI' ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($menu=='empresa')? 'active' : '' ?>" href="./empresa.php"><?= ($lang)? 'EMPRESA' : 'EMPRESA' ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($menu=='tratamientos')? 'active' : '' ?>" href="./tratamientos-fisioterapia.php"><?= ($lang)? 'TRATAMIENTOS' : 'TRACTAMENTS' ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($menu=='contacto')? 'active' : '' ?>" href="./contacto.php"><?= ($lang)? 'CONTÁCTO' :'CONTACTE' ?></a>
            </li>
        </ul>
    </div>
</section>