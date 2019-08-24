<?php
namespace MVC\Controllers;

use MVC\Core\Auth;
use MVC\Core\View;
use MVC\Models\Articles;

class AdminArticlesController extends Controller {

    private $articles;

    /**
     * AdminArticlesController constructor.
     * @param $articles
     */
    public function __construct($articles) {
        $this->articles = $articles;
    }


    public function defaultAction() {
        $articles = Articles::ALL();

        $view = new View("articlesBack", "back");
        $view->assign('articles', $articles);
    }

    public function deleteArticleAction() {
        if (isset($_POST['id'])) {
            $this->articles->delete(['id' => $_POST['id']]);
            header('Location: /Admin/dashboard/articles');
            exit();
        } else {
            //TODO RENVOYER L'ERROR
            header('Location: /Admin/dashboard/articles');
            exit();
        }

    }

    public function saveArticleAction() {
        $data = [];
        //MODIFY
        if (!empty($_POST['id'])) {
            if (!empty($_POST['title'])) {
                $data += ['title' => $_POST['title']];
            }

            if (!empty($_POST['content'])) {
                $data += ['content' => $_POST['content']];
            }

            $data += ['categories' => $_POST['category']];
            
            $this->articles->edit($data, ['id' => $_POST['id']]);
            header('Location: /Admin/dashboard/articles');
            exit();

        //CREATE
        } elseif(!empty($_POST['title']) && !empty($_POST['content'])) {
           $fieldsCheck = [
               'title' => [
                   'maxlength' => 50,
                   'minlength' => 5,
                   ],
               'content' => [
                   'minlenth' => 50
               ],
               'categorie' => [
                   'fixedValue' => ['TOURNAMENT', 'GENERAL', 'DECK']
               ]
           ];

            $data = [
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'users_id' => Auth::User()['id'],
                'created_at' => date('Y-m-d'),
                'categories' => $_POST['category']
            ];

            $this->articles->insert($data);
            header('Location: /Admin/dashboard/articles');
            exit();
        } else {
            //TODO RETURN ERROR
            header('Location: /Admin/dashboard/articles');
            exit();
        }
    }




}