<?php

class Login extends EDJController{
	
	function __construct(){
		parent::__construct();
		//echo "Login!";
		$this->view->render('Login/login');
	}
	
}