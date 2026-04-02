<?php
include_once(__DIR__ . '/../config.php');
include '../dbsettings/conexion.php';

//receiving the data from the front
$UserName = $_POST["username"];
$Password = $_POST["contrasenia"];
$Rol = $_POST["Rol"];

//Incenting in the DB
//validating

if (isset($_POST['btnregistrar'])) {

    //encrypting the password
    $encryptpass = password_hash($Password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios  (username, contrasenia, rol) 
    VALUES (:username, :contrasenia, :rol)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $UserName);
    $stmt->bindParam(':contrasenia', $encryptpass );
    $stmt->bindParam(':rol', $Rol);

    //Redirection
    if ($stmt->execute()) {
        header("Location: " . BASE_URL . "Frontend/Panel.php");
    }else {
        header("Location: " . BASE_URL . "Frontend/Panel.php");
    }
}