<?php
header("Content-Type: application/json");
include_once(__DIR__ . '/../config.php');
include '../dbsettings/conexion.php';


// Parámetros recibidos
$search = isset($_GET['search']) ? $_GET['search'] : '';
$month  = isset($_GET['month']) ? $_GET['month'] : '';
$year   = isset($_GET['year']) ? $_GET['year'] : '';
$page   = isset($_GET['page']) ? intval($_GET['page']) : 1;

$limit = 5; // noticias por página
$offset = ($page - 1) * $limit;

// Construcción dinámica del WHERE
$where = "WHERE caracteristica = :caracteristica";
$params = [
    ':caracteristica' => "Boletin"
];

// Filtro: texto
if (!empty($search)) {
    $where .= " AND (titulonoti LIKE :search OR descrinoti LIKE :search) ";
    $params[':search'] = "%$search%";
}

// Filtro: mes
if ($month !== '') {
    // +1 porque JS manda meses 0–11
    $where .= " AND MONTH(datenoti) = :month ";
    $params[':month'] = intval($month) + 1;
}

// Filtro: año
if ($year !== '') {
    $where .= " AND YEAR(datenoti) = :year ";
    $params[':year'] = intval($year);
}


// ==============================
// 1) Obtener total de registros
// ==============================
$countQuery = "SELECT COUNT(*) as total FROM noticias $where";
$stmt = $conn->prepare($countQuery);
$stmt->execute($params);
$total = $stmt->fetch(PDO::FETCH_ASSOC)['total'];


// ==============================
// 2) Obtener registros paginados
// ==============================
$query = "
    SELECT id_noticia, titulonoti, descrinoti, datenoti, noticiaimg, caracteristica
    FROM noticias
    $where
    ORDER BY datenoti DESC
    LIMIT :limit OFFSET :offset
";

$stmt = $conn->prepare($query);

// Vinculación para LIMIT y OFFSET (deben ser bindValue)
$stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);

// Vincular parámetros de filtros
foreach ($params as $key => $value) {
    $stmt->bindValue($key, $value);
}

$stmt->execute();
$news = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Respuesta JSON
echo json_encode([
    "news" => $news,
    "total" => intval($total),
    "pages" => ceil($total / $limit),
    "currentPage" => $page
]);