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

//pour palier aux paramètres GET
$slugExploded = explode("?", $slug);
$slug = $slugExploded[0];
MVC\Core\BaseSQL::getConnection('mysql', 'buildydb', 'buildy', 'root', 'pabuildypa');

$routes = MVC\Core\Routing::getRoute($slug);
extract($routes);

$container = [];
$container += require './config/di.global.php';
$container['config'] = require './config/db.global.php'; //config/db.global.php';
$controllerObject = $container['MVC\\Controllers\\'.$controller]($container);

if (method_exists($controllerObject, $action)) {
	$controllerObject->$action();
}

