<?php
namespace MVC\Controllers;

 use MVC\Core\Auth;
 use MVC\Core\View;
 use MVC\Models\Users;

class UsersController extends Controller {

	protected $users;
	protected $formId = [];

	public function __construct(Users $users) {

		$this->users = $users;
	}

	// VIEWS

    public function getRegisterViewAction() {
	    $view = new View("register", "front");
    }

    public function getLoginViewAction() {
	    $view = new View("login", "front");
    }

    // ACTIONS

	public function saveAction() {
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
                $data += ['password' => crypt($_POST['pwd'], "yuAhFz628HZ328bz")];
            }
            if(!empty($_POST['role'])) {
                $data += ['role' => $_POST['role']];
            }
            if(!empty($_POST['status'])) {
                $data += ['status' => $_POST['status']];
            }



//            $data += ['photo_id' => 0];
            
            $this->users->edit($data, ['id' => $_POST['id']]);
            header('Location: /site');

        //CREATE
        } elseif (empty($_POST['id']) && !empty($_POST['firstname']) 
                    && !empty($_POST['lastname']) 
                    && !empty($_POST['email'])
                    && !empty($_POST['pwd'])
					&& !empty($_POST['pwd2'])) {
				
			$emails = array_flip(Users::ALL(['email']));
			
			if(!isset($emails[$_POST['email']])) {
				header('Location: /site/register?error=emailnotunique');
			}
			
			if ($_POST['pwd'] != $_POST['pwd2']) {
				header('Location: /site/register?error=pwdmatching');
			}

            $data = [
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['pwd'], PASSWORD_BCRYPT),
                'photo_id' => 0
            ];

            $this->users->insert($data);
            header('Location: /site');
        } else {
            header('Location: /site/register?error=missingfield');
        }
	}

	public function connexionAction() {
		$user = $this->users->findAndWhere(["*"], ['email' => $_POST['email'], 'status' => 'ACCEPTED'])[0];
		if (!empty($user)) {
			if (password_verify($_POST['pwd'], $user['password'])) {
				Auth::Init($user);
				header('Location: /site');
			} else {
				header('Location: /site/login?error=wrongcredentials');
			}
		} else {
			header('Location: /site/login?error=pendinguser');
		}
	}

	public function deconnexionAction() {
	    Auth::destroy();
		header('Location: /site');
	}



















	/*public function getRegisterFormAction() {
	    $user = $this->users;
        $_SESSION["form"] = $user->getRegisterForm();
        $view = new View("register", "back");
        $view->assign("form", new FormBuilder($user->getRegisterForm()));
    }

    public function saveAction() {
	    if (isset($_SESSION["form"])) {
            $this->form = $_SESSION["form"];
        }
        $data = $GLOBALS[$this->form->getGlobalMethod()];
	    if ($_SERVER["REQUEST_METHOD"] == $this->form->getMethod() && !empty($data)) {
            $this->form->validate($data);
	        if ($this->form->isValid()) {
	            $user->supply($data);
	            $user->save();
	            session_start();
	            $_SESSION["token"] = $user->getToken();
            } else {
	            $view = new View("register", "front");
	            $view->assign("errors", $this->form);
            }
        }
	    $view = new View("homepage", "back");
        $view->assign("user", $user);
    }

	public function loginAction() {

		$users = $this->users;
		$form = $users->getLoginForm();
		$data = $GLOBALS[$form->getGlobalMethod()];
		if( $_SERVER['REQUEST_METHOD']==$form->getMethod() && !empty($data) ){
			$form->validate($data);
			if($form->isValid()) {
				$queryResult = $users->findAndWhere(["*"], $data);
				if($queryResult && empty($users->getToken())) {
					session_start();
                    $token = password_hash(substr(uniqid().time(), 4, 10).$users->getFirstname(), PASSWORD_DEFAULT);
                    $users->setToken($token);
                    $users->supply($data);
                    $_SESSION['token'] = $users->getToken();
                    $_SESSION['user'] = $users;

                    header('Location: /');
                    exit;
				}
				else {
				    echo "Ooops, not account found for: ";
				    var_dump($data);
                }
			}
		}
		$v = new View("loginUser", "back");
		$v->assign("form", new FormBuilder($form));
	}


    public function listAction($data = [], $editable = []) {
        $data = ['id', 'lastname', 'firstname','email', 'status', 'role', 'photo_id'];
        $editable =  ['status', 'role'];
	    parent::listAction($data, $editable);
    }


	public function forgetPasswordAction(){
		$users = $this->users;
		$form = $users->getForgetPasswordForm();
		$data = $GLOBALS[$form->getGlobalMethod()];
		if($_SERVER['REQUEST_METHOD'] == strtoupper($form->getMethod()) && !empty($data)) {
			//TODO: Mailling
			var_dump($data);
		}
		$v = new View("forgetPasswordUser", "back");
        $v->assign("form", new FormBuilder($form));
	}*/
}