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
                <h2 class="Russ h4 mb-0">Departamento de Servicios Públicos de Seguridad</h2>
            </div>
            <div class="row g-3 g-md-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>Escuela"   rel="noopener">
                        <span class="qa-icon"><img src="src/images/autoescuela.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Escuelas de Manejo</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>Empeno"   rel="noopener">
                        <span class="qa-icon"><img src="src/images/casa-de-empeno.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Casas de Empeño</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>Cerrajerías"   rel="noopener">
                        <span class="qa-icon"><img src="src/images/llave-del-coche.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Cerrajerías</span>
                    </a>
                </div>
                
            </div>

        </section>
</main>


<?php
    include_once(ROOT_PATH . 'footer.php');
?>