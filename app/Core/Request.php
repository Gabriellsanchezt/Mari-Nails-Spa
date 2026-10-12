<?php

declare(strict_types=1);

namespace App\Core;

class Request
{
    private array $data;
    private string $method;
    private string $path;

    public function __construct()
    {
        $this->method = strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET');
        $this->data = $this->parseInput();
        $this->path = $this->resolvePath();
    }

    public function method(): string
    {
        return $this->method;
    }

    public function isPost(): bool
    {
        return $this->method === 'POST';
    }

    public function isGet(): bool
    {
        return $this->method === 'GET';
    }

    public function path(): string
    {
        return $this->path;
    }

    public function input(?string $key = null, mixed $default = null): mixed
    {
        if ($key === null) {
            return $this->data;
        }
        return $this->data[$key] ?? $default;
    }

    public function all(): array
    {
        return $this->data;
    }

    private function parseInput(): array
    {
        $input = array_merge($_GET, $_POST);
        $contentType = $_SERVER['CONTENT_TYPE'] ?? '';
        if (str_contains($contentType, 'application/json')) {
            $raw = file_get_contents('php://input');
            $json = json_decode($raw, true);
            if (is_array($json)) {
                $input = array_merge($input, $json);
            }
        }
        return $input;
    }

    private function resolvePath(): string
    {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        $uri = parse_url($uri, PHP_URL_PATH) ?? '/';

        $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
        $scriptDir  = str_replace('\\', '/', dirname($scriptName));
        $scriptDir  = rtrim($scriptDir, '/');

        // 1. Remover coincidencia con subcarpeta directa si está presente
        if ($scriptDir !== '' && $scriptDir !== '/' && $scriptDir !== '.' && str_starts_with($uri, $scriptDir)) {
            $uri = substr($uri, strlen($scriptDir));
        } else {
            // 2. Si scriptDir termina en /public y la URL del navegador no lo incluye (ej: XAMPP /mari-nails-spa/)
            $parentDir = str_replace('\\', '/', dirname($scriptDir));
            $parentDir = rtrim($parentDir, '/');
            if ($parentDir !== '' && $parentDir !== '/' && $parentDir !== '.' && str_starts_with($uri, $parentDir)) {
                $uri = substr($uri, strlen($parentDir));
            }
        }

        $uri = '/' . trim($uri, '/');
        return $uri === '/' ? '/' : $uri;
    }
}
