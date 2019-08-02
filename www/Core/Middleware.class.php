<?php
namespace MVC\Core;

class Middleware {
    public static function filter($slug, $routes) {
        if(isset($routes[$slug]['allow'])) {
            $allowed = $routes[$slug]['allow'];
            if(!(Auth::isAuthenticate() && in_array(Auth::User()['role'], $allowed))) {
                $slug = "/";
            }
        }
        return $slug;
    }
}