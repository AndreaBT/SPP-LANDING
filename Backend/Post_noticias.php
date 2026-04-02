<?php
include_once(__DIR__ . '/../config.php');
include '../dbsettings/conexion.php';

if(isset($_POST['Guardar'])){

    $fecha = $_POST['datenoti'];
    $nombre = $_POST['titulonoti'];
    $caracteristica = $_POST['caracteristica'];
    $descripcion = $_POST['txtDescripcion'];
    $descripcion2 = "";
    $imagen = $_FILES['noticiaimg']['name'];
    $imagen2 = $_FILES['noticiaimg2']['name'];
    $Tnoticia = "";
    $Ncomunicado = $_POST['Ncomunicado'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['noticiaimg']['type'];
        $temp  = $_FILES['noticiaimg']['tmp_name'];

        $tipo2 = $_FILES['noticiaimg2']['type'];
        $temp2  = $_FILES['noticiaimg2']['tmp_name'];

        $sql = "INSERT INTO  noticias   (titulonoti, noticiaimg, descrinoti, noticiaimg2, datenoti, Tnoticia, descripcion2,caracteristica, Ncomunicado) 
        VALUES (:titulonoti, :noticiaimg, :descrinoti, :noticiaimg2, :datenoti, :Tnoticia, :descripcion2,:caracteristica,:Ncomunicado)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':titulonoti', $nombre);
        $stmt->bindParam(':noticiaimg', $imagen );
        $stmt->bindParam(':descrinoti', $descripcion);
        $stmt->bindParam(':noticiaimg2', $imagen2);
        $stmt->bindParam(':datenoti', $fecha);
        $stmt->bindParam(':Tnoticia', $Tnoticia);
        $stmt->bindParam(':descripcion2', $descripcion2);
        $stmt->bindParam(':caracteristica', $caracteristica);
        $stmt->bindParam(':Ncomunicado', $Ncomunicado);

        move_uploaded_file($temp,'../panel/imgnoticia/'.$imagen);  
        move_uploaded_file($temp2,'../panel/imgnoticia/'.$imagen2);  
        
        if ($stmt->execute()) {
            
            $_SESSION['mensaje'] = 'se ha subido correctamente';
            $_SESSION['tipo'] = 'success';
            header("Location: " . BASE_URL . "Frontend/PanelNoticias.php");
        }else {
            header("Location: " . BASE_URL . "Frontend/Panel.php");
        }

        
    }
}