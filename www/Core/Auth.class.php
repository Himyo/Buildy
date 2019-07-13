<?php

namespace MVC\Core;
use MVC\Models\Users;

class Auth {

    protected static $instance;

    protected $user;

    /**
     * Auth constructor.
     * @param $token
     */
    public function __construct(Users $user = null) {
       if(!self::$instance && $user !== null) {
           $this->user = $user;
       }
    }

    public static function init(Users $user){
       if(!self::$instance) {
           self::$instance = new self($user);
       }
       return self::$instance;
    }

    public static function User() {
        return self::$instance->user;
    }

    public static function destroy(){
        self::$instance = null;
    }

}