<?php

declare(strict_types=1);

namespace App\Core;

abstract class Controller
{
    /**
     * Renderizar una vista
     */
    protected function render(string $view, array $data = [], ?string $layout = 'main'): void
    {
        View::render($view, $data, $layout);
    }

    /**
     * Respuesta JSON
     */
    protected function json(mixed $data, int $status = 200): void
    {
        http_response_code($status);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        exit;
    }

    /**
     * Redirigir a una ruta interna
     */
    protected function redirect(string $path): void
    {
        header('Location: ' . url($path));
        exit;
    }
}
