<?php require_once('templates/header.php'); ?>
<?php 
$query = "SELECT * FROM bookings WHERE ID='".$_GET['ID']."'" ;
$result = $crud->getData($query);


?>

<div class="container">
<div style="width:100%; height:20px;"></div>
<div class="panel panel-primary">
		
       <div class="alert alert-success" style="background: #34495E; color: #fff; border-color: #34495E; border-radius: 0;">
				<h5>Clients Info</h5>
			</div>
            <div class="panel-body">
				<p>FirstName: <?php echo $result[0]['firstname']; ?> </p>
				<p>LastName: <?php echo  $result[0]['lastname']; ?> </p>
				<p>Email: <?php echo $result[0]['email']; ?> </p>
				<p>Room Type: <?php echo $result[0]['roomtype']; ?> </p>
				<p>Date of Paid: <?php echo $result[0]['datepaid'];  ?> </p>
				<p>Status: <?php echo $result[0]['status'] == 1 ? "Paid" : "Pending";  ?> </p>
				<p>Contactno: <?php echo $result[0]['contactno'];  ?> </p>
				<p>Message: <?php echo $result[0]['message']; ?></p>
			</div>
</div>
</div>
<?php require_once('templates/footer.php'); ?>