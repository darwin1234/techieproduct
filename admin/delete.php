<?php 
$conn = new mysqli('localhost', 'root', '', 'eljohn2');
if ($conn->connect_error){
	die('error');
}

$res = "CALL `deleteproduct`('".$_GET['ID']."')";

if($conn->query($res)==false){
	
	var_dump($res);
	
}
header('location:index.php');
?>
