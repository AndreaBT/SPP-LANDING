<?php

/* =====================================================
   🔐 CONFIGURACIÓN DE SEGURIDAD
===================================================== */

// 🔒 Mostrar errores (solo en entorno local)
$entorno = 'local'; // Cambiar a 'produccion' cuando suba al servidor

if ($entorno === 'local') {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(E_ALL);
}

// 🔒 Headers de seguridad
header("X-Frame-Options: SAMEORIGIN");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: strict-origin-when-cross-origin");

// 🔒 Protección XSS moderna (CSP básica)
header("Content-Security-Policy: default-src 'self'; connect-src 'self' http://localhost http://localhost:* https://ka-f.fontawesome.com; img-src 'self' data: https:; script-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://kit.fontawesome.com https://cdn.ckeditor.com https://cdn.datatables.net https://code.jquery.com https://cdnjs.cloudflare.com https://www.google.com https://www.gstatic.com; style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://cdn.datatables.net https://ka-f.fontawesome.com https://fonts.googleapis.com https://cdnjs.cloudflare.com https://rsms.me; font-src 'self' https://cdn.jsdelivr.net https://kit.fontawesome.com https://ka-f.fontawesome.com https://fonts.gstatic.com https://cdnjs.cloudflare.com; frame-src https://www.google.com; form-action 'self';");

// 🔒 HSTS (activar solo cuando tengas HTTPS real)
// header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");

/* =====================================================
   🔐 CONFIGURACIÓN DE SESIONES SEGURAS
===================================================== */

// Solo aplicar configuración si la sesión NO está iniciada
if (session_status() === PHP_SESSION_NONE) {

   ini_set('session.cookie_httponly', 1);   // Evita acceso por JS
   ini_set('session.use_strict_mode', 1);   // Previene session fixation

   // Activar solo cuando tengas HTTPS
   // ini_set('session.cookie_secure', 1);

   session_start();
}

/* =====================================================
   📁 RUTAS INTERNAS
===================================================== */

// Ruta física absoluta del proyecto (para includes de archivos)
define('ROOT_PATH', __DIR__ . '/');
define('DB_PATH', ROOT_PATH . 'dbsettings/');
define('BACKEND_PATH', ROOT_PATH . 'Backend/');
define('FRONT_PATH', ROOT_PATH . 'Frontend/');
define('SRC_PATH', ROOT_PATH . 'src/');


// Ruta base para el navegador (para CSS, JS, imágenes, etc.)
// Como estás corriendo desde la carpeta raíz con php -S localhost:8000,
// la base del sitio es simplemente "/"
//PARA CORRER EN LOCAL
#define('BASE_URL', '/LANDINGPAGE-SSP/');
//PARA CORRER EN HOST
define('BASE_URL', '/');