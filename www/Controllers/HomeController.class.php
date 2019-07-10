<?php
namespace MVC\Controllers;

use MVC\Core\View;

class HomeController extends Controller {

    public function defaultAction() {
        $view = new View("home", "back");
    }

    public function notFoundAction() {
        $view = new View("notFound", "back");
    }

    public function getSiteAction() {
        $view = new View("mySite", "back");
    }

    public function getContactAction() {
        $view = new View("contact", "back");
    }

    public function getLegalAction() {
        $view = new View("legal", "back");
    }

    public function getAboutAction() {
        $view = new View("about", "back");
    }
}