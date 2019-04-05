<?php
class Users extends BaseSQL{

	public $id = null;
	public $firstname;
	public $lastname;
	public $email;
	public $pwd;
	public $role=1;
	public $status=0;
	public $token;

	public function __construct(){
		parent::__construct();
	}


	public function setFirstname($firstname){
		$this->firstname = ucwords(strtolower(trim($firstname)));
	}
	public function setLastname($lastname){
		$this->lastname = strtoupper(trim($lastname));
	}
	public function setEmail($email){
		$this->email = strtolower(trim($email));
	}
	public function setPwd($pwd){
		$this->pwd = password_hash($pwd, PASSWORD_DEFAULT);
	}
	public function setRole($role){
		$this->role = $role;
	}
	public function setStatus($status){
		$this->status = $status;
	}
	public function setToken($token){
		$this->token = $token;
	}

	
	public function getRegisterForm(){
		$slug = Routing::getSlug("Users", "add");

		$firstname = new InputField ([ 
			"type"=>"text",
			"placeholder"=>"Votre Prénom", 
			"required"=>true, 
			"id"=>"firstname",
			"minlength"=>2,
			"maxlength"=>50,
			"error" => "Firstname invalide"
		]);

		$lastname = new InputField ([
			"type"=>"text",
			"placeholder"=>"Votre nom",
			"required"=>true,
			"id"=>"lastname",
			"minlength"=>2,
			"maxlength"=>100,
			"error" => "Lastname invalide"
		]);

		$email = new InputField ([
			"type"=>"email",
			"placeholder"=>"Votre email",
			"required"=>true,
			"id"=>"email",
			"maxlength"=>250,
			"error" => "Email invalide"
		]);

		$emailConfirm = new Field([
			"type"=>"text",
			"placeholder"=>"Confirmation", 
			"required"=>true, 
			"id"=>"emailConfirm", 
			"confirm"=>"email", 
			"error"=>"Les emails ne correspondent pas"
		]);

		$psw = new InputField ([
			"type"=>"password",
			"placeholder"=>"Votre mot de passe",
			"required"=>true, 
			"id"=>"pwd",
			"minlength"=>6,
			"error"=>"Le mot de passe doit contenir au moins une lettre minscule, majuscule et un nombre"
		]);

		$pswConfirm = new Field([
			"type"=>"password",
			"placeholder"=>"Confirmation", 
			"required"=>true, 
			"id"=>"pwdConfirm", 
			"confirm"=>"pwd", 
			"error"=>"Les mots de passe ne correspondent pas"
		]);

		$form = new Form($slug);
		$fields = [$firstname, $lastname, $email, $emailConfirm, $psw, $pswConfirm];
		foreach($fields as $field) {
			$form->addField($field);
		}
		return $form;
	}

	public function getLoginForm(){
		$slug = Routing::getSlug("Users", "login");
		
		$email = new InputField ([
			"type"=>"email",
			"placeholder"=>"Votre email", 
			"required"=>true, 
			"class"=>"form-control", 
			"id"=>"email",
			"error"=>"L'email n'est pas valide"
		]);

		$pwd = new InputField ([
			"type"=>"password",
			"placeholder"=>"Votre mot de passe", 
			"required"=>true, 
			"class"=>"form-control", 
			"id"=>"pwd",
			"error"=>"Veuillez préciser un mot de passe"
		]);
		
		$form = new Form($slug);
		$fields = [$email, $pwd];

		foreach ($fields as $field) {
			$form->addField($field);
		}
		return $form;
	}

	public function getForgetPasswordForm() {
		$slug = Routing::getSlug("Users", "forgetPassword");

		$email = new InputField ([
			"type"=>"email",
			"placeholder"=>"Votre email", 
			"required"=>true, 
			"class"=>"form-control", 
			"id"=>"email",
			"error"=>"L'email n'est pas valide"
		]);

		$form = new Form($slug);
		$form->addField($email);
		return $form;
	}
}




