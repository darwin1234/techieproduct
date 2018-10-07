<?php //fetching data in descending order (lastest entry first)

$query = "SELECT * FROM products ORDER BY productID LIMIT 20";
$result = $crud->getData($query);
?>
<div class="container">			
            <div class="row">
			<?php foreach ($result as $key => $row) { ?>
				<div class="col-md-4">			<!-- container for the  hotel -->
                    
					<div class="thumbnail" style="padding:10px;"><img src="images.php?ID=<?php echo $row['ID']; ?>" style="width:150px; height:100px; border-radius:10px;">
                        <div class="caption"><br>
                            <center><h4><?php echo limitText($row['ProductName'],20);?></h4></center>
                            <p><i class="fa fa-location-arrow"></i><?php echo limitText($row['ProductDescription'],50);?> </p>
							<center>
							
                            <a class="button" style="background:#FF7434;" href="productinfo.php?ID=<?php echo $row['productID']; ?>" type="button">VIEW PRODUCT </a>
							</center>
					  </div>
                    </div>
                </div>
			<?php } ?>
			</div>
</div>	 	