<header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="./">
                <img src="./assets/img/logo.png" class="img-fluid" alt="JEIMMY GARCIAS">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="container-menu d-flex flex-column justify-content-end align-items-end">
                    <ul class="nav d-flex flex-row justify-content-center align-items-center">
                        <li class="nav-item pr-5">
                            <a class="nav-link" href="tel:+34620243225" target="_self"><img src="./assets/img/icon-phone.png" class="img-fluid mr-3"> 34 620 243 225</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank"><img src="./assets/img/icon-instagram.png" class="img-fluid"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank"><img src="./assets/img/icon-facebook.png" class="img-fluid"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank"><img src="./assets/img/icon-twitter.png" class="img-fluid"></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex flex-column flex-lg-row justify-content-end align-items-start align-items-lg-end">
                        <li class="nav-item <?= ($menu=='index')? 'active' : '' ?>">
                            <a class="nav-link" href="./"><?= ($lang)? 'INICIO' : 'INICI' ?></a>
                        </li>
                        <li class="nav-item <?= ($menu=='empresa')? 'active' : '' ?>">
                            <a class="nav-link" href="./empresa.php"><?= ($lang)? 'EMPRESA' : 'EMPRESA' ?></a>
                        </li>
                        <li class="nav-item dropdown <?= ($menu=='tratamientos')? 'active' : '' ?>">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= ($lang)? 'TRATAMIENTOS' : 'TRACTAMENTS' ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="./tratamientos-fisioterapia.php"><?= ($lang)? 'Fisioterapia' : 'Fisioteràpia' ?></a>
                                <a class="dropdown-item" href="./tratamientos-osteopatia.php"><?= ($lang)? 'Osteopatía' : 'Osteopatía' ?></a>
                            </div>
                        </li>
                        <li class="nav-item <?= ($menu=='contacto')? 'active' : '' ?>">
                            <a class="nav-link" href="./contacto.php"><?= ($lang)? 'CONTÁCTO' :'CONTACTE' ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>