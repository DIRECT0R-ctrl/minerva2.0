<?php
declare(strict_types=1);

final class Router
{
    private array $routes = [];
    private array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function get(string $path, array $action): void
    {
        $this->routes['GET'][$path] = $action;
    }

    public function post(string $path, array $action): void
    {
        $this->routes['POST'][$path] = $action;
    }

    public function dispatch(string $uri): void
    {
        $path = parse_url($uri, PHP_URL_PATH) ?? '/';

         if ($path !== '/') {
        $path = rtrim($path, '/');
    }

    
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

        $action = $this->routes[$method][$path] ?? null;

        if (!$action) {
            http_response_code(404);
            echo "404 Not Found";
            return;
        }

        [$controllerName, $methodName] = $action;

        require_once __DIR__ . '/../controllers/' . $controllerName . '.php';

        $controller = new $controllerName($this->config);
        $controller->$methodName();
    }
}
