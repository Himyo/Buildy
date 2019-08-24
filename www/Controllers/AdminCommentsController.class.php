<?php
namespace MVC\Controllers;

use MVC\Core\View;
use MVC\Models\Comments;

class AdminCommentsController extends Controller {

    private $comments;

    /**
     * AdminCommentsController constructor.
     * @param $comments
     */
    public function __construct($comments) { $this->comments = $comments; }


    public function defaultAction() {

        $comments = Comments::ALL();
        $view = new View("commentsBack", "back");
        $view->assign('comments', $comments);
    }

    public function deleteCommentAction() {
        if (isset($_POST['id'])) {
            $this->comments->delete(['id' => $_POST['id']]);
            header('Location: /Admin/dashboard/comments');
            exit();
        } else {
            //TODO RENVOYER L'ERROR
            header('Location: /Admin/dashboard/comments');
            exit();
        }

    }

    public function saveCommentAction() {
        $data = [];
        //MODIFY
        if (!empty($_POST['id'])) {

            if (!empty($_POST['users_id'])) {
                $data += ['users_id' => $_POST['users_id']];
            }

            if (!empty($_POST['comments_id'])) {
                $data += ['comments_id' => $_POST['comments_id']];
            }

            if (!empty($_POST['articles_id'])) {
                $data += ['articles_id' => $_POST['articles_id']];
            }

            if (!empty($_POST['content'])) {
                $data += ['content' => $_POST['content']];
            }

            $this->comments->edit($data, ['id' => $_POST['id']]);
            header('Location: /Admin/dashboard/comments');
            exit();

            //CREATE
        } elseif (empty($_POST['id']) && !empty($_POST['users_id']) && !empty($_POST['comments_id']) && !empty($_POST['articles_id']) && !empty($_POST['content'])) {

            $data = [
                'users_id' => $_POST['users_id'],
                'comments_id' => $_POST['comments_id'],
                'articles_id' => $_POST['articles_id'],
                'content' => $_POST['content']
            ];

            $this->comments->insert($data);
            header('Location: /Admin/dashboard/comments');
            exit();
        } else {
            //TODO RETURN ERROR
            header('Location: /Admin/dashboard/comments');
            exit();
        }
    }
}