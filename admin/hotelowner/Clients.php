<?php  require_once('templates/header.php'); ?>
<?php 
	$query = "SELECT * FROM bookings WHERE HotelID='".$_SESSION['HotelID']."'" ;
	$result = $crud->getData($query);

    ?>
	<div class="container" style="height:500px; padding-top:50px; overflow:auto;">

		 <table class="table table-striped">
			<thead>
			  <tr>
				<th>FullName</th>
				<th>email</th>
				<th>Status</th>
				
				<th>Action</th>
			  </tr>
			</thead>
			<tbody>
		    <?php foreach ($result as $key => $row) { ?>
			 <tr>
				
				<td><?php echo $row['firstname'];?>&nbsp<?php echo $row['lastname'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['status'] == 1 ? 'Paid' : 'Pending';?></td>
				<td>
				  <a href="clientinfo.php?ID=<?php echo $row['ID'];?>" class="btn btn-primary">View</a> 
				</td>		 
				</tr>
			<?php } ?>
			</tbody>
		</table>
		
	</div>

<?php  require_once('templates/footer.php'); ?>