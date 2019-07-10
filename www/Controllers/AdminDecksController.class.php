<?php
namespace MVC\Controllers;

use MVC\Core\View;

class AdminDecksController extends Controller {

    private $deck;

    /**
     * AdminDecksController constructor.
     * @param $deck
     */
    public function __construct($deck) { $this->deck = $deck; }


    public function defaultAction() {
        $view = new View("decksBack", "back");
    }
}