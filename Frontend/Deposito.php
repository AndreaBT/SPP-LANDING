<?php
    include_once(__DIR__ . '/../config.php');
    include_once(ROOT_PATH . 'head.php');
    include_once(ROOT_PATH . 'navbar.php');
?>
<header class="heroCALEA">
    <div class="content container py-5">
        <img src="src/images/Departamento de depositos vehiculares.png" style="width: 20%;" alt="CALEA">
       
        <div class="eyebrowN Juramedium">
            Secretaría de Seguridad Pública del Estado de Yucatán
        </div>
    </div>
</header>

<main id="contenido">
    <section class="container">
        <div class="section-header mb-4">
            <h2 class="Russ h4 mb-0">Departamento de Depósitos Vehiculares</h2>
        </div>

        <div class="row g-3 g-md-4">

            <div class="col-6 col-md-4 col-lg-3">
                <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/2022-03-22_2.pdf"  target="_blank" rel="noopener">
                    <span class="qa-icon"><img src="src/images/Abandono de Bienes muebles.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Abandono de Bienes Muebles - Acuerdo SSP 05/2022</span>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/2022-03-25_3.pdf"  target="_blank" rel="noopener">
                    <span class="qa-icon"><img src="src/images/Abandono de Bienes muebles.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Abandono de Bienes Muebles - Nota aclaratoria Acuerdo SSP 05/2022</span>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <button class="qa-card" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" style="width: 100%;text-align: left;">
                    <span class="qa-icon"><img src="src/images/vehiculo-de-remolque.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Vehículos que se Encuentran Retenidos en los Depósitos Vehículares de la SSP y el Plazo Máximo que Podrán Permanecer en estos - Acuerdo SSP 01/2025</span>
                </button>
            </div>

            <!--MODAL Servicio de Tarjetones-->
                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content"  style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 Juramedium" id="exampleModalToggleLabel">Acuerdo SSP 01/2025</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-comunicate shadow-card-comunicate" >
                                            <div class="card-body">
                                                
                                                <ul class="Juraligt" style="color: #e2e2e2 !important">
                                                    <li>
                                                        <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/13-10-2025 Acuerdo 01-2025 (Primera publicación).pdf">13-10-2025 Acuerdo 01-2025 (Primera publicación)</a>
                                                    </li>
                                                    <li>
                                                        <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/03-11-2025 Acuerdo 01-2025 (Segunda publicación).pdf">03-11-2025 Acuerdo 01-2025 (Segunda publicación)</a>
                                                    </li>
                                                    <li>
                                                        <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/24-11-2025 Acuerdo 01-2025 (Tercera publicación).pdf">24-11-2025 Acuerdo 01-2025 (Tercera publicación)</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="qa-card" data-bs-dismiss="modal"><span class="Juramedium">Cerrar</span></button>
                            </div>
                            
                        </div>
                    </div>
                </div>

            <!--FIN Servicio de Tarjetones-->


            <div class="col-6 col-md-4 col-lg-3">
                <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/acuerdo02_2026.pdf" target="_blank" rel="noopener">
                    <span class="qa-icon"><img src="src/images/Abandono de Bienes muebles.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Abandono de Bienes Muebles - Acuerdo SSP 02/2026</span>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/Consejos de placas y licencias.pdf"  target="_blank" rel="noopener">
                    <span class="qa-icon"><img src="src/images/Requisitos Basicos para Circular legalmente en Yucatán.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Requisitos Básicos para Circular Legalmente en Yucatán</span>
                </a>
            </div>

        </div>
    </section>
</main>


<?php
    include_once(ROOT_PATH . 'footer.php');
?>