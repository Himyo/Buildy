<?php
namespace MVC\Controllers;

use MVC\Core\View;
use MVC\Lib\FormBuilder;
use MVC\Models\Tournaments;

class TournamentsController extends Controller {

    protected $tournaments;

    public function __construct(Tournaments $tournament) {
        $this->tournaments =  $tournament;
    }

    public function getTournamentsFormAction() {
        $form = $this->tournaments->tournamentsForm();
        $view = new View('createTournament');
        $view->assign("form", new FormBuilder($form));
    }
}