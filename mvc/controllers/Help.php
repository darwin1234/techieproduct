<?php

class Help extends EDJController {
	
	public function __construct(){
		parent::__construct();
		echo "HELP! <br>";
	}
	
	public function information($ID = false){
		
		echo "information <br>" . $ID;
		//new help_model;
	}
	
}