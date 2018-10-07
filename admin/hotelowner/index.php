<?php require_once('templates/header.php'); ?>
 
	<?php 
	$query = "SELECT * FROM rooms WHERE HotelID='".$_SESSION['HotelID']."'" ;
	$result = $crud->getData($query);

    ?>
	
	<div class="container" style="height:500px; padding-top:50px; overflow:auto;">

		 <table class="table table-striped">
			<thead>
			  <tr>
				<th>RoomType</th>
				<th>Description</th>
				<th>Price</th>
				
				<th>Action</th>
			  </tr>
			</thead>
			<tbody>
		    <?php foreach ($result as $key => $row) { ?>
			 <tr>
				
				<td><?php echo $row['RoomType'];?></td>
				<td><?php echo $row['Description'];?></td>
				<td>₱ <?php echo number_format($row['Price']);?></td>
				<td>
				  <a href="RoomEdit.php?ID=<?php echo $row['ID'];?>" class="btn btn-primary">Edit</a>
				  <a href="RoomDelete.php?ID=<?php echo $row['ID'];?>" class="btn btn-danger">Delete</a>
                   
				</td>		 
				</tr>
			<?php } ?>
			</tbody>
		</table>
		
	</div>
	
	
	<?php require_once('templates/footer.php'); ?>