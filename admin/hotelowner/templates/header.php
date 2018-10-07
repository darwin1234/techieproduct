<?php 

session_start(); 
$_SESSION['username'];
$_SESSION['ID'] ;
$_SESSION['usertype'];
$hotelID =$_SESSION['HotelID'];
$_SESSION['token'];
$_SESSION['Firstname'];
$_SESSION['Lastname'];
$_SESSION['Email'];
$_SESSION['Contact'];
$_SESSION['Address'];
$hotelname = $_SESSION['HotelName'];
include_once("../includes/Crud.php");
$crud = new Crud();

if(empty($_SESSION['ID'])){
	header("location:../index.php");
}	
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grab Hotel</title>
	<link rel="stylesheet" href="../template/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/Hadouken/css/styles.css">
    <link rel="stylesheet" href="../css/Hadouken/css/untitled.css">
	<link rel="stylesheet" href="../css/Hadouken/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/Hadouken/fonts/font-awesome.min.css">
	<link rel="apple-touch-icon" sizes="57x57" href="../images/fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../images/fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../images/fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../images/fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../images/fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../images/fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../images/fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../images/fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../images/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../images/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../images/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../images/fav/favicon-16x16.png">
	<script>
	function deleteImage(){
		var hotelImage = document.getElementById("hotelImage");
		hotelImage.innerHTML = '<input type="file" name="HotelLogo" id="HotelLogo">';
		
	}
	</script>
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
<nav>	<!-- This is the start of the navigation bar for users who visits the website-->
        <div class="container-fluid">		
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="index.php"> <img class="img-responsive" src="../images/grabhotel.png" id="logofooter2" style="margin-top:-10px;"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
               
                <ul class="nav navbar-nav navbar-right">
                    
					<li> <a href="javascript:void();" onclick="logout()">Logout</a></li>
                </ul>
            </div>
        </div>
  </nav>
  <img src="../images.php?ID=<?php echo $hotelID;?>" width="150px" id="ownerlogo">
   <h1 class="text-center text-muted bg-primary"><?php echo $hotelname;?></h1>
    <center>
      <a href="index.php">  <button class="btn btn-success"  type="button">MANAGE ROOMS</button></a>
	   <a href="addroom.php">  <button class="btn btn-success"  type="button">ADD ROOM</button></a>
      <a href="Aboutus.php">  <button class="btn btn-success" type="button">MANAGE INFO</button><a/>
      <a href="ManageOwnerStaff.php"> <button class="btn btn-success" type="button">MANAGE STAFF</button></a>
	  <a href="Clients.php">  <button class="btn btn-success"  type="button">VIEW CLIENTS</button></a>
    </center> 
	<br>