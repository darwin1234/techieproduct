<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$mysqli = new mysqli("localhost", "root", "", "techieproduct2");
date_default_timezone_set('UTC');


if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$ID=$_POST['ID'];
$html = "";
if ($result = $mysqli->query("SELECT * FROM product WHERE ID=$ID")) {
	$row = $result->fetch_assoc();
	echo json_encode($row);
}	
?>
	
	