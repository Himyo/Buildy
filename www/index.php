<?php


function myAutoloader($class){
    print_r($class.' ');
    $classname = substr($class, strpos($class, '\\') +1);
	$classPath = "core/".$classname.".class.php";
	$controllerPath = "controllers/".$classname.".class.php";
	$voPath = "VO/".$classname.".class.php";
	$classModel = "models/".$classname.".class.php";
	$traitPath = "trait/".$classname.".trait.php";
	if(file_exists($classPath)) {
		include $classPath;
	}
	else if(file_exists($classModel)) {
		include $classModel;
	}
	else if(file_exists($traitPath)) {
		include $traitPath;
	}
	else if(file_exists($controllerPath)) {
		include $controllerPath;
	}
    else if(file_exists($voPath)) {
        include $voPath;
    }
	else {
		echo '<br> Failed to load '.$class.' classname '.$classname.'<br>';
	}
}
//Cela veut dire que si j'essaye d'instancier une class qui n'existe pas
//La fonction myAutoloader va être lancée
spl_autoload_register("myAutoloader");

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

$routes = Core\Routing::getRoute($slug);
extract($routes);

$container = [];
$container += require './config/di.global.php';
$container['config'] = require './config/db.global.php'; //config/db.global.php';

//vérifier l'existence du fichier et de la class controller
if( file_exists($controllerPath) ){
	include $controllerPath;
	if( class_exists('\\Controller\\'.$controller)){
		//instancier dynamiquement le controller
		$controllerObject = $container['Controller\\'.$controller]($container);
		//vérifier que la méthode (l'action) existe
		if( method_exists($controllerObject, $action) ){
			//appel dynamique de la méthode	
			$controllerObject->$action();
		}else{
			die("La methode ".$action." n'existe pas ".$controller);
		}
		
	}else{
		die("La class controller ".$controller." n'existe pas");
	}
}else{
	die("Le fichier controller ".$controller." n'existe pas");
}


