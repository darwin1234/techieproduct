<?php require_once('template/header.php'); ?>
<?php 
	include_once("includes/Crud.php");  
	$crud = new Crud();
?>
<div class="container">
<div style="width:100%; height:50px;">

</div>
<div class="row">
<?php
	
	if(isset($_POST['register'])){
	
		
		
		//check username if exist
		$username 		= test_input($_POST['username']); 
		$usernamecheck = "SELECT username FROM users WHERE username = '" . $username . "'";
		$usernamecheck = $crud->getData($usernamecheck);
		if(count($usernamecheck) == 1){
			$usernameErr ="username is already Exist";
		}else{
			if(empty($username)) {$usernameErr = "username is required";}
		}
		
		$email = $_POST["email"];
		//check email if exist
		$emailcheck = "SELECT email FROM users WHERE email = '" . $email . "'";
		$emailcheck = $crud->getData($emailcheck);
		if(count($emailcheck) == 1){
			$emailErr ="username is already Exist";
			
		}else{
			$email = $_POST["email"];
			if(empty($email)) {$emailErr = "Email is required";} 
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {$emailErr = "Invalid email format";}
		}
		
	
		
		$password		= md5(test_input($_POST['password']));
		if(empty($password)) {$passwordErr = "password is required";}
		$address		= test_input($_POST['address']);
		if(empty($address)) {$addressErr = "address is required";}
		
		
		// firstname
		$firstname = test_input($_POST["firstname"]);
		if(empty($firstname)) {$firstnameErr = "firstname is required";}
		if(!preg_match("/^[a-zA-Z ]*$/",$firstname)){$firstnameErr = "Only letters and white space allowed";}
				
		// lastname
		$lastname = test_input($_POST["lastname"]);
		if(empty($lastname)) {$lastnameErr = "lastname is required";}
		if(!preg_match("/^[a-zA-Z ]*$/",$lastname)){$lastnameErr = "Only letters and white space allowed"; }
				
		
				
		//contactnumber
		$contactno = test_input($_POST["contactno"]);
		if(empty($contactnumber)){$contactnoErr = "Number of person is required";}
		if(!preg_match("/^[0-9]+$/",$contactno)) {$contactnoErr = "Invalid Number format"; }
		if(@$firstnameErr==""  && @$lastnameErr == "" &&  @$emailErr ==""){
			 $result = $crud->execute("INSERT INTO `users` (`ID`, `username`, `password`, `usertype`, `firstname`, `lastname`, `address`, `contactno`, `email`) VALUES ('', '" . $username . "', '". $password ."' , 3, '". $firstname."', '". $lastname ."', '" . $address ."', '" . $contactno . "', '". $email ."')");
		}
	
		
	}
	
?>


<form class="form-horizontal" method="POST" action="register.php">
  <div class="form-group">
   
    <div class="col-sm-6">
	 <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
	  <small class="form-text text-muted" style="color:red!important; display:block;"><?php echo @$usernameErr; ?></small>
    </div>
	
	 <div class="col-sm-6">
        <label  for="pwd">Password:</label>
		<input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
		<small class="form-text text-muted" style="color:red!important; display:block;"><?php echo @$passwordErr; ?></small>
    </div>
  </div>

  <div class="form-group">
   
    <div class="col-sm-6"> 
	 <label for="firstname">Firstname:</label>
      <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter firstname">
	  <small class="form-text text-muted" style="color:red!important; display:block;"><?php echo @$firstnameErr; ?></small>
    </div>
	
	<div class="col-sm-6"> 
	 <label for="lastname">Lastname:</label>
     <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter lastname">
	 <small class="form-text text-muted" style="color:red!important; display:block;"><?php echo @$lastnameErr; ?></small>
    </div>
	<br>
	<br>
	<br>
	<br>
	<div class="col-sm-6"> 
	 <label for="address">Address:</label>
       <input type="text" class="form-control" name="address" id="" placeholder="Enter address">
	   <small class="form-text text-muted" style="color:red!important; display:block;"><?php echo @$addressErr; ?></small>
    </div>
	<div class="col-sm-6"> 
	   <label  for="contactno">ContactNo:</label>
        <input type="text" class="form-control" name="contactno"  placeholder="Enter Contact No">
		<small class="form-text text-muted" style="color:red!important; display:block;"><?php echo @$contactnoErr; ?></small>
    </div>
  </div>

 
  <div class="form-group">

    <div class="col-sm-12"> 
	    <label for="email">Email Address:</label>
		<input type="text" class="form-control" name="email" placeholder="Enter Email Address">
	  	<small class="form-text text-muted" style="color:red!important; display:block;"><?php echo @$emailErr; ?></small>
    </div>
  </div>
  <div class="form-group"> 
		<div class="col-sm-12"> 
			<button type="submit" name="register" class="button">Submit</button>
		</div>
  </div>
</form>
</div>
</div>
<?php require_once('template/footer.php'); ?>