<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$mysqli = new mysqli("localhost", "root", "", "techieproduct2");
date_default_timezone_set('Etc/GMT+4');

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$userID = $_POST['userID'];
$ID = (int)$_POST['ID'];
$mysqli->query("DELETE FROM product WHERE ID =$ID");
$date = date('Y-m-d h:i:s');
		$mysqli->query("INSERT INTO logs(userID,action,time) VALUES($userID, 'deleted a product','". $date ."')");	


