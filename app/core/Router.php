<?php
declare(strict_types=1);

require_once __DIR__ . '/../controllers/HomeController.php';

class Router
{
    public function dispatch(): void
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ($path === '/' || $path === '') {
            $controller = new HomeController();
            $controller->index();
            return;
        }

        http_response_code(404);
        echo "404 Not Found";
    }
}

