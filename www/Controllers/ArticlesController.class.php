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
                exit();
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
                exit();
        } else {
            //TODO RETURN ERROR
            header("location:javascript://history.go(-1)");
                exit();
        }
    }

    public function getByIdAction() {
        if(!Auth::isAuthenticate()){
            echo json_encode(['qwak']);
        }
        else {
            $articles = Articles::ALL([
                'categories as Categorie',
                'content as Contenu',
                'created_at as Date ',
                'state as Etat',
                'title as Titre',
            ], ['users_id' => Auth::User()['id']]);
            echo json_encode($articles);
        }
    }

    public function getAllArticlesAction() {
            $articles = Articles::ALL();
            return json_encode($articles);
    }
}