
<?php 
	include_once("../includes/Crud.php");  
	$crud = new Crud();
	$query = "SELECT * FROM users WHERE ID = '".$_GET['id']."'";
	$userdata = $crud->getData($query);
	/****

		INNER JOIN


	***/
	$qInnerJoin = "SELECT hotels.ID as hotel_ID , hotels.HotelLogo, hotels.Description as H_Description FROM hotels INNER JOIN users ON hotels.ID = users.HotelID WHERE users.ID = '".$_GET['id']."'";
		
	$tInnerJoin = $crud->getData($qInnerJoin ); // 0 or 1 whatever

	
	$method = ""; //Global Variable
	
	if(sizeof($tInnerJoin) >=1){
		$method ="Update";
		if(isset($_POST['Update']))
		{
			
			$HotelName								= strip_tags($_POST['HotelName']);
			$Description							= strip_tags($_POST['Description']);
			$HotelLogo								= addslashes(@file_get_contents(@$_FILES["HotelLogo"]["tmp_name"]));
		
			if(!empty($HotelLogo)){
				$t = $crud->execute("UPDATE hotels SET HotelName = '".$HotelName ."' ,Description = '" . $Description ."'  ,HotelLogo ='".$HotelLogo."'  WHERE ID = '".$tInnerJoin[0]['hotel_ID'] ."'");
			}	
			else{
				$t = $crud->execute("UPDATE hotels SET HotelName = '".$HotelName ."' ,Description = '" . $Description ."'  WHERE ID = '".$tInnerJoin[0]['hotel_ID'] ."'");
	
				
			}
			if($t == true){
					$message = "<div class='alert alert-success'><strong>Successfully Updated!</strong></div>";
			}
			header("location:hotelprofile.php?id=" . $_GET['id']);
		}

		
	}else{
		$method="Add";
		if(isset($_POST['Add']))
		{
	
			$HotelName								= strip_tags($_POST['HotelName']);
			$Description							= strip_tags($_POST['Description']);
			$HotelLogo								= addslashes(@file_get_contents(@$_FILES["HotelLogo"]["tmp_name"]));
			$HotelAddress							= strip_tags($_POST['HotelAddress']);
			
			$result = $crud->execute("INSERT INTO `hotels` (ID,HotelName,Description,HotelLogo,HotelAddress) VALUES  ('', '" . $userdata[0]['HotelName'] . "', '". $Description ."' , '". $HotelLogo."', '". $HotelAddress ."')");
		
			
			if($result ==true){
				  $t = $crud->execute("UPDATE users SET HotelID = '".$crud->getLastID() ."' WHERE ID = '".$_GET['id']."'");
					if($t == true){
						
						$message = "<div class='alert alert-success'><strong>Successfully Added!</strong></div>";

					}

			}
			header("location:hotelprofile.php?id=" . $_GET['id']);
		}
		
	}	

	

	
	
?> 

<?php require_once('templates/header.php'); ?>
    <div class="row register-form"> 
		<form class="form-horizontal custom-form" method="POST" action="hotelprofile.php?id=<?php echo $_GET['id']; ?>"  enctype="multipart/form-data">
				<div class="wrapper" > 
				<center><h1>Add/Update Hotel</h1></center>
				<div class="form-group">
                    <div class="col-sm-4 label-column"   >
                        <label class="control-label" for="name-input-field" >Hotel Name </label>
                    </div>
                    <div class="col-sm-6 input-column"   >
                        <input class="form-control" type="text" name="HotelName" value="<?php echo $userdata[0]['HotelName']; ?>">
                    </div>
                </div>
				
				
				 <div class="form-group">
                    <div class="col-sm-4 label-column"  >
                        <label class="control-label" for="name-input-field" >Hotel Address</label>
                    </div>
                    <div class="col-sm-6 input-column"  >
                        <input class="form-control" type="text" value="<?php echo $userdata[0]['address']; ?>">
                    </div>
                </div>
				 <div class="form-group">
                    <div class="col-sm-4 label-column"  >
                        <label class="control-label" for="name-input-field" >Contact Number </label>
                    </div>
                    <div class="col-sm-6 input-column"  >
                        <input class="form-control" type="text" value="<?php echo $userdata[0]['contactno']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"  >
                        <label class="control-label" for="email-input-field">Hotel Description </label>
                    </div>
                    <div class="col-sm-6 input-column"  >
                        <textarea class="form-control" type="text" name="Description" style="height:200px;"><?php echo @$tInnerJoin[0]['H_Description']; ?></textarea>
                    </div>
                </div>
				 <div class="form-group">
                    <div class="col-sm-4 label-column"  >
                        <label class="control-label" for="email-input-field">Hotel Ratings </label>
                    </div>
                    <div class="col-sm-6 input-column"  >
                        <input class="form-control" type="text">
                    </div>
                </div>
           

				<?php if(!empty($tInnerJoin[0]['HotelLogo'])){ ?>
				  <div class="form-group">
					<div class="col-sm-4 label-column"  >
						<label class="control-label" for="HotelLOGO">HotelLOGO</label>
						
						
					</div>
				 <div class="col-sm-6 input-column"  >
					<div id="hotelImage" style="position:relative; width:300px;">
						<img style="box-shadow:1px 1px 5px grey; width:50%;"src="images.php?id=<?php echo $tInnerJoin[0]['hotel_ID']; ?>" style="width:50%;">
						 <button type="button" onclick="deleteImage()" class="btn btn-warning" style="clear:both; display:block; margin-top:10px;">Remove</button>
					</div>
                </div>
				</div>
				 
				<?php }  else{?>
				
				 <div class="form-group">
					<div class="col-sm-4 label-column"  >
						<label class="control-label" for="ChooseLogo">Choose Logo</label>
					</div>
				 <div class="col-sm-6 input-column"  >
						<input type="file" name="HotelLogo" id="fileToUpload">
                </div>
				</div>
				
				<?php } ?>
			
							<button class="btn btn-primary" type="submit" name="<?php echo $method;?>"><?php echo $method;?> Hotel</button>
					
					</div>
    </form>
	
</div>


<?php require_once('templates/footer.php'); ?>