<?php
namespace MVC\Controllers;

 use MVC\Core\View;
 use MVC\Models\Users;
 use MVC\Lib\FormBuilder;

class UsersController{

	protected $user;

	public function __construct(Users $user) {
		$this->user = $user;
	}
	public function defaultAction(){
		echo "users default";
	}

	public function saveAction(){

		$user = $this->user;
		echo "======".$user->basesql->getTable($this->user);
		$form = $user->getRegisterForm();
		$data = $GLOBALS[$form->getGlobalMethod()];
		if( $_SERVER['REQUEST_METHOD']==$form->getMethod() && !empty($data) ){
			$form->validate($data);
			//TODO: Catch SQL Error
			if($form->isValid()){
				//TODO: Real user registration
				$token = password_hash(substr(uniqid().time(), 4, 10).$user->getFirstname(), PASSWORD_DEFAULT);
				$user->setToken($token);
				$user->supply($data);
				$user->save();
				session_start();
				$_SESSION['user'] = $user;
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
				if($queryResult) {
					session_start();
					$lastSessionToken  = $_SESSION['user']->getToken();
					if($lastSessionToken == $queryResult['token']) {
						$token = password_hash(substr(uniqid().time(), 4, 10).$user->getFirstname(), PASSWORD_DEFAULT);
						$user->setToken($token);
						$user->supply($data);
						$user->save();
						$_SESSION['user'] = $user;
						$_SESSION['loggedin'] = true;
					}
					else {
						die('Token exchange failed');
					}
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
}