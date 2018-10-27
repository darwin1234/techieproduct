<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$mysqli = new mysqli("localhost", "root", "", "techieproduct2");
date_default_timezone_set('Etc/GMT+4');


if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$productname			= @$_POST['productname'];
$productCat				= @$_POST['productCat'];
$Description			= @$_POST['Description'];
$productprice			= @$_POST['productprice'];
$ProductImage			= @$_POST['ProductImage'];
$userID					= @$_POST['userID'];

if(!empty($productname) && !empty($productCat) && !empty($Description) && !empty($productprice) && !empty($ProductImage)){
	if ($result = $mysqli->query("INSERT INTO product(ID,userID,productname,productCat,Description,productprice,ProductImage) VALUES('',$userID,$productname,$productCat,$Description,$productprice,$ProductImage)")) {

		echo "Successfully Added!";
		$date = date('Y-m-d h:i:s');
		$mysqli->query("INSERT INTO logs(userID,action,time) VALUES($userID, 'added a product','". $date ."')");	

		
		
	}
}

$mysqli->close();