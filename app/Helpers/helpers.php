<?php

declare(strict_types=1);

if (!function_exists('config')) {
    /**
     * Obtener valor de configuración de config/config.php
     *
     * @param string|null $key Clave en notación punto o nulo para toda la config
     * @param mixed $default Valor por defecto
     * @return mixed
     */
    function config(?string $key = null, mixed $default = null): mixed
    {
        static $config = null;
        if ($config === null) {
            $configFile = dirname(__DIR__, 2) . '/config/config.php';
            $config = file_exists($configFile) ? require $configFile : [];
        }

        if ($key === null) {
            return $config;
        }

        $segments = explode('.', $key);
        $current = $config;
        foreach ($segments as $segment) {
            if (is_array($current) && array_key_exists($segment, $current)) {
                $current = $current[$segment];
            } else {
                return $default;
            }
        }

        return $current;
    }
}

if (!function_exists('base_url')) {
    /**
     * Retorna la URL base de la aplicación detectando subcarpetas (ej: /mari-nails-spa)
     */
    function base_url(string $path = ''): string
    {
        static $baseUrl = null;
        if ($baseUrl === null) {
            $configured = config('app.base_url');
            if (!empty($configured)) {
                $baseUrl = rtrim($configured, '/');
            } else {
                if (php_sapi_name() === 'cli') {
                    $baseUrl = '';
                } else {
                    $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
                    $dir = str_replace('\\', '/', dirname($scriptName));
                    $dir = rtrim($dir, '/');
                    $baseUrl = ($dir === '' || $dir === '.') ? '' : $dir;
                }
            }
        }

        $path = ltrim($path, '/');
        return $baseUrl === '' ? '/' . $path : $baseUrl . ($path !== '' ? '/' . $path : '');
    }
}

if (!function_exists('asset')) {
    /**
     * Retorna la ruta absoluta al recurso estático (css, js, imágenes)
     */
    function asset(string $path): string
    {
        $path = ltrim($path, '/');
        $base = base_url();
        if ($base === '' || $base === '/') {
            return '/' . $path;
        }
        return $base . '/' . $path;
    }
}

if (!function_exists('url')) {
    /**
     * Retorna una URL interna
     */
    function url(string $path = ''): string
    {
        return base_url($path);
    }
}

if (!function_exists('e')) {
    /**
     * Escapar cadenas para salida segura en HTML
     */
    function e(?string $value): string
    {
        return htmlspecialchars((string) ($value ?? ''), ENT_QUOTES, 'UTF-8');
    }
}
