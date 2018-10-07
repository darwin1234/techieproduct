<?php session_start();?>
<?php require_once('connection.php'); ?>
<?php require_once('template/header.php'); ?>
<div class="container" style="padding-top:20px; overflow:auto;">
<?php  $res = mysqli_query($mysqli, "SELECT * FROM products WHERE productID="  .$_GET['ID']);  ?>
<?php  $row = mysqli_fetch_assoc($res); ?>
<form action="payform.php" method="POST">
<input type="hidden" name="HotelID" value="<?php echo $_GET['ID'];?>">
<div class="row">
  <div class="col-sm-8">
  <div class="wrapper">
		<h3><?php 	echo $row['HotelName'];?></h3>	
			
			
		<?php  $rooms = mysqli_query($mysqli, "SELECT * FROM rooms WHERE HotelID='".$_GET['ID']."'"); 	
				while($roomData = mysqli_fetch_assoc($rooms)){
					echo "<div style='clear:both; width:100%; margin-bottom:20px; overflow:auto;'>";
					echo "<img src='roomsimages.php?id=$roomData[ID]' style='float:left; width:200px; height:200px; margin-right:10px;'>";
					echo "<h4>Room Type: " .$roomData['RoomType']. " </h4>";
					echo "<p>Price: " .$roomData['Price']. "</p>";
					echo "<p>" . $roomData['Description'] . "<input type='radio' required='' name='selectroomradio' style='float:right;' value='".$roomData['ID']."'></p>";
					echo "</div>";
				}
		 
		 ?>
	 
		</div>
		<p></p> 
  </div>
  <div class="col-sm-4">
	<div class="wrapper">
		<h3>About <?php echo $row['HotelName']; ?></h3>
			<p><?php  echo $row['Description']; ?></p>
		
		<h3>Map</h3>
			<div id="content_container" style="height:300px;">

		<iframe style="width:100%; height:300px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB-p-fbQnyN1JKna_aeVMugExdusFOrdsM&q=Space+Needle,Seattle+WA" allowfullscreen>
		</iframe>
		</div> <br><br>
		
		<center><input type="submit" name="submit" value="Booked Now" class="btn btn-success"></center>
</div>

 </div>
</div>

</form>
</div>
<div style="width:100%; height:50px;"> </div>
<?php require_once('template/footer.php');?>