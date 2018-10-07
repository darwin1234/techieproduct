
<?php 
error_reporting(-1);
 $username 	= @$_POST['username'];
 $password 	= @$_POST['password'];
 $firstname	= @$_POST['firstname'];
 $lastname	= @$_POST['lastname'];
 $address	= @$_POST['address'];
 $ContactNo	= @$_POST['ContactNo'];
 $email	= 	  @$_POST['email'];
?>
<?php 
	session_start();
	 @$_SESSION['username'];
	 @$_SESSION['ID'];
	 @$_SESSION['usertype'];
?>
<?php require_once('connection.php'); ?>
<?php require_once('header.php'); ?>

	<header class="jumbotron my-4">
           
		   <?php 
		  
		   if(isset($_POST['register']))
		   {	
				$sql = "INSERT INTO users(username,password,usertype,firsname,lastname,address,contactno,email) VALUES('".$username."','".md5($password)."','3','".$firstname."','".$lastname."','".$address."','".$ContactNo."','".$email."')";
				mysqli_query($mysqli,$sql);
		   }else{
			  
			  if(isset($_POST['login'])){
				
				 $res = mysqli_query($mysqli, "SELECT count(id) as total, ID,username,password,usertype,HotelID FROM users WHERE username='".$username."' AND password='".md5($password)."'"); 
				 $row = mysqli_fetch_assoc($res);
				 if($row['usertype'] == 2){
					$_SESSION['username'] = $row['username'];
					$_SESSION['ID']  = $row['ID'];
					$_SESSION['usertype'] = $row['usertype'];
					$_SESSION['HotelID'] = $row['HotelID'];
					$_SESSION['token']	=	md5('abcdefghijklmnopqrstuvwxyz123456789');
				 }
				 else if($row['usertype'] == 3){
					$_SESSION['username'] = $row['username'];
					$_SESSION['ID']  = $row['ID'];
					$_SESSION['usertype'] = $row['usertype'];
					$_SESSION['token']	=	md5('abcdefghijklmnopqrstuvwxyz123456789');
				 }
				 else{
					if($row['usertype']==1){
						$_SESSION['username'] = $row['username'];
						$_SESSION['ID']  = $row['ID'];
						$_SESSION['usertype'] = $row['usertype'];
						$_SESSION['token']	=	md5('abcdefghijklmnopqrstuvwxyz123456789');
						header("location:admin.php");
					}
				 }
				
			  }
		   }
		   ?>
		   
            <div class="container">
			<div class="row" style="width:500px; margin:20 auto;">
		
			
				<div class="col-xs-12 col-sm-6 col-lg-8">
				<form action="form.php" method="POST">
				  <h4>Register for New Account</h4>
				  <span><?php echo @$result;?></span>
				  <div class="form-group">
					<label for="Username">Username</label>
					<input type="text" name="username" class="form-control" id="Username">
				  </div>
				  <div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" name="password" class="form-control" id="pwd">
				  </div>
				 <div class="form-group">
					<label for="FirstName">First Name:</label>
					<input type="text" name="firstname" class="form-control" id="pwd">
				  </div>
				   <div class="form-group">
					<label for="LastName">Last Name:</label>
					<input type="text" name="lastname" class="form-control" id="pwd">
				  </div>
				   <div class="form-group">
					<label for="Address">Address:</label>
					<input type="text" name="address" class="form-control" id="pwd">
				  </div>
				  <div class="form-group">
					<label for="ContactNo">Contact No</label>
					<input type="text" name="contactno" class="form-control" id="pwd">
				  </div>
				   <div class="form-group">
					<label for="Email">Email:</label>
					<input type="text" name="email" class="form-control" id="pwd">
				  </div>
				  <input type="submit" name="register" class="btn btn-default" value="Register">
				</form>
			</div>
			</div>
			
			</div>
        </header>
