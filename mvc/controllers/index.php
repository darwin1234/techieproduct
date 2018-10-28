<?php 


class Index extends EDJController {
	
	public function __construct(){
		parent::__construct();
		$this->view->render('Index/index');
		
	}
	
	
}