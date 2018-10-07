<?php require_once('templates/header.php'); ?>
<?php 
	include_once("../includes/Crud.php");  
	$crud = new Crud();
	$query = "SELECT * FROM users WHERE ID = '".$_GET['ID']."'";
	$userdata = $crud->getData($query);
	//echo "<pre>";
	//echo var_dump($userdata);
	//echo "</pre>";
?> 
<div class="client">
<div class="container">
    <div class="row"> 
	<table>
		<tbody>
			
			<tr>
				<td>CName: </td>
				<td><?php echo $userdata[0]['firstname'];?>&nbsp;<?php echo $userdata[0]['lastname'];?></td>
			</tr>
			<tr>
				<td>Contact No: </td>
				<td><?php echo $userdata[0]['contactno'];?></td>
			</tr>
			<tr>
				<td>Address: </td>
				<td><?php echo $userdata[0]['address'];?></td>
			</tr>
			
			
		</tbody>
	</table>
    </div>
</div>
</div>

<?php require_once('templates/footer.php'); ?>