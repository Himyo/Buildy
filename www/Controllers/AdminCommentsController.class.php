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

        var_dump($this->comments);
        die();
        $comments = Comments::ALL();
        $view = new View("commentsBack", "back");
        $view->assign('comments', $comments);
    }
}