<?php
namespace MVC\Controllers;

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
        $view = new View("articlesBack", "back");
    }



}