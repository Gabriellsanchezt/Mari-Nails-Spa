<?php

declare(strict_types=1);

/**
 * Mari Nails Spa - Front Controller
 * Arquitectura MVC orientada a objetos con Composer & PSR-4
 */

// Autocarga de dependencias y clases con Composer
$autoloader = dirname(__DIR__) . '/vendor/autoload.php';
if (!file_exists($autoloader)) {
    http_response_code(500);
    die('Por favor ejecuta "composer install" para inicializar el proyecto.');
}
require_once $autoloader;

use App\Core\Request;
use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\BookingController;

// Instanciar petición y enrutador
$request = new Request();
$router  = new Router();

// Registro de Rutas
$router->get('/', [HomeController::class, 'index']);
$router->get('/api/gallery', [HomeController::class, 'galleryJson']);
$router->post('/api/booking', [BookingController::class, 'store']);

// Despachar la petición
$router->dispatch($request);
