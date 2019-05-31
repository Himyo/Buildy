<?php


namespace MVC\Controllers;


use MVC\Core\Routing;
use MVC\Core\View;
use MVC\Models\Decks;

class DecksController extends Controller {

    protected $decks;

    public function __construct(Decks $decks) {
        $this->decks = $decks;
    }

    public function getDecksFormAction() {
        $deck = $this->decks;
        $view = new View('createDeck', 'back');
        $view->assign("form", $deck->deckForm());
    }

    public function fillDeck() {
        //TODO: Make a more generic method
        $data = $GLOBALS['_POST'];
        if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($data)) {}
    }


}