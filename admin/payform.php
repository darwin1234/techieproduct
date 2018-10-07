<?php require_once('template/header.php');?>
<?php @session_start();?>
<?php 

$selectroomradioID = $_POST['selectroomradio'];
//echo $selectroomradioID ;
	include_once("/includes/Crud.php");  
	$crud = new Crud();
	$query = "SELECT * FROM rooms WHERE ID = $selectroomradioID";
	$roomData = $crud->getData($query);
// SELECT * FROM rooms where ID=  $selectroomradioID;
?>

<div style="float:left; padding:30px; background:transparent;  padding-left:5%; padding-right:5%; margin-bottom:40px; width:100%; margin:50px auto;">

	<div id="mainForm">
	<?php
	
	$_SESSION['Price']= $roomData[0]['Price'];
	$_SESSION['RoomType']=$roomData[0]['RoomType'];
	$_SESSION['HotelID']=$_POST['HotelID'];
	?>
	<form method="post" action="pay.php" style="padding:10px;">
		
		  	<div style="float:left; width:500px;  padding:20px;" class="wrapper">
					<div style="margin-bottom:20px;">
						  <span for="firstname">First Name: </span>
						  <input type="text"  name="firstname" value="<?php echo @$_SESSION['Firstname'] ?>"  style="float:right; width:300px;" />
					</div><br>
					
					 <div style="margin-bottom:20px;">
						  <span for="lastname">Last Name: </span>
						  <input type="text"  name="lastname"  value="<?php echo @$_SESSION['Lastname'] ?>"  style=" float:right;width:300px;" />
					</div><br>
					
					<div style="margin-bottom:20px;">
						<span for="exampleInputEmail1">Email address:</span>
						<input type="email" name="email"  value="<?php echo @$_SESSION['Email'] ?>" style=" float:right;width:300px;" >
					</div><br>
					
					<div style="margin-bottom:20px;">
					  <span for="contactno">Contact No:</span>
					  <input type="text" name="contactno"  value="<?php echo @$_SESSION['Contact'] ?>" id="noofperson"  style="float:right; width:300px;" >
					
					</div><br>
					<div style="margin-bottom:20px;">
						<span for="noofperson">Number of Person: </span>
						<input type="text" name="noofperson"  id="noofperson"  style="float:right; width:300px;" >
						<small class="form-text text-muted" style="color:red!important; display:block;"><?php echo @$noofadultsErr;?></small>
					</div><br>
	<div>
	ROOM TYPE:&nbsp<?php echo $roomData[0]['RoomType'];?><br>
	ROOM NUMBER:&nbsp<?php echo $roomData[0]['RoomNo'];?><br>
	ROOM PRICE:&nbsp<?php echo $roomData[0]['Price'];?><br>
	ROOM DESCRIPTION:&nbsp<?php echo $roomData[0]['Description'];?>
	<br>
	</div>
		</div>
		
		<div style="float:right; width:55%;" class="wrapper" style="width:50%; clear:both;">
		
		<div style="margin-bottom:20px;">
			<span for="Name">Checkin:</span>
			<input type="date" class="blueform-control" name="checkin" placeholder="TourDate">
			<small class="form-text text-muted" style="color:red!important; display:block;"><?php echo @$field4Err;?></small>		
		</div>
		<div style="margin-bottom:20px;">
			<span for="Name">Checkout:</span>
			<input type="date" class="blueform-control" name="checkout" placeholder="TourDate">
			<small class="form-text text-muted" style="color:red!important; display:block;"><?php echo @$field4Err;?></small>		
		</div>
		
		<div style="width:100%; clear:both;">
			  <ul style="padding:0; margin:0;">
					<li style="height:50px; list-style:none;"><span><input type="radio" name="pmethod" value="1" style="float:left; margin-top:6px; margin-right:10px;">Paypal:</span><img src="pgateway/pmethod/images/AM_mc_vs_dc_ae.jpg" style="margin-top:-6px; width:140px; height:50px!important; float:right;"> </li>
				    <li style="height:50px; list-style:none;"><span><input type="radio" name="pmethod" value="2" style="float:left; margin-top:6px; margin-right:10px;">Pay Later:</span> </li>
			    
			  </ul>	
			<span for="Name">Message</span>
			<textarea  name="message" style="width:100%; height:200px;"></textarea>
		</div>
		<div style="width:100%; height:20px; padding:40px;"></div>
		  <button type="submit" name="bookbow" class="btn btn-primary" style="float:right; background:#87c6fd;">Submit</button>
		  </div>
		</form>
	</div>
</div>

</div>
<?php require_once('template/footer.php');?>
