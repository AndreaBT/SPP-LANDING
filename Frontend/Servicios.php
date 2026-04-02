<?php
    include_once(__DIR__ . '/../config.php');
    include_once(ROOT_PATH . 'head.php');
    include_once(ROOT_PATH . 'navbar.php');
?>
<header class="heroCALEA">
    <div class="content container py-5">
       <img src="src/images/Dirección servicios públicos.png" style="width: 20%;" alt="CALEA">
       
         <div class="eyebrowN Juramedium">Dirección General de Servcios Públicos</div>
        
    </div>
</header>

<main id="contenido">
    <section class="container">
            <div class="section-header mb-4">
                <h2 class="Russ h4 mb-0">Seleccione el departamento de su interés:</h2>
            </div>
            <div class="row g-3 g-md-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>Públicos" rel="noopener">
                        <span class="qa-icons"><img src="src/images/Dirección servicios públicos.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Departamento de Servicios Públicos de Seguridad</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>TramitesVehiculares" rel="noopener">
                        <span class="qa-icons"><img src="src/images/Departamento de control vehicular.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Departamento de Control Vehícular</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>DepósitoVehicular" rel="noopener">
                        <span class="qa-icons"><img src="src/images/Departamento de depositos vehiculares.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Departamento de Dépositos Vehículares</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>SeguridadPrivada" rel="noopener">
                        <span class="qa-icons"><img src="src/images/seguridad privada.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Departamento de Seguridad Privada</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>Licencias" rel="noopener">
                        <span class="qa-icons"><img src="src/images/Departamento de licencias de conducir.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Departamento de Licencias de Conducir</span>
                    </a>
                </div>
            </div>

        </section>
</main>


<?php
    include_once(ROOT_PATH . 'footer.php');
?>