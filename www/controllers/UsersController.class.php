<?php

class UsersController{

	public function defaultAction(){
		echo "users default";
	}
	
	public function addAction(){
	
		$user = new Users();
		$user->setFirstname("Yves");
		$user->setLastname("skrzypczyk");
		$user->setEmail("y.skrzypczyk@gmail.com");
		$user->setPwd("Test1234");
		$user->save();


		//$v = new View("addUser", "front");
		
	}


	public function loginAction(){
	
		$v = new View("loginUser", "front");
		
	}


	public function forgetPasswordAction(){
	
		$v = new View("forgetPasswordUser", "front");
		
	}
}