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
				$user->supply($data);
				$user->save();
			}
		}
		$v = new View("addUser", "front");
		$v->assign("form", new FormBuilder($form));
	}


	public function loginAction(){

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
					$token = password_hash(substr(uniqid().time(), 4, 10)."");

					session_name();
					session_start();
					$lastSessionToken  = $_SESSION[$user->getFirstname()]->getToken();
					if($lastSessionToken == $queryResult['token']) {
						$user->setToken($token);
						$user->save();
						$_SESSION[$user->getFirstname()] = $user;
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