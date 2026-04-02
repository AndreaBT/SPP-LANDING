<?php
include_once(__DIR__ . '/../config.php');
include '../dbsettings/conexion.php';

//receiving the data from the front
$id_noticia = $_POST["id_noticia"];
$tipo = $_FILES['noticiaimg']['type'];
$temp  = $_FILES['noticiaimg']['tmp_name'];

$tipo2 = $_FILES['noticiaimg2']['type'];
$temp2  = $_FILES['noticiaimg2']['tmp_name'];

$imagen = $_FILES['noticiaimg']['name'];
$descripcion2 = "";
$Tnoticia = "";
$imagen2 = $_FILES['noticiaimg2']['name'];
$caracteristica = $_POST['caracteristica'];
$fecha = $_POST['datenoti'];
$Titulo = $_POST['titulonoti'];
$descripcion = $_POST['txtDescripcion'];
$Ncomunicado = $_POST['Ncomunicado'];


$sql = "UPDATE  noticias set titulonoti =:titulonoti , noticiaimg =:noticiaimg ,descrinoti =:descrinoti ,
noticiaimg2 =:noticiaimg2, Tnoticia =:Tnoticia, descripcion2=:descripcion2,caracteristica=:caracteristica,datenoti=:datenoti, Ncomunicado=:Ncomunicado   WHERE id_noticia = :id_noticia";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id_noticia', $id_noticia);
$stmt->bindParam(':titulonoti', $Titulo);
$stmt->bindParam(':noticiaimg', $imagen );
$stmt->bindParam(':descrinoti', $descripcion);
$stmt->bindParam(':noticiaimg2', $imagen2);
$stmt->bindParam(':Tnoticia', $Tnoticia);
$stmt->bindParam(':descripcion2', $descripcion2);
$stmt->bindParam(':caracteristica', $caracteristica);
$stmt->bindParam(':datenoti', $fecha);
$stmt->bindParam(':Ncomunicado', $Ncomunicado);

move_uploaded_file($temp,'../panel/imgnoticia/'.$imagen);  
move_uploaded_file($temp2,'../panel/imgnoticia/'.$imagen2);

if ($stmt->execute()) {
    header("Location: " . BASE_URL . "Frontend/PanelNoticias.php");
} else {
    header("Location: " . BASE_URL . "Frontend/PanelNoticias.php");
}