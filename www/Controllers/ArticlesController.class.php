<?php
namespace MVC\Controllers;

use MVC\Core\View;
use MVC\Models\Articles;

class ArticlesController extends Controller {

    private $article;

    /**
     * ArticlesController constructor.
     * @param $article
     */
    public function __construct(Articles $article) {
        $this->article = $article;
    }


    public function getArticlesViewAction() {
        $view = new View("tournamentsBack", "back");
    }
}