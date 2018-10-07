<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Grab Hotel</title>
    <link rel="stylesheet" href="template/style.css">
	<link rel="apple-touch-icon" sizes="57x57" href="images/fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/fav/favicon-16x16.png">
	<link rel="apple-touch-icon" sizes="57x57" href="images/fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/fav/favicon-16x16.png">
	
	</head>
  </head>

<body>
<?php 
session_start();

require_once('connection.php');
if(isset($_POST['login'])){
		
		$username = strip_tags($_POST['username']);
		$password = strip_tags($_POST['password']);
		$res = mysqli_query($mysqli, "SELECT count(id) as total, ID,username,password,usertype, picture, HotelID,firstname,lastname,contactno,email,address ,HotelName FROM users WHERE username='".$username."' AND password='".md5($password)."'"); 
		$row = mysqli_fetch_assoc($res);
		if($row['usertype']==1){
				$_SESSION['username']			 	= $row['username'];
				$_SESSION['ID'] 				 	= $row['ID'];
				$_SESSION['usertype'] 				= $row['usertype'];
				$_SESSION['HotelID'] 				= $row['HotelID'];
				$_SESSION['token']					=	md5('abcdefghijklmnopqrstuvwxyz123456789');
				$_SESSION['Firstname']				= $row['firstname'];
				$_SESSION['Lastname']				= $row['lastname'];
				$_SESSION['Email']					= $row['email'];
				$_SESSION['Contact']				= $row['contactno'];
				$_SESSION['Address']				= $row['address'];
				//header("location:admin.php");
				header("location:administrator/index.php");
		}

		if($row['usertype']==2){
				$_SESSION['username']			 	= $row['username'];
				$_SESSION['ID'] 				 	= $row['ID'];
				$_SESSION['usertype'] 				= $row['usertype'];
				$_SESSION['HotelID'] 				= $row['HotelID'];
				$_SESSION['token']					= md5('abcdefghijklmnopqrstuvwxyz123456789');
				$_SESSION['Firstname']				= $row['firstname'];
				$_SESSION['Lastname']				= $row['lastname'];
				$_SESSION['Email']					= $row['email'];
				$_SESSION['Contact']				= $row['contactno'];
				$_SESSION['Address']				= $row['address'];
				$_SESSION['HotelName']				= $row['HotelName'];
				//header("location:admin.php");
				//header("location: hotelowner/HotelIndex.php");
				header("location: hotelowner/index.php");
		}
		if($row['usertype']==3){
				$_SESSION['username']			 	= $row['username'];
				$_SESSION['ID'] 				 	= $row['ID'];
				$_SESSION['usertype'] 				= $row['usertype'];
				$_SESSION['HotelID'] 				= $row['HotelID'];
				$_SESSION['token']					= md5('abcdefghijklmnopqrstuvwxyz123456789');
				$_SESSION['Firstname']				= $row['firstname'];
				$_SESSION['Lastname']				= $row['lastname'];
				$_SESSION['Email']					= $row['email'];
				$_SESSION['Contact']				= $row['contactno'];
				$_SESSION['Address']				= $row['address'];
				$_SESSION['CustomerID'] 			= $row['ID'];
				$_SESSION['Picture']				= $row['picture']; //sizeof($row['picture']) > 0 ?   : '';
				echo  $row['picture'];
				//header("location:admin.php");
				//header("location:profile/index.php");
		}
				
				
}
?>
<?php if(!isset($_SESSION['username']) && !isset($_SESSION['ID'] )){ ?>
<div class="container">
	<div class="login" style="width:500px; margin:100px auto;  border-radius:20px">
				<a href="index.php"><img src="images/grabhotel.png" style="width:250px; margin:10px auto; display:block; "></a>
				<form action="Login.php" method="POST" style="padding:19%">
				  <div class="form-group">
					<label for="email">Username:</label>
					<input type="text" name="username" placeholder="Email address" required="" class="form-control" id="email">
				  </div>
				  <div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" name="password" placeholder="Password" required="" class="form-control" id="pwd">
				  </div><br>
				  
				  <input type="submit" name="login" class="buttonlogin"  value="Login"><br><br>
				   <a href="register.php" class="button">Register</a>
				   <a href="forgotpassword.php" class="button" >Forgot Password</a>
				</form>
			
				
	</div>
<?php } else{
	if($_SESSION['usertype']  == 1){
	header("location:administrator/index.php");
	}
	
	if($_SESSION['usertype']  == 2){
	header("location:hotelowner/index.php");
	}
	
}?>	
</div> 
</body>
</html>
