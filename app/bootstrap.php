<?php

require_once('../app/config.php');

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_file($path)) {
        require $path;
        return;
    }

    $path = __DIR__ . '/../src/' . str_replace('\\', '/', $class) . '.php';
    if (is_file($path)) {
        require $path;
        return;
    }

    throw new \LogicException(sprintf('Class "%s" not found in "%s"!', $class, $path));
});

use Routing\Router;

$router = new Router;
$router->run();

