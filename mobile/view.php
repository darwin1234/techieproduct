<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
<<<<<<< HEAD
$mysqli = new mysqli("localhost", "root", "", "techieproduct");
=======
$mysqli = new mysqli("localhost", "root", "", "eljohn");
>>>>>>> c642a6dae445a93079c13fbfa28046c1c26f0734


if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}




if ($result = $mysqli->query("SELECT * FROM products WHERE productID = " . (int)$_POST['productID'])) {
	$row = $result->fetch_assoc();

	
	
	?>
	<style>
		input[type=text] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 3px solid #ccc;
			-webkit-transition: 0.5s;
			transition: 0.5s;
			outline: none;
		}
		input[type=number] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 3px solid #ccc;
			-webkit-transition: 0.5s;
			transition: 0.5s;
			outline: none;
		}
		input[type=text]:focus {
			background-color: lightblue;
		}
			input[type=number]:focus {
			background-color: lightblue;
			
		}
		textarea{
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 3px solid #ccc;
			-webkit-transition: 0.5s;
			transition: 0.5s;
			outline: none;
		}
			textarea:focus {
			background-color: lightblue;
		}

	</style>
		
			<div class="fields">
				<label>Product Name </label>
				<input type="text" required id="ProductName" name="productName" value="<?php echo $row['ProductName']; ?>">
			</div>
				<div class="fields">
				<label>ProductCategory </label>
				<input type="text" required id="ProductCategory" name="ProductCategory" value="<?php echo $row['ProductCategory']; ?>">
			</div>
		
				<div class="fields">
				<label>ProductPrice</label>
				<input type="number" required id="ProductPrice" name="ProductPrice" value="<?php echo $row['ProductPrice']; ?>">
			</div>
			<div class="fields">
				<label>ProductImage</label>
				<input type="text" required id="ProductImage" name="ProductImage" value="<?php echo $row['ProductImage']; ?>">
			</div>

			<div class="fields">
				<label>ProductDescription </label>
				<textarea required id="ProductDescription" name="ProductDescription"><?php echo $row['ProductDescription']; ?></textarea>
				
			</div>
			<input type="submit" id="submit" value="Update Product"/>
	
	<?php 
}



?>
