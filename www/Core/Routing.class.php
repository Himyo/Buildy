<?php
namespace MVC\Core;

class Routing{

	public static $routeFile = "routes.yml";

	public static function getRoute($slug)
    {
        $routes = yaml_parse_file(self::$routeFile);
        if (isset($routes[$slug])) {
            $controller = ucfirst($routes[$slug]["controller"]) . "Controller";
            $action = $routes[$slug]["action"] . "Action";
            $controllerPath = "Controllers/" . $controller . ".class.php";
            $method = $routes[$slug]["method"];
            $result = ["controller" => $controller, "action" => $action, "controllerPath" => $controllerPath, "method" =>
                $method];
            return $result;
        }
    }

    public static function getParametrableRoute($slug){
	    $routes = yaml_parse_file(self::$routeFile);
	    $routesSlugs = array_keys($routes);
	    $slug = trim($slug, '/');
        $slugToCompare = explode("/", $slug)[0];
        $matchedSlug = "";
	   for($i = 0 ; $i < sizeof($routesSlugs) ; ++$i) {
           $routeSlug = trim($routesSlugs[$i], '/');
	       $routeSlug = explode('/', $routeSlug)[0];
	       if($slugToCompare == $routeSlug) {
	           $matchedSlug = $routesSlugs[$i];
	           break;
           }
       }
	   if($matchedSlug) {
           $slugParameters = explode('/', $slug);
           $slugParametersNumber = sizeof($slugParameters) - 1;
           $matchedSlugParametersNumber = sizeof(explode('!', $matchedSlug)) -1;
           $hasOptional = sizeof(explode('?', $matchedSlug)) -1 > 0;

           $valid = $slugParametersNumber == $matchedSlugParametersNumber;
           $validWithOptional = ($slugParametersNumber >= $matchedSlugParametersNumber) && $hasOptional;

           if($valid || $validWithOptional) {
               $controller = ucfirst($routes[$matchedSlug]["controller"])."Controller";
               $action = $routes[$matchedSlug]["action"]."Action";
               $controllerPath = "Controllers/".$controller."class.php";
               $method = $routes[$matchedSlug]["method"];
               return
                   [
                       "controller" => $controller,
                       "action" => $action,
                       "controllerPath" => $controllerPath,
                       "method" => $method
                   ];
           }
       }
        return [
            "info" => [$slug, $slugToCompare, $matchedSlug] ,
            "controller" => 'PagesController', "action" => 'notFoundAction',
            "controllerPath" => 'Controllers/PagesController.class.php', "method" => 'post'];
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










