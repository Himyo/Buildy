<?php
namespace MVC\Controllers;

 use MVC\Core\View;
 use MVC\Models\Users;
 use MVC\Lib\FormBuilder;
 use MVC\Core\Request;

class UsersController extends Controller {

	protected $user;

	public function __construct(Users $user) {

		$this->user = $user;
	}
	public function defaultAction(){
		echo "users default";
	}

	public function saveAction(){

		$user = $this->user;
		$form = $user->getRegisterForm();
		$data = $GLOBALS[$form->getGlobalMethod()];
		if( $_SERVER['REQUEST_METHOD']==$form->getMethod() && !empty($data) ){
			$form->validate($data);
			//TODO: Catch SQL Error
			if($form->isValid()){
				//TODO: Real user registration
				$user->supply($data);
				$user->save();
				//session_start();
				//$_SESSION['token'] = $user->getToken();
			}
		}
		//TODO: Take decision for action settings
		$v = new View("saveUser", "front");
		$v->assign("form", new FormBuilder($form));
	}


	public function loginAction() {

		$user = $this->user;
		$form = $user->getLoginForm();
		$data = $GLOBALS[$form->getGlobalMethod()];
		if( $_SERVER['REQUEST_METHOD']==$form->getMethod() && !empty($data) ){
			$form->validate($data);
            //TODO: Catch SQL Error
			if($form->isValid()) {
				//TODO: Real user connection
				$queryResult = $user->getOneBy($data);
				if($queryResult && empty($user->getToken())) {
					session_start();
                    $token = password_hash(substr(uniqid().time(), 4, 10).$user->getFirstname(), PASSWORD_DEFAULT);
                    $user->setToken($token);
                    $user->supply($data);
                    $user->save();
                    $_SESSION['token'] = $user->getToken();

				}
			}
		}
		$v = new View("loginUser", "front");
		$v->assign("form", new FormBuilder($form));
	}


	public function forgetPasswordAction(){
		$user = $this->user;
		$form = $user->getForgetPasswordForm();
		$data = $GLOBALS[$form->getGlobalMethod()];
		if($_SERVER['REQUEST_METHOD'] == strtoupper($form->getMethod()) && !empty($data)) {
			//TODO: Mailling
			var_dump($data);
		}
		$v = new View("forgetPasswordUser", "front");
        $v->assign("form", new FormBuilder($form));
	}

	public function newLoginAction(Request $request) {
        $user = $this->user;
    }
}