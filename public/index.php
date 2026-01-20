<?php
declare(strict_types=1);

session_start();

$config = require __DIR__ . '/../app/config/config.php';

require_once __DIR__ . '/../app/core/Router.php';

$router = new Router($config);


$router->get('/', ['HomeController', 'index']);

$router->dispatch($_SERVER['REQUEST_URI']);


