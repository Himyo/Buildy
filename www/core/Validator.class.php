<?php

class Validator{

	public $errors = [];
	
	public function __construct( $fields, $data ){

		if(count($data) != count($fields)){
			die("Tentative : faille XSS");
		}
			
		foreach ($fields as $name => $field) {
			$fieldInfo = $field->extract();
			//Isset
			if( !isset($data[$name])){
				die("Tentative : faille XSS");
			} 
			else {
				//!empty if required - method
				if( ($fieldInfo["required"]??false) && !self::notEmpty( $data[$name] ) ){
					$this->errors[]=$field["error"];
				}
				//minlength  - method
				if(isset($fieldInfo["minlength"]) && !self::minLength($data[$name], $info["minlength"])){
					$this->errors[]=$field["error"];
				}
				//maxlength - method
				if(isset($fieldInfo["maxlength"]) && !self::maxLength($data[$name], $info["maxlength"])){
					$this->errors[]=$field["error"];
				}
				//email - method
				if($fieldInfo["type"]=="email" && !self::checkEmail($data[$name])){
					$this->errors[]=$field["error"];
				}
				//confirm 
				//TODO: Do the field check in AJAX
				if(isset($fieldInfo["confirm"]) && $data[$name] != $data[$info["confirm"]]){
					$this->errors[]=$field["error"];
				}
				//password : maj min et chiffres - method
				else if($fieldInfo["type"]=="password" && !self::checkPassword($data[$name])){
					$this->errors[]=$fieldInfo["error"];
				}
			}
		}
	}
	public static function notEmpty($string){
		return !empty(trim($string));
	} 
	public static function minLength($string, $length){
		return strlen(trim($string))>=$length;
	} 
	public static function maxLength($string, $length){
		return strlen(trim($string))<=$length;
	}
	public static function checkEmail($string){
		return filter_var(trim($string), FILTER_VALIDATE_EMAIL);
	}
	public static function checkPassword($string){
		return (
					preg_match("#[a-z]#", $string) && 
					preg_match("#[A-Z]#", $string) && 
					preg_match("#[0-9]#", $string));
	}
	public function isValid() {
		return count($this->errors) === 0;
	}
	public function getError() {
		return $this->errors;
	}
}


