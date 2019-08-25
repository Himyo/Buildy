<?php
namespace MVC\Controllers;

use MVC\Core\Auth;
use MVC\Core\View;
use MVC\Core\Image;
use MVC\Models\Articles;
use MVC\Models\Comments;

class ArticlesController extends Controller {

    private $articles;
    private $comments;

    public function __construct(Articles $articles, Comments $comments) {
        $this->articles = $articles;
        $this->comments = $comments;
    }

    public function saveArticleAction() {
        $errors = '';
        if (empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['content'])) {

            if (!Auth::isAuthenticate()) {
                $errors += "Vous n'êtes pas authentifié.";
                header('Location: /site/blog?'.$errors);
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
            header('Location: /site/blog');
            exit();

        } else {
            $errors =  "Le titre et le contenu est vide.";
            header('Location: /site/blog?errors='.$errors);
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

    public function getBlogAction() {
        $articles = Articles::ALL();

        $view = new View("blog", "front");
        $view->assign('articles', $articles);
    }

    public function getArticlesByCategoryAction() {
        $articles = Articles::ALL(['*'], ['categories' => $_GET['id']]);
        echo json_encode($articles);
    }

    public function getDetailAction() {
        $users = [];
        if (isset($_GET['id'])) {
            $article = $this->articles->findOne(['id' => $_GET['id']]);

             $comments = $this->comments->executeSql([
                'select' => [
                    'Comments.id', 'Comments.content',
                    'Users.id', 'Users.firstname', 'Users.lastname',
                    'Users.photo_id',
                    'Photo.name as photo_name', 'Photo.path as photo_path'
                ],
                'innerJoin' => [
                    'Users' => ['Users.id', 'Comments.users_id'],
                    'Photo' => ['Photo.id', 'Users.photo_id']
                ],
                'where' => [
                    'Comments.articles_id' => $_GET['id'],
                ]
            ]);


            $view = new View('articleDetail', 'front');
            if ($article !== null) {
                $view->assign('article', $article);
                $view->assign('comments', $comments);
            }
        }
    }
}