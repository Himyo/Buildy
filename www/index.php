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

//Récuperer l'url apres le nom de domaine
//Utilisation d'une variable SUPER GLOBALE
//Accessible partout, commenence par $_ et en majuscule
//c'est toujours un tableau
//Elle est créée par le serveur et alimenté par le serveur
//Vous ne pouvez que la consulter

$slug = $_SERVER["REQUEST_URI"];

//pour palier aux paramètres GET
$slugExploded = explode("?", $slug);
$slug = $slugExploded[0];
MVC\Core\BaseSQL::getConnection('mysql', 'buildydb', 'buildy', 'root', 'pabuildypa');

use MVC\Core\Routing;

//$routes = substr_count($slug, '/') > 1 ?
//    Routing::getCrudRoute($slug) :
//    Routing::getRoute($slug);

$routes = Routing::getRoute($slug)?? Routing::getParametrableRoute($slug);
extract($routes);

$container = [];
$container += require './config/di.global.php';
$container['config'] = require './config/db.global.php'; //config/db.global.php';
$controllerObject = $container['MVC\\Controllers\\'.$controller]($container);

if (method_exists($controllerObject, $action)) {
	$controllerObject->$action();
}

