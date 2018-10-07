<?php require_once('connection.php'); ?>
	
	
<?php
if($_POST['changeStatus'] == 1){ 
	$productIDt = $_POST['productIDt'];
	$customerID = $_POST['customerID'];
	mysqli_query($mysqli, "UPDATE ordered SET status = 1 WHERE ID ='".$productIDt."'");
	header("location:purchases.php?id=$customerID");
}
if($_POST['changeStatus'] == 0){ 
	$productIDt = $_POST['productIDt'];
	$customerID = $_POST['customerID'];
	mysqli_query($mysqli, "UPDATE ordered SET status = 0 WHERE ID ='".$productIDt."'"); 
	header("location:purchases.php?id=$customerID");
}

?>

