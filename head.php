<?php
if (!defined('BASE_URL')) {
    include_once(__DIR__ . '/config.php');
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Secretaría de Seguridad Pública</title>
        <!-- Mantengo mismos assets base detectados en el código original -->
        <link rel="shortcut icon" href="<?php echo BASE_URL; ?>src/LogoSSP.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>src/styleIndex.css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>src/Directorio.css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>src/noticia.css" />
        <script src="https://kit.fontawesome.com/1e6cd205b6.js" crossorigin="anonymous"></script>
        <!-- Opcional: Typed para hero (estaba presente en el original) -->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
        <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
        
        <script>
            const BASE_URL = "<?php echo BASE_URL; ?>";
        </script>
    </head>
    <body>

    <script src="<?php echo BASE_URL; ?>src/jquery-3.7.1.js"></script>
    <script src="<?php echo BASE_URL; ?>src/dataTables.js"></script>


        
    