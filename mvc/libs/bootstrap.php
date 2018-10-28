<?php


class Bootstrap{
	
	function __construct(){
		
		if(isset($_GET['url']))
		{
			$url = $_GET['url'];
			$url = rtrim($url,'/');
			$url =  explode('/',$url);
			//print_r($url);
			
			$file = "controllers/" . $url[0] .".php";
			
			
			if(file_exists($file)){
				require $file;
			}else
			{
				
				echo "Page Not found!";
				return false;
			}
		
			
			
			$controller = new $url[0];
		
			if(isset($url[2])){
				$controller -> {$url[1]}($url[2]);
			}else
			{	
				if(isset($url[1])){$controller -> {$url[1]}();}
			}
			
		}else{
			require "controllers/index.php";
			$controller = new Index;
		}
		
	}
	
	
}



