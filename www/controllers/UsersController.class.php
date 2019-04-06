<?php

class UsersController{

	public function defaultAction(){
		echo "users default";
	}

	public function saveAction(){

		$user = new Users();
		$form = $user->getRegisterForm();
		$method = "_".strtoupper($form->getMethod());
		$data = $GLOBALS[$method];
		if( $_SERVER['REQUEST_METHOD']==$method && !empty($data) ){
			$form->addValidator($data);
			if(!$form->isValid()){
				$errors = $form->getErrors();
			}
			else {
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

		$user = new Users();
		$form = $user->getLoginForm();
        $method = "_".strtoupper($form->getMethod());
        $data = $GLOBALS[$method];
        if( $_SERVER['REQUEST_METHOD']==$method && !empty($data) ){
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
		$user = new Users();
		$form = $user->getForgetPasswordForm();
        $method = "_".strtoupper($form->getMethod());
        $data = $GLOBALS[$method];
        if( $_SERVER['REQUEST_METHOD']==$method && !empty($data) ){
			//TODO: Mailing
			var_dump($data);
		}
		$v = new View("forgetPasswordUser", "front");
        $v->assign("form", new FormBuilder($form));
	}
}