<?php
    include_once(__DIR__ . '/../config.php');
    include_once(ROOT_PATH . 'head.php');
    include_once(ROOT_PATH . 'navbar.php');
?>
<header class="heroProx">
    <div class="content container py-5">
       <img src="<?php echo BASE_URL; ?>src/LogoSSP.png" style="width: 20%;" alt="CALEA">
       
        <div class="eyebrowN Juramedium" style="color:#3f3e40 !important">Asuntos Internos de la Secretaría de Seguridad Pública del Estado de Yucatán</div>
        
    </div>
</header>

<main id="contenido" style="background-color:#e2e2e2 !important; color:#3f3e40 !important">
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <h5 class="Juraligt" >
                    La Secretaría de Seguridad Pública del Estado de Yucatán pone a tu disposición los medios oficiales para que puedas expresar tus dudas, comentarios, reconocimientos, quejas, felicitaciones, inconformidades o sugerencias, hacia la Corporación o hacia alguno de los servidores públicos que la integran:
                
                </h5>
                <br>
                <ul  class="Juraligt">
                    <li>
                        <p ><b>Por escrito: </b>Presenta un escrito ante la Oficialía de Partes de la S.S.P., anexando copia de alguna identificación oficial vigente (excepto en los casos de anonimato).</p>
                    </li>
                    <li>
                        <p><b>De manera personal: </b>Acude al Departamento de Atención Ciudadana de la S.S.P, presentando el original y copia fotostática de alguna identificación oficial vigente (excepto en los casos de anonimato).</p>
                    </li>
                    <li>
                        <p>
                            <b>De manera electrónica: </b>
                        </p>
                        <p>
                            - A través de la siguiente cuenta de correo: atencion.ciudadana.ssp@yucatan.gob.mx.
                        </p>
                        <p>
                            - Anexa copia, fotografía o escaneo de alguna identificación oficial vigente (excepto en los casos de anonimato).
                        </p>
                    </li>
                    <li>
                        <p><b>Vía telefónica: </b>Marca al (999) 93032 00 Ext. 49032.</p>
                    </li>
                </ul>
            </div>
        </div>
        <br>
        <div class="section-header mb-4">
            <h2 class="Russ h4 mb-0" style=" color:#3f3e40 !important">Horarios de Atención:</h2>
        </div>
        <div class="row g-3 g-md-4">
            <div class="col-12 col-md-6">
                <div class="card card-comunicate shadow-card-comunicate" >
                    <div class="card-body">
                        <p class="card-text Juramedium">
                            Oficialía de Partes
                        </p>
                        <p class="card-text Juramedium">
                            (999) 9 30 32 00 ext. 49157 en un horario de 08:00 horas a 17:00 horas.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card card-comunicate shadow-card-comunicate" >
                    <div class="card-body">
                        <p class="card-text Juramedium">
                        Departamento de Atención Ciudadana.
                        </p>
                        <p class="card-text Juramedium">
                            (999) 9 30 32 00 ext. 49032 en un horario de 08:00 horas a 17:00 horas.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="section-header mb-4">
            <h2 class="Russ h4 mb-0"  style=" color:#3f3e40 !important">Ubicación de las Oficinas:</h2>
        </div>
        <div class="row g-3 g-md-4">
            <div class="col-12 col-md-6">
                <div class="card card-comunicate shadow-card-comunicate" >
                    <div class="card-body">
                        <p class="card-text Juramedium">
                           Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán, México.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <button type="button" class="card card-comunicate shadow-card-comunicate"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <div class="card-body" style="text-align: left;">
                        <p class="card-text Juramedium">
                           Para un mejor seguimiento, favor de proporcionar la siguiente información:
                        </p>
                    </div>
                </button>

            </div>
            
        </div>
    </section>
</main>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Narración de los Hechos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul  class="Juraligt" style="color: #3f3e40">
                    <li>
                        <p ><b>Fecha de los hechos.</b></p>
                    </li>
                    <li>
                        <p><b>Hora de los hechos.</b></p>
                    </li>
                    <li>
                        <p>
                            <b>Lugar de los hechos. </b>
                        </p>
                    </li>
                    <li>
                        <p><b>Modo de comisión.</b></p>
                    </li>
                    <li>
                        <p><b>Narración circunstanciada del hecho.</b></p>
                    </li>
                    <li>
                        <p><b>En caso de saber, el nombre y apellido de los servidores públicos que participaron.</b></p>
                    </li>
                    <li>
                        <p><b>La forma de intervención de los servidores públicos que participaron (No aplica en los casos de reconocimientos o felicitaciones).</b></p>
                    </li>
                    <li>
                        <p><b>En caso de saber, el número económico o placa de las unidades que llegaron al lugar.</b></p>
                    </li>
                    <li>
                        <p><b>En caso de tener, los datos de prueba que estimen necesarios.</b></p>
                    </li>
                    <li>
                        <p><b>Salvo los casos de anonimato, nombre y apellido, edad, así como teléfono, correo electrónico y domicilio para escuchar y recibir notificaciones.</b></p>
                    </li>

                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<?php
    include_once(ROOT_PATH . 'footer.php');
?>