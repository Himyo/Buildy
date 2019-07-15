<?php
namespace MVC\Controllers;

use MVC\Core\View;
use MVC\Models\Users;

class AdminUsersController extends Controller {

    private $users;

    /**
     * AdminUsersController constructor.
     * @param $users
     */
    public function __construct(Users $users) { $this->users = $users; }


    public function defaultAction() {
        $users = Users::ALL();
        $view = new View("usersBack", "back");
        $view->assign('users', $users);
    }

    public function deleteUserAction() {
        if (isset($_POST['id'])) {
            $this->users->delete(['id' => $_POST['id']]);
            header('Location: /dashboard/admin/users');
        } else {
            //TODO RENVOYER L'ERROR
            header('Location: /dashboard/admin/users');
        }

    }

    public function saveUserAction() {
        $data = [];

        //MODIFY
        if (!empty($_POST['id'])) {

            if (!empty($_POST['name'])) {
                $data += ['name' => $_POST['name']];
            }

            if (!empty($_POST['firstname'])) {
                $data += ['firstname' => $_POST['firstname']];
            }

            if (!empty($_POST['lastname'])) {
                $data += ['lastname' => $_POST['lastname']];
            }

            if (!empty($_POST['email'])) {
                $data += ['email' => $_POST['email']];
            }

            if (!empty($_POST['pwd'])) {
                $data += ['password' => password_hash($_POST['pwd'], PASSWORD_BCRYPT)];
            }

            if (!empty($_POST['status'])) {
                $data += ['status' => $_POST['status']];
            }

            if (!empty($_POST['role'])) {
                $data += ['role' => $_POST['role']];
            }

            if (!empty($_POST['photo_id'])) {
                $data += ['photo_id' => $_POST['photo_id']];
            }
            
            $this->users->edit($data, ['id' => $_POST['id']]);
            header('Location: /dashboard/admin/users');

        //CREATE
        } elseif (empty($_POST['id']) && !empty($_POST['firstname']) 
                    && !empty($_POST['lastname']) 
                    && !empty($_POST['email']) 
                    && !empty($_POST['pwd']) 
                    && !empty($_POST['status']) 
                    && !empty($_POST['role']) 
                    && !empty($_POST['photo_id'])) {

            $data = [
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['pwd'], PASSWORD_BCRYPT),
                'status' => $_POST['status'],
                'role' => $_POST['role'],
                'photo_id' => $_POST['photo_id']
            ];

            $this->users->insert($data);
            header('Location: /dashboard/admin/users');
        } else {
            //TODO RETURN ERROR
            header('Location: /dashboard/admin/users');
        }
    }
}