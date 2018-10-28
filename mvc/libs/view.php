<?php 

class View{
	
	function __construct(){

	}
	
	public function render($view_name){
		
		require "views/" . $view_name . ".php";
	}
}