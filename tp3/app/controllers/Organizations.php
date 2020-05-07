<?php
namespace controllers;
 /**
 * Controller Organizations
 **/
class Organizations extends ControllerBase{

	public function index(){
		$this->loadView("Organizations/index.html");
	}

	/**
	 *@route("Organizations","methods"=>["get"])
	**/
	public function tp3(){
		
	}

}
