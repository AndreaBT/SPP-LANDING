<?php
// 1. Incluye el archivo config.php (usando __DIR__ para ubicarlo correctamente)
include_once(__DIR__ . '/../config.php');
include_once(ROOT_PATH . 'head.php');
include_once(ROOT_PATH . 'navbar.php');
include '../dbsettings/conexion.php';

$id_noticia = $_GET["id_noticia"];

//Searching news
$SearchNews = $conn->prepare("SELECT * FROM noticias where id_noticia ='$id_noticia'");
$SearchNews->execute();
$NewsResponse = $SearchNews->fetchAll();

$Title_article ="";
foreach ($NewsResponse as $res) {
    $Title_article = $res['titulonoti'];
}
?>

<?php foreach ($NewsResponse as $res) { ?>
    <main id="contenido" style="background-color:#e2e2e2 !important; color:#3f3e40 !important">
        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color:#3f3e40 !important" class="Russ"><?php echo $res['titulonoti'] ?></h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <p style="color:#3f3e40 !important"  class="Juramedium" style="color:#eaecef"><?php echo $res['datenoti'] ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12"  style=" overflow:hidden; text-align:center">
                    <img class="noticia-img"
                        src="<?php echo BASE_URL; ?>panel/imgnoticia/<?php echo $res['noticiaimg']; ?>" 
                        alt="Imagen noticia">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 Juramedium" >
                    <p  style="color:#3f3e40 !important" class="Juramedium" ><?php echo $res['descrinoti'] ?></p>
                </div>
            </div>

            <?php if ($res['noticiaimg2'] != "") { ?>
                <div class="row">
                    <div class="col-md-12" style=" overflow:hidden; text-align:center">
                        <img style="width:871px; height:537px; object-fit: contain;" src="<?php echo BASE_URL; ?>panel/imgnoticia/<?php echo $res['noticiaimg2']; ?>"   alt="...">
                    </div>
                </div>
            <?php } ?>
        </section>
    </main>
<?php } ?>

<?php
    include_once(ROOT_PATH . 'footer.php');
?>



