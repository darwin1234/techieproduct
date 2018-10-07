<?php require_once('templates/header.php'); ?>
<?php 
	include_once("../includes/Crud.php");  
	$crud = new Crud();
	if(isset($_POST['submit']))
	{
	
		$RoomNo							= strip_tags($_POST['RoomNo']);
		$RoomType						= strip_tags($_POST['RoomType']);
		$Description					= strip_tags($_POST['Description']);
		$Price							= strip_tags($_POST['Price']);

		$result = $crud->execute("INSERT INTO `rooms` (`ID`, `RoomNo`, `RoomType`, `Description`, `Price`,`HotelID`) VALUES  ('', '". $RoomNo ."','". $RoomType ."', '" .$Description ."', '" . $Price ."', '".$_SESSION['HotelID']."')");
		$message = "<div class='alert alert-success'><strong>Successfully Added!</strong></div>";
	}
	
	
?>

<div class="wrapper">
    <div class="register-form"> 
	<form class="form-horizontal custom-form" method="POST" action="addroom.php" >
				
				<?php echo @$message?>
			
				<center><h2>Add Room</h2></center>
						<!--Hotel Name--> 	
                        <label class="control-label" for="name-input-field" >Room No </label>
						<input class="form-control" required="" type="text" name="RoomNo">
						<!--First Name-->
                        <label class="control-label" for="name-input-field" >Room Type</label>
                        <input class="form-control" required="" type="text" name="RoomType">
						<!--Last Name-->
                        <label class="control-label" for="name-input-field" >Description</label>
                        <input class="form-control" required="" type="text" name="Description">
						<!--Contact Number-->
                        <label class="control-label" required="" for="name-input-field" >Price</label>                   
                        <input class="form-control" type="text" name="Price">
						
                
				<br><br><hr>
			
			
					 <button class="btn btn-primary" type="submit" name="submit">Add Room</button>

    </form>


</div>
</div>

<?php require_once('templates/footer.php'); ?>
