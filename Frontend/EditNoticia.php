<?php
// 1. Incluye el archivo config.php (usando __DIR__ para ubicarlo correctamente)
include_once(__DIR__ . '/../config.php');
include_once(ROOT_PATH . 'head.php');
include_once(ROOT_PATH . 'navbar.php');
include '../dbsettings/conexion.php';

$id_noticia = $_GET["id_noticia"];

//Searching news
$SearchNews = $conn->prepare("SELECT n.id_noticia as IdNoti, n.titulo as title, cn.contenido as content, n.fecha as fechaC, im.url as imgC, tn.nombre as Tname, tn.id_tipo as idType 
FROM noticias as n
INNER JOIN imagenes_noticia as im ON n.id_noticia = im.id_noticia  
INNER JOIN contenido_noticia as cn ON n.id_noticia = cn.id_noticia
LEFT JOIN tipo_noticia as tn on tn.id_tipo = n.id_tipo
where n.id_noticia ='$id_noticia'");
$SearchNews->execute();
$NewsResponse = $SearchNews->fetchAll();

//Searching type news
$SearchTypeNews = $conn->prepare("SELECT * FROM tipo_noticia");
$SearchTypeNews->execute();
$TypeNewsResponse = $SearchTypeNews->fetchAll();
?>

<?php foreach ($NewsResponse as $res) { ?>

    <main id="contenido">
        <section class="container">
            <form action="<?php echo BASE_URL; ?>Backend/Edit_Noticia.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="fecha">Fecha</label>
                                <input type="date" class="form-control" name="fecha" id="fecha" value="<?php echo $res['fechaC'] ?>">
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $res['title'] ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="id_tipo">Noticia/Boletin</label>
                        <select name="id_tipo" id="id_tipo" class="form-control">
                            <option selected value="<?php echo $res['idType'] ?>"><?php echo $res['Tname'] ?></option>
                            <?php foreach ($TypeNewsResponse as $row) { ?>
                                <option value="<?php echo $row['id_tipo']; ?>"><?php echo $row['nombre']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="txtDescripcion">Descripción:</label>
                        <textarea style="color:blue !important;" type="text" name="txtDescripcion" id="txtDescripcion" ><?php echo $res['content'] ?></textarea> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="my-noticiaimg">Imagen Principal</label>
                        <input id="my-noticiaimg" class="form-control" value="<?php echo $res['imgC'] ?>"  type="file" name="noticiaimg">
                    </div>
                    
                    <div class="col-md-6" style="align-content: end;" >
                        <input type="text" hidden name="id_noticia" value="<?php echo $res['IdNoti']?>">
                        <input type="submit" value="Editar" class="btn btn-success" name="Editar">
                    </div>
                </div>

               

                
            </form>
        </section>
    </main>
<?php } ?>



<script>
    ClassicEditor
        .create( document.querySelector( '#txtDescripcion' ) )
        .catch( error => {
        console.error( error );
    } );
</script>






