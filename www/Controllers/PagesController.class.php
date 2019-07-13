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
        $pages = Pages::ALL();
        $view = new View("page", "back");
        $view->assign('pages', $pages);
    }

    public function detailAction() {
        if (isset($_GET['id'])) {
            $page = $this->pages->findAndWhere(['*'], ['id' => $_GET['id']])[0];
            $view = new View('pageDetail', 'back');
            $view->assign('page', $page);
        }
    }

    public function testAction() {
        $view = new View("test", "back");
        $view->assign('test', [1,2,3]);
    }

    public function mySiteAction() {
        $view = new View("mySite", "back");
    }

    /*public function addPageAction() {
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
    }*/

    public function pageAction() {
        $view = new View("page", "back");
        $uriParameters = $_POST['PagesController']['pageAction'];
        $parameters = $uriParameters[1] ?? 0;
        $allPages = Pages::ALL();

        $view->assign('pages', $allPages);
        $view->assign('id', $parameters);
    }


    

    //PROTOTYPE 4H DU MAT
    public function getPage() {
        $pages = Pages::ALL();
        foreach ($pages as $key => $value) {
            if ($value['slug'] == $_REQUEST['URI']) {
                $view = new View('page', 'front');
                $view->assign('page', $value);
            }
        }
    }

}