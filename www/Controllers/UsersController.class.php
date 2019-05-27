<?php
namespace MVC\Controllers;

 use MVC\Core\View;
 use MVC\Lib\Form;
 use MVC\Models\Users;
 use MVC\Lib\FormBuilder;
 use MVC\Core\Request;

class UsersController extends Controller {

	protected $users;
	protected $formId = [];

	public function __construct(Users $users) {

		$this->users = $users;
	}
	public function getUsersViewAction(){
		$view = new View("usersBack", "back");
	}

	public function getRegisterFormAction() {
	    $user = $this->user;
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

	public function ssaveAction(){

		$users = $this->users;
		$form = $users->getRegisterForm();
		$data = $GLOBALS[$form->getGlobalMethod()];
		if( $_SERVER['REQUEST_METHOD']==$form->getMethod() && !empty($data) ){
			$form->validate($data);

			if($form->isValid()){
                unset($data['emailConfirm']);
//                unset($data['passwordConfirm']);
                echo 'VALID';
				//TODO: Real users registration
				$users->supply($data);
				$users->save();
				//session_start();
				//$_SESSION['token'] = $users->getToken();
                header('Location: /');
                exit;
			}
		}
		//TODO: Take decision for action settings
		$v = new View("register", "front");
		$v->assign("form", new FormBuilder($form));
	}


	public function loginAction() {

		$users = $this->users;
		$form = $users->getLoginForm();
		$data = $GLOBALS[$form->getGlobalMethod()];
		if( $_SERVER['REQUEST_METHOD']==$form->getMethod() && !empty($data) ){
			$form->validate($data);
			if($form->isValid()) {
				$queryResult = $users->get($data);
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
		$v = new View("loginUser", "front");
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
		$v = new View("forgetPasswordUser", "front");
        $v->assign("form", new FormBuilder($form));
	}

	public function newLoginAction(Request $request) {
        $users = $this->users;
    }
}