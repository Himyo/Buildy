<?php

class UsersController{

	public function defaultAction(){
		echo "users default";
	}

	public function addAction(){

		$user = new Users();
		$form = $user->getRegisterForm();
		$data = $GLOBALS[$form->getMethod()];
		if( $_SERVER['REQUEST_METHOD']==$form->getMethod() && !empty($data) ){
			$form->addValidator($data);
			if(!$form->isValid()){
				$errors = $form->getErrors();
			}
			else {
				//TODO: Real user registration 
				$token = password_hash(substr(uniqid().time(), 4, 10).$user->getFirstname());
				$user->setToken($token);
				$user->supply($data);
				$user->save();
				session_start();
				$_SESSION['user'] = $user;
			}
		}
		//TODO: Take decision for action settings
		$v = new View("addUser", "front");
		$v->assign("form", new FormBuilder($form));
	}


	public function loginAction() {

		$user = new Users();
		$form = $user->getLoginForm();
		$data = $GLOBALS[$form->getMethod()];
		if( $_SERVER['REQUEST_METHOD']==$form->getMethod() && !empty($data) ){
			$form->addValidator($data);
			if(!$form->isValid()) {
				$errors = $form->getErrors();
			}
			else {
				//TODO: Real user connection 
				$queryResult = $user->getOneBy($data);
				if($queryResult) {
					session_start();
					$lastSessionToken  = $_SESSION['user']->getToken();
					if($lastSessionToken == $queryResult['token']) {
						$token = password_hash(substr(uniqid().time(), 4, 10).$user->getFirstname());
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
		$user = new Users();
		$form = $user->getForgetPasswordForm();
		$data = $GLOBAL[$form->getMethod()];
		if($_SERVER['REQUEST_METHOD'] == $form->getMethod() && !empty($data)) {
			//TODO: Mailling
			var_dump($data);
		}
		$v = new View("forgetPasswordUser", "front");
        $v->assign("form", new FormBuilder($form));
	}
}