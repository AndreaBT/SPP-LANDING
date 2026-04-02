<?php
    include_once(__DIR__ . '/../config.php');
    include_once(ROOT_PATH . 'head.php');
    include_once(ROOT_PATH . 'navbar.php');
?>
<header class="heroCALEA">
    <div class="content container py-5">
        <img src="src/images/Departamento de licencias de conducir.png" style="width: 20%;" alt="CALEA">
       
        <div class="eyebrowN Juramedium">
            Dirección General de Servicios Públicos de la Secretaría de Seguridad Pública del Estado de Yucatán
        </div>
    </div>
</header>

<main id="contenido">
    <section class="container">
        <div class="section-header mb-4">
            <h2 class="Russ h4 mb-0">Departamento de Licencias de Conducir</h2>
        </div>

        <div class="row g-3 g-md-4">

            <div class="col-6 col-md-4 col-lg-3">
                <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/Guia_LicenciaDeConducir_Motociclista.pdf"  target="_blank" rel="noopener">
                    <span class="qa-icon"><img src="src/images/guia de examen para licencia de motociclista @300x.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Guía de Examen para Licencia de Motociclista</span>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/Guia_LicenciaDeConducir.pdf"  target="_blank" rel="noopener">
                    <span class="qa-icon"><img src="src/images/guia de examen para licencia de automovilista @300x.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Guía de Examen para Licencia de Automovilista</span>
                </a>
            </div> 
            
        </div>
    </section>
</main>


<?php
    include_once(ROOT_PATH . 'footer.php');
?>