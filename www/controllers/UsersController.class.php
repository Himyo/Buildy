<?php

class UsersController{

	public function defaultAction(){
		echo "users default";
	}

	public function registerAction(){

		$user = new Users();
		$form = $user->getRegisterForm();
		$data = $GLOBALS[$form->getMethod()];
		if( $_SERVER['REQUEST_METHOD']==$method && !empty($data) ){
			$form->addValidator($data);
			if(!$form->isValid()){
				$errors = $form->getErrors();
			}
			else {
				$token = password_hash(substr(uniqid().time(), 4, 10).$user->getFirstname());
				$user->setToken($token);
				$user->supply($data);
				$user->save();
				session_start();
				$_SESSION['user'] = $user;
			}
		}
		$v = new View("addUser", "front");
		$v->assign("form", new FormBuilder($form));
	}


	public function loginAction() {

		$user = new Users();
		$form = $user->getLoginForm();
		$data = $GLOBALS[$form->getMethod()];
		if( $_SERVER['REQUEST_METHOD']==$method && !empty($data) ){
			$form->addValidator($data);
			if(!$form->isValid()) {
				$errors = $form->getErrors();
			}
			else {
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
	
		$v = new View("forgetPasswordUser", "front");
        $v->assign("form", new FormBuilder($form));
	}
}