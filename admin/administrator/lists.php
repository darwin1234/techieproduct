<?php 
include_once("../includes/Crud.php");
$crud = new Crud();		
$query = "SELECT * FROM users WHERE usertype='2'";
$result = $crud->getData($query);
echo json_encode($result); 
die();
?>
		