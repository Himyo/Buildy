<?php
namespace MVC\Core;

class Routing{
    //TODO: Log for moderator action

	public static $routeFile = "routes/routes.yml";

	public static function getRoute($slug) {
        $routes = yaml_parse_file(self::$routeFile);
        $slug = strtolower($slug);
        if (isset($routes[$slug])) {
            $filteredSlug = Middleware::filter($slug, $routes);
            if($slug != $filteredSlug) {
                header("Location: {$filteredSlug}");
                exit();
            }
            $controller = ucfirst($routes[$slug]["controller"]) . "Controller";
            $action = $routes[$slug]["action"] . "Action";
            $method = $routes[$slug]["method"];
            return [
                "controller" => $controller,
                "action" => $action,
                "method" => $method
            ];
        }
        return [
            "controller" => 'PagesController',
            "action" => 'notFoundAction',
            "method" => 'post'
        ];
    }

    public static function getCrudRoute($slug) {
        $slug = strtolower($slug);
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
        $slug = strtolower($slug);
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

    public static function addSlug($slug, $action, $method){
        $newRoute = [$slug => ["controller" => "Pages", "action" => $action, "method" => $method]];
        $newRouteYAML = yaml_emit($newRoute, YAML_ANY_ENCODING, YAML_LN_BREAK);

        $newRouteYAML = substr($newRouteYAML, 4);
        $newRouteYAML = substr($newRouteYAML, 0, -4);
        file_put_contents(self::$routeFile, $newRouteYAML."\n", FILE_APPEND);
    }

}










