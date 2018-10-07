<?php require_once('templates/header.php'); ?>

 
	<?php 
	$query = "SELECT * FROM users WHERE usertype=3" ;
	$result = $crud->getData($query);
	
    ?>

		<div class="wrapper" > 
		 <table class="table table-hover">
			<thead>
			  <tr>
				<th>Customer Name</th>
				<th>Action</th>
			  </tr>
			</thead>
			<tbody>
		    <?php foreach ($result as $key => $row) { ?>
			 <tr>
				
				<td><?php echo $row['firstname'];?>&nbsp;<?php echo $row['lastname'];?></td>
				<td>
				  <a href="customerprofile.php?ID=<?php echo $row['ID'];?>" class="button">View</a>
				</td>		 
			</tr>
			<?php } ?>
			</tbody>
		</table>
		</div>
	</div>
	
<?php require_once('templates/footer.php'); ?>