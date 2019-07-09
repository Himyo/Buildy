<?php
namespace MVC\Controllers;

use MVC\Core\View;

class DecksController extends Controller {

    private $deck;

    /**
     * DecksController constructor.
     * @param $deck
     */
    public function __construct($deck) { $this->deck = $deck; }


    public function defaultAction() {
        $view = new View("myDeck", "back");
    }
}