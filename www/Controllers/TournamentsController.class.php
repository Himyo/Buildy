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

    public function saveAction() {
        $data = [];

        if (empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['nb_contenders'])) {

            if (!isset($_SESSION['user']['id'])) {
                //TODO RETURN ERROR
                header('Location: /site');
            }

            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'nb_contenders' => $_POST['nb_contenders'],
                'created_at' => date('Y-m-d')
            ];

            $this->tournaments->insert($data);
            header('Location: /site');
        } else {
            //TODO RETURN ERROR
            header("location:javascript://history.go(-1)");
        }
    }
}