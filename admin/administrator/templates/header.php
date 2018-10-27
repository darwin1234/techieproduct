<?php require_once("../utils/utilities.php");?>
<?php 

$baseurl = "http://localhost/techieproduct2";
?>
<?php 
session_start();
if($_SESSION['token'] == md5('abcdefghijklmnopqrstuvwxyz123456789')){ 
$_SESSION['username'];
$_SESSION['ID'];		
}
if(empty($_SESSION['ID'])){
	header("location:../index.php");
}	
include_once("../includes/Crud.php");
$crud = new Crud();		
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techie Product</title>
	<link rel="stylesheet" href="templates/header.css">
	<link rel="stylesheet" href="templates/form.css">
	
	
	

	<script>
		function logout(){
			
		
			var r = confirm("Do you want to logout?");
			if (r == true) {
				window.location ="../logout.php";
			} else {
				
			}			
						
		}
	</script>
</head>

<body>
  <header><!-- This is the start of the navigation bar for users who visits the website-->
         <div  style="background:#8b9dc3; overflow:auto;">		
           
              <h2><a href="index.php"><img src="../images/logo.jpg" href="index.php" style="width:180px; margin-top:12px; margin-left:5px;"></a></h2>
                  
					<ul class="navright">
					
					<li> <a  href="index.php">Supplier List</a></li>
					<li> <a href="addsupplier.php" >Add Supplier</a></li>
					<li> <a href="javascript:void();" onclick="logout()">Logout</a></li>
					</ul>
            </div>
  </header>