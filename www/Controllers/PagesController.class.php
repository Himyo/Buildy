<?php
namespace MVC\Controllers;


use MVC\Core\View;
use MVC\Models\Pages;

class PagesController extends Controller{

    protected $pages;

    public function __construct(Pages $pages)
    {
        $this->pages = $pages;
    }

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
        $data = $GLOBALS['_POST'];
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($data['title'])) {
            $pageInfo =
                [
                    'title' => $data['title'],
                    'slug' => "/{$data['title']}",
                    'created_at' => date('Y-m-d'),
                ];
            $this->pages->insert($pageInfo);
        }
        header('Location: /page');
    }

    public function pageAction() {
        $view = new View("page", "back");
        $uriParameters = $_POST['PagesController']['pageAction'];
        $parameters = $uriParameters ?? 0;
        $allPages = Pages::ALL();

        $view->assign('pages', $allPages);
        $view->assign('id', $parameters);
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