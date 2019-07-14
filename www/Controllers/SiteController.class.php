<?php
namespace MVC\Controllers;

use MVC\Core\View;
use MVC\Models\Cards;
use MVC\Models\Pages;

class SiteController extends Controller {

    public function defaultAction() {
        $pages = Pages::ALL();
        $view = new View("welcome", "front");
        $view->assign('pages', $pages);
    }
}