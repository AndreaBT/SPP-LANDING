<?php
    include_once('config.php'); // ← Esto debe estar primero, antes de usar ROOT_PATH
    include_once('head.php');
?>

<style>
    .nav-body-color{
        background-color: #000 !important;
    }

    .nav-body-side-color{
        background-color: #3f3e40 !important;
    }
</style>

<a href="#contenido" class="skip-to-content">Saltar al contenido</a>
<!-- ======= Header ======= -->
<nav class="navbar bg-body-tertiary fixed-top nav-body-color">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center gap-2" href="<?php echo BASE_URL; ?>Inicio" aria-label="Inicio SSP">
            <img src="<?php echo BASE_URL; ?>src/LogoSSP.png" alt="Escudo SSP" />
            <span class="Russ">SSP Yucatán</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> <i class="fa-solid fa-bars-staggered" style="color: #f4cd3f;"></i></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header nav-body-side-color">
                <h5 class="offcanvas-title Juramedium colorLi" id="offcanvasNavbarLabel">Menú</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body nav-body-side-color">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 color-nav-items">
                    <li class="nav-item ">
                        <a class="nav-link Juramedium colorLi" href="<?php echo BASE_URL; ?>Inicio">Inicio</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle Juramedium colorLi" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sala de Prensa
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item Juramedium colorLi" href="<?php echo BASE_URL; ?>Noticias">Noticias</a></li>
                            <li><a class="dropdown-item Juramedium colorLi" href="<?php echo BASE_URL; ?>Boletines">Gobierno</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle Juramedium colorLi" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SSP
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item Juramedium colorLi" href="<?php echo BASE_URL; ?>Bienvenida">Bienvenida</a></li>
                            <li><a class="dropdown-item Juramedium colorLi" href="<?php echo BASE_URL; ?>Nosotros">Nosotros</a></li>
                            <li><a class="dropdown-item Juramedium colorLi" href="https://www.plataformadetransparencia.org.mx/" target="_blank" rel="noopener">Transparencia</a></li>
                            <li><a class="dropdown-item Juramedium colorLi" href="https://tramites.yucatan.gob.mx/" target="_blank" rel="noopener">Trámites</a></li>
                            <li><a class="dropdown-item Juramedium colorLi" href="<?php echo BASE_URL; ?>src/pdfs/organigrama.pdf" target="_blank" rel="noopener">Organigrama</a></li>
                            <li><a class="dropdown-item Juramedium colorLi" href="<?php echo BASE_URL; ?>SecretariadoEjecutivo">Secretariado Ejecutivo</a></li>
                            <li><a class="dropdown-item Juramedium colorLi" href="<?php echo BASE_URL; ?>Directorio">Directorio</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link Juramedium colorLi" href="<?php echo BASE_URL; ?>Contáctanos">Contáctanos</a>
                    </li>
                    
                </ul>
                
            </div>
        </div>
    </div>
</nav>
<br>

