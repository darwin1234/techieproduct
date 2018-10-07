<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
<<<<<<< HEAD
$mysqli = new mysqli("localhost", "root", "", "techieproduct");
=======
$mysqli = new mysqli("localhost", "root", "", "eljohn");
>>>>>>> c642a6dae445a93079c13fbfa28046c1c26f0734


if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/*
if ($mysqli->query("UPDATE products SET ProductName='". $_POST['ProductName'] ."',ProductCategory='"$_POST['ProductCategory']"',ProductPrice='"$_POST['ProductPrice']"',ProductDescription='"$_POST['ProductDescription']"',WHERE productID=" .(int)$_POST['productID'])) 
{
	echo "Succesfully Updated!";
}
*/
$ProductName = $_POST['ProductName'];
$ProductCategory = $_POST['ProductCategory'];
$ProductPrice = $_POST['ProductPrice'];
$ProductDescription = $_POST['ProductDescription'];

if ($mysqli->query("UPDATE products SET ProductName={$ProductName},ProductCategory={$ProductCategory},ProductPrice={$ProductPrice},ProductDescription={$ProductDescription} WHERE productID = {$_POST['productID']}")) 
{
	echo "Succesfully Updated!";
}		
?>	