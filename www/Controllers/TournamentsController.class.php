<?php
namespace MVC\Controllers;

use MVC\Core\View;

class TournamentsController {

    public function getTournamentsViewAction() {
        $view = new View("tournamentsBack", "back");
    }
}