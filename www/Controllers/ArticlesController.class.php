<?php
namespace MVC\Controllers;

use MVC\Core\View;
use MVC\Lib\FormBuilder;
use MVC\Models\Articles;

class ArticlesController extends Controller {

    protected $articles;


    public function __construct(Articles $articles) {
        $this->articles = $articles;
    }

    public function getArticleFormAction() {
        $article = $this->articles;
        $view = new View('write', 'back');
        $view->assign("form" , new FormBuilder($article->articleForm()));
    }
}