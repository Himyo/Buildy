<?php
namespace Core;

use \Lib\Supplier;
class View{

    use Supplier;
	public $v;
	public $t;
	public $data = [];

	public function __construct($v, $t="back"){
		$this->setView($v);
		$this->setTemplate($t);
	}

	public function setView($v){
		$viewPath = "views/".$v.".view.php";
		if( file_exists($viewPath)){
			$this->v=$viewPath;
		}else{
			die("Attention le fichier view n'existe pas ".$viewPath);
		}
	}

	public function setTemplate($t){
		$templatePath = "views/templates/".$t.".tpl.php";
		if( file_exists($templatePath)){
			$this->t=$templatePath;
		}else{
			die("Attention le fichier template n'existe pas ".$templatePath);
		}

	}


	//$modal = form //"views/modals/form.mod.php"
	//$config = [ ..... ]
	public function addComponent($component, $config){
		//form.mod.php
		$componentPath = "views/components/".$component.".comp.php";
		if( file_exists($componentPath)){
			include $componentPath;
		}else{
			die("Attention le fichier component n'existe pas ".$componentPath);
		}
	}

	public function assign($key, $value){
		$this->data[$key]=$value;
	}


	public function __destruct(){
		extract($this->data);
		include $this->t;
	}
}



