<?php require_once('header.php');?>
<?php require_once('connection.php');?>
<?php session_start();?>



<div class="clear" style="height:40px;"></div>
<div class="container">
	<form action="cancel.php" method="POST"> 
		
		<div class="form-group">
		<h3>Click Here to cancel your transaction</h3>
		<br>
		<a href="account.php" class="btn btn-primary" >cancel</a>
		</div>
	</form>
	<hr>
	<div class="clear" style="height:40px;"></div>
	<form action="pay.php" method="post" enctype="multipart/form-data"> 
		<div class="form-group">	 
			<h3>Upload Deposit receipt statement at your bank</h3>
			<?php 
			
				$t = '';
				foreach($_POST['productOrdered'] as $p){
					$t .= $p;
					$t .= ',';
				}
			
			?>
			<input type="hidden"  name="productOrdered" value="<?php echo $t;?>">
			<input type="hidden" name="productIDStringVersion" value="<?php echo $_POST['productIDStringVersion']; ?>">
			<input type="file" class="form-control" name="fileToUpload" id="fileToUpload" required>
			<br>
		    <p><input type="submit" name="submitpayment" class="btn btn-primary" value="Pay"></p>
		
		</div>
	</form>
<div class="clear" style="height:40px;"></div>	
</div>
	
<?php require_once('footer.php'); ?>