<?php
require_once 'core/Request.php';
require_once 'core/Router.php';
require_once 'app/routes.php';
require_once 'app/models/MyPDO.php';
$uri = Request::uri();
$method = Request::method();
$router = new Router();
$router->register($routes);
$router->direct($uri, $method);
/* try
{
	$db = new MyPDO();
    echo '<span class="tag is-success is-light">Connected to db !</span>';
}
catch (Exception $e)
{
        die('<span class="tag is-danger is-light">Error : </span>' . $e->getMessage());
} */
?>
<?php include '../app/views/parts/modal.php'; ?>