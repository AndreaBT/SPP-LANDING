<?php
    include_once(__DIR__ . '/../config.php');
    include_once(ROOT_PATH . 'head.php');
    include_once(ROOT_PATH . 'navbar.php');
?>
<header class="heroCALEA">
    <div class="content container py-5">
        <img src="src/images/Logo Casas de Empeño.png" style="width: 20%;" alt="CALEA">
       
        <div class="eyebrowN Juramedium">
            CÓDIGO DE ADMINISTRACIÓN PÚBLICA DE YUCATÁN.
            ARTICULO 40. A la Secretaría de Seguridad Pública le corresponde el despacho de los siguientes asuntos.
        </div>

        <div class="eyebrowN Juramedium">
            FRACCIÓN XXII:
            Crear y mantener actualizado el Registro Único de Prestadores de Servicios de Cerrajería, así como instrumentar un mecanismo de 
            monitoreo a la actividad y prestación de dicho servicio en la entidad.
        </div>
        
    </div>
</header>

<main id="contenido">
    <section class="container">
        <div class="section-header mb-4">
            <h2 class="Russ h4 mb-0">Secciones</h2>
        </div>

        <div class="row g-3 g-md-4">
            <div class="col-6 col-md-4 col-lg-3">
                <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/Cerrajerías.pdf"  target="_blank" rel="noopener">
                    <span class="qa-icon"><img src="src/images/cerrajerias que cumplen con el reporte de servicios prestados.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Cerrajerías que Cumplen con el Reporte de Servicios Prestados</span>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <a class="qa-card" href="http://187.157.145.178:8086/modulocerrajeros/"  target="_blank" rel="noopener">
                    <span class="qa-icon"><img src="src/images/Registro unico de prestadores de servicio de cerrajerias.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Registro Único de Prestadores de Servicios de Cerrajerías</span>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/REGISTRO ÚNICO DE PRESTADORES DE SERVICIOS DE CERRAJERÍAS.pdf"  target="_blank" rel="noopener">
                    <span class="qa-icon"><img src="src/images/guias.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Guía de Registro</span>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <button class="qa-card" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" style="width: 100%;text-align: left;">
                    <span class="qa-icon"><img src="src/images/Contactoo.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Contacto</span>
                </button>

                <!--MODAL CONTACTO-->
                    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content"  style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 Juramedium" id="exampleModalToggleLabel">Contacto</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-comunicate shadow-card-comunicate" >
                                                <div class="card-body">
                                                    <p class="card-text Juramedium">
                                                        Horarios de Atención: <b>Lunes a viernes:</b> 8:00 a 21:00 horas
                                                    </p>
                                                    <p class="card-text Juramedium">
                                                        Teléfono de Oficina: (999) 9 30 32 00 ext: 49188 o 49226
                                                    </p>
                                                    <p class="card-text Juramedium">
                                                        Número de Emergencia: 9-1-1
                                                    </p>
                                                    <p class="card-text Juramedium">
                                                        Correo electrónico: cerrajerias.ssp@yucatan.gob.mx, martha.canche@yucatan.gob.mx
                                                    </p>
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

                <!--FIN MODAL CONTACTO-->
            </div>
        </div>
    </section>
</main>


<?php
    include_once(ROOT_PATH . 'footer.php');
?>