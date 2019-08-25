<?php
namespace MVC\Controllers;


use MVC\Core\Routing;
use MVC\Core\View;
use MVC\Models\Pages;
use MVC\Core\Auth;
use MVC\Models\Decks;
use MVC\Models\Articles;
use MVC\Models\Tournaments;

class ProfileController extends Controller {

    public function getDefaultAction() {

        $decks = Decks::ALL(['*'], ['users_id' => Auth::User()['id']]);
        
        $articles = Articles::ALL(['*'], ['users_id' => Auth::User()['id']]);

        $tournaments = Tournaments::ALL(['*'], ['users_id' => Auth::User()['id']]);

        $view = new View("profile", "front");
        $view->assign('decks', $decks);
        $view->assign('articles', $articles);
        $view->assign('tournaments', $tournaments);
    }
}
    