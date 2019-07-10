<?php
namespace MVC\Controllers;

use MVC\Core\View;
use MVC\Models\Comments;

class AdminCommentsController extends Controller {

    private $comment;

    /**
     * AdminCommentsController constructor.
     * @param $comment
     */
    public function __construct($comment) { $this->comment = $comment; }


    public function defaultAction() {
        $view = new View("commentsBack", "back");
    }
}