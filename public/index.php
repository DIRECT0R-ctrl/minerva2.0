<?php 
declare(strict_types=1);

session_start();

require_once __DIR__ . '/../app/config/config.php';
require_once __DIR__ . '/../app/core/Router.php';
require_once __DIR__ . '/..app/core/Controller.php';
require_once __DIR__ . '/../app/core/Database.php';

$router = new Router();
$router->dispatch();
?>
