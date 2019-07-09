<?php
namespace MVC\Controllers;

use MVC\Core\View;
use MVC\Models\Articles;
use MVC\Models\Categories;

class ArticlesController extends Controller {

    protected $articles;


    public function __construct(Articles $articles) {
        $this->articles = $articles;
    }

    public function getArticlesFormAction() {
        $article = $this->articles;
        $view = new View('writeArticle', 'back');
        $view->assign("form" ,$article->articleForm());
        $view->assign("categories", Categories::ALL());
    }

    public function getArticlesViewAction() {
        $articles =  $this->articles->findJoin(
            [
                'Articles.id', 'Articles.title',
                'Articles.created_at', 'Articles.content',
                'Categories.name',
                'Users.firstname', 'Users.lastname',
                'Users.email'
            ],
            [
                'Users'=> ['Users.id','Articles.users_id'],
                'Categories'=> ['Categories.id','Articles.categories_id']
            ]
        );
        $view = new View('articles', 'back');
        $view->assign('articles', $articles);
    }
}