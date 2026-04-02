<?php
include_once(__DIR__ . '/../config.php');
include '../dbsettings/conexion.php';

//receiving the data from the front
$id_noticia = $_GET["id_noticia"];

$sql2 = "DELETE FROM noticias WHERE id_noticia = :id_noticia";
$stmt2 = $conn->prepare($sql2);
$stmt2->bindParam(':id_noticia', $id_noticia);

if ($stmt2->execute()) {
    header("Location: " . BASE_URL . "Frontend/PanelNoticias.php");
}else {
    header("Location: " . BASE_URL . "Frontend/PanelNoticias.php");
}
