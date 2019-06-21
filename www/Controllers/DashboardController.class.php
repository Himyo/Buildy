<?php
namespace MVC\Controllers;

use MVC\Core\View;

class DashboardController {

    public function getDashboardViewAction() {
        $view = new View("dashboard", "back");
    }
    public function defaultAction() {
        $view = new View("dashboard", "back");
        $view->assign('lala', 123);
    }
}