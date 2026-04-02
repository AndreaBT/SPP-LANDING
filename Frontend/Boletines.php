<?php
// 1. Incluye el archivo config.php (usando __DIR__ para ubicarlo correctamente)
include_once(__DIR__ . '/../config.php');
include_once(ROOT_PATH . 'head.php');
include_once(ROOT_PATH . 'navbar.php');
?>

<header class="heroN">
    <div class="content container py-5">
       
        <h5 class="Russ display-5">
            Gobierno
        </h5>
         <div class="eyebrowN Juramedium"> Información oficial de la Secretaría de Seguridad Pública del Estado de Yucatán</div>
        
    </div>
</header>


<section class="filters">

    <!-- Buscador por texto -->
    <input type="text" id="searchText" placeholder="Buscar noticia..." />

    <!-- Filtro por mes -->
    <select id="filterMonth">
        <option value="">Mes</option>
        <option value="0">Enero</option>
        <option value="1">Febrero</option>
        <option value="2">Marzo</option>
        <option value="3">Abril</option>
        <option value="4">Mayo</option>
        <option value="5">Junio</option>
        <option value="6">Julio</option>
        <option value="7">Agosto</option>
        <option value="8">Septiembre</option>
        <option value="9">Octubre</option>
        <option value="10">Noviembre</option>
        <option value="11">Diciembre</option>
    </select>

    <!-- Filtro por año -->
    <select id="filterYear">
        <option value="">Año</option>
        <option value="2025">2025</option>
        <option value="2024">2024</option>
        <option value="2023">2023</option>
        <option value="2022">2022</option>
        <option value="2021">2021</option>
        <option value="2020">2020</option>
        <option value="2019">2019</option>
        <option value="2018">2018</option>
        <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <!-- JS generará dinámicamente los años -->
    </select>

</section>

<!-- Contenedor de tarjetas -->
<div id="newsContainer" style="padding: 2rem 2rem 0 2rem;" class="news-grid"></div>

<!-- Paginador -->
<div id="pagination" class="pagination"></div>




<script src="<?php echo BASE_URL; ?>src/SBoletin.js"></script>
<?php
    include_once(ROOT_PATH . 'footer.php');
?>