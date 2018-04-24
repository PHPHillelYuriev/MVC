<?php
define('ROOT', dirname(__FILE__));

require_once(ROOT . '/Routing/Router.php');

$router = new Router;
$router->run();

