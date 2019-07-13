<?php
namespace MVC\Controllers;

use MVC\Core\View;
use MVC\Models\Cards;

class SiteController extends Controller {

    public function defaultAction() {
        $view = new View("welcome", "front");
    }
}