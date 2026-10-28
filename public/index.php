<?php
declare(strict_types=1);

/**
 * Front controller: único punto de entrada de la aplicación.
 * Se accede con:  http://localhost/cumpleanos/public/
 */

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');
define('PUBLIC_PATH', __DIR__);

// URL base hacia /public (funciona esté la carpeta donde esté: /cumpleanos/public, /regalo/public, etc.)
$scriptDir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
define('BASE_URL', $scriptDir);

require APP_PATH . '/core/helpers.php';

// Autocarga sencilla de clases del MVC
spl_autoload_register(static function (string $clase): void {
    foreach (['core', 'controllers', 'models'] as $carpeta) {
        $archivo = APP_PATH . "/$carpeta/$clase.php";
        if (is_file($archivo)) {
            require $archivo;
            return;
        }
    }
});

$router = new Router();
$router->get('inicio', [CumpleanosController::class, 'index']);
$router->despachar($_GET['r'] ?? 'inicio');
