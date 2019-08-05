<?php
namespace MVC\Core;

class Middleware {
    public static function filter($slug, $routes) {
        $route = $routes[$slug];
        if(isset($route['allow'])) {
            $allowed = $route['allow'];
            if(!(Auth::isAuthenticate() && in_array(Auth::User()['role'], $allowed))) {
                $slug = isset($route['redirect']) ? self::filter($route['redirect'], $routes) : "/";
            }
        }
        return $slug;
    }
}