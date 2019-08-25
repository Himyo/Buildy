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

    public function saveDeckAction() {
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
            header('Location: /site/decks');
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

    public function editPageAction() {
        $cards = Cards::ALL();

        $deck = $this->decks->executeSql([
            'select' => [
                'Users.id', 'Users.firstname', 'Users.lastname',
                'Decks.name', 'Decks.upvotes', 'Decks.downvotes'
            ],
            'innerJoin' => [
                'Users' => ['Users.id', 'Decks.users_id']
            ],
            'where' => [
                'Decks.id' => $_GET['id'],
            ]
        ])[0];

        $this->decks->setTable('Decks_cards');
        $deckCards = $this->decks->executeSql( 
            [
                'select' => ['Cards.id', 'Cards.image_url'], 
                'innerJoin' => ['Cards' => ['Cards.id', 'Decks_cards.cards_id'] ], 
                'where' => ['Decks_cards.decks_id' => $_GET['id']] 
            ]);
    

        $view = new View('deckEdit', 'front');
        $view->assign('deck', $deck);
        $view->assign('cards', $cards);
        $view->assign('deckCards', $deckCards);
    }

    public function saveEditAction() {
        if (isset($_POST['cards_id']) && isset($_POST['decks_id'])) {
            $this->decks->setTable('Decks_cards');
            $this->decks->insert($_POST);
        }
    }

    public function deleteEditAction() {
        if (isset($_POST['cards_id']) && isset($_POST['decks_id'])) {
            $this->decks->setTable('Decks_cards');
            $this->decks->delete($_POST);
        }
    }

    public function getDecksAction() {
        $error = "";
        if(isset($_SESSION['user'])) {
            $decks = Decks::ALL(['*'], ['users_id' => $_SESSION['user']['id']]);
        } else {
            $error = "Vous n'êtes pas connecté.";
        }
        $view = new View("decks", "front");
        $view->assign('decks', $decks);
    }

    public function getAllDecksAction() {
        $decks = $this->decks->executeSql([
            'select' => [
                'Users.id as users_id', 'Users.firstname', 'Users.lastname',
                'Decks.name', 'Decks.upvotes', 'Decks.downvotes', 'Decks.id'
            ],
            'innerJoin' => [
                'Users' => ['Users.id', 'Decks.users_id']
            ]
        ]);
        $view = new View('decksAll', "front");
        $view->assign('decks', $decks);
    }

    public function getDetailAction() {
        if (isset($_GET['id'])) {
            $cards = Cards::ALL();

            $deck = $this->decks->executeSql([
                'select' => [
                    'Users.id', 'Users.firstname', 'Users.lastname',
                    'Decks.name', 'Decks.upvotes', 'Decks.downvotes'
                ],
                'innerJoin' => [
                    'Users' => ['Users.id', 'Decks.users_id']
                ],
                'where' => [
                    'Decks.id' => $_GET['id'],
                ]
            ])[0];

            $this->decks->setTable('Decks_cards');
            $deckCards = $this->decks->executeSql( 
                [
                    'select' => ['Cards.id', 'Cards.image_url'], 
                    'innerJoin' => ['Cards' => ['Cards.id', 'Decks_cards.cards_id'] ], 
                    'where' => ['Decks_cards.decks_id' => $_GET['id']] 
                ]);

            $view = new View('deckDetail', 'front');
            $view->assign('deck', $deck);
            $view->assign('cards', $cards);
            $view->assign('deckCards', $deckCards);
        }
    }
}