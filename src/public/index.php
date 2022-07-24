<?php
require_once 'core/Request.php';
require_once 'core/Router.php';
require_once 'app/routes.php';
$uri = Request::uri();
$method = Request::method();
$router = new Router();
$router->register($routes);
$router->direct($uri, $method);
?>
