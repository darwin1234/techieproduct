<?php require_once('templates/header.php'); ?>
<?php
$query = "SELECT * FROM rooms WHERE ID = '".$_GET['ID']."'";
$result = $crud->getData($query);
?>
<script>
	function deleteImage(){
		var roomimage = document.getElementById("roomimage");
		roomimage.innerHTML = '<input type="file" name="fileToUpload" id="fileToUpload">';
		
	}
</script> 
<?php 
	$message = "";
	$method = ""; //Global Variable
	if(sizeof($result) >=1){
		$method ="Update";
		if(isset($_POST['Update']))
		{
		
			$RoomType								= strip_tags($_POST['RoomType']);
			$price									= strip_tags($_POST['price']);
			$roomsImage								= addslashes(file_get_contents(@$_FILES["fileToUpload"]["tmp_name"]));
			$Description							= strip_tags($_POST['Description']);
			
			if(!empty($roomsImage)){
				$t = $crud->execute("UPDATE rooms SET RoomType='".$RoomType."' , price= '".$price."', Image='".$roomsImage."', Description = '".$Description."' WHERE ID='".$_GET['ID']."';");
				if($t == true){
						$message = "<div class='alert alert-success'><strong>Successfully Updated!</strong></div>";
				}
			}	
			else{
				$t = $crud->execute("UPDATE rooms SET RoomType='".$RoomType."' , price= '".$price."', Description = '".$Description."' WHERE ID='".$_GET['ID']."';");
				if($t == true){
						$message = "<div class='alert alert-success'><strong>Successfully Updated!</strong></div>";
				}
				
			}
			
			 header("location: RoomEdit.php?ID=".$_GET['ID']);
		}
		
	}

?>

<div class="container">
	<div class="row">
		
		<form action="RoomEdit.php?ID=<?php echo $_GET['ID'];?>" method="POST" enctype="multipart/form-data">
		<?php  echo $message; ?>
		<?php if(!empty($result[0]['Image'])){  ?>
		  <div id="roomimage" style="position:relative; box-shadow: 1px 1px 10px grey; width:300px;">
			<img src="images.php?ID=<?php echo $_GET['ID'];?>" style="width:100%;">
			<br><br>
			 <button type="button" onclick="deleteImage()" class="btn btn-warning btn-sm">Remove</button>
		  </div>
		
		<?php } else{ ?>
			<input type="file" name="fileToUpload" id="fileToUpload">
		
		<?php } ?>
		 <div style="width:100%; height:50px;"></div>
		  <div class="form-group">
			<label for="RoomType">RoomType:</label>
			<input type="text" class="form-control" name="RoomType" id="RoomType" value="<?php echo $result[0]['RoomType']; ?>">
		  </div>
		  <div class="form-group">
			<label for="Price">Price:</label>
			<input type="text" class="form-control" id="price" name="price" value="<?php echo $result[0]['Price']; ?>">
		  </div>
		  <div class="form-group">
			<label for="pwd">Detail:</label>
			<textarea class="form-control" style="height:250px;" name="Description">
				<?php echo $result[0]['Description']; ?>
			</textarea>
		  </div>
		  
		  <button type="submit" name="Update" class="btn btn-default">Submit</button>
		</form>
		
		<?php 
			
			
			/*if(isset($_POST['updateroom'])){ 
					
					 $result = $crud->execute("UPDATE rooms SET RoomType='".$_POST['RoomType']."' , price= '".$_POST['price']."' , Description = '".$_POST['Description']."' WHERE ID='".$_GET['ID']."';");
					 header("location: RoomEdit.php?ID=" . $_GET['ID']);
			}*/
		?>
	</div>
</div>

<?php require_once('templates/footer.php'); ?>