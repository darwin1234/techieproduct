<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$mysqli = new mysqli("localhost", "root", "", "techieproduct2");
date_default_timezone_set('Etc/GMT+4');




if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$ID 					= (int)$_POST['ID'];
$productname			= $_POST['productname'];
$productCat				= $_POST['productCat'];
$Description			= $_POST['Description'];
$productprice			= $_POST['productprice'];
$ProductImage			= $_POST['ProductImage'];
$userID					= $_POST['userID'];



if ($mysqli->query("UPDATE product SET productname='". $productname ."',productCat='". $productCat ."',productprice='". $productprice ."',Description='" . $Description ."' ,userID='".$userID."' WHERE ID = $ID")) 
{
	echo "Succesfully Updated!";
	$date = date('Y-m-d h:i:s');
		$mysqli->query("INSERT INTO logs(userID,action,time) VALUES($userID, 'updated a product','". $date ."')");	

}else{
	
	echo "Server Error!";
}	
?>	