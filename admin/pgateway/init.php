<?php 

include_once("includes/Crud.php");


require 'PayPal/vendor/autoload.php';
require __DIR__.'/pmethod/paypal.php';
require __DIR__.'/pmethod/cenpos.php';
class dsPaymentGateway{
	
	private $pmethod;
	
	function pmt($pgateway){
		
		if($pgateway == 1){
			
			$dsclientid = 'AWKVBe7s71s0hsiU3TEeQbEbeS657DVayhP_ub1zTiR11fP7TKwJhnWSXUThDEbWcM0roY6JrqAWHOAT';
			$dsclientsecret	= 'EDx4G_-IvjdL5bSvqPYhZTNkDo0X00DVi4lIQ-_COZ5S30A8zF241jKtoSPndjfGeSoENiS7dG3j5qic';
			
			$this->pmethod = new \PayPal\Rest\ApiContext(
				new \PayPal\Auth\OAuthTokenCredential(
				$dsclientid,
				$dsclientsecret
				)
			);
		}
		
		return $this->pmethod;

	}
	
	function dsSubmit(){
		//global $wpdb;
				$crud = new Crud();	
		if (isset($_POST['bookbow'])) {
			
				// firstname
				$firstname = test_input($_POST["firstname"]);
				if(empty($firstname)) {$firstnameErr = "firstname is required";}
				if(!preg_match("/^[a-zA-Z ]*$/",$firstname)){$firstnameErr = "Only letters and white space allowed";}
				
				// lastname
				$lastname = test_input($_POST["lastname"]);
				if(empty($lastname)) {$lastnameErr = "lastname is required";}
				if(!preg_match("/^[a-zA-Z ]*$/",$lastname)){$lastnameErr = "Only letters and white space allowed"; }
				
				//email
				$email = $_POST["email"];
				if(empty($email)) {$emailErr = "Email is required";} 
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {$emailErr = "Invalid email format";}
				
				//noofperson
				$noofperson = test_input($_POST["noofperson"]);
				if(empty($noofperson)){$noofpersonErr = "Number of person is required";}
				if(!preg_match("/^[0-9]+$/",$noofperson)) {$noofpersonErr = "Invalid Number format"; }
				
				
				//contactnumber
				$contactno = test_input($_POST["contactno"]);
				if(empty($contactno)){$contactno = "Number of person is required";}
				if(!preg_match("/^[0-9]+$/",$contactno)) {$contactnoErr = "Invalid Number format"; }
				// chekin
				$checkin = $_POST["checkin"];
				$checkin = date("Y-m-d", strtotime($checkin));
				if(empty($checkin)){$checkinErr = "Date is required";}
				else if(!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$checkin)) {$checkinErr = "Invalid Date format";}
				else if(strtotime($checkin) < strtotime(date('Y-m-d'))){$checkinErr="Date must not be previous day";}
				//checkout
				$checkout = $_POST["checkout"];
				$checkout = date("Y-m-d", strtotime($checkout));
				if(empty($checkout)){$checkoutErr = "Date is required";}
				else if(!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$checkout)) {$checkoutErr = "Invalid Date format";}
				else if(strtotime($checkout) < strtotime(date('Y-m-d'))){$checkoutErr="Date must not be previous day";}
				
				
				$pmethod = test_input($_POST["pmethod"]);
				if(empty($pmethod)){$pmethodErr = "Number of person is required";}
				if(!preg_match("/^[0-9]+$/",$pmethod)) {$pmethodErr = "Invalid Number format"; }
				
				$price = $_SESSION['Price'];
				$roomtype = $_SESSION['RoomType'];
				if(isset($_SESSION['CustomerID'])){
				$CustomerID = $_SESSION['CustomerID'];
				$crud->execute("INSERT INTO bookings (firstname, lastname, email, noofperson,checkin, checkout, contactno,roomtype,price,CustomerID) VALUES('$firstname','$lastname','$email','$noofperson','$checkin','$checkout','$contactno','$roomtype','$price','$CustomerID')");
				}
				else{
				$crud->execute("INSERT INTO bookings (firstname, lastname, email, noofperson,checkin, checkout, contactno,roomtype,price) VALUES('$firstname','$lastname','$email','$noofperson','$checkin','$checkout','$contactno','$roomtype','$price')");
				}
				$lasID = $crud->getLastID();
				$_SESSION['lastID']=$lasID;		
				
				if($pmethod == 1){
						$t = new dsPaypal();
						$t->PaypalExecute($this->pmt($pmethod));
						$t->paypalparams($_SESSION['tourtitle'],50 ,$shipping,$Alltotal);
				}
					
				if($pmethod == 2){
					$_SESSION['pm']=  2;
					header("location:success.php/?paid=false");	
				}		
						
						
						
				
					
					
				}
			
		
		}
			
		
	}
	
	


