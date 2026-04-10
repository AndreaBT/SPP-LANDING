<?php
// 1. Incluye el archivo config.php (usando __DIR__ para ubicarlo correctamente)
include_once(__DIR__ . '/../config.php');
include_once(ROOT_PATH . 'head.php');
include_once(ROOT_PATH . 'navbar.php');
include '../dbsettings/conexion.php';

$titulo = $_GET["titulo"];

//Searching news
$SearchNews = $conn->prepare("SELECT * FROM noticias as n
INNER JOIN imagenes_noticia as im ON n.id_noticia = im.id_noticia  
INNER JOIN contenido_noticia as cn ON n.id_noticia = cn.id_noticia
where n.titulo ='$titulo'");
$SearchNews->execute();
$NewsResponse = $SearchNews->fetchAll();

$Title_article ="";
foreach ($NewsResponse as $res) {
    $Title_article = $res['titulo'];
}
?>

<?php foreach ($NewsResponse as $res) { ?>
    <main id="contenido" style="background-color:#e2e2e2 !important; color:#3f3e40 !important">
        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color:#3f3e40 !important" class="Russ"><?php echo $res['titulo'] ?></h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <p style="color:#3f3e40 !important"  class="Juramedium" style="color:#eaecef"><?php echo $res['fecha'] ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12"  style=" overflow:hidden; text-align:center">
                    <img class="noticia-img"
                        src="<?php echo BASE_URL; ?>panel/imgnoticia/<?php echo $res['url']; ?>" 
                        alt="Imagen noticia">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 Juramedium" >
                    <p  style="color:#3f3e40 !important" class="Juramedium" ><?php echo $res['contenido'] ?></p>
                </div>
            </div>

           
        </section>
    </main>
<?php } ?>

<?php
    include_once(ROOT_PATH . 'footer.php');
?>



