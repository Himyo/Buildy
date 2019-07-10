<?php
namespace MVC\Controllers;

use MVC\Core\View;

class CommentsController extends Controller {

    private $comment;

    /**
     * CommentsController constructor.
     * @param $comment
     */
    public function __construct($comment) { $this->comment = $comment; }


}