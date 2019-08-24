<?php
namespace MVC\Controllers;

 use MVC\Core\Auth;
 use MVC\Core\View;
 use MVC\Lib\Validator;
 use MVC\Models\Users;

class UsersController extends Controller
{

    protected $users;
    protected $formId = [];

    public function __construct(Users $users)
    {

        $this->users = $users;
    }

    // VIEWS

    public function getRegisterViewAction()
    {
        $view = new View("register", "front");
    }

    public function getLoginViewAction()
    {
        $view = new View("login", "front");
    }

    // ACTIONS

    public function saveAction()
    {
        $data = [];

        //MODIFY
        $validator = new Validator();

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
//            if(!empty($_POST['role'])) {
//                $fieldsCheck += [ 'role' => [ 'fixedValue' => ['USER', 'MODERATOR'] ] ];
//                $data += ['role' => $_POST['role']];
//            }
//            if(!empty($_POST['status'])) {
//                $fieldsCheck += [ 'role' => [ 'fixedValue' => ['ACCEPTED', 'PENDING', 'REFUSED'] ] ];
//                $data += ['status' => $_POST['status']];
//            }
//           $data += ['photo_id' => 0];
            $validator->validate($fieldsCheck , $data);

            if($validator->isValid()) {
                $data['password'] = crypt($data['password'], "yuAhFz628HZ328bz");
                $this->users->edit($data, ['id' => $data['id']]);
                header('Location: /site');
                exit();
            }
            else {
                $errors = $validator->getErrors();
                header("Location: /site/profile/edit{$errors}");
                exit();
            }

        //CREATE
        } else {
            $fieldsCheck =
                [
                    'firstname' =>
                        [
                            'minlength' => 2,
                            'maxlength' => 50,
                        ],
                    'lastname' =>
                        [
                            'minlength' => 2,
                            'maxlength' => 50,
                        ],
                    'email' =>
                        [
                            'checkEmail',
                            'unique' =>  []
                        ]
                    , 'password' =>
                        [
                            'checkPassword'
                        ],
                    'password2' =>
                        [
                            'required',
                            'matching' => $_POST['password']
                        ]
                ];
            $validator->validate($fieldsCheck, $_POST);
            if($validator->isValid()) {
                $data = [
                    'firstname' => $_POST['firstname'],
                    'lastname' => $_POST['lastname'],
                    'email' => $_POST['email'],
                    'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
                    'photo_id' => 0
                ];

                $this->users->insert($data);
                header('Location: /site/login');
                exit();
            }
            else {
                $errors = $validator->getErrors();
                header("Location: /site/register{$errors}");
                exit();
            }
        }
    }

    public function connexionAction()
    {
        //TODO: Split request for photo and user info otherwise might lock user if no photo is found
        $user = $this->users->executeSql([
            'select' => [
                'Users.id', 'Users.firstname', 'Users.lastname',
                'Users.email', 'Users.password',
                'Users.role', 'Users.status',
                'Photo.name as photo_name', 'Photo.path as photo_path'
            ],
            'innerJoin' => [
                'Photo' => ['Photo.id', 'Users.photo_id']
            ],
            'where' => [
                'Users.email' => $_POST['email'],
            ]
        ])[0];

        if (!empty($user)) {
            if (password_verify($_POST['password'], $user['password'])) {
                if ($user['status'] == 'ACCEPTED') {
                    Auth::Init($user);
                    header('Location: /site');
                    exit();
                } else {
                    header('Location: /site/login?error=banneduser');
                    exit();
                }
            } else {
                header('Location: /site/login?error=wrongcredentials');
                exit();
            }
        }
        else {
            header('Location: /site/login?error=notfound');
            exit();
        }
    }

    public function deconnexionAction()
    {
        Auth::destroy();
        header('Location: /site');
        exit();
    }

    public function getProfileAction()
    {
        $view = new View('profile', 'front');
    }
}

