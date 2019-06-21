<?php
namespace MVC\Controllers;

use MVC\Core\View;

class DashboardController extends Controller {

    public function defaultAction() {
        $view = new View("dashboard", "back");
    }
}