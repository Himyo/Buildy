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

    public function saveTournamentAction() {
        $data = [];

        if (empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['nb_contenders'])) {

            if (!isset($_SESSION['user']['id'])) {
                //TODO RETURN ERROR
                header('Location: /site');
                exit();
            }

            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'nb_contenders' => $_POST['nb_contenders'],
                'created_at' => date('Y-m-d')
            ];

            $this->tournaments->insert($data);
            header('Location: /site/tournaments');
            exit();
        } else {
            //TODO RETURN ERROR
            header("location:javascript://history.go(-1)");
            exit();
        }
    }

    public function getByIdAction() {
        if(!isset($_POST['id'])) {
            echo json_encode([]);
        }
        else {
            $tournaments = Tournaments::ALL([
                'created_at as Ouverture',
                'ended_at as Fin',
                'name as Nom',
                'description as Description',
                'nb_contenders as N`Participant'
            ], ['users_id' => $_POST['id']]);
            echo json_encode($tournaments);
        }
    }

    public function getTournamentsAction() {
        $tournaments = Tournaments::ALL();

        $view = new View("tournaments", "front");
        $view->assign('tournaments', $tournaments);
    }

    public function getDetailAction() {

        $tournament = $this->tournaments->find(['*'], ['Tournaments.id' => $_GET['id']])[0];

        $this->tournaments->setTable('Tournaments_members');
        $members = $this->tournaments->executeSql([
            'select'=> [ 'Users.firstname', 'Users.lastname', 'Users.id'],
            'innerJoin'=>['Users' => ['Users.id', 'Tournaments_members.users_id']],
            'where' => ['Tournaments_members.tournaments_id' => $_GET['id']]
            ]
        );

        $view = new View('tournamentDetail', 'front');
        $view->assign('tournament', $tournament);
        $view->assign('members', $members);
    }

    public function signupAction() {
        if (isset($_POST['users_id']) && isset($_POST['tournament_id'])) {
            $this->tournaments->setTable('Tournaments_members');

            $data = [
                'users_id' => $_POST['users_id'],
                'tournaments_id' => $_POST['tournament_id']
            ];

            $this->tournaments->insert($data);

            header('Location: /site/tournament?id='.$_POST['tournament_id']);
            exit();
        }
    }
}