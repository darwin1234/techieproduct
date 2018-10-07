
<?php require_once('templates/header.php'); ?>

			<?php 
			$query = "SELECT * FROM users WHERE usertype='2'";
			$result = $crud->getData($query);
			

			?>
			
			<div class="wrapper">
			<h1><center>
			Product Logs
			</h1></center><br>
		
				
				<table class="table table-hover">
					<thead>
					  <tr>
						<th>ID</th>
						<th>Hotel Name</th>
						<th>Hotel Owner</th>
						<th>Address</th>
						<th>Contact</th>
						<th style="text-align:center;">Action</th>
					  </tr>
					</thead>
					<tbody>
					<?php foreach ($result as $key => $row){ ?>
					 <tr>
						<td><?php echo $row['ID'];?></td>
						<td><?php echo $row['HotelName'];?></td>
						<td><?php echo $row['firstname'];?>&nbsp<?php echo $row['lastname'];?></td>
					
						<td><?php echo $row['address'];?></td>
	
						<td><?php echo $row['contactno'];?></td>
						<td>
								<?php if($row['Status'] == 0){ ?>
									<a href="trash.php?id=<?php echo $row['ID'];?>&t=1" style="border-radius:0px;" class="button style2">Disable</a>&nbsp;&nbsp;
									<a href="hotelprofile.php?id=<?php echo $row['ID'];?>" style="border-radius:0px;" class="button">View</a></td>
								<?php } else{?>
									<a href="enable.php?id=<?php echo $row['ID'];?>t=0" style="border-radius:0px;" class="button">Enable</a>&nbsp;&nbsp;
									<a href="deletehotel.php?ID=<?php echo $row['ID'];?>&hotelID=<?php echo $row['HotelID']?>"style="border-radius:0px;" class=" danger"><span class="glyphicon glyphicon-trash" ></span>&nbsp Delete</a>
								<?php } ?>
					  </tr>
					<?php } ?>
					</tbody>
				</table>
				
			</div>
	
	</div>
	

<script type="text/javascript" src="js/autocomplete.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClQwnk_NG4x6ezaiWpAEJrR1PfZTkQq-s&libraries=places&callback=initAutocomplete" async defer></script>
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/tether/tether.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<?php require_once('templates/footer.php'); ?>