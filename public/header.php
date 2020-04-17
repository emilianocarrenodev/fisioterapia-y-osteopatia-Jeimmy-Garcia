<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="./?lang=<?= ($lang)? "es" : "ca" ?>">
                <img src="./assets/img/logo.png" class="img-fluid" alt="JEIMMY GARCIA">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="container-menu d-flex flex-column justify-content-end align-items-end">
                    <ul class="nav d-flex flex-row justify-content-center align-items-center">
                        <li class="nav-item pr-5">
                            <a class="nav-link" href="tel:+34684307775" target="_self"><img src="./assets/img/icon-phone.png" class="img-fluid mr-3"> 34 684 30 77 75</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/fisio_jeimmy/?hl=es-la" target="_blank"><img src="./assets/img/icon-instagram.png" class="img-fluid"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/jeimmygarciafisioterapia/" target="_blank"><img src="./assets/img/icon-facebook.png" class="img-fluid"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.youtube.com/channel/UC49aLLnxw5wQwm5fpweVXAQ" target="_blank"><img src="./assets/img/youtube-logo-jeimmy.svg" class="img-fluid"></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex flex-column flex-lg-row justify-content-end align-items-start align-items-lg-end">
                        <li class="nav-item <?= ($menu=='index')? 'active' : '' ?>">
                            <a class="nav-link" href="./?lang=<?= ($lang)? "es" : "ca" ?>"><?= ($lang)? 'INICIO' : 'INICI' ?></a>
                        </li>
                        <li class="nav-item <?= ($menu=='empresa')? 'active' : '' ?>">
                            <a class="nav-link" href="./empresa.php?lang=<?= ($lang)? "es" : "ca" ?>"><?= ($lang)? 'EMPRESA' : 'EMPRESA' ?></a>
                        </li>
                        <li class="nav-item dropdown <?= ($menu=='tratamientos')? 'active' : '' ?>">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= ($lang)? 'TRATAMIENTOS' : 'TRACTAMENTS' ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="./tratamientos-fisioterapia.php?lang=<?= ($lang)? "es" : "ca" ?>"><?= ($lang)? 'Fisioterapia' : 'Fisioteràpia' ?></a>
                                <a class="dropdown-item" href="./tratamientos-osteopatia.php?lang=<?= ($lang)? "es" : "ca" ?>"><?= ($lang)? 'Osteopatía' : 'Osteopatia' ?></a>
                            </div>
                        </li>
                        <li class="nav-item <?= ($menu=='contacto')? 'active' : '' ?>">
                            <a class="nav-link" href="./contacto.php?lang=<?= ($lang)? "es" : "ca" ?>"><?= ($lang)? 'CONTACTO' :'CONTACTE' ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?lang=<?= ($lang)? "ca" : "es" ?>"><?= ($lang)? 'ESPAÑOL' :'CATALÁN' ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>