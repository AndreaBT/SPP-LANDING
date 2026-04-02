<?php 

    include_once('config.php'); // ← Esto debe estar primero, antes de usar ROOT_PATH
    include_once('head.php');
?>       
         <!-- ======= Footer ======= -->
        <footer class="footer-ssp  pb-4 mt-4">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12 col-md-6 col-lg-3">
                        <h4 class="Russ h6 mb-3">SSP</h4>
                        <ul class="list-unstyled mb-0">
                            <li><a class="Juramedium" href="https://www.plataformadetransparencia.org.mx/Inicio" target="_blank" rel="noopener">Transparencia</a></li>
                            <li><a class="Juramedium" href="/src/pdfs/organigrama.pdf" target="_blank" rel="noopener">Organigrama</a></li>
                            <li><a class="Juramedium" href="/secretariado.html">Secretariado Ejecutivo</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <h4 class="Russ h6 mb-3">Servicios</h4>
                        <ul class="list-unstyled mb-0">
                            <li><a class="Juramedium" href="https://tramites.yucatan.gob.mx/tramite/54b8bf46" target="_blank" rel="noopener">911</a></li>
                            <li><a class="Juramedium" href="http://187.157.145.178:8086/CALEA/" target="_blank" rel="noopener">CALEA</a></li>
                            <li><a class="Juramedium" href="https://ssp.yucatan.gob.mx/fortaseg.php" target="_blank" rel="noopener">UNIPREV</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <h4 class="Russ h6 mb-3">Trámites</h4>
                        <ul class="list-unstyled mb-0">
                            <li><a class="Juramedium" href="https://tramites.yucatan.gob.mx/tramite/2c75119d" target="_blank" rel="noopener">Licencias</a></li>
                            <li><a class="Juramedium" href="https://tramites.yucatan.gob.mx/tramite/ac2dae57" target="_blank" rel="noopener">Placas</a></li>
                            <li><a class="Juramedium" href="https://tramites.yucatan.gob.mx/tramite/db07244c" target="_blank" rel="noopener">Cambio de propietario</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <h4 class="Russ h6 mb-3">Contáctanos</h4>
                        <div class="small Juramedium opacity-75 mb-3">
                            Km. 45 Periférico Poniente, Tablaje Catastral 12648<br>
                            Polígono Caucel Susulá, Mérida, Yucatán<br>
                            Gobierno del Estado de Yucatán, México
                        </div>
                        <div class="social">
                            <a href="https://www.facebook.com/sspyuc" target="_blank" rel="noopener" aria-label="Facebook SSP"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://x.com/sspyuc?s=11&t=0KSDuEyXVduadb57mOfuhg" target="_blank" rel="noopener" aria-label="X SSP"><i class="fab fa-x-twitter"></i></a>
                            <a href="https://www.instagram.com/sspyuc?igsh=MTAxb2RpMHJscXlibg==" target="_blank" rel="noopener" aria-label="Instagram SSP"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/@sspyuc" target="_blank" rel="noopener" aria-label="YouTube SSP"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.tiktok.com/@sspyuc?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener" aria-label="TikTok SSP"><i class="fab fa-tiktok"></i></a>
                        </div>
                        <div class="mt-3"><img src="<?php echo BASE_URL; ?>src/images/gobierno.png" alt="Gobierno del Estado de Yucatán" style="height:28px"></div>
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        
    </body>
</html>