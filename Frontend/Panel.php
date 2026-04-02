<?php
    // 1. Incluye el archivo config.php (usando __DIR__ para ubicarlo correctamente)
    include_once(__DIR__ . '/../config.php');
    include_once(ROOT_PATH . 'head.php');
    include_once(ROOT_PATH . 'NavPanel.php');
    include '../dbsettings/conexion.php';

   
    $user = $_SESSION['name'];

    //SEARCH USER ROL
    $SearchUser = $conn->prepare("SELECT * FROM usuarios where username ='$user'");
    $SearchUser->execute();
    $UserResponse = $SearchUser->fetchAll();

    //SEARCH ALL USERS
    $SearchAllUser = $conn->prepare("SELECT * FROM usuarios");
    $SearchAllUser->execute();
    $AllUserResponse = $SearchAllUser->fetchAll();


?>

<main id="contenido">
    <section class="container">
        <h2 class="Russ">Controlador Usuarios</h2>
    </section>

    <?php foreach ($UserResponse as $res) { ?>
        <?php if ($res['rol'] == "Administrador") { ?>
            <section class="container">
                <form action="../Backend/Post_user.php" method="POST">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="Username">Nombre de Usuario:</label>
                            <input type="text" class="form-control" placeholder="Username" id="username" name="username">
                        </div>
                        <div class="col-md-3">
                            <label for="Rol">Rol:</label>
                            <select name="Rol" id="Rol" class="form-control">
                                <option value="Selecciona un Rol">Selecciona un Rol</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Prensa">Prensa</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="contrasenia">Contraseña:</label>
                            <input type="password" class="form-control" placeholder="Contraseña" id="contrasenia" name="contrasenia">
                        </div>
                        <div class="col-md-3" style="align-content: end;">
                            <input type="submit" value="Guardar" class="btn btn-success"  name="btnregistrar" id="btnregistrar">
                        </div>
                    </div>
                </form>
            </section>

            <section class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped">
                           <thead>
                                <tr>
                                    <th scope="col">Nombre de Usuario</th>
                                    <th scope="col">Rol</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($AllUserResponse as $res) { ?>
                                    <tr>
                                        <td><?php echo $res['username']; ?></td>
                                        <td><?php echo $res['rol']; ?></td>
                                        <td>
                                            <a href="<?php echo BASE_URL; ?>Backend/Delete_User.php?Id_user=<?php echo $res['Id_user']?>" class="btn btn-danger">Eliminar</a> 
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        <?php }else { ?>
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
                                <?php foreach ($AllUserResponse as $res) { ?>
                                    <tr>
                                        <td><?php echo $res['username']; ?></td>
                                        <td><?php echo $res['rol']; ?></td>
                                        
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        <?php } ?>
    <?php } ?>
</main>


