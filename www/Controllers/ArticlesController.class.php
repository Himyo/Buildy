<?php
namespace MVC\Controllers;

use MVC\Core\Auth;
use MVC\Core\View;
use MVC\Models\Articles;

class ArticlesController extends Controller {

    private $articles;

    public function __construct(Articles $articles) {
        $this->articles = $articles;
    }

    public function saveAction() {
        if (empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['content'])) {

            if (!isset($_SESSION['user']['id'])) {
                //TODO RETURN ERROR
                header('Location: /site');
            }

            $data = [
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'users_id' => Auth::User()['id'],
                'created_at' => date('Y-m-d'),
                'categories' => $_POST['category']
            ];

            $this->articles->insert($data);
            header('Location: /site');
        } else {
            //TODO RETURN ERROR
            header("location:javascript://history.go(-1)");
        }
    }

    public function getAllArticlesAction() {
            $articles = Articles::ALL();
            echo json_encode($articles);
    }
}