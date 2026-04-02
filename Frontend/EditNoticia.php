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
?>

<?php foreach ($NewsResponse as $res) { ?>
    <main id="contenido">
        <section class="container">
            <form action="<?php echo BASE_URL; ?>Backend/Edit_Noticia.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="Ncomunicado">N. comunicado:</label>
                                <input type="text" class="form-control" name="Ncomunicado" id="Ncomunicado" value="<?php echo $res['Ncomunicado'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="datenoti">Fecha</label>
                                <input type="date" class="form-control" name="datenoti" id="datenoti" value="<?php echo $res['datenoti'] ?>">
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <label for="titulonoti">Título</label>
                        <input type="text" class="form-control" name="titulonoti" id="titulonoti" value="<?php echo $res['titulonoti'] ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="caracteristica">Noticia/Boletin</label>
                        <select name="caracteristica" id="caracteristica" class="form-control">
                            <option value="<?php echo $res['caracteristica'] ?>"><?php echo $res['caracteristica'] ?></option>
                            <option value="Boletin">Boletín</option>
                            <option value="Noticia">Noticia</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="txtDescripcion">Descripción:</label>
                        <textarea style="color:blue !important;" type="text" name="txtDescripcion" id="txtDescripcion" ><?php echo $res['descrinoti'] ?></textarea> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label for="my-noticiaimg">Imagen Principal</label>
                        <input id="my-noticiaimg" class="form-control" value="<?php echo $res['noticiaimg']; ?>"  type="file" name="noticiaimg">
                    </div>
                    <div class="col-md-4">
                        <label for="my-noticiaimg2">Imagen Secundaria</label>
                        <input id="my-noticiaimg2" class="form-control" value="<?php echo $res['noticiaimg2']; ?>"  type="file" name="noticiaimg2">
                    </div>
                    
                    <div class="col-md-4" style="align-content: end;" >
                        <input type="text" hidden name="id_noticia" value="<?php echo $res['id_noticia']?>">
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






