<?php
namespace MVC\Controllers;

use MVC\Core\View;

class DashboardController {

    public function getDashboardViewAction() {
        $view = new View("dashboard", "back");
    }
}