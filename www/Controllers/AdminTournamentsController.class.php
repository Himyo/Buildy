<?php
namespace MVC\Controllers;

use MVC\Core\View;

class AdminTournamentsController extends Controller {

    private $tournament;

    /**
     * AdminTournamentsController constructor.
     * @param $tournament
     */
    public function __construct($tournament) { $this->tournament = $tournament; }


    public function defaultAction() {
        $view = new View("tournamentsBack", "back");
    }
}