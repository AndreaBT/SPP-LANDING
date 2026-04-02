<?php
    include_once('config.php'); // ← Esto debe estar primero, antes de usar ROOT_PATH
    include_once('head.php');
?>

<a href="#contenido" class="skip-to-content">Saltar al contenido</a>

<!-- ======= Header ======= -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-ssp sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="<?php echo BASE_URL; ?>Usuario" aria-label="Inicio SSP">
            <img src="<?php echo BASE_URL; ?>src/LogoSSP.png" alt="Escudo SSP" />
            <span class="Russ">SSP Yucatán - Panel de usuario</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain" aria-controls="navMain" aria-expanded="false" aria-label="Abrir menú">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMain">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                <li class="nav-item"><a class="nav-link Juramedium" href="<?php echo BASE_URL; ?>Usuario">Panel</a></li>
                <li class="nav-item"><a class="nav-link Juramedium" href="<?php echo BASE_URL; ?>PanelNoticias">Noticias/Boletines</a></li>
                <li class="nav-item"><a class="btn btn-danger" href="<?php echo BASE_URL; ?>LogOut">LogOut</a></li>
            </ul>
        </div>
    </div>
</nav>