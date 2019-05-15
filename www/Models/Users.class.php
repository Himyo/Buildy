<?php
namespace MVC\Models;

 use MVC\Core\BaseSQL;
 use MVC\Core\Routing;
 use MVC\Lib\Form;
 use MVC\Lib\Field;
 use MVC\Lib\InputField;
 use MVC\Lib\Supplier;

class Users {

    use Supplier;
	public $id = null;
	public $firstname;
	public $lastname;
	public $email;
	public $password;
	public $role=1;
	public $status=0;
	public $token = "-1";
	private $pdo;

	public function __construct(BaseSQL $pdo){
	    $this->pdo = $pdo;
	}


	public function setFirstname($firstname){
		$this->firstname = ucwords(strtolower(trim($firstname)));
	}
	public function setLastname($lastname){
		$this->lastname = strtoupper(trim($lastname));
	}
	public function getFirstname() {
	    return $this->firstname;
    }
    public function getLastname() {
	    return $this->lastname;
    }
	public function setEmail($email){
		$this->email = strtolower(trim($email));
	}
	public function setPassword($password){
		$this->password = password_hash($password, PASSWORD_DEFAULT);
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
	public function setId($id)
    {
		$this->setId($id);
    }


    public function getRegisterForm(){
		$slug = Routing::getSlug("Users", "save");

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
			"id"=>"password",
			"minlength"=>6,
			"error"=>"Le mot de passe doit contenir au moins une lettre minscule, majuscule et un nombre"
		]);

		$pswConfirm = new Field([
			"type"=>"password",
			"placeholder"=>"Confirmation", 
			"required"=>true, 
			"id"=>"passwordConfirm",
			"confirm"=>"password",
			"error"=>"Les mots de passe ne correspondent pas"
		]);

		$form = new Form($slug);
//		$fields = [$firstname, $lastname, $email, $emailConfirm, $psw, $pswConfirm];
        $fields = [$firstname, $lastname, $email, $emailConfirm, $psw];
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

		$password = new InputField ([
			"type"=>"password",
			"placeholder"=>"Votre mot de passe", 
			"required"=>true, 
			"class"=>"form-control", 
			"id"=>"password",
			"error"=>"Veuillez préciser un mot de passe"
		]);
		
		$form = new Form($slug);
		$fields = [$email, $password];

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




