<?php


namespace MVC\Controllers;


use MVC\Core\Routing;
use MVC\Core\View;
use MVC\Models\Cards;
use MVC\Models\Decks;
use MVC\Models\Legalities;

class DecksController extends Controller {

    protected $decks;

    public function __construct(Decks $decks) {
        $this->decks = $decks;
    }

    public function saveAction() {
        if (empty($_POST['id']) && !empty($_POST['name'])) {

            if (!isset($_SESSION['user']['id'])) {
                //TODO RETURN ERROR
                header('Location: /site');
                exit();
            }

            $data = [
                'name' => $_POST['name'],
                'users_id' => isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 1,
                'upvotes' => 0,
                'downvotes' => 0
            ];

            $this->decks->insert($data);
            header('Location: /site');
            exit();
        } else {
            //TODO RETURN ERROR
            header("location:javascript://history.go(-1)");
            exit();
        }
    }

    public function getByIdAction() {
        if(!isset($_POST['id'])){
            echo json_encode([]);
        }
        else {
            $decks = Decks::ALL([
                'name as Nom',
                'upvotes as UP',
                'downvotes as DOWN'
            ], ['users_id' => $_POST['id']]);
            echo json_encode($decks);
        }
    }
}