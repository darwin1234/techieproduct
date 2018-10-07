<?php
session_start();
$username = $_SESSION['username'];		 
$ID = $_SESSION['ID'];
$usertype = $_SESSION['usertype']; 
$Firstname = $_SESSION['Firstname'];
$Lastname = $_SESSION['Lastname'];
$Email = $_SESSION['Email'];
$Contact = $_SESSION['Contact'];
$Address = $_SESSION['Address'];
if(empty($ID)){
	header("location:../index.php");
}				
				?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newest</title>
	<!--Links for design and javascripts-->
	<link rel="stylesheet" href="../template/style.css">
    <link rel="stylesheet" href="../css/Hadouken/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/Hadouken/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../css/Hadouken/css/styles.css">
    <link rel="stylesheet" href="../css/Hadouken/css/Google-Style-Login.css">
    <link rel="stylesheet" href="../css/Hadouken/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="../css/Hadouken/css/Bootstrap-Payment-Form.css">
    <link rel="stylesheet" href="../css/Hadouken/css/untitled.css">
    <link rel="stylesheet" href="../css/Hadouken/css/untitled-1.css">
    <link rel="stylesheet" href="../css/Hadouken/css/untitled-2.css">
    <link rel="stylesheet" href="../css/Hadouken/css/Hero-Technology.css">
</head>

 <!--Start of Body--> 
<body>
   <!--Navigation Bar--> 
    <nav class="navbar navbar-default" id="navhome">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="../index.php"> <img class="img-responsive" src="../images/grabhotel.png" id="logofooter2" style="margin-top:-10px;"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
				
				<!--dropdown for Profile--> 
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">PROFILE </a>
                 <!--content of Profile dropdown-->
				 <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li role="presentation"><a href="index.php">Check Profile</a></li>
                            <li role="presentation"><a href="Bookingsection.php">Booking Section</a></li>
							 
                            <li role="presentation"><a href="../logout.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>