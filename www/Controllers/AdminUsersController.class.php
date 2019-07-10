<?php
namespace MVC\Controllers;

use MVC\Core\View;

class AdminUsersController extends Controller {

    private $user;

    /**
     * AdminUsersController constructor.
     * @param $user
     */
    public function __construct($user) { $this->user = $user; }


    public function defaultAction() {
        $view = new View("usersBack", "back");
    }
}