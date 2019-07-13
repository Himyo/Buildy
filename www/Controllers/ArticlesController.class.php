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
        $querys =
            [
            'select' =>
                [
                    'Articles.id', 'Articles.title',
                    'Articles.created_at','Articles.state',
                    'Articles.content', 'Categories.name',
                    'Users.firstname', 'Users.lastname',
                    'Users.email'
                ],
            'innerJoin' =>
                [
                    'Users'=> ['Users.id','Articles.users_id'],
                    'Categories'=> ['Categories.id','Articles.categories_id']
                ],
            'whereAnon' =>
                [
                    'Articles.state' => 'ACCEPTED'
                ]
            ];

        $articles = $this->articles->executeSql($querys);
        $view = new View('articles', 'back');
        $view->assign('articles', $articles);
    }
}