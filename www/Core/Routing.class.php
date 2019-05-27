<?php
namespace MVC\Core;

class Routing{

	public static $routeFile = "routes.yml";

	public static function getRoute($slug)
    {
        $routes = yaml_parse_file(self::$routeFile);
        if (isset($routes[$slug])) {
            if (empty($routes[$slug]["controller"]) || empty($routes[$slug]["action"])) {
                return ["controller" => 'PagesController', "action" => 'notFoundAction',
                    "controllerPath" => 'Controllers/PagesController.class.php', "method" => 'post'];
            }
            $controller = ucfirst($routes[$slug]["controller"]) . "Controller";
            $action = $routes[$slug]["action"] . "Action";
            $controllerPath = "Controllers/" . $controller . ".class.php";
            $method = $routes[$slug]["method"];
        } else {
            return ["controller" => 'PagesController', "action" => 'notFoundAction',
                "controllerPath" => 'Controllers/PagesController.class.php', "method" => 'post'];
        }
        $result = ["controller" => $controller, "action" => $action, "controllerPath" => $controllerPath, "method" =>
            $method];
        return $result;
    }

    public static function getCrudRoute($slug) {
        $routes = yaml_parse_file(self::$routeFile);
        $slugMethod = substr($slug, 0, strrpos($slug, "/"));
        $controller = ucwords(substr($slug, strrpos($slug, "/") + 1))."Controller";
        if( isset($routes[$slugMethod])) {
            if(empty($routes[$slugMethod]["action"])) {
                return ["controller" => 'PagesController', "action" => 'notFoundAction',
                    "controllerPath" => 'Controllers/PagesController.class.php', "method" => 'post'];
            }
            $controllerPath = "Controllers/" . $controller . ".class.php";
            $action = $routes[$slugMethod]["action"] . "Action";
            $method = $routes[$slugMethod]["method"];
        } else {
            return ["controller" => 'PagesController', "action" => 'notFoundAction',
                "controllerPath" => 'Controllers/PagesController.class.php', "method" => 'post'];
        }
        return ["controller" => $controller, "action" => $action, "controllerPath" => $controllerPath, "method" =>
            $method];
    }

    public static function getMethod($slug) {
        $routes = yaml_parse_file(self::$routeFile);
        return $routes[$slug]['method'];
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










