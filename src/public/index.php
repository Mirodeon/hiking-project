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
try
{
	$db = new MyPDO();
    echo 'connected to db !';
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
/*$query = $db->query("INSERT INTO `medias`(`name`, `file`, `hikes_id`, `type`) 
VALUES ('Pouet','Pouet', '1','Pouet')");
if ($query === false) {
    var_dump($db->errorInfo());
    die('Erreur SQL');
}
$posts = $query->fetchAll(PDO::FETCH_OBJ);
echo "<pre>";
print_r($posts);
echo "</pre>";*/