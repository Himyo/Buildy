<?php
namespace MVC\Controllers;

use MVC\Core\View;

class ArticlesController {

    public function getArticlesViewAction() {
        $view = new View("tournamentsBack", "back");
    }
}