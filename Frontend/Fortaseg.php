<?php
    include_once(__DIR__ . '/../config.php');
    include_once(ROOT_PATH . 'head.php');
    include_once(ROOT_PATH . 'navbar.php');
?>
<style>
    p{
        color: #e2e2e2;
    }

    /* CONTAINER */
    

    /* SECTIONS */

    

    /* GRID CARDS */
    .grid{
        display:grid;
        gap:25px;
    }

    .features{
        grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    }

    .feature-box {
        background: #111;
        padding: 20px;
        border-radius: 8px;
        border: 1px solid #333;
    }



   
</style>
<header class="heroCALEA">
    <div class="content container py-5">
        <img src="<?php echo BASE_URL; ?>src/LogoSSP.png" style="width: 20%;" alt="CALEA">
       
        <div class="eyebrowN Juramedium">Proyecto: Prevención de Violencia de Género - FORTASEG 2018</div>
    </div>
</header>

<main id="contenido">
    <section class="container">
        <div class="section-header mb-4">
            <h2 class="Russ h4 mb-0">Objetivo</h2>
        </div> 
        <p class="Juramedium">
           Promover la participación y organización de las mujeres conformando redes comunitarias que fomenten la solidaridad, seguridad ciudadana y cohesión social, que diseñen e implementen acciones para prevenir la violencia de género. 
        </p>
        <br>
        <div class="grid features">
            <div class="feature-box">
                <h2 class="Russ h4 mb-0">Diagnóstico de Violencia</h2>
                <ul class="Juraligt" style="color: #e2e2e2 !important">
                    <li>Estudio de estadística de la violencia contra la mujer.</li>
                    <li>Indentificación de políticas públicas dirigidos a las mujeres.</li>
                    <li>Participación de organizaciones civiles locales.</li>
                    <li>Mapeo de actores estratégicos locales para la prevención de la violencia.</li>
                </ul>
                <h4 class="Russ h4 mb-0">Resultado:</h4> <p class="Juraligt">Un <b>reporte del diagnóstico</b> con propuestas para la atención de las problemáticas encontradas.</p>
            </div>
            <div class="feature-box">
                <h3 class="Russ h4 mb-0">Conformación de Redes de Mujeres</h3>
                <ul class="Juraligt" style="color: #e2e2e2 !important">
                    <li>Mujeres de las colonias participantes convocadas.</li>
                    <li>Redes organizadas en una estructura operativa.</li>
                    <li>Capacitación a las mujeres de cada red.</li>
                    <li>Acciones para la prevención de la violencia diseñadas con las mujeres de la red.</li>
                </ul>
                <h4 class="Russ h4 mb-0">Resultado:</h4> <p class="Juraligt"><b>4</b> redes de mujeres operando con <b>100</b> integrantes en cada red.</p>
            </div>
            
        </div>
        <br>
        <div class="grid features">
            
            <div class="feature-box">
                <h3 class="Russ h4 mb-0">Acciones Estrátegicas de Prevención</h3>
                <ul class="Juraligt" style="color: #e2e2e2 !important">
                    <li>Canalización de víctimas de la violencia.</li>
                    <li>Talleres, foros, actividades deportivas y recreativas para sensibilizar sobre la violencia de género.</li>
                    <li>Actividades escolares, comunitarias y laborales para la promoción de la denuncia.</li>
                    <li>Capacitaciones laborales para el empoderamiento económico de la mujer.</li>
                </ul>
                <h4 class="Russ h4 mb-0">Resultado:</h4> <p class="Juraligt">Más de <b>50 acciones preventivas organizadas</b> e implementadas para las mujeres de la red.</p>
            </div>
            <div class="feature-box">
                <h3 class="Russ h4 mb-0">Mojoramiento de Espaciones Públicos</h3>
                <ul class="Juraligt" style="color: #e2e2e2 !important">
                    <li>Talleres de sensibilización sobre los tipos de violencia de género en espacios públicos.</li>
                    <li>Marchas cpomunitarias explotarias para identificar zonas inseguras en sus colonias.</li>
                    <li>Colaborando entre las mujeres de la red y autoridades para mejorar los espacios.</li>
                </ul>
                <h4 class="Russ h4 mb-0">Resultado:</h4> <p class="Juraligt">Espacios <b>iluminados, poda y limpieza</b> en terrenos baldíos.</p>
            </div>
        </div>

        <br>

        <div class="row g-3 g-md-4" style="justify-content: center;">
            <div class="col-6 col-md-4 col-lg-3">
                <a class="qa-card">
                    <span class="qa-icon"><img src="src/images/beneficiadas 400 mujeres.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Beneficiadas: <b>400 Mujeres</b></span>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <a class="qa-card" >
                    <span class="qa-icon"><img src="src/images/duracionjuniodiciembre.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Duración: <b>Junio</b> a <b>Diciembre 2018</b></span>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <a class="qa-card" >
                    <span class="qa-icon"><img src="src/images/ubicacion.png"  alt="Servicios Públicos" /></span>
                    <span class="Juramedium">Implementado: <b>Juan Pablo II y Emiliano Zapata Sur</b></span>
                </a>
            </div>
        </div>
    </section>
</main>


<?php
    include_once(ROOT_PATH . 'footer.php');
?>