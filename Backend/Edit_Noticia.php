<?php
include_once(__DIR__ . '/../config.php');
include '../dbsettings/conexion.php';

//receiving the data from the front
$id_noticia = $_POST["id_noticia"];


$tipo = $_FILES['noticiaimg']['type'];
$temp  = $_FILES['noticiaimg']['tmp_name'];

$titulo = $_POST['titulo'];
$fecha = $_POST['fecha'];
$id_tipo  = $_POST['id_tipo'];
$comunicado = "";


$conn->beginTransaction();

try {
    //UPDATE 1: noticias
    $sql = "UPDATE  noticias set titulo =:titulo , fecha =:fecha ,id_tipo =:id_tipo, comunicado =:comunicado 
    WHERE id_noticia = :id_noticia";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_noticia', $id_noticia);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':fecha', $fecha);
    $stmt->bindParam(':id_tipo', $id_tipo);
    $stmt->bindParam(':comunicado', $comunicado);

    $stmt->execute();

    //UPDATE 2: imagenes_noticia
    $imagen_default = 'banner_ssp_informa_web.png';
    $imagen = $imagen_default;

    if (!empty($_FILES['noticiaimg']['name'])) {
        $nombreOriginal = $_FILES['noticiaimg']['name'];
        $temp = $_FILES['noticiaimg']['tmp_name'];
        $extension = strtolower(pathinfo($nombreOriginal, PATHINFO_EXTENSION));

        $extensionesPermitidas = ['jpg', 'jpeg', 'png', 'webp'];
        if (in_array($extension, $extensionesPermitidas)) {
            // Generar nombre único
            $imagen = 'noticia_' . $id_noticia . '_' . uniqid() . '.' . $extension;

            if (!move_uploaded_file($temp, '../panel/imgnoticia/' . $imagen)) {
                // Si falla la subida, usar default
                $imagen = $imagen_default;
            }

        } else {
            // Extensión no válida, usar default
            $imagen = $imagen_default;
        }

        $sql2 = "UPDATE imagenes_noticia SET url = :url 
        WHERE id_noticia = :id_noticia";

        $stmt2 = $conn->prepare($sql2);
        $stmt2->bindParam(':id_noticia', $id_noticia);
        $stmt2->bindParam(':url', $imagen);
        $stmt2->execute();
    }

    //UPDATE 3: Contenido_noticia
    $contenido = $_POST['txtDescripcion'];

    $sql3 = "UPDATE contenido_noticia SET contenido =:contenido
    WHERE id_noticia = :id_noticia";

    $stmt3 = $conn->prepare($sql3);
    $stmt3->bindParam(':id_noticia', $id_noticia);
    $stmt3->bindParam(':contenido', $contenido);

    $stmt3->execute();

    // Confirmar todo
    $conn->commit();

    $_SESSION['mensaje'] = 'Se ha actualizado correctamente';
    $_SESSION['tipo'] = 'success';

    header("Location: " . BASE_URL . "Frontend/PanelNoticias.php");

} catch (Exception $e) {
    $conn->rollBack();
    echo "Error: " . $e->getMessage();
    exit;
}

