<?php
// 1. Incluye el archivo config.php (usando __DIR__ para ubicarlo correctamente)
include_once(__DIR__ . '/../config.php');
include_once(ROOT_PATH . 'head.php');
include_once(ROOT_PATH . 'navbar.php');
?>
<main id="contenido">
    <div class=" section-us container">
        <div class="row">
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card card-bienvenida shadow-card" style="max-height: 300px; overflow-y: auto;">
                    <div class="card-body">
                        <h5 class="card-title Russ">MISIÓN</h5>
                        <p class="card-text Juramedium">
                            Servir y proteger a la población del Estado de Yucatán con honestidad, honradez y
                            responsabilidad, a través de un impulso continuo en la modernización y
                            profesionalización de los cuerpos policiales y la participación de la población en la prevención del
                            delito y el respeto a los derechos humanos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card card-bienvenida shadow-card"  style="max-height: 300px; overflow-y: auto;">
                    <div class="card-body ">
                        <h5 class="card-title Russ">VISIÓN</h5>
                        <p class="card-text Juramedium">
                            Hacer de Yucatán uno de los Estados más seguros del país mediante la promoción de programas y actividades, fomentando la prevención
                            y combate eficiente y honesto de la delincuencia, con un estricto apego a la ley, salvaguardando la integridad física y patrimonial de la población y de sus visitantes
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card card-bienvenida shadow-card"  style="max-height: 300px; overflow-y: auto;">
                    <div class="card-body">
                        <h5 class="card-title Russ">VALORES</h5>
                        <ul class="Juramedium">
                            <li><b class="Russ">HONESTIDAD:</b> Ser honesto consigo mismo y con la sociedad a la que sirve. <br></li>
                            <li><b class="Russ">AMABILIDAD:</b> Ser amable en el contacto diario con los ciudadanos. <br></li>
                            <li><b class="Russ">FIRMEZA:</b> Ser firme en su actuación contra quien lesione los intereses de la sociedad <br></li>
                            <li><b class="Russ">VALENTÍA:</b> Ser valiente en la protección y seguridad ciudadana. <br></li>
                            <li><b class="Russ">RESPONSABILIDAD: </b>Ser responsable en el cumplimiento de sus deberes como servidor público. <br></li>
                            <li><b class="Russ">PERSEVERANCIA: </b>Ser perseverante en el logro de su propia superación profesional y personal. <br></li>
                            <li><b class="Russ">RESPETO:</b> Ser respetuoso de los derechos de los demás dentro y fuera del servicio. <br></li>
                            <li><b class="Russ">LEALTAD: </b>Ser leal consigo mismo, con sus instituciones y con la ciudadanía. <br></li>
                            <li><b class="Russ">DISCIPLINA:</b> Ser disciplinado en todos los actos de su vida. <br></li>
                            <li> <b class="Russ">ORGULLO:</b> Sentirse orgulloso de ser siempre un buen policía. <br></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
<main>

<?php
    include_once(ROOT_PATH . 'footer.php');
?>