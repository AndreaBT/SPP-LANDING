<?php
    include_once(__DIR__ . '/../config.php');
    include_once(ROOT_PATH . 'head.php');
    include_once(ROOT_PATH . 'navbar.php');
?>
<header class="heroCALEA">
    <div class="content container py-5">
       <img src="<?php echo BASE_URL; ?>src/LogoSSP.png" style="width: 20%;" alt="CALEA">
       
         <div class="eyebrowN Juramedium">Secretaría de Seguridad Pública del Estado de Yucatán</div>
        
    </div>
</header>

<main id="contenido">
    <section class="container">
            <div class="section-header mb-4">
                <h2 class="Russ h4 mb-0">Escuelas de Manejo</h2>
            </div>
            <div class="row g-3 g-md-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/EscuelasDeManejoRegistradas.pdf"  target="_blank" rel="noopener">
                        <span class="qa-icon"><img src="src/images/autoescuela.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Escuelas de Manejo Registradas</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/EscuelasDeManejoSancionadas.pdf"  target="_blank" rel="noopener">
                        <span class="qa-icon"><img src="src/images/escuela de manejo sancionadas@300x.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Escuelas de Manejo Sancionadas</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/InstructoresAutorizados.pdf"  target="_blank" rel="noopener">
                        <span class="qa-icon"><img src="src/images/instructor.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Instructores Autorizados</span>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/InstructoresSancionados.pdf"  target="_blank" rel="noopener">
                        <span class="qa-icon"><img src="src/images/Instructores sancionados@300x.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Instructores Sancionados</span>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/VehiculosAutorizados.pdf"   target="_blank" rel="noopener">
                        <span class="qa-icon"><img src="src/images/vehiculos autorizados.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Vehículos Autorizados</span>
                    </a>
                </div>


                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>src/pdfs/Laboratorios Autorizados.pdf"  target="_blank" rel="noopener">
                        <span class="qa-icon"><img src="src/images/Laboratorio Autorizado.png"  alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Laboratorios Autorizados</span>
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
                                            <button class="qa-card" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">2021</span>
                                            </button>
                                        </div>

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
                                    </div>

                                    <br>
                                    <div class="row g-3 g-md-4">
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
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/06-05-2021 Convocatoria Laboratorios.pdf">06-05-2021 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/07-05-2021 Convocatoria Laboratorios.pdf">07-05-2021 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/10-05-2021 Convocatoria Laboratorios.pdf">10-05-2021 Convocatoria Laboratorios</a>
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
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/17-05-2022 Convocatoria Laboratorios.pdf">17-05-2022 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/18-05-2022 Convocatoria Laboratorios.pdf">18-05-2022 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/19-05-2022 Convocatoria Laboratorios.pdf">19-05-2022 Convocatoria Laboratorios</a>
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
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/02-05-2023 Convocatoria Laboratorios.pdf">02-05-2023 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/09-05-2023 Convocatoria Laboratorios.pdf">09-05-2023 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/16-05-2023 Convocatoria Laboratorios.pdf">16-05-2023 Convocatoria Laboratorios</a>
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
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/29-04-2024 Convocatoria Laboratorios.pdf">29-04-2024 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/02-05-2024 Convocatoria Laboratorios.pdf">02-05-2024 Convocatoria Laboratorios</a>
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
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/16-04-2025 Convocatoria Laboratorios.pdf">16-04-2025 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/21-04-2025 Convocatoria Laboratorios.pdf">21-04-2025 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/24-04-2025 Convocatoria Laboratorios.pdf">24-04-2025 Convocatoria Laboratorios</a>
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
                                            <button class="qa-card" data-bs-target="#exampleModalToggle7" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">2021</span>
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

                    <!---MODAL 2-->
                    <div class="modal fade" id="exampleModalToggle7" aria-hidden="true" aria-labelledby="exampleModalToggleLabel7" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered" >
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header"> 
                                    <span class="Juramedium">Publicaciones D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/06-05-2021 Convocatoria LaboratoriosP.pdf">06-05-2021 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/07-05-2021 Convocatoria LaboratoriosP.pdf">07-05-2021 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/10-05-2021 Convocatoria LaboratoriosP.pdf">10-05-2021 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/07-10-2021 Escuelas de manejo autorizadas.pdf">07-10-2021 Escuelas de manejo autorizadas</a>
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
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <span class="Juramedium">Publicaciones D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                     <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/02-05-2023 Convocatoria LaboratoriosPD.pdf">02-05-2023 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/09-05-2023 Convocatoria LaboratoriosPD.pdf">09-05-2023 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/16-05-2023 Convocatoria LaboratoriosPD.pdf">16-05-2023 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/21-06-2023 Laboratorios Autorizados.pdf">21-06-2023 Laboratorios Autorizados</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/04-12-2023 Días inhábiles 2024.pdf">04-12-2023 Días inhábiles 2024</a>
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
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <span class="Juramedium">Publicaciones D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                   <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/29-04-2024 Convocatoria Laboratorios.pdf">29-04-2024 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/02-05-2024 Convocatoria Laboratorios.pdf">02-05-2024 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/12-12-2024 Días inhábiles 2025.pdf">12-12-2024 Días inhábiles 2025</a>
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
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="background-color: #000;color: #e2e2e2;border-color: #e2e2e2;">
                                <div class="modal-header">
                                    <span class="Juramedium">Publicaciones D.O.E</span>
                                    <button type="button" style="color:#e2e2e2 !important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="Juraligt" style="color: #e2e2e2 !important">
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/16-04-2025 Convocatoria LaboratoriosPD.pdf">16-04-2025 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/21-04-2025 Convocatoria LaboratoriosPD.pdf">21-04-2025 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/24-04-2025 Convocatoria LaboratoriosPD.pdf">24-04-2025 Convocatoria Laboratorios</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/11-06-2025 Laboratorios Autorizados.pdf">11-06-2025 Laboratorios Autorizados</a>
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
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/Ley de Actos y Procedimientos Administrativos del Estado de Yucatán.pdf">Ley de Actos y Procedimientos Administrativos del Estado de Yucatán</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/Ley de Tránsito y Vialidad del Estado de Yucatán.pdf">Ley de Tránsito y Vialidad del Estado de Yucatán</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/Ley General de Hacienda de Yucatán.pdf">Ley General de Hacienda de Yucatán</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/Reglamento de la Ley de Tránsito y Vialidad del Estado de Yucatán.pdf">Reglamento de la Ley de Tránsito y Vialidad del Estado de Yucatán</a>
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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="qa-card" data-bs-target="#exampleModalToggle13" data-bs-toggle="modal" style="width: 100%;text-align: center; justify-content: center;">
                                                <span class="Juramedium">Guías Disponibles</span>
                                            </button>
                                        </div>
                                        <div class="col-md-6">
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
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/Registro - Escuelas de Manejo.pdf">Registro - Escuelas de Manejo</a>
                                        </li>
                                        <li>
                                            <a  style="color: #e2e2e2 !important" href="<?php echo BASE_URL; ?>src/pdfs/Registro - Instructores.pdf">Registro - Instructores</a>
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
                                        De acuerdo al Artículo 56-B de la Ley General de Hacienda del Estado de Yucatán, se causarán derechos para las escuelas de manejo conforme a lo siguiente:
                                    </span>
                                    <br>
                                    <span class="Juramedium">
                                        I.- El costo para la autorización o renovación de cada vehículo para el aprendizaje con el que cuente una escuela de manejo autorizada por la Secretaría de Seguridad Pública es de: 5.00 UMAs.
                                        <br>
                                        II.- El costo para la autorización o renovación del permiso de funcionamiento para establecer una escuela de manejo es de: 282.18 UMAs.
                                    </span>
                                    <br>
                                    <span class="Juramedium">
                                        De acuerdo al Artículo 56-C de la Ley General de Hacienda del Estado de Yucatán, la autorización o renovación del permiso de un instructor de alguna escuela de manejo es de: 21.16 UMAs.
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
                                                        Correo electrónico: julio.gonzalez@yucatan.gob.mx
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card card-comunicate shadow-card-comunicate" >
                                                <div class="card-body">
                                                    <p class="card-text Juramedium">
                                                        C. Julio César González Rosado
                                                    </p>
                                                    <p class="card-text Juramedium">
                                                        Encargado del Departamento de Servicios Públicos de Seguridad.
                                                        Dirección General de Servicios Públicos.
                                                        Secretaría de Seguridad Pública del Estado de Yucatán.
                                                    </p>
                                                    <p class="card-text Juramedium">
                                                        Teléfono de oficina: (999) 930 3200 ext: 49267
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