<?php
include_once(__DIR__ . '/../config.php');
include '../dbsettings/conexion.php';

//receiving the data from the front
$id_noticia = $_GET["id_noticia"];

$conn->beginTransaction();

try {
    //DELETE CONTENIDO NOTICIA

        // 1. Obtener la imagen
        $sqlimg = "SELECT url FROM imagenes_noticia WHERE id_noticia = :id_noticia";
        $stmtimg = $conn->prepare($sqlimg);
        $stmtimg->bindParam(':id_noticia', $id_noticia);
        $stmtimg->execute();

        $imagenes = $stmtimg->fetchAll(PDO::FETCH_ASSOC);

        // 2. Eliminar archivos físicos
        foreach ($imagenes as $img) {
            $ruta = '../panel/imgnoticia/' . $img['url'];

            if (file_exists($ruta)) {
                unlink($ruta);
            }
        }

    $sql3 = "DELETE FROM contenido_noticia
    WHERE id_noticia = :id_noticia";

    $stmt3 = $conn->prepare($sql3);
    $stmt3->bindParam(':id_noticia', $id_noticia);

    $stmt3->execute();

    //DELETE IMAGEN NOTICIA
    $sql2 = "DELETE FROM imagenes_noticia 
    WHERE id_noticia = :id_noticia";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->bindParam(':id_noticia', $id_noticia);

    $stmt2->execute();

    //DELETE NOTICIA
    $sql = "DELETE FROM noticias 
    WHERE id_noticia = :id_noticia";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_noticia', $id_noticia);

    $stmt->execute();

    // Confirmar todo
    $conn->commit();
    $_SESSION['mensaje'] = 'Se eliminado la noticia correctamente';
    $_SESSION['tipo'] = 'success';

    header("Location: " . BASE_URL . "Frontend/PanelNoticias.php");


} catch (\Throwable $th) {
    $conn->rollBack();
    echo "Error: " . $e->getMessage();
    exit;
}

