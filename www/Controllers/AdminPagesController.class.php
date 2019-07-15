<?php
namespace MVC\Controllers;

use MVC\Core\View;
use MVC\Models\Pages;
use MVC\Core\Routing;

class AdminPagesController extends Controller {

    private $pages;

    
    public function __construct($pages) {
        $this->pages = $pages;
    }


    public function defaultAction() {
        $pages = Pages::ALL();

        $view = new View("pagesBack", "back");
        $view->assign('pages', $pages);
    }

    public function deletePageAction() {
        if (isset($_POST['id'])) {
            $this->pages->delete(['id' => $_POST['id']]);
            header('Location: /dashboard/admin/pages');
        } else {
            //TODO RENVOYER L'ERROR
            header('Location: /dashboard/admin/pages');
        }

    }

    public function savePageAction() {
        $data = [];
        //MODIFY
        if (!empty($_POST['id'])) {
            if (!empty($_POST['title'])) {
                $data += ['title' => $_POST['title']];
            }

            if (!empty($_POST['slug'])) {
                $data += ['slug' => "/site".$_POST['slug']];
            }

            if (!empty($_POST['content'])) {
                $data += ['content' => $_POST['content']];
            }

            $data += ['updated_at' => date('Y-m-d')];
            
            $this->pages->edit($data, ['id' => $_POST['id']]);
            header('Location: /dashboard/admin/pages');

        //CREATE
        } elseif (empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['slug']) && !empty($_POST['content'])) {

            $page = $this->pages->findOrWhere(['*'], ['title' => $_POST['title'], 'slug' => $_POST['slug']]);
            
            if (!empty($page)) {
                header('Location: /dashboard/admin/pages');
            } else {
                $data += [
                    'title' => $_POST['title'],
                    'slug' => "/site".$_POST['slug'],
                    'content' => $_POST['content'],
                    'created_at' => date('Y-m-d')
                ];
    
                $this->pages->insert($data);
                Routing::addSlug("/site".$_POST['slug'], "display", "GET");
                header('Location: /dashboard/admin/pages');
            }
        } else {
            //TODO RETURN ERROR
            header('Location: /dashboard/admin/pages');
        }
    }

}