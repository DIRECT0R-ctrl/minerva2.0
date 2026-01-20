<?php
declare(strict_types=1);

class Controller
{
    protected function view(string $viewName, array $data = []): void
    {
        // make $data variables available in the view
        extract($data);

        $viewFile = __DIR__ . '/../views/' . $viewName . '.php';

        if (!is_file($viewFile)) {
            http_response_code(500);
            echo "View not found: " . htmlspecialchars($viewFile);
            return;
        }

        require $viewFile;
    }
}

