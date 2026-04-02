<?php
    include_once __DIR__ . '/dbSettings.php';

    $host = $db_host;
    $usuario = $db_user;
    $contrasenia = $db_pass;
    $base_de_datos = $db_name;

    /*try {
        $conn = new PDO("mysql:host=$host;dbname=$base_de_datos;", $usuario, $contrasenia);
    } catch (PDOException $e) {
        die('Connection Failed: ' . $e->getMessage());
    }*/

try {
    $conn = new PDO(
        "mysql:host=$db_host;port=$db_port;dbname=$db_name;charset=utf8mb4",
        $db_user,
        $db_pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );
} catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
}
