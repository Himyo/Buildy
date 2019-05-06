<?php
namespace Controller;

use \Core\View;

class PagesController{
	
	public function defaultAction(){

		$v = new View("homepage", "back");
	}

	public function testAction() {
		$v = new View("test", "back");
	}

	public function dashboardAction() {
		$view = new View("dashboard", "back");
	}

	public function chartsAction() {
		$view = new View("charts", "back");
	}

	//VIEWS DATABASE ADMIN
	public function usersBackAction() {
		$view = new View("usersBack", "back");
	}

	public function articlesBackAction() {
		$view = new View("articlesBack", "back");
	}
    public function notFoundAction() {
	    $view = new View("notFound", "front");
    }

}