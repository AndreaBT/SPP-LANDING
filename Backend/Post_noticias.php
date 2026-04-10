<?php
include_once(__DIR__ . '/../config.php');
include '../dbsettings/conexion.php';

if(isset($_POST['Guardar'])){

    //TABLE NOTICIA
    $titulo = $_POST['titulo'];
    $fecha = $_POST['fecha'];
    $id_tipo  = $_POST['id_tipo'];
    $comunicado = "";
    $imagenvali = $_FILES['noticiaimg']['name'];

    $conn->beginTransaction();

    try {

        // INSERT 1: noticias
        $sql = "INSERT INTO noticias (titulo, fecha, id_tipo, comunicado) 
        VALUES (:titulo, :fecha, :id_tipo, :comunicado)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':fecha', $fecha);
        $stmt->bindParam(':id_tipo', $id_tipo);
        $stmt->bindParam(':comunicado', $comunicado);

        $stmt->execute();

        //  Obtener el ID generado
        $id_noticia = $conn->lastInsertId();

        // Subir imagen
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
        }

        // INSERT 2: imagenes_noticia
        $sql2 = "INSERT INTO imagenes_noticia (id_noticia, url) 
        VALUES (:id_noticia, :url)";

        $stmt2 = $conn->prepare($sql2);
        $stmt2->bindParam(':id_noticia', $id_noticia);
        $stmt2->bindParam(':url', $imagen);

        $stmt2->execute();

        //INSERT 3: Contenido_noticia
        $contenido = $_POST['txtDescripcion'];
        $orden = $_POST['orden'];

        $sql3 = "INSERT INTO contenido_noticia (id_noticia, contenido, orden) 
        VALUES (:id_noticia, :contenido, :orden)";

        $stmt3 = $conn->prepare($sql3);
        $stmt3->bindParam(':id_noticia', $id_noticia);
        $stmt3->bindParam(':contenido', $contenido);
        $stmt3->bindParam(':orden', $orden);

        $stmt3->execute();

        // Confirmar todo
        $conn->commit();

        $_SESSION['mensaje'] = 'Se ha subido correctamente';
        $_SESSION['tipo'] = 'success';
        header("Location: " . BASE_URL . "Frontend/PanelNoticias.php");

    } catch (Exception $e) {

        // Si algo falla, revertir todo
        $conn->rollBack();

        $_SESSION['mensaje'] = 'Error al guardar la noticia';
        $_SESSION['tipo'] = 'error';
        header("Location: " . BASE_URL . "Frontend/Panel.php");
    }
    
}
