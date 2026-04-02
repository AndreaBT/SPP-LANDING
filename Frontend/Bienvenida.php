<?php
// 1. Incluye el archivo config.php (usando __DIR__ para ubicarlo correctamente)
include_once(__DIR__ . '/../config.php');
include_once(ROOT_PATH . 'head.php');
include_once(ROOT_PATH . 'navbar.php');
?>
<main id="contenido">
    <section class="container">
            <div class="card mb-3 card-bienvenida">
                <img src="<?php echo BASE_URL; ?>src/images/cadete1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title Juramedium">Bienvenida</h5>
                    <p class="card-text Juramedium">Estimados conciudadanos:</p>
                    <p class="card-text Juramedium">
                        Con su propio portal de Internet, la Secretaría de Seguridad Pública del estado de Yucatán amplía las formas de comunicación con la sociedad, para que además de recibir reportes de casos que requieran nuestra intervención, podamos conocer 
                        directamente inquietudes, solicitudes y propuestas ciudadanas, que nos permitan servirles mejor.<br><br>
                        El usuario tiene acceso en este portal a información sobre las distintas áreas administrativas y operativas, 
                        con el propósito de que conozca las funciones y servicios que prestan, los trámites y sus procedimientos y, en su caso, los costos.<br><br>
                        En la SSP estamos más cerca de la gente, por eso creamos los sectores en cada punto cardinal de la ciudad de Mérida, 
                        con unidades y elementos de protección, vialidad, rescate y paramédicos; lo mismo hicimos en el interior del estado con los
                        Centros Integrales de Seguridad Pública y más recientemente en comisarías de Mérida con unidades especialmente asignadas a esas
                        localidades.<br><br>
                        Con esa distribución de los servicios realizamos una vigilancia más efectiva y acortamos los tiempos de respuesta en caso de emergencias.
                        Este portal, también tiene el propósito de acortar tiempos y distancias, de manera que el ciudadano encuentre información 
                        mediante búsquedas sencillas y ágiles, e interactué con la Corporación mediante mensajes de correo y encuestas de opinión 
                        sobre temas de interés general en el ámbito de nuestras competencias.<br><br>
                        Sean bienvenidos.<br>
                        Atentamente <br><br>
                        <b class="Russ">Cmdte. Luis Felipe Saidén Ojeda</b> <br>
                        Secretario de Seguridad Pública
                    </p>
                </div>
            </div>
    </section>
</main>

<?php
    include_once(ROOT_PATH . 'footer.php');
?>