<?php
namespace MVC\Controllers;

use MVC\Core\View;

class PagesController{

    public function defaultAction(){

    $view = new View("homepage", "back");
        $view->assign("pseudo","prof");
    }

    public function notFoundAction() {
        $view = new View("notFound", "front");
    }

    public function testAction() {

        $view = new View("test", "back");
        $view->assign('test', [1,2,3]);
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

    //VIEWS DATABASE ADMIN
    public function usersBackAction() {
        $view = new View("usersBack", "back");
    }

    public function articlesBackAction() {
    $view = new View("articlesBack", "back");
    }

    public function cardsBackAction() {
    $view = new View("cardsBack", "back");
    }

    public function gamesBackAction() {
    $view = new View("gamesBack", "back");
    }

    public function tournamentsBackAction() {
    $view = new View("tournamentsBack", "back");
    }




    }