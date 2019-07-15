<?php
namespace MVC\Controllers;


use MVC\Core\Routing;
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

    public function addViewAction() {
        $view = new View("addPage", "back");
    }

    public function saveAction() {
        $data = [];

        if (empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['slug']) && !empty($_POST['content'])) {

            $page = $this->pages->findOrWhere(['*'], ['title' => $_POST['title'], 'slug' => $_POST['slug']]);

            if (!empty($page)) {
                header('Location: /mysite/addpage');
            } else {
                $data += [
                    'title' => $_POST['title'],
                    'slug' => "/site".$_POST['slug'],
                    'content' => $_POST['content'],
                    'created_at' => date('Y-m-d')
                ];

                $this->pages->insert($data);
                Routing::addSlug("/site".$_POST['slug'], "display", "GET");
                header('Location: /mysite/addpage');
            }
        } else {
            //TODO RETURN ERROR
            header('Location: /mysite/addpage');
        }
    }

    public function insertContentAction() {
        if (isset($_POST['id']) && isset($_POST['content'])) {
            if (!empty($_POST['content'])) {
                $data = ['content' => $_POST['content']];
                $this->pages->edit($data, ['id' => $_POST['id']]);
            }
        }
    }

    // LA METHOD MAGIQUE DE 4H DU TAM
    public function displayAction() {
        $pages = Pages::ALL();
        foreach ($pages as $key => $value) {
            if ($value['slug'] == $_SERVER['REQUEST_URI']) {
                $view = new View('main', 'front');
                $view->assign('content', $value);
            }
        }
    }

}