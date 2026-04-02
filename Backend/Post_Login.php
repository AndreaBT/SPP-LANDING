<?php
include_once(__DIR__ . '/../config.php');
include '../dbsettings/conexion.php';



$user  =  $_POST['username'];
if (!isset($_POST['username'], $_POST['contrasenia'])) {
    // si no hay datos muestra error y re direccionar
    header('Location: index.php');
    exit;
}

// evitar inyección sql
$records = $conn->prepare("SELECT * FROM usuarios WHERE username = :username  ");
$records->bindParam(':username', $user);
$records->execute();
$results = $records->fetchAll();

$contra = "";
$id = "";
$rol = "";
foreach ($results as $res) {
    $contra = $res["contrasenia"];
    $id = $res["Id_user"];
    $rol = $res["rol"];

    if (password_verify($_POST['contrasenia'],$res["contrasenia"])) {
        // la conexion sería exitosa, se crea la sesión
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['id'] = $id;
        header("Location: " . BASE_URL . "Frontend/Panel.php");
        exit;
    }else {

        // usuario incorrecto
        
        echo'<script type="text/javascript">
        alert("Usuario o contraseña incorrecta, ponte en contacto con el administrador de la página");
        window.location.href="index.php";
        </script>';

    }
}

?>