<?php

require "conf.inc.php";

function myAutoloader($class){
	$classPath = "core/".$class.".class.php";
	$controllerPath = "controllers/".$class.".class.php";
	$classModel = "models/".$class.".class.php";
	$traitPath = "trait/".$class.".trait.php";
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
	else {
		echo '<br> Failed to load '.$class;
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

$routes = Routing::getRoute($slug);
extract($routes);


//vérifier l'existence du fichier et de la class controller
if( file_exists($controllerPath) ){
	include $controllerPath;
	if( class_exists($controller)){
		//instancier dynamiquement le controller
		$controllerObject = new $controller();
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


