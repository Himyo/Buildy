<?php
namespace MVC\Controllers;

use MVC\Core\View;

class PagesController extends Controller {

    public function defaultAction() {
        $view = new View("page", "back");
    }

    public function testPageAction() {
        $view = new View("testPage", "back");
    }
}