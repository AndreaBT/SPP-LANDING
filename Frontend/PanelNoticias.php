<?php
    // 1. Incluye el archivo config.php (usando __DIR__ para ubicarlo correctamente)
    include_once(__DIR__ . '/../config.php');
    include_once(ROOT_PATH . 'head.php');
    include_once(ROOT_PATH . 'NavPanel.php');

    include '../dbsettings/conexion.php';

    $user = $_SESSION['name'];

    //Searching news
    $SearchNews = $conn->prepare("SELECT * FROM noticias as n INNER JOIN tipo_noticia as tn WHERE n.id_tipo = tn.id_tipo ");
    $SearchNews->execute();
    $NewsResponse = $SearchNews->fetchAll();

    //Searching type news
    $SearchTypeNews = $conn->prepare("SELECT * FROM tipo_noticia");
    $SearchTypeNews->execute();
    $TypeNewsResponse = $SearchTypeNews->fetchAll();
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
                        <div class="col-md-12">
                            <label for="fecha">Fecha:</label>
                            <input type="date" class="form-control" name="fecha" id="fecha">
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <label for="titulo">Título:</label>
                    <input type="text" class="form-control" name="titulo" id="titulo">
                </div>
                <div class="col-md-3">
                    <label for="id_tipo">Gobierno/Noticia</label>
                    <select name="id_tipo" id="id_tipo" class="form-control">
                        <option value="Selecciona un tipo de Boletin">Selecciona un tipo de Boletin</option>
                        <?php foreach ($TypeNewsResponse as $res) { ?>
                            <option value="<?php echo $res['id_tipo']; ?>"><?php echo $res['nombre']; ?></option>
                        <?php } ?>
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
                            <td class="articulo" data-toggle="tooltip" title="<?php echo $row['titulo']; ?>"  >
                                
                                <?php echo substr($row['titulo'], 0, 50 ); ?>
                            </td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['fecha']; ?></td>
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
