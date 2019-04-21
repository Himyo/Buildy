<?php

class UsersController{

	public function defaultAction(){
		echo "users default";
	}

	public function saveAction($template = "front"){
		$user = new Users();
		$form = $user->getRegisterForm();
		$method = strtoupper($form->getMethod());
		$data = $GLOBALS['_'.$method];
		if( $_SERVER['REQUEST_METHOD']==$method && !empty($data) ){
			$form->addValidator($data);
			if($form->isValid()) {
				//TODO: Real user registration
                $user->supply($data);
                $user->save();

			}
		}
		//TODO: Take decision for action settings
		$v = new View("saveUser", $template);
		$v->assign("form", new FormBuilder($form));
	}


	public function loginAction($template = "front") {

		$user = new Users();
		$form = $user->getLoginForm();
        $method = "_".strtoupper($form->getMethod());
        $data = $GLOBALS[$method];
        if( $_SERVER['REQUEST_METHOD']==$method && !empty($data) ){
			$form->addValidator($data);
			if($form->isValid()) {
				//TODO: Real user connection
				$queryResult = $user->getOneBy($data);
				if($queryResult) {
//					$lastSessionToken  = $_SESSION['user']->getToken();
//					if($lastSessionToken == $queryResult['token']) {
                    session_start();
                    $token = password_hash(substr(uniqid().time(), 4, 10).$user->getFirstname(), PASSWORD_DEFAULT);
                    $user->setToken($token);
                    $user->supply($data);
                    $user->save();
                    $_SESSION['user'] = $user;
                    $_SESSION['loggedin'] = true;
                    $v = new View("homepage", $template);
                    $v->assign("user", $user);
                }
                else {
                    die('Token exchange failed');
                }
            }
		}
        $v = new View("loginUsers", "front");
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

	public function getDatabaseAction() {
    }
}