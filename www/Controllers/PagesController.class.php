<?php
namespace MVC\Controllers;

use MVC\Core\View;

class PagesController extends Controller {

    public function defaultAction(){
        $view = new View("home", "back");
    }

    public function homeAction() {
        $view = new View("home", "front");
    }

    public function notFoundAction() {
        $view = new View("notFound", "front");
    }
    public function noControllerFoundAction() {
        $view = new View("noControllerFound", "front");
    }

    public function testAction() {
        $view = new View("test", "back");
        $view->assign('test', [1,2,3]);
    }

    public function componentAction() {
        $view = new View('component', "back");
    }
    public function dashboardAction() {
        $view = new View("dashboard", "back");
    }

    public function mySiteAction() {
        $view = new View("mySite", "back");
    }

    public function addPageAction() {
        $view = new View("addPage", "back");
    }

    public function modifyPageAction() {
        $view = new View("modifyPage", "back");
    }

    public function contactAction() {
        $view = new View("contact", "back");
    }

    public function legalAction() {
        $view = new View("legal", "back");
    }

    public function pageAction() {
        $view = new View("page", "back");
    }

    public function testPageAction() {
        $view = new View("testPage", "back");
    }
}