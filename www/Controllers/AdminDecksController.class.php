<?php
namespace MVC\Controllers;

use MVC\Core\View;
use MVC\Models\Decks;

class AdminDecksController extends Controller {

    private $decks;

    /**
     * AdminDecksController constructor.
     * @param $decks
     */
    public function __construct($decks) { $this->decks = $decks; }


    public function defaultAction() {
        $decks = Decks::ALL();
        $view = new View("decksBack", "back");
        $view->assign('decks', $decks);
    }

    public function deleteDeckAction() {
        if (isset($_POST['id'])) {
            $this->decks->delete(['id' => $_POST['id']]);
            header('Location: /dashboard/admin/decks');
        } else {
            //TODO RENVOYER L'ERROR
            header('Location: /dashboard/admin/decks');
        }

    }

    public function saveDeckAction() {
        $data = [];
        //MODIFY
        if (!empty($_POST['id'])) {

            if (!empty($_POST['name'])) {
                $data += ['name' => $_POST['name']];
            }

            if (!empty($_POST['users_id'])) {
                $data += ['users_id' => $_POST['users_id']];
            }

            if (!empty($_POST['upvotes'])) {
                $data += ['upvotes' => $_POST['upvotes']];
            }

            if (!empty($_POST['downvotes'])) {
                $data += ['downvotes' => $_POST['downvotes']];
            }

            $this->decks->edit($data, ['id' => $_POST['id']]);
            header('Location: /dashboard/admin/decks');

            //CREATE
        } elseif (empty($_POST['id']) && !empty($_POST['name'])) {

            $data = [
                'name' => $_POST['name'],
                'users_id' => isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 1,
                'upvotes' => 0,
                'downvotes' => 0
            ];

            $this->decks->insert($data);
            header('Location: /dashboard/admin/decks');
        } else {
            //TODO RETURN ERROR
            header('Location: /dashboard/admin/decks');
        }
    }
}