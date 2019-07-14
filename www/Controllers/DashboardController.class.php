<?php
namespace MVC\Controllers;

use MVC\Core\View;
use MVC\Models\Articles;
use MVC\Models\Cards;
use MVC\Models\Decks;
use MVC\Models\Pages;
use MVC\Models\Tournaments;
use MVC\Models\Users;

class DashboardController extends Controller {

    private $users;
    private $articles;
    private $tournaments;
    private $decks;
    private $pages;
    private $cards;

    /**
     * DashboardController constructor.
     * @param $users
     * @param $articles
     * @param $tournaments
     * @param $decks
     * @param $pages
     * @param $cards
     */
    public function __construct($users, $articles, $tournaments, $decks, $pages, $cards) {
        $this->users = $users;
        $this->articles = $articles;
        $this->tournaments = $tournaments;
        $this->decks = $decks;
        $this->pages = $pages;
        $this->cards = $cards;
    }


    public function defaultAction() {
        $users = Users::ALL();
        $articles = Articles::ALL();
        $tournaments = Tournaments::ALL();
        $decks = Decks::ALL();
        $pages = Pages::ALL();
        $cards = $this->cards->findJoin(
            [
                'Cards.id', 'Cards.image_url',
                'Cards.name', 'Cards.toughness',
                'Cards.power', 'Mana.mana_cost',
                'Mana.cmc', 'Releases.code'
            ],
            [
                'Mana' => ['Mana.id', 'Cards.mana_id'],
                'Releases' => ['Releases.id', 'Cards.releases_id']
            ]
        );

        $view = new View("dashboard", "back");
        $view->assign('users', $users);
        $view->assign('articles', $articles);
        $view->assign('tournaments', $tournaments);
        $view->assign('decks', $decks);
        $view->assign('cards', $cards);
        $view->assign('pages', $pages);
    }
}