<?php
namespace MVC\Controllers;

use MVC\Core\View;
use MVC\Models\Tournaments;

class AdminTournamentsController extends Controller {

    private $tournament;

    /**
     * AdminTournamentsController constructor.
     * @param $tournament
     */
    public function __construct($tournament) { $this->tournament = $tournament; }


    public function defaultAction() {
        $tournaments = Tournaments::ALL();
        $view = new View("tournamentsBack", "back");
        $view->assign('tournaments', $tournaments);
    }

    public function deleteTournamentAction() {
        if (isset($_POST['id'])) {
            $this->tournament->delete(['id' => $_POST['id']]);
            header('Location: /dashboard/admin/tournaments');
        } else {
            //TODO RENVOYER L'ERROR
            header('Location: /dashboard/admin/tournaments');
        }

    }

    public function saveTournamentAction() {
        $data = [];
        //MODIFY
        if (!empty($_POST['id'])) {
            if (!empty($_POST['name'])) {
                $data += ['name' => $_POST['name']];
            }

            if (!empty($_POST['description'])) {
                $data += ['description' => $_POST['description']];
            }

            if (!empty($_POST['nb_contenders'])) {
                $data += ['nb_contenders' => $_POST['nb_contenders']];
            }
            
            $this->tournament->edit($data, ['id' => $_POST['id']]);
            header('Location: /dashboard/admin/tournaments');

        //CREATE
        } elseif (empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['nb_contenders'])) {

            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'nb_contenders' => $_POST['nb_contenders'],
                'created_at' => date('Y-m-d')
            ];

            $this->tournament->insert($data);
            header('Location: /dashboard/admin/tournaments');
        } else {
            //TODO RETURN ERROR
            header('Location: /dashboard/admin/tournaments');
        }
    }
}   