<?php
namespace MVC\Lib;

class Validator{

    public $errors = [];
    private static $errorlist =
        [
            "MISSING_REQUIRED"=> "missreq",
            "NOT_UNIQUE"=> "nunique",
            "UNDER_MINLENGTH"=> "umin",
            "OVER_MAXLENGTH"=> "omax",
            "INVALID_VALUE"=> "invval",
            "DIFFERENT_VALUE"=> "diffval",
            "INVALID_EMAIL"=> "invemail",
            "UNSAFE_PASSWORD"=> "unsecpwd"

        ];

	public function __construct(){}

    public static function getErrorList() {
	    return self::$errorlist;
    }
	public function validate(Array $fields, Array $data)
    {
        if($this->errors != []) { $this->errors = [];}
        if (count($data) != count($fields)) {
            die("Tentative : faille XSS");
        }

        foreach ($fields as $field => $rules) {
            if (!isset($data[$field])) {
                die("Tentative de faille XSS");
            }
            foreach ($rules as $func => $param) {
                //if no parameters is given, since it's a array php is going to index the function as such
                // [0 => 'function', 'function1' => 'parameters', 1 => 'function2']
                //So we use appropriate array element
                if (is_numeric($func)) {
                    //see Variable Reflection
                    $valid = $this->$param($data[$field]);
                }
                else {
                    //see Variable Reflection
                    $valid = $this->$func($data[$field], $param);
                }

                if(!$valid && !(in_array($field, $this->errors))) {
                    array_push($this->errors, $field);
                }
            }
        }
    }

	public function required($string){
		return !empty(trim($string));
	}

	public function minlength($string, $length){
		return !(strlen(trim($string)) < $length);
	}
	public function maxlength($string, $length){
		return !(strlen(trim($string)) > $length);
	}

	public function checkEmail($string){
		return filter_var(trim($string), FILTER_VALIDATE_EMAIL);
	}

	public function unique($needle, array $stack) {
	    return !(isset($stack[$needle]));
    }

	public function matching($string, $match) {
	    return ($string == $match);
    }

	public function checkPassword($string){
		$securePassword = (
					preg_match("#[a-z]#", $string) && 
					preg_match("#[A-Z]#", $string) && 
					preg_match("#[0-9]#", $string)
        );
		return $securePassword;
	}

	public function fixedValue($needle, array $stack) {
	    return (!in_array($needle, $stack));
    }

    public function isValid() {
        return count($this->errors) === 0;
    }

    public function getErrors() {
	    if(!$this->errors) {
	        return "";
        }
	    $res = "";
	   foreach($this->errors as $field) {
           $res .= "&errors[]={$field}";
       }
	   $res = trim($res, "&");
	   return "?{$res}";
    }
}


