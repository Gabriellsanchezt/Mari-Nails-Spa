<?php

declare(strict_types=1);

namespace App\Core;

class Router
{
    private array $routes = [];

    public function get(string $path, array|callable $handler): void
    {
        $this->addRoute('GET', $path, $handler);
        $this->addRoute('HEAD', $path, $handler);
    }

    public function post(string $path, array|callable $handler): void
    {
        $this->addRoute('POST', $path, $handler);
    }

    private function addRoute(string $method, string $path, array|callable $handler): void
    {
        $cleanPath = '/' . trim($path, '/');
        $this->routes[] = [
            'method'  => strtoupper($method),
            'path'    => $cleanPath === '/' ? '/' : $cleanPath,
            'handler' => $handler,
        ];
    }

    public function dispatch(Request $request): void
    {
        $method = $request->method();
        $path = $request->path();

        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['path'] === $path) {
                $this->executeHandler($route['handler'], $request);
                return;
            }
        }

        // Fallback 404
        http_response_code(404);
        View::render('errors/404', ['path' => $path], 'main');
    }

    private function executeHandler(array|callable $handler, Request $request): void
    {
        try {
            if (is_callable($handler)) {
                $handler($request);
                return;
            }

            if (is_array($handler) && count($handler) === 2) {
                [$class, $method] = $handler;
                if (class_exists($class)) {
                    $controller = new $class();
                    if (method_exists($controller, $method)) {
                        $controller->$method($request);
                        return;
                    }
                }
            }

            throw new \RuntimeException("Controlador o acción no válida.");
        } catch (\Throwable $e) {
            error_log('[MariNails Router Error] ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine());
            http_response_code(500);
            try {
                View::render('errors/500', ['error' => $e->getMessage()], 'main');
            } catch (\Throwable) {
                echo "<h1>500 - Error del servidor</h1><p>Ha ocurrido un problema al procesar la solicitud. Por favor intenta de nuevo.</p>";
            }
        }
    }
}
