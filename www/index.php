<?php

function autoload($class) {
    $prefix = 'MVC\\';
    $base_dir = __DIR__ . '/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        echo  "Class ".$prefix.$class." ".$len." not found";
        return;
    }
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.class.php';
    if (file_exists($file)) {
        require $file;
    }
}
spl_autoload_register("autoload");

$slug = $_SERVER["REQUEST_URI"];

//pour palier aux parametres GET
$slugExploded = explode("?", $slug);
$slug = $slugExploded[0];
MVC\Core\BaseSQL::getConnection('mysql', 'buildydb', 'buildy', 'root', 'pabuildypa');
use MVC\Core\Routing;

$routes = Routing::getRoute($slug);
extract($routes);

$container = [];
$container += require './config/di.global.php';
$container['config'] = require './config/db.global.php'; //config/db.global.php';
$class = 'MVC\\Controllers\\'.$controller;

if(isset($container[$class])) {
    $controllerObject = $container[$class]($container);
}
else {
    $controllerObject = $container["MVC\\Controllers\\PagesController"]($container);
    $controllerPath = "Controllers/PagesController.class.php";
    $action = "noControllerFoundAction";
    $method = "post";
    $parameters = false;
}

var_dump($_POST);
die();
if (method_exists($controllerObject, $action)) {
	$controllerObject->$action();
}

