<?php
namespace MVC\Controllers;

use MVC\Core\View;

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

}