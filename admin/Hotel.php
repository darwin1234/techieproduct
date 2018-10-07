<?php 
	

	if(!empty($_SESSION['HotelID'] )){$res = mysqli_query($mysqli, "SELECT * FROM products Where ID =" . $_SESSION['HotelID'] );}
	else{$res = mysqli_query($mysqli, "SELECT * FROM products");}

?> 
 <div class="row text-center">
		<?php while($row = mysqli_fetch_assoc($res)){ ?>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="images.php?id=<?php echo $row['ID'];?>" alt="">
                    <div class="card-block">
                        <h4 class="card-title"><?php echo $row['productname'];?></h4>
                        <p class="card-text"><?php echo $row['productdesc'];?></p>
							<h6 class="card-title">₱ <?php echo number_format($row['price']);?></h6>
							<h6 class="card-title"><?php echo $row['catname'];?></h6>
						
					</div>
					<?php if(@$_SESSION['usertype'] == 3) {?> 
                    <div class="card-footer">
                        <a href="<?php echo $row['Link'];?>" target="_blank" class="btn btn-primary">View Hotel</a>
                    </div>
					<?php } ?>
					
					
					
					<?php if(@$_SESSION['usertype'] == 2) {?> 
                    <div class="card-footer">
                        <a href="Edithotel.php?ID=<?php echo $row['ID'];?>" class="btn btn-primary">EDIT</a>
                    </div>
					<?php } ?>
					
					<?php if(@$_SESSION['usertype'] == 1) {?> 
                    <div class="card-footer">
                        <a href="edit.php?ID=<?php echo $row['ID'];?>" class="btn btn-primary">Edit</a>
						<a href="delete.php?ID=<?php echo $row['ID'];?>" class="btn btn-danger">Delete</a>
                   
					
					</div>
					<?php } ?>
					</div>
            </div>

		<?php } ?>
  </div>