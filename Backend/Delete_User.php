<?php
include_once(__DIR__ . '/../config.php');
include '../dbsettings/conexion.php';

//receiving the data from the front
$Id_user = $_GET["Id_user"];

$sql2 = "DELETE FROM usuarios WHERE Id_user = :Id_user";
$stmt2 = $conn->prepare($sql2);
$stmt2->bindParam(':Id_user', $Id_user);

if ($stmt2->execute()) {
    header("Location: " . BASE_URL . "Frontend/Panel.php");
}else {
    header("Location: " . BASE_URL . "Frontend/Panel.php");
}
