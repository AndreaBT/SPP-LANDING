<?php
    include_once(__DIR__ . '/../config.php');
    include_once(ROOT_PATH . 'head.php');
    include_once(ROOT_PATH . 'navbar.php');
?>
<header class="heroCALEA">
    <div class="content container py-5">
        <img src="src/images/seguridad privada.png" style="width: 20%;" alt="CALEA">
       
        <div class="eyebrowN Juramedium">Secretaría de Seguridad Pública del Estado de Yucatán</div>
        
    </div>
</header>

<main id="contenido">
    <section class="container">
            <div class="section-header mb-4">
                <h2 class="Russ h4 mb-0">Seguridad Privada</h2>
            </div>
            <div class="row g-3 g-md-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/Empresas Registradas.pdf"  target="_blank" rel="noopener">
                        <span class="qa-icon"><img src="src/images/Empresas Registradas.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Empresas Registradas</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/Empresas Sancionadas.pdf"  target="_blank" rel="noopener">
                        <span class="qa-icon"><img src="src/images/Empresas Sancionadas.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Empresas Sancionadas</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/Laboratorios Autorizados SP.pdf"  target="_blank" rel="noopener">
                        <span class="qa-icon"><img src="src/images/Laboratorio Autorizado.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Laboratorios Autorizados</span>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/Centros de Capacitación Autorizados SP.pdf"  target="_blank" rel="noopener">
                        <span class="qa-icon"><img src="src/images/Centros capacitacion autorizados.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Centros de Capacitación Autorizados</span>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <button class="qa-card" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" style="width: 100%;text-align: left;">
                        <span class="qa-icon"><img src="src/images/convocatorias DOE.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Convocatorias D.O.E</span>
                    </button>
                </div>
                
                <!---MODAL D.O.E--->

                    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content"  style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 Juramedium" id="exampleModalToggleLabel">Convocatorias D.O.E</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="Juramedium">Seleccione el año:</span>
                                        </div>
                                    </div>
                                    <div class="row g-3 g-md-4">
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle218" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">2018</span>
                                            </button>
                                        </div>

                                        <div class="col-6 col-md-4 col-lg-3">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle219" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">2019</span>
                                            </button>
                                        </div>

                                        <div class="col-6 col-md-4 col-lg-3">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle220" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">2020</span>
                                            </button>
                                        </div>

                                        <div class="col-6 col-md-4 col-lg-3">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">2021</span>
                                            </button>
                                        </div>

                                        
                                    </div>

                                    <br>
                                    <div class="row g-3 g-md-4">
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">2022</span>
                                            </button>
                                        </div>

                                        <div class="col-6 col-md-4 col-lg-3">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">2023</span>
                                            </button>
                                        </div>

                                        <div class="col-6 col-md-4 col-lg-3">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle5" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">2024</span>
                                            </button>
                                        </div>

                                        <div class="col-6 col-md-4 col-lg-3">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle6" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">2025</span>
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="qa-card" data-bs-dismiss="modal"><span class="Juramedium">Cerrar</span></button>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!---MODAL 2018-->
                    <div class="modal fade" id="exampleModalToggle218" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg" >
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header"> 
                                    <span class="Juramedium">Convocatorias D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/17-05-2018 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico.pdf">17-05-2018 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/24-05-2018 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico.pdf">24-05-2018 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/31-05-2018 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico.pdf">31-05-2018 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/28-08-2018 Convocatoria Centros de Capacitación y Adiestramiento 2018.pdf">28-08-2018 Convocatoria Centros de Capacitación y Adiestramiento 2018</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/31-08-2018 Convocatoria Centros de Capacitación y Adiestramiento 2018.pdf">31-08-2018 Convocatoria Centros de Capacitación y Adiestramiento 2018</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/05-09-2018 Convocatoria Centros de Capacitación y Adiestramiento 2018.pdf">05-09-2018 Convocatoria Centros de Capacitación y Adiestramiento 2018</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---MODAL 2019-->
                    <div class="modal fade" id="exampleModalToggle219" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg" >
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header"> 
                                    <span class="Juramedium">Convocatorias D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/01-04-2019 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico.pdf">01-04-2019 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/05-04-2019 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico.pdf">05-04-2019 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/11-04-2019 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico.pdf">11-04-2019 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/13-05-2019 Convocatoria Centros de Capacitación y Adiestramiento 2019.pdf">13-05-2019 Convocatoria Centros de Capacitación y Adiestramiento 2019</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---MODAL 2020-->
                    <div class="modal fade" id="exampleModalToggle220" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg" >
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header"> 
                                    <span class="Juramedium">Convocatorias D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/18-05-2020 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico.pdf">18-05-2020 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/03-07-2020 Convocatoria Centros de Capacitación y Adiestramiento.pdf">03-07-2020 Convocatoria Centros de Capacitación y Adiestramiento</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---MODAL 2-->
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered" >
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header"> 
                                    <span class="Juramedium">Convocatorias D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/06-05-2021 Convocatoria Laboratorios SP.pdf">06-05-2021 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/07-07-2021 Convocatoria Centros de Capacitación y Adiestramiento SP.pdf">07-07-2021 Convocatoria Centros de Capacitación y Adiestramiento</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---MODAL 3-->
                    <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <span class="Juramedium">Convocatorias D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/16-05-2022 Convocatoria Laboratorios SP.pdf">16-05-2022 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/23-05-2022 Convocatoria Laboratorios SP.pdf">23-05-2022 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/30-05-2022 Convocatoria Laboratorios SP.pdf">30-05-2022 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/27-06-2022 Convocatoria Centros de Capacitación. Empresas registradas, revalidadas y refrendadas SP.pdf">27-06-2022 Convocatoria Centros de Capacitación. Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/11-07-2022 Convocatoria Centros de Capacitación SP.pdf">11-07-2022 Convocatoria Centros de Capacitación</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---MODAL 4-->
                    <div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel4" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <span class="Juramedium">Convocatorias D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/16-05-2023 Convocatoria Laboratorios SP.pdf">16-05-2023 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/23-05-2023 Convocatoria Laboratorios SP.pdf">23-05-2023 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/21-06-2023 Convocatoria Centros de Capacitación SP.pdf">21-06-2023 Convocatoria Centros de Capacitación</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/26-06-2023 Convocatoria Centros de Capacitación SPS.pdf">26-06-2023 Convocatoria Centros de Capacitación</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/28-06-2023 Convocatoria Centros de Capacitación SPS.pdf">28-06-2023 Convocatoria Centros de Capacitación</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!---MODAL 5-->
                    <div class="modal fade" id="exampleModalToggle5" aria-hidden="true" aria-labelledby="exampleModalToggleLabel5" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <span class="Juramedium">Convocatorias D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/13-05-2024 Convocatoria de Centros de Capacitación y Laboratorios SP.pdf">13-05-2024 Convocatoria de Centros de Capacitación y Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/21-05-2024 Convocatoria de Centros de Capacitación y Laboratorios SP.pdf">21-05-2024 Convocatoria de Centros de Capacitación y Laboratorios</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!---MODAL 6-->
                    <div class="modal fade" id="exampleModalToggle6" aria-hidden="true" aria-labelledby="exampleModalToggleLabel6" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                     <span class="Juramedium">Convocatorias D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/13-05-2025 Convocatoria Laboratorios SP.pdf">13-05-2025 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/20-05-2025 Convocatoria Laboratorios SP.pdf">20-05-2025 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/11-06-2025  Convocatoria de Centros de Capacitación SP.pdf">11-06-2025  Convocatoria de Centros de Capacitación</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/18-06-2025  Convocatoria de Centros de Capacitación SP.pdf">18-06-2025  Convocatoria de Centros de Capacitación</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/25-06-2025 Convocatoria de Centros de Capacitación SP.pdf">25-06-2025 Convocatoria de Centros de Capacitación</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                   

                <!---FIN MODAL D.O.E-->

                <div class="col-6 col-md-4 col-lg-3">
                    <button class="qa-card" data-bs-target="#exampleModalToggleP" data-bs-toggle="modal" style="width: 100%;text-align: left;">
                        <span class="qa-icon"><img src="src/images/publicaciones doe.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Publicaciones D.O.E</span>
                    </button>
                </div>

                <!---MODAL PUBLICACIONES D.O.E--->

                    <div class="modal fade" id="exampleModalToggleP" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content"  style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 Juramedium" id="exampleModalToggleLabel">Publicaciones D.O.E</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="Juramedium">Seleccione el año:</span>
                                        </div>
                                    </div>
                                    <div class="row g-3 g-md-4">
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle718" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">2018</span>
                                            </button>
                                        </div>

                                        <div class="col-6 col-md-4 col-lg-3">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle719" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">2019</span>
                                            </button>
                                        </div>

                                        <div class="col-6 col-md-4 col-lg-3">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle720" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">2020</span>
                                            </button>
                                        </div>
                                        
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle7" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">2021</span>
                                            </button>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle822" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">2022</span>
                                            </button>
                                        </div>

                                        <div class="col-6 col-md-4 col-lg-3">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle8" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">2023</span>
                                            </button>
                                        </div>

                                        <div class="col-6 col-md-4 col-lg-3">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle9" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">2024</span>
                                            </button>
                                        </div>

                                        <div class="col-6 col-md-4 col-lg-3">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle10" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">2025</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="qa-card" data-bs-dismiss="modal"><span class="Juramedium">Cerrar</span></button>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!---MODAL 2018-->
                    <div class="modal fade" id="exampleModalToggle718" aria-hidden="true" aria-labelledby="exampleModalToggleLabel7" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg" >
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header"> 
                                    <span class="Juramedium">Publicaciones D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/03-05-2018 Empresas Registradas SP.pdf">03-05-2018 Empresas Registradas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/17-05-2018 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico SP.pdf">17-05-2018 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/24-05-2018 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico SP.pdf">24-05-2018 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/31-05-2018 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico SP.pdf">31-05-2018 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/04-07-2018 Empresas Registradas y Sancionadas SP.pdf">04-07-2018 Empresas Registradas y Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/09-07-2018 Empresas Registradas SP.pdf">09-07-2018 Empresas Registradas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/12-07-2018 Empresas Registradas SP.pdf">12-07-2018 Empresas Registradas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/02-08-2018 Laboratorios Autorizados SP.pdf">02-08-2018 Laboratorios Autorizados</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/28-08-2018 Convocatoria Centros de Capacitación y Adiestramiento, Empresas Registradas y Revalidadas, Empresas Suspendidas y con Registro Cancelado 2018 SP.pdf">28-08-2018 Convocatoria Centros de Capacitación y Adiestramiento, Empresas Registradas y Revalidadas, Empresas Suspendidas y con Registro Cancelado 2018</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/31-08-2018 Convocatoria Centros de Capacitación y Adiestramiento, Empresas Registradas y Revalidadas 2018 SP.pdf">31-08-2018 Convocatoria Centros de Capacitación y Adiestramiento, Empresas Registradas y Revalidadas 2018</a>
                                        </li>

                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/05-09-2018 Convocatoria Centros de Capacitación y Adiestramiento, Empresas Registradas y Revalidadas 2018 SP.pdf">05-09-2018 Convocatoria Centros de Capacitación y Adiestramiento, Empresas Registradas y Revalidadas 2018</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/18-09-2018 Centros de Capacitación y Adiestramiento 2018 SP.pdf">18-09-2018 Centros de Capacitación y Adiestramiento 2018</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/21-09-2018 Centros de Capacitación y Adiestramiento 2018 SP.pdf">21-09-2018 Centros de Capacitación y Adiestramiento 2018</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/26-09-2018 Centros de Capacitación y Adiestramiento 2018 SP.pdf">26-09-2018 Centros de Capacitación y Adiestramiento 2018</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/05-11-2018 Empresas Registradas y Revalidadas, Empresas Suspendidas y con Registro Cancelado 2018 SP.pdf">05-11-2018 Empresas Registradas y Revalidadas, Empresas Suspendidas y con Registro Cancelado 2018</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/08-11-2018 Empresas Registradas SP.pdf">08-11-2018 Empresas Registradas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/13-11-2018 Empresas Registradas SP.pdf">13-11-2018 Empresas Registradas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/14-12-2018 Días inhábiles 2019 SP.pdf">14-12-2018 Días inhábiles 2019</a>
                                        </li>

                                
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggleP" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---MODAL 2019-->
                    <div class="modal fade" id="exampleModalToggle719" aria-hidden="true" aria-labelledby="exampleModalToggleLabel7" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg" >
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header"> 
                                    <span class="Juramedium">Publicaciones D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/17-01-2019 Empresas Registradas y Sancionadas SP.pdf">17-01-2019 Empresas Registradas y Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/22-01-2019 Empresas Registradas SP.pdf">22-01-2019 Empresas Registradas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/25-01-2019 Empresas Registradas SP.pdf">25-01-2019 Empresas Registradas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/12-03-2019 Empresas Registradas y Sancionadas.pdf">12-03-2019 Empresas Registradas y Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/15-03-2019 Empresas Registradas SP.pdf">15-03-2019 Empresas Registradas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/21-03-2019 Empresas Registradas SP.pdf">21-03-2019 Empresas Registradas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/01-04-2019 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico SP.pdf">01-04-2019 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/05-04-2019 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico SP.pdf">05-04-2019 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/11-04-2019 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico SP.pdf">11-04-2019 Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/15-04-2019 Publicaciones primer trimestre DOE 2019 SP.pdf">15-04-2019 Publicaciones primer trimestre DOE 2019</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/13-05-2019 Empresas Registradas y Sancionadas SP.pdf">13-05-2019 Empresas Registradas y Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/16-05-2019 Empresas Registradas SP.pdf">16-05-2019 Empresas Registradas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/17-05-2019 Convocatoria Centros de Capacitación y Adiestramiento 2019 SP.pdf">17-05-2019 Convocatoria Centros de Capacitación y Adiestramiento 2019</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/21-05-2019 Empresas Registradas SP.pdf">21-05-2019 Empresas Registradas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/23-05-2019 Convocatoria Centros de Capacitación y Adiestramiento 2019 SP.pdf">23-05-2019 Convocatoria Centros de Capacitación y Adiestramiento 2019</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/08-07-2019 Empresas registradas, empresas con registro suspendido o cancelado, laboratorios autorizados 2019 SP.pdf">08-07-2019 Empresas registradas, empresas con registro suspendido o cancelado, laboratorios autorizados 2019</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/11-07-2019 Empresas registradas, laboratorios autorizados 2019 SP.pdf">11-07-2019 Empresas registradas, laboratorios autorizados 2019</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/16-07-2019 Empresas registradas, Laboratorios autorizados 2019 SP.pdf">16-07-2019 Empresas registradas, Laboratorios autorizados 2019</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/11-10- 2019 Empresas registradas, revalidadas y refrendadas SP.pdf">11-10- 2019 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/16-10-2019 Empresas registradas, Centro de capacitación autorizados 2019 SP.pdf">16-10-2019 Empresas registradas, Centro de capacitación autorizados 2019</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/21-10-2019 Empresas registradas, Centro de capacitación autorizados 2019 SP.pdf">21-10-2019 Empresas registradas, Centro de capacitación autorizados 2019</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/06-12-2019 Empresas Registradas y Sancionadas SP.pdf">06-12-2019 Empresas Registradas y Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/11-12-2019 Empresas Registradas SP.pdf">11-12-2019 Empresas Registradas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/16-12-2019 Empresas Registradas SP.pdf">16-12-2019 Empresas Registradas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/02-12-2019 Días inhábiles 2020 SP.pdf">02-12-2019 Días inhábiles 2020</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggleP" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---MODAL 2020-->
                    <div class="modal fade" id="exampleModalToggle720" aria-hidden="true" aria-labelledby="exampleModalToggleLabel7" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg" >
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header"> 
                                    <span class="Juramedium">Publicaciones D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/12-03-2020 Empresas Registradas y Sancionadas SP.pdf">12-03-2020 Empresas Registradas y Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/18-03-2020 Empresas Registradas SP.pdf">18-03-2020 Empresas Registradas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/23-03-2020 Empresas Registradas SP.pdf">23-03-2020 Empresas Registradas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/23-04-2020 Medidas de seguridad sanitaria SP.pdf">23-04-2020 Medidas de seguridad sanitaria</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/18-05-2020 Empresas registradas y sancionadas. Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico SP.pdf">18-05-2020 Empresas registradas y sancionadas. Convocatoria unidad de verificación, laboratorio de pruebas u organismo de validación médico, psicológico y toxicológico</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/21-05-2020 Empresas registradas SP.pdf">21-05-2020 Empresas registradas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/26-05-2020 Empresas registradas SP.pdf">26-05-2020 Empresas registradas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/03-07-2020 Unidades de verificación, laboratorio de pruebas, u organismo de validación médico, psicológico y toxicológico. Convocatoria Centros de Capacitación y Adiestramiento SP.pdf">03-07-2020 Unidades de verificación, laboratorio de pruebas, u organismo de validación médico, psicológico y toxicológico. Convocatoria Centros de Capacitación y Adiestramiento</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/15-07-2020 Índice general de las publicaciones correspondientes al segundo trimestre de 2020 SP.pdf">15-07-2020 Índice general de las publicaciones correspondientes al segundo trimestre de 2020</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/16-07-2020 Medidas de seguridad sanitaria para evitar la propagación del virus SARS-COV-2 por gotas y contacto directo entre la población del Estado de Yucatán SP.pdf">16-07-2020 Medidas de seguridad sanitaria para evitar la propagación del virus SARS-COV-2 por gotas y contacto directo entre la población del Estado de Yucatán</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/24-08- 2020 Empresas registradas, revalidadas y refrendadas SP.pdf">24-08- 2020 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/27-08-2020 Empresas registradas, revalidadas y refrendadas SP.pdf">27-08-2020 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/01-09-2020 Empresas registradas, revalidadas y refrendadas SP.pdf">01-09-2020 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/19-10-2020 Empresas Registradas y Sancionadas SP.pdf">19-10-2020 Empresas Registradas y Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/22-10-2020 Empresas registradas, revalidadas y refrendadas SP.pdf">22-10-2020 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/28-10-2020 Empresas Registradas, revalidadas y refrendadas SP.pdf">28-10-2020 Empresas Registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/04-12-2020 Días inhábiles 2021 SP.pdf">04-12-2020 Días inhábiles 2021</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/09-12-2020 Empresas registradas y sancionadas SP.pdf">09-12-2020 Empresas registradas y sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/14-12-2020 Empresas registradas, revalidadas y refrendadas SP.pdf">14-12-2020 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/17-12-2020 Empresas registradas, revalidadas y refrendadas SP.pdf">17-12-2020 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggleP" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---MODAL 2-->
                    <div class="modal fade" id="exampleModalToggle7" aria-hidden="true" aria-labelledby="exampleModalToggleLabel7" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg" >
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header"> 
                                    <span class="Juramedium">Publicaciones D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/09-03-2021 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas SP.pdf">09-03-2021 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/12-03-2021 Empresas registradas, revalidadas y refrendadas SP.pdf">12-03-2021 Empresas registradas, revalidadas y refrendadas </a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/18-03-2021 Empresas registradas, revalidadas y refrendadas SP.pdf">18-03-2021 Empresas registradas, revalidadas y refrendadas </a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/19-05-2021 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas SP.pdf">19-05-2021 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/24-05-2021 Empresas registradas, revalidadas y refrendadas SP.pdf">24-05-2021 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/27-05-2021 Empresas registradas, revalidadas y refrendadas SP.pdf">27-05-2021 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/12-08-2021 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas SP.pdf">12-08-2021 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/17-08-2021 Empresas registradas, revalidadas y refrendadas SP.pdf">17-08-2021 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/07-10-2021 Centros de capacitación y adiestramiento SP.pdf">07-10-2021 Centros de capacitación y adiestramiento</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/01-12-2021 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas SP.pdf">01-12-2021 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/06-12-2021 Empresas registradas, revalidadas y refrendadas SP.pdf">06-12-2021 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/09-12-2021 Empresas registradas, revalidadas y refrendadas SP.pdf">09-12-2021 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/19-11-2021 Días inhábiles 2022 SP.pdf">19-11-2021 Días inhábiles 2022</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggleP" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---MODAL 2022-->
                    <div class="modal fade" id="exampleModalToggle822" aria-hidden="true" aria-labelledby="exampleModalToggleLabel8" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <span class="Juramedium">Publicaciones D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                     <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/08-04-2022 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas SP.pdf">08-04-2022 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/13-04-2022 Empresas registradas, revalidadas y refrendadas SP.pdf">13-04-2022 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/19-04-2022 Empresas registradas, revalidadas y refrendadas SP.pdf">19-04-2022 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/29-06-2022 Empresas registradas, revalidadas y refrendadas SP.pdf">29-06-2022 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/01-07-2022 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas SP.pdf">01-07-2022 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/05-09-2022 Empresas registradas, revalidadas y refrendadas SP.pdf">05-09-2022 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/07-09-2022 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas SP.pdf">07-09-2022 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/09-09-2022 Empresas registradas, revalidadas y refrendadas.pdf">09-09-2022 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/28-11-2022 Empresas registradas, revalidadas y refrendadas SP.pdf">28-11-2022 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/29-11-2022 Empresas sancionadas SP.pdf">29-11-2022 Empresas sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/30-11-2022 Empresas registradas, revalidadas y refrendadas SP.pdf">30-11-2022 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/02-12-2022 Empresas registradas, revalidadas y refrendadas SP.pdf">02-12-2022 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/05-12-2022 Días inhábiles 2023 SP.pdf">05-12-2022 Días inhábiles 2023</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggleP" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---MODAL 3-->
                    <div class="modal fade" id="exampleModalToggle8" aria-hidden="true" aria-labelledby="exampleModalToggleLabel8" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <span class="Juramedium">Publicaciones D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                     <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/28-02-2023 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas SP.pdf">28-02-2023 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/03-03-2023 Empresas registradas, revalidadas y refrendadas SP.pdf">03-03-2023 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/07-03-2023 Empresas registradas, revalidadas y refrendadas SP.pdf">07-03-2023 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/16-05-2023 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas. Convocatoria Laboratorios SP.pdf">16-05-2023 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas. Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/19-05-2023 Empresas registradas, revalidadas y refrendadas SP.pdf">19-05-2023 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/23-05-2023 Empresas registradas, revalidadas y refrendadas. Convocatoria Laboratorios SP.pdf">23-05-2023 Empresas registradas, revalidadas y refrendadas. Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/26-06-2023 Convocatoria Centros de Capacitación SP.pdf">26-06-2023 Convocatoria Centros de Capacitación</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/28-06-2023 Convocatoria Centros de Capacitación SP.pdf">28-06-2023 Convocatoria Centros de Capacitación</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/29-08-2023 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas. Centros de Capacitacón autorizados SP.pdf">29-08-2023 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas. Centros de Capacitacón autorizados</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/31-08-2023 Empresas registradas, revalidadas y refrendadas SP.pdf">31-08-2023 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/05-09-2023 Empresas registradas, revalidadas y refrendadas SP.pdf">05-09-2023 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/30-11-2023 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas SP.pdf">30-11-2023 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/04-12-2023 Días inhábiles 2024 SP.pdf">04-12-2023 Días inhábiles 2024</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/05-12-2023 Empresas registradas, revalidadas y refrendadas SP.pdf">05-12-2023 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggleP" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---MODAL 4-->
                    <div class="modal fade" id="exampleModalToggle9" aria-hidden="true" aria-labelledby="exampleModalToggleLabel9" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <span class="Juramedium">Publicaciones D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                   <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/15-03-2024 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas SP.pdf">15-03-2024 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/25-03-2024 Empresas registradas, revalidadas y refrendadas sp.pdf">25-03-2024 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/20-03-2024 Empresas registradas, revalidadas y refrendadas sp.pdf">20-03-2024 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/13-05-2024 Convocatoria de Centros de Capacitación y Laboratorios sps.pdf">13-05-2024 Convocatoria de Centros de Capacitación y Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/21-05-2024 Convocatoria de Centros de Capacitación y Laboratorios sps.pdf">21-05-2024 Convocatoria de Centros de Capacitación y Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/31-05-2024 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas sp.pdf">31-05-2024 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/05-06-2024 Empresas registradas, revalidadas y refrendadas sp.pdf">05-06-2024 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/11-06-2024 Empresas registradas, revalidadas y refrendadas sp.pdf">11-06-2024 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/23-09-2024 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas sp.pdf">23-09-2024 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/26-09-2024 Empresas registradas, revalidadas y refrendadas sp.pdf">26-09-2024 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/30-09-2024 Empresas registradas, revalidadas y refrendadas sp.pdf">30-09-2024 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/12-12-2024 Días inhábiles 2025 sp.pdf">12-12-2024 Días inhábiles 2025</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggleP" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---MODAL 5-->
                    <div class="modal fade" id="exampleModalToggle10" aria-hidden="true" aria-labelledby="exampleModalToggleLabel10" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <span class="Juramedium">Publicaciones D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/27-01-2025 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas sps.pdf">27-01-2025 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/29-01-2025 Empresas registradas, revalidadas y refrendadas sps.pdf">29-01-2025 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/31-01-2025 Empresas registradas, revalidadas y refrendadas sps.pdf">31-01-2025 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/13-05-2025 Convocatoria Laboratorios sps.pdf">13-05-2025 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/20-05-2025 Convocatoria Laboratorios sps.pdf">20-05-2025 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/27-05-2025 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas sps.pdf">27-05-2025 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/29-05-2025 Empresas registradas, revalidadas y refrendadas sps.pdf">29-05-2025 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/02-06-2025 Empresas registradas, revalidadas y refrendadas sps.pdf">02-06-2025 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/11-06-2025 Convocatoria de Centros de Capacitación sps.pdf">11-06-2025 Convocatoria de Centros de Capacitación</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/18-06-2025  Convocatoria de Centros de Capacitación sps.pdf">18-06-2025  Convocatoria de Centros de Capacitación</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/25-06-2025 Convocatoria de Centros de Capacitación sps.pdf">25-06-2025 Convocatoria de Centros de Capacitación</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/29-08-2025 Centros de Capacitación Autorizados sps.pdf">29-08-2025 Centros de Capacitación Autorizados</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/29-09-2025 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas sps.pdf">29-09-2025 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/01-10-2025 Empresas registradas, revalidadas y refrendadas sps.pdf">01-10-2025 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/03-10-2025 Empresas registradas, revalidadas y refrendadas sps.pdf">03-10-2025 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/12-12-2025 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas sps.pdf">12-12-2025 Empresas registradas, revalidadas y refrendadas. Empresas Sancionadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/19-12-2025 Empresas registradas, revalidadas y refrendadas sps.pdf">19-12-2025 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/26-12-2025 Empresas registradas, revalidadas y refrendadas sps.pdf">26-12-2025 Empresas registradas, revalidadas y refrendadas</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggleP" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!---FIN MODAL D.O.E PUBLICACIONES-->

                <div class="col-6 col-md-4 col-lg-3">
                    <button class="qa-card" data-bs-target="#exampleModalToggleV" data-bs-toggle="modal" style="width: 100%;text-align: left;">
                        <span class="qa-icon"><img src="src/images/convocatoria vigente.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Convocatorias Vigentes</span>
                    </button>
                </div>

                <!--MODAL CON. VIGENTES-->
                    <div class="modal fade" id="exampleModalToggleV" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content"  style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 Juramedium" id="exampleModalToggleLabel">Convocatorias Vigentes</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="Juramedium">Seleccione una opción:</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle11" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">Convocatorias Vigentes</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="qa-card" data-bs-dismiss="modal"><span class="Juramedium">Cerrar</span></button>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!---MODAL 2-->
                    <div class="modal fade" id="exampleModalToggle11" aria-hidden="true" aria-labelledby="exampleModalToggleLabel11" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered" >
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header"> 
                                    <span class="Juramedium">Convocatorias Vigentes</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <span class="Juramedium">Sin archivos</span>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggleV" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--FIN MODAL CON. VIGENTES-->

                <div class="col-6 col-md-4 col-lg-3">
                    <button class="qa-card" data-bs-target="#exampleModalToggleN" data-bs-toggle="modal" style="width: 100%;text-align: left;">
                        <span class="qa-icon"><img src="src/images/normatividad.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Normatividad</span>
                    </button>
                </div>

                <!--MODAL NORMATIVIDAD-->
                    <div class="modal fade" id="exampleModalToggleN" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content"  style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 Juramedium" id="exampleModalToggleLabel">Normatividad</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="Juramedium">Seleccione una opción:</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle12" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">Normatividad</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="qa-card" data-bs-dismiss="modal"><span class="Juramedium">Cerrar</span></button>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!---MODAL 2-->
                    <div class="modal fade" id="exampleModalToggle12" aria-hidden="true" aria-labelledby="exampleModalToggleLabel11" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered" >
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header"> 
                                    <span class="Juramedium">Normatividad</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/Ley para la Prestación de Servicios de Seguridad Privada en el Estado de Yucatán sps.pdf">Ley para la Prestación de Servicios de Seguridad Privada en el Estado de Yucatán</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/Ley de Actos y Procedimientos Administrativos del Estado de Yucatán sps.pdf">Ley de Actos y Procedimientos Administrativos del Estado de Yucatán</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/Ley General de Hacienda de Yucatán sps.pdf">Ley General de Hacienda de Yucatán</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggleN" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                <!--FIN DE NORMATIVIDAD--->

                <div class="col-6 col-md-4 col-lg-3">
                    <button class="qa-card" data-bs-target="#exampleModalToggleF" data-bs-toggle="modal" style="width: 100%;text-align: left;">
                        <span class="qa-icon"><img src="src/images/formatos.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Formatos</span>
                    </button>
                </div>

                <!--MODAL FORMATOS-->
                    <div class="modal fade" id="exampleModalToggleF" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content"  style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 Juramedium" id="exampleModalToggleLabel">Formatos</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="Juramedium">Seleccione una opción:</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="qa-card" data-bs-target="#exampleModalToggleFD" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">Formatos Disponibles</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="qa-card" data-bs-dismiss="modal"><span class="Juramedium">Cerrar</span></button>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!---MODAL 2-->
                    <div class="modal fade" id="exampleModalToggleFD" aria-hidden="true" aria-labelledby="exampleModalToggleLabelFD" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered" >
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header"> 
                                    <span class="Juramedium">Formatos</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/Formato Alta CUIP.pdf">Formato Alta CUIP</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/Formato Baja CUIP.pdf">Formato Baja CUIP</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/Listado_Nominal DSP.xlsx">Listado Nominal DSP</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/Listado_Equipos DSP.xlsx">Listado Equipos DSP</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggleN" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                <!--FIN DE FORMATOS--->

                <div class="col-6 col-md-4 col-lg-3">
                    <button class="qa-card" data-bs-target="#exampleModalToggleTR" data-bs-toggle="modal" style="width: 100%;text-align: left;">
                        <span class="qa-icon"><img src="src/images/tramites.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Trámites</span>
                    </button>
                </div>

                <!--MODAL TRÁMITES-->
                    <div class="modal fade" id="exampleModalToggleTR" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content"  style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 Juramedium" id="exampleModalToggleLabel">Trámites</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="Juramedium">Seleccione una opción:</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="qa-card" data-bs-target="#exampleModalToggleTRV" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">Trámites Vigentes</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="qa-card" data-bs-dismiss="modal"><span class="Juramedium">Cerrar</span></button>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!---MODAL 2-->
                    <div class="modal fade" id="exampleModalToggleTRV" aria-hidden="true" aria-labelledby="exampleModalToggleLabelTRV" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered" >
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header"> 
                                    <span class="Juramedium">Trámites</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/Formato Alta CUIP.pdf">Registro CUIP</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggleN" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                <!--FIN DE TRÁMITES--->

                <div class="col-6 col-md-4 col-lg-3">
                    <button class="qa-card" data-bs-target="#exampleModalToggleG" data-bs-toggle="modal" style="width: 100%;text-align: left;">
                        <span class="qa-icon"><img src="src/images/guias.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Guías</span>
                    </button>
                </div>

                <!--MODAL CON. GUÍAS-->
                    <div class="modal fade" id="exampleModalToggleG" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content"  style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 Juramedium" id="exampleModalToggleLabel">Guías</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="Juramedium">Seleccione una opción:</span>
                                        </div>
                                    </div>
                                    <div class="row g-3 g-md-4">
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle13" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">Guías Disponibles</span>
                                            </button>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle14" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">Costos</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="qa-card" data-bs-dismiss="modal"><span class="Juramedium">Cerrar</span></button>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!---MODAL 2-->
                    <div class="modal fade" id="exampleModalToggle13" aria-hidden="true" aria-labelledby="exampleModalToggleLabel11" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered" >
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header"> 
                                    <span class="Juramedium">Guías</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/Revalidación sps.pdf">Revalidación</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/Informes Mensuales sps.pdf">Informes Mensuales</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/Autorización y Registro sps.pdf">Autorización y Registro</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggleG" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---MODAL 3-->
                    <div class="modal fade" id="exampleModalToggle14" aria-hidden="true" aria-labelledby="exampleModalToggleLabel11" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered" >
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header"> 
                                    <span class="Juramedium">Guías</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <span class="Juramedium">
                                        De acuerdo al Artículo 56-I Fracción I de la Ley General de Hacienda del Estado de Yucatán:
                                        El costo para la autorización, revalidación o refrendos de las empresas de Seguridad Privada es de:
                                        37.50 UMAs.
                                    </span>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button class="qa-card" data-bs-target="#exampleModalToggleG" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--FIN MODAL CON. GUÍAS-->

                <div class="col-6 col-md-4 col-lg-3">
                    <button class="qa-card" data-bs-target="#exampleModalToggleC" data-bs-toggle="modal" style="width: 100%;text-align: left;">
                        <span class="qa-icon"><img src="src/images/Contactoo.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Contacto</span>
                    </button>
                </div>

                <!--MODAL CON. CONTACTO-->
                    <div class="modal fade" id="exampleModalToggleC" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content"  style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 Juramedium" id="exampleModalToggleLabel">Contacto</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row g-3 g-md-4">
                                        <div class="col-md-6">
                                            <div class="card card-comunicate shadow-card-comunicate" >
                                                <div class="card-body">
                                                    <p class="card-text Juramedium">
                                                        Horarios de Atención: <b>Lunes a viernes:</b> 8:00 a 21:00 horas
                                                    </p>
                                                    <p class="card-text Juramedium">
                                                        Teléfono de Oficina: 30 32 00 ext: 49226
                                                    </p>
                                                    <p class="card-text Juramedium">
                                                        Número de Emergencia: 9-1-1
                                                    </p>
                                                    <p class="card-text Juramedium">
                                                        Correo electrónico: seguridad.privada.ssp@yucatan.gob.mx
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card card-comunicate shadow-card-comunicate" >
                                                <div class="card-body">
                                                    <p class="card-text Juramedium">
                                                        Soporte Técnico
                                                    </p>
                                                    <p class="card-text Juramedium">
                                                        Teléfono de oficina: (999) 930 3200 ext: 49267
                                                    </p>
                                                    <p class="card-text Juramedium">
                                                        Correo electrónico: julio.gonzalez@yucatan.gob.mx
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

                <!--FIN MODAL CON. CONTACTO-->
                
            </div>

        </section>
</main>


<?php
    include_once(ROOT_PATH . 'footer.php');
?>