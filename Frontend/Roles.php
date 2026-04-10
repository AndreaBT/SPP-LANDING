<?php
    // 1. Incluye el archivo config.php (usando __DIR__ para ubicarlo correctamente)
    include_once(__DIR__ . '/../config.php');
    include_once(ROOT_PATH . 'head.php');
    include_once(ROOT_PATH . 'NavPanel.php');
    include '../dbsettings/conexion.php';

   
    $user = $_SESSION['name'];

    $SearchRol = $conn->prepare("SELECT * FROM roles");
    $SearchRol->execute();
    $SearchRolResponse = $SearchRol->fetchAll();


?>

<main id="contenido">
    <section class="container">
        <h2 class="Russ">Controlador de Roles</h2>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nombre de Usuario</th>
                            <th scope="col">Rol</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($SearchRolResponse as $res) { ?>
                            <tr>
                                <td><?php echo $res['id_rol']; ?></td>
                                <td><?php echo $res['nombre']; ?></td>
                                
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>


