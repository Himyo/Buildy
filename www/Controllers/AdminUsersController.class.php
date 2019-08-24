<?php
namespace MVC\Controllers;

use MVC\Core\View;
use MVC\Lib\Validator;
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
            header('Location: /Admin/dashboard/users');
            exit();
        } else {
            //TODO RENVOYER L'ERROR
            header('Location: /Admin/dashboard/users');
            exit();
        }

    }

    public function saveAction() {
        $data = [];

        //MODIFY
        if (!empty($_POST['id'])) {
            $fieldsCheck = ['id' => $_POST['id']];

            if (!empty($_POST['firstname'])) {
                $fieldsCheck += [ 'firstname' => ['maxlength' => 50, 'minlength' => 3,] ];
                $data += ['firstname' => $_POST['firstname']];
            }

            if (!empty($_POST['lastname'])) {
                $fieldsCheck += [ 'lastname' => ['maxlength' => 70, 'minlength' => 3,] ];
                $data += ['lastname' => $_POST['lastname']];
            }

            if (!empty($_POST['email'])) {
                $fieldsCheck+= [ 'email' => ['checkEmail'] ];
                $data += ['email' => $_POST['email']];
            }

            if (!empty($_POST['password'])) {
                $fieldsCheck += [ 'password' => ['checkPassword'] ];
                $data += ['password' => $_POST['password']];
            }
            if(!empty($_POST['role'])) {
                $fieldsCheck += [ 'role' => [ 'fixedValue' => ['USER', 'MODERATOR'] ] ];
                $data += ['role' => $_POST['role']];
            }
            if(!empty($_POST['status'])) {
                $fieldsCheck += [ 'role' => [ 'fixedValue' => ['ACCEPTED', 'PENDING', 'REFUSED'] ] ];
                $data += ['status' => $_POST['status']];
            }
//            $data += ['photo_id' => 0];
            Validator::validate($fieldsCheck , $data);

            if(Validator::isValid()) {
                $data['password'] = crypt($data['password'], "yuAhFz628HZ328bz");
                $this->users->edit($data, ['id' => $data['id']]);
                header('Location: /site');
                exit();
            }
            else {
                $view = new View("register", "front");
                $view->assign('errors', Validator::getErrors());
                $view->assign('data', $data);
                exit();
            }

            //CREATE
        } else {
            $fieldsCheck =
                [
                    'firstname' =>
                        [
                            'required',
                            'maxlength' => 70,
                            'minlength' => 1,
                        ],
                    'lastname' =>
                        [
                            'required',
                            'maxlength' => 50,
                            'minlength' => 1,
                        ],
                    'email' =>
                        [
                            'required',
                            'checkEmail',
                            'unique' =>  []
                        ]
                    , 'password' =>
                        [
                            'required',
                            'checkPassword'
                        ],
                    'password2' =>
                        [
                            'required',
                            'matching' => $_POST['password']
                        ]
                ];
            Validator::validate($fieldsCheck, $_POST);
            if(Validator::isValid()) {
                $data = [
                    'firstname' => $_POST['firstname'],
                    'lastname' => $_POST['lastname'],
                    'email' => $_POST['email'],
                    'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
                    'photo_id' => 0
                ];

                $this->users->insert($data);
                header('Location: /Admin/dashboard/users');
                exit();
            }
            else {
                header('Location: /Admin/dashboard/users');
                $view = new View("register", "front");
                $view->assign('errors', Validator::getErrors());
                $view->assign('data', $data);
                exit();
            }
        }
    }
}