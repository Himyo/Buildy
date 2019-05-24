<?php
namespace Core;

class Routing{

	public static $routeFile = "routes.yml";

    // TODO: Refacto
	public static function getRoute($slug)
    {

        // /creation_de_compte_allocine
        //récuperer toutes les routes dans le fichier yml
        $routes = yaml_parse_file(self::$routeFile);
        if (isset($routes[$slug])) {
            if (empty($routes[$slug]["controller"]) || empty($routes[$slug]["action"])) {
                die("Il y a une erreur dans le fichier routes.yml");
            }
            $controller = ucfirst($routes[$slug]["controller"]) . "Controller";
            $action = $routes[$slug]["action"] . "Action";
            $controllerPath = "controllers/" . $controller . ".class.php";
            $method = $routes[$slug]["method"];
        } else {
            return ["controller" => 'PagesController', "action" => 'notFoundAction',
                "controllerPath" => 'controllers/PagesController.class.php', "method" => 'post'];
        }
        $result = ["controller" => $controller, "action" => $action, "controllerPath" => $controllerPath, "method" =>
            $method];
        return $result;
    }


	public static function getSlug($c, $a){
		$routes = yaml_parse_file(self::$routeFile);

		foreach ($routes as $slug => $cAndA) {
			
			if( !empty($cAndA["controller"]) && 
				!empty($cAndA["action"]) && 
				!empty($cAndA["method"]) &&
				$cAndA["controller"] == $c &&
				$cAndA["action"] == $a){
					return $slug;
				}
		}

		return null;

	}

}










