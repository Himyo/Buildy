<?php
namespace MVC\Controllers;

use MVC\Core\View;
use MVC\Core\Auth;

class CommentsController extends Controller {

    protected $comments;

    /**
     * CommentsController constructor.
     * @param $comments
     */
    public function __construct($comments) { $this->comments = $comments; }

    public function commentAction() {
        $comments = $this->comments->findJoin(
            [
                'Users.firstname', 'Users.lastname',
                'Users.email', 'Articles.title',
                'Articles.created_at',
                'Comment.state', 'Comment.created_at',
                'Comment.comment_id'
            ],
            [
                'Users' => ['Users.id', 'Comment.users_id'],
                'Articles' => ['Articles.id', 'Comment.articles_id'],
            ]
        );

        $view = new View('comments', 'back');
        $view->assign('comments', $comments);

    }

    public function saveCommentAction() {
        if (empty($_POST['id']) && !empty($_POST['content'])) {
            if (!Auth::isAuthenticate()) {
                //TODO RETURN ERROR
                header('Location: /site');
                exit();
            }

            $data = [
                'content' => $_POST['content'],
                'users_id' => $_POST['users_id'],
                'articles_id' => $_POST['articles_id']
            ];
            
            $this->comments->insert($data);
            header('Location: /site/article?id='.$_POST['articles_id']);
            exit();
        } else {
            //TODO RETURN ERROR
            header('Location: /site');
            exit();
        }
    }

}