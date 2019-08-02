<?php
namespace MVC\Controllers;

use MVC\Core\View;
use MVC\Models\Tournaments;

class AdminTournamentsController extends Controller {

    private $tournaments;

    /**
     * AdminTournamentsController constructor.
     * @param $tournaments
     */
    public function __construct($tournaments) { $this->tournaments = $tournaments; }


    public function defaultAction() {
        $tournaments = Tournaments::ALL();
        $view = new View("tournamentsBack", "back");
        $view->assign('tournaments', $tournaments);
    }

    public function deleteTournamentAction() {
        if (isset($_POST['id'])) {
            $this->tournaments->delete(['id' => $_POST['id']]);
            header('Location: /Admin/dashboard/tournaments');
        } else {
            //TODO RENVOYER L'ERROR
            header('Location: /Admin/dashboard/tournaments');
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
            
            $this->tournaments->edit($data, ['id' => $_POST['id']]);
            header('Location: /Admin/dashboard/tournaments');

        //CREATE
        } elseif (empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['nb_contenders'])) {

            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'nb_contenders' => $_POST['nb_contenders'],
                'created_at' => date('Y-m-d')
            ];

            $this->tournaments->insert($data);
            header('Location: /Admin/dashboard/tournaments');
        } else {
            //TODO RETURN ERROR
            header('Location: /Admin/dashboard/tournaments');
        }
    }
}   