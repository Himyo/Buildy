<?php
namespace MVC\Controllers;

use MVC\Core\View;
use MVC\Models\Tournaments;

class TournamentsController {

    private $tournament;

    /**
     * TournamentsController constructor.
     * @param $tournament
     */
    public function __construct(Tournaments $tournament) {
        $this->tournament = $tournament;
    }


    public function getTournamentsViewAction() {
        $view = new View("tournamentsBack", "back");
    }
}