<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$mysqli = new mysqli("localhost", "root", "", "techieproduct");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$productID = $_POST['productID'];
$mysqli->query("DELETE FROM products WHERE productID =$productID");
/*

if(isset($_POST['action']) && $_POST['action'] == 'delete'){
	if (isset($_POST['productID'])) {
	
	}
	
}


$mysqli->close();*/