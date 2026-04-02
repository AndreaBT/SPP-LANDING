<?php
    include_once __DIR__ . '/config.php'; // ← Esto debe estar primero, antes de usar ROOT_PATH

    include_once(DB_PATH . 'conexion.php');

    include_once('head.php');
    include_once('navbar.php');

    $Sboletin = 'SELECT * FROM noticias  where caracteristica = "Boletin" ORDER BY datenoti DESC LIMIT 4';
    $Sboletin = $conn->prepare($Sboletin);
    $Sboletin->execute();
    $boletin = $Sboletin->fetchAll();

    $Snoticias = 'SELECT * FROM noticias  where caracteristica = "Noticia" ORDER BY datenoti DESC LIMIT 4';
    $Snoticias = $conn->prepare($Snoticias);
    $Snoticias->execute();
    $noticias = $Snoticias->fetchAll();
    
?>
    <!-- ======= Hero ======= -->
    <header class="hero">
        <div class="content container py-5">
           
        </div>
    </header>

    <!-- ======= Scripts ======= -->
    
    <script>
        // Typed effect (opcional)
        const typedEl = document.getElementById('typed');
        if(typedEl && window.Typed){
            new Typed('#typed', {
                strings: ['C5i · tecnología para protegerte', 'Respuesta oportuna 9-1-1', 'Transparencia y cercanía ciudadana'],
                typeSpeed: 32,
                backSpeed: 32,
                backDelay: 1800,
                smartBackspace: true,
                loop: true
            });
        }
    </script>

    <main id="contenido">
        <!-- ======= Accesos rápidos ======= -->
        <section class="container">
            <div class="section-header mb-4">
                <h2 class="Russ h4 mb-0">Accesos rápidos</h2>
            </div>
            <div class="row g-3 g-md-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>Servicios"   rel="noopener">
                        <span class="qa-icon"><img src="src/images/licencia-de-conducir-negro.png" alt="Servicios Públicos" /></span>
                        <span class="Juramedium">Servicios Públicos</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>CALEA"  rel="noopener">
                        <span class="qa-icon"><img src="src/images/CALEA negativo.png" alt="CALEA" /></span>
                        <span class="Juramedium">CALEA</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>Proximidad"  rel="noopener">
                        <span class="qa-icon"><img src="src/images/blindaje-negro.png" alt="Comunicación y Proximidad Social" /></span>
                        <span class="Juramedium">Comunicación y Proximidad Social</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="https://www.yucatan.gob.mx/?p=emergencias"  rel="noopener">
                        <span class="qa-icon"><img src="src/images/llamada-de-emergencia-negro.png" alt="9-1-1" /></span>
                        <span class="Juramedium">9-1-1</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="<?php echo BASE_URL; ?>Fortaseg"  rel="noopener">
                        <span class="qa-icon"><img src="src/images/familia-negro.png" alt="Prevención de la Violencia de Género" /></span>
                        <span class="Juramedium">Prevención de la Violencia de Género</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="qa-card" href="http://187.157.145.178:8086/RegistroEmpresarial/"  rel="noopener">
                        <span class="qa-icon"><img src="src/images/editar-negro.png" alt="Icono Registro Empresarial" /></span>
                        <span class="Juramedium">Registro Empresarial</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- ======= Gobierno (boletines) ======= -->
        <section class="container">
            <div class="section-header mb-4 d-flex align-items-end justify-content-between gap-3">
                <h2 class="Russ h4 mb-0">Gobierno</h2>
                <!----<a class="Juramedium small" style="text-decoration:underline;color:#eaecef" href="<?php echo BASE_URL; ?>Boletines">Ver todo</a>-->
                <a class="Juramedium small d-none d-lg-inline"
                    style="text-decoration:underline;color:#eaecef"
                    href="<?php echo BASE_URL; ?>Boletines">
                        Ver todo
                </a>
            </div>

            <div class="row g-3 g-md-4">
                <!-- Tarjeta 1 (ejemplo basado en rutas reales) -->
                <?php foreach ($boletin as $res) { ?>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <article class="card-ssp">
                            <a href="<?php echo BASE_URL; ?>Docs?id_noticia=<?php echo (int)$res['id_noticia']; ?>"   rel="noopener" aria-label="Abrir nota <?php echo htmlspecialchars($res['titulonoti'], ENT_QUOTES, 'UTF-8'); ?>">
                                <img 
                                    class="thumb" 
                                    src="panel/imgnoticia/<?php echo htmlspecialchars($res['noticiaimg'], ENT_QUOTES, 'UTF-8'); ?>" 
                                    alt="<?php echo htmlspecialchars($res['titulonoti'], ENT_QUOTES, 'UTF-8'); ?>" 
                                />
                                <div class="body Juramedium">
                                    <h3 style="text-transform: uppercase;" class="Russ h6 title mb-2"><?php echo htmlspecialchars($res['titulonoti'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                    <?php
                                        $descripcionNot = strip_tags($res['descrinoti']);
                                        $descripcionNot = mb_substr($descripcionNot, 0, 160);
                                    ?>
                                    <p class="Juramedium small mb-0"><?php echo htmlspecialchars($descripcionNot, ENT_QUOTES, 'UTF-8'); ?>...</p>
                                </div>
                            </a>
                        </article>
                    </div>
                <?php } ?>
            </div>

            <div class="d-lg-none mt-3">
                <a class="btn btn-outline-light w-100 Juramedium"
                    href="<?php echo BASE_URL; ?>Boletines">
                    Ver todo
                </a>
            </div>

        </section>


        <!-- ======= Noticias (Detenidos) ======= -->
        <section class="container">
            <div class="section-header mb-4 d-flex align-items-end justify-content-between gap-3">
                <h2 class="Russ h4 mb-0">Noticias</h2>
                <a class="Juramedium small d-none d-lg-inline" style="text-decoration:underline;color:#eaecef" href="<?php echo BASE_URL; ?>Noticias">Ver todo</a>
            </div>
            <div class="row g-3 g-md-4">
                <!-- Tarjeta 1 (ejemplo basado en rutas reales) -->
                <?php foreach ($noticias as $res) { ?>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <article class="card-ssp">
                            <a href="<?php echo BASE_URL; ?>Docs?id_noticia=<?php echo (int)$res['id_noticia']; ?>"   rel="noopener" aria-label="Abrir nota <?php echo htmlspecialchars($res['titulonoti'], ENT_QUOTES, 'UTF-8'); ?>">
                                <img 
                                    class="thumb" 
                                    src="panel/imgnoticia/<?php echo htmlspecialchars($res['noticiaimg'], ENT_QUOTES, 'UTF-8'); ?>" 
                                    alt="<?php echo htmlspecialchars($res['titulonoti'], ENT_QUOTES, 'UTF-8'); ?>" 
                                />
                                <div class="body Juramedium">
                                    <h3 style="text-transform: uppercase;" class="Russ h6 title mb-2"><?php echo htmlspecialchars($res['titulonoti'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                    <?php
                                        $descripcionNot = strip_tags($res['descrinoti']);
                                        $descripcionNot = mb_substr($descripcionNot, 0, 160);
                                    ?>
                                    <p class="Juramedium small mb-0"><?php echo htmlspecialchars($descripcionNot, ENT_QUOTES, 'UTF-8'); ?>...</p>
                                </div>
                            </a>
                        </article>
                    </div>
                <?php } ?>
            </div>

            <div class="d-lg-none mt-3">
                <a class="btn btn-outline-light w-100 Juramedium"
                    href="<?php echo BASE_URL; ?>Noticias">
                    Ver todo
                </a>
            </div>
        </section>

       
    </main>
<?php
    include_once('footer.php');
?>
    
