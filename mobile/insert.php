<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$mysqli = new mysqli("localhost", "root", "", "eljohn");


if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$ProductName			= @$_POST['ProductName'];
$ProductCategory		= @$_POST['ProductCategory'];
$ProductDescription		= @@$_POST['ProductDescription'];
$ProductPrice			= @$_POST['ProductPrice'];
$ProductImage			= @$_POST['ProductImage'];

if(!empty($ProductName) && !empty($ProductCategory) && !empty($ProductDescription) && !empty($ProductPrice) && !empty($ProductImage))
if ($result = $mysqli->query("INSERT INTO products(ProductID,ProductName,ProductCategory,ProductDescription,ProductPrice,ProductImage) VALUES('',$ProductName,$ProductCategory,$ProductDescription,$ProductPrice,$ProductImage)")) {

	echo "Successfully Inserted!";
	
	
}


$mysqli->close();