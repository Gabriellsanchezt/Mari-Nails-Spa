<?php

declare(strict_types=1);

namespace App\Core;

class View
{
    private static string $viewsPath;

    public static function init(): void
    {
        self::$viewsPath = dirname(__DIR__) . '/Views/';
    }

    /**
     * Renderizar una vista dentro de un layout
     */
    public static function render(string $view, array $data = [], ?string $layout = 'main'): void
    {
        if (!isset(self::$viewsPath)) {
            self::init();
        }

        $viewFile = self::$viewsPath . str_replace('.', '/', $view) . '.php';

        if (!file_exists($viewFile)) {
            http_response_code(500);
            echo "Error: La vista '{$view}' no fue encontrada en {$viewFile}";
            return;
        }

        // Extraer variables para la vista
        extract($data, EXTR_SKIP);

        // Capturar contenido de la vista
        ob_start();
        require $viewFile;
        $content = ob_get_clean();

        // Si hay layout, renderizarlo inyectando $content
        if ($layout !== null) {
            $layoutFile = self::$viewsPath . 'layouts/' . $layout . '.php';
            if (file_exists($layoutFile)) {
                require $layoutFile;
                return;
            }
        }

        echo $content;
    }

    /**
     * Renderizar una vista parcial
     */
    public static function partial(string $partial, array $data = []): void
    {
        if (!isset(self::$viewsPath)) {
            self::init();
        }

        $partialFile = self::$viewsPath . str_replace('.', '/', $partial) . '.php';

        if (file_exists($partialFile)) {
            extract($data, EXTR_SKIP);
            require $partialFile;
        }
    }
}
