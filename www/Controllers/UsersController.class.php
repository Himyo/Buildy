<?php
namespace MVC\Controllers;

 use MVC\Core\Auth;
 use MVC\Core\View;
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

            if (!empty($_POST['password'])) {
                $data += ['password' => password_hash($_POST['password'], PASSWORD_BCRYPT)];
            }
            if (!empty($_POST['role'])) {
                $data += ['role' => $_POST['role']];
            }
            if (!empty($_POST['status'])) {
                $data += ['status' => $_POST['status']];
            }


//            $data += ['photo_id' => 0];

            $this->users->edit($data, ['id' => $_POST['id']]);
            header('Location: /site');

            //CREATE
        } elseif (empty($_POST['id']) && !empty($_POST['firstname'])
            && !empty($_POST['lastname'])
            && !empty($_POST['email'])
            && !empty($_POST['password'])
            && !empty($_POST['pwd2'])) {

            $emails = array_flip(Users::ALL(['email']));

            if (!isset($emails[$_POST['email']])) {
                header('Location: /site/register?error=emailnotunique');
            }

            if ($_POST['password'] != $_POST['pwd2']) {
                header('Location: /site/register?error=pwdmatching');
            }

            $data = [
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'email' => $_POST['email'],
                'password' =>  password_hash($_POST['password'], PASSWORD_BCRYPT),
                'photo_id' => 0
            ];

            $this->users->insert($data);
            header('Location: /site');
        } else {
            header('Location: /site/register?error=missingfield');
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
    }

    public function getProfileAction()
    {
        $view = new View('profile', 'front');
    }
}

