<?php
    include_once(__DIR__ . '/../config.php');
    include_once(ROOT_PATH . 'head.php');
    include_once(ROOT_PATH . 'navbar.php');
?>
<header class="heroCALEA">
    <div class="content container py-5">
        <img src="src/images/Departamento de control vehicular.png" style="width: 20%;" alt="CALEA">
       
        <div class="eyebrowN Juramedium">
            Secretaría de Seguridad Pública del Estado de Yucatán
        </div>
    </div>
</header>

<main id="contenido">
    <section class="container">
        <div class="section-header mb-4">
            <h2 class="Russ h4 mb-0">Trámites Vehículares</h2>
        </div>

        <div class="row g-3 g-md-4">
            <div class="col-6 col-md-4 col-lg-3">
                <button class="qa-card" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" style="width: 100%;text-align: left;">
                    <span class="qa-icon"><img src="src/images/servicio de tarjetones.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Servicio de Tarjetones</span>
                </button>
            </div>

            <!--MODAL Servicio de Tarjetones-->
                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content"  style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 Juramedium" id="exampleModalToggleLabel">Servicio de Tarjetones</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-comunicate shadow-card-comunicate" >
                                            <div class="card-body">
                                                <p class="card-text Juramedium">
                                                    Permite a los pasajeros con discapacidad o en período de embarazo, realizar el trámite de un Tarjetón especial para poder ocupar las zonas adecuadas para las personas con capacidades diferentes.
                                                </p>
                                                <p class="card-text Juramedium">
                                                    Requisitos: 
                                                </p>
                                                <ul class="Juraligt" style="color: #e2e2e2 !important">
                                                    <li>Solicitud Electrónica.</li>
                                                    <li>Identificación Oficial de la Persona Física.</li>
                                                    <li>Comprobante de Domicilio.</li>
                                                    <li>Acta de Nacimiento.</li>
                                                    <li>Clave Única de Registro de Población (CURP).</li>
                                                    <li>Constancia Médica.</li>
                                                    <li>Correo Electrónico.</li>
                                                    <li>Tarjetón Vencido (En caso de renovación).</li>
                                                    <li> Carta Poder Simple (En el caso de que el trámite lo realice un tercero, anexando su identificación oficial original).</li>
                                                </ul>
                                                <p class="card-text Juramedium">
                                                    <a class="qa-card" href="http://187.157.145.178:8086/ServicioTarjeton/"  target="_blank" rel="noopener">
                                                        <span class="Juramedium">Iniciar Solicitud Electrónica</span>
                                                    </a> 
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

            <!--FIN Servicio de Tarjetones-->

            <div class="col-6 col-md-4 col-lg-3">
                <button class="qa-card" data-bs-target="#exampleModalToggleI" data-bs-toggle="modal" style="width: 100%;text-align: left;">
                    <span class="qa-icon"><img src="src/images/Inscripción de vehiculos.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Inscripción de Vehículos</span>
                </button>
            </div>

            <!--MODAL INSCRIPCIÓN DE VEHICULOS-->
                <div class="modal fade" id="exampleModalToggleI" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content"  style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 Juramedium" id="exampleModalToggleLabel">Servicio de Tarjetones</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-comunicate shadow-card-comunicate" >
                                            <div class="card-body">
                                                <p class="card-text Juramedium">
                                                    Plazos para inscribir los vehículos.
                                                </p>
                                                <p class="card-text Juramedium">
                                                   Artículo 110. El propietario o posesionario de un vehículo nuevo de combustión, híbrido o mixto o eléctrico, 
                                                   tendrá la obligación de inscribirlo dentro de los 15 días posteriores a su adquisición para obtener la tarjeta de circulación, 
                                                   las placas de circulación y, en su caso, la calcomanía correspondiente a las placas de circulación. 
                                                   En los casos de enajenación de un Vehículo de combustión, híbrido o mixto o eléctrico por traspaso, venta, permuta, cesión, adjudicación o 
                                                   por cualquier otro medio de traslación de la propiedad, el enajenante podrá presentar a la Secretaría el aviso de traslación de dominio.
                                                </p>
                                                <p class="card-text Juramedium">
                                                    El adquirente de un vehículo de combustión, híbrido o mixto o eléctrico, usado ya sea que se encuentre o no registrado ante la Secretaría, 
                                                    tendrá la obligación de inscribir el cambio de propietario en 
                                                    el Registro Estatal de Control Vehicular, dentro de los 30 días naturales siguientes a la transacción.
                                                </p>
                                                <p class="card-text Juramedium">
                                                    <a class="qa-card" href="http://187.157.145.178:8086/AvisoVenta/"  target="_blank" rel="noopener">
                                                        <span class="Juramedium">Ir al Sitio</span>
                                                    </a> 
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

            <!--FIN INSCRIPCIÓN DE VEHÍCULOS-->

            <div class="col-6 col-md-4 col-lg-3">
                <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/Concesionarias.pdf"  target="_blank" rel="noopener">
                    <span class="qa-icon"><img src="src/images/entrega.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Distribuidores Autorizados</span>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <a class="qa-card" href="http://187.157.145.178:8086/Consulta/"  target="_blank" rel="noopener">
                    <span class="qa-icon"><img src="src/images/licencia-de-conducir-negro.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Consulta de Permisos Provisionales</span>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <button class="qa-card" data-bs-target="#exampleModalToggleC" data-bs-toggle="modal" style="width: 100%;text-align: left;">
                    <span class="qa-icon"><img src="src/images/Contactoo.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Contacto</span>
                </button>

                <!--MODAL CONTACTO-->
                    <div class="modal fade" id="exampleModalToggleC" aria-hidden="true" aria-labelledby="exampleModalToggleLabelC" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content"  style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 Juramedium" id="exampleModalToggleLabelC">Contacto</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-comunicate shadow-card-comunicate" >
                                                <div class="card-body">
                                                    <p class="card-text Juramedium">
                                                        Horarios de Atención: <b>Lunes a viernes:</b> 8:00 a 15:00 horas & Sábado: 8:00 a 12:00 horas
                                                    </p>
                                                    <p class="card-text Juramedium">
                                                        Teléfono de Oficina: (999) 9 30 32 00 ext: 40532
                                                    </p>
                                                    <p class="card-text Juramedium">
                                                        Número de Emergencia: 9-1-1
                                                    </p>
                                                    <p class="card-text Juramedium">
                                                        Inf. Desarrollador y Soporte: (999) 9 30 32 00 ext: 49267
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