<?php
    // 1. Incluye el archivo config.php (usando __DIR__ para ubicarlo correctamente)
    include_once(__DIR__ . '/../config.php');
    include_once(ROOT_PATH . 'head.php');
    include_once(ROOT_PATH . 'NavPanel.php');

    include '../dbsettings/conexion.php';

    $user = $_SESSION['name'];

    //Searching news
    $SearchNews = $conn->prepare("SELECT * FROM noticias");
    $SearchNews->execute();
    $NewsResponse = $SearchNews->fetchAll();
?>

<main id="contenido">
    <section class="container">
        <h2 class="Russ">Controlador Noticias/Boletines</h2>
    </section>

    <section class="container">
        <form action="<?php echo BASE_URL; ?>Backend/Post_noticias.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="Ncomunicado">N. comunicado:</label>
                            <input type="text" class="form-control" name="Ncomunicado" id="Ncomunicado">
                        </div>
                        <div class="col-md-6">
                            <label for="datenoti">Fecha:</label>
                            <input type="date" class="form-control" name="datenoti" id="datenoti">
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <label for="titulonoti">Título:</label>
                    <input type="text" class="form-control" name="titulonoti" id="titulonoti">
                </div>
                <div class="col-md-3">
                    <label for="caracteristica">Boletín/Noticia</label>
                    <select name="caracteristica" id="caracteristica" class="form-control">
                        <option value="Boletin">Boletín</option>
                        <option value="Noticia">Noticia</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="txtDescripcion">Descripción:</label>
                    <textarea style="color:blue !important;" type="text" name="txtDescripcion" id="txtDescripcion"></textarea> 
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="my-noticiaimg">Imagen Principal</label>
                    <input id="my-noticiaimg" class="form-control"  type="file" name="noticiaimg">
                </div>
                <div class="col-md-4">
                    <label for="my-noticiaimg2">Imagen Secundaria</label>
                    <input id="my-noticiaimg2" class="form-control"  type="file" name="noticiaimg2">
                </div>
                
                <div class="col-md-4" style="align-content: end;" >
                    <input type="submit" value="Guardar" class="btn btn-success" name="Guardar">
                </div>
            </div>
        </form>
    </section>

    <section class="container">
        <div class="row">
            <table id="example" class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach($NewsResponse as $row){ ?>
                        <tr>
                            <td class="articulo" data-toggle="tooltip" title="<?php echo $row['titulonoti']; ?>"  >
                                
                                <?php echo substr($row['titulonoti'], 0, 50 ); ?>
                            </td>
                            <td><?php echo $row['caracteristica']; ?></td>
                            <td><?php echo $row['datenoti']; ?></td>
                            <td>
                                <a href="<?php echo BASE_URL; ?>EditNews?id_noticia=<?php echo $row['id_noticia']?>" target="_blank" class="card-link btn btn-primary">Vista Previa/Editar</a>
                                <a href="<?php echo BASE_URL; ?>DeleteNews?id_noticia=<?php echo $row['id_noticia']?> "  class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </section>
</main>



<script>
    ClassicEditor
        .create( document.querySelector( '#txtDescripcion' ) )
        .catch( error => {
        console.error( error );
    } );
</script>



<script>
    new DataTable('#example', {
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 'All']
        ]
    });
</script>
