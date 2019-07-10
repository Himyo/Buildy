<?php
namespace MVC\Controllers;

use MVC\Core\View;

class AdminCardsController extends Controller {

    private $cards;

    /**
     * AdminCardsController constructor.
     * @param $cards
     */
    public function __construct($cards) { $this->cards = $cards; }


    public function defaultAction() {
        $view = new View("cardsBack", "back");
    }
}