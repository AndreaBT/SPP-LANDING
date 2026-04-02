<?php
    include_once('config.php'); // ← Esto debe estar primero, antes de usar ROOT_PATH
    include_once(DB_PATH . 'conexion.php');

    include_once('head.php');
    include_once('navbar.php');

  
?>

<main id="contenido">
    <section class="container">
        <div class="row g-4">
            <div class="col-12 col-lg-6">
                <!-- Título -->
                <h3 class="Russ">COMO LLEGAR:</h3>

                <!-- Mapa -->
                <div class="ratio ratio-16x9">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10846.900704925136!2d-89.69335982438244!3d20.96116488004408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56732d72feb571%3A0x1358284de905ff18!2sSecretar%C3%ADa%20de%20Seguridad%20P%C3%BAblica%20de%20Yucat%C3%A1n!5e0!3m2!1ses!2smx!4v1764605556935!5m2!1ses!2smx" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <h3 class="Russ">COMUNÍCATE:</h3>

                <div class="row g-3 mb-4">
                    <img src="src/images/911-089.png" class="card-img-bottom" alt="...">
                   
                </div>
            </div>

             <div class="row g-3 g-md-4">
                <div class="col-12 col-md-6">
                    <div class="card card-comunicate shadow-card-comunicate" >
                        <div class="card-body">
                            <p class="card-text Juramedium">
                                Módulo de Placas SSP:
                            </p>
                            <p class="card-text Juramedium">
                                (999) 930 32 00 ext. 40533
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card card-comunicate shadow-card-comunicate" >
                        <div class="card-body">
                            <p class="card-text Juramedium">
                                Módulo de Licencias SSP:
                            </p>
                            <p class="card-text Juramedium">
                                (999) 930 32 00 ext. 40525 o 40527
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card card-comunicate shadow-card-comunicate" >
                        <div class="card-body">
                            <p class="card-text Juramedium">
                                Atención Ciudadana SSP:
                            </p>
                            <p class="card-text Juramedium">
                                (999) 930 32 00 ext. 49032
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card card-comunicate shadow-card-comunicate" >
                        <div class="card-body">
                            <p class="card-text Juramedium">
                                Seguridad Privada SSP:
                            </p>
                            <p class="card-text Juramedium">
                                (999) 930 32 00 ext. 49226
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        
       
    </section>
</main>

<?php
    include_once('footer.php');
?>