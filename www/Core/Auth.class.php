<?php

namespace MVC\Core;

class Auth {

    public static function Init(array $user) {
        session_start();
        $_SESSION['user'] = $user;
    }

    public static function destroy(){
        session_destroy();
    }

    public static function User() {
        return $_SESSION['user'];
    }

    public static function isAuthenticate() {
        return isset($_SESSION['user']);
    }


    public static function isAdmin() {
        return (Auth::isAuthenticate() && $_SESSION['user']['role'] == 'ADMIN');
    }

    public static function isModerator() {
        return (Auth::isAuthenticate() && $_SESSION['user']['role'] == 'MODERATOR');
    }

    public static function get() {
        return $_SESSION['user'];
    }

}

