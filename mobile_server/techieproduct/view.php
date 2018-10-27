<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$mysqli = new mysqli("localhost", "root", "", "techieproduct2");


if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}




if ($result = $mysqli->query("SELECT * FROM product WHERE ID = " . (int)@$_POST['ID'])) {
	$row = $result->fetch_assoc();

?>
<style>
input[type=text] {width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box; border: 3px solid #ccc;
-webkit-transition: 0.5s; transition: 0.5s; outline: none;}
input[type=number] {width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box; border: 3px solid #ccc;
-webkit-transition: 0.5s; transition: 0.5s; outline: none;}
input[type=text]:focus { background-color: #8b9dc3;}
input[type=number]:focus {background-color: #8b9dc3;}
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
			background-color: #8b9dc3;
		}
			input[type=submit] {
				width: 100%;
				background-color: #3B5998;
				color: white;
				padding: 14px 20px;
				margin: 8px 0;
				border: none;
				border-radius: 4px;
				cursor: pointer;
			}

			input[type=submit]:hover {
				background-color: #8b9dc3;
			}
			input[type=button] {
				width: 100%;
				background-color: #3B5998;
				color: white;
				padding: 14px 20px;
				margin: 8px 0;
				border: none;
				border-radius: 4px;
				cursor: pointer;
			}

			input[type=button]:hover {
				background-color: #8b9dc3;
			}

	</style>
		
			<div class="fields">
				<label>Product Name </label>
				<input type="text" required id="productname" name="productname" value="<?php echo $row['productname']; ?>">
			</div>
				<div class="fields">
				<label>ProductCategory </label>
				<input type="text" required id="productCat" name="productCat" value="<?php echo $row['productCat']; ?>">
			</div>
		
				<div class="fields">
				<label>Product Price</label>
				<select required id="productCat" name="productCat" value="<?php echo $row['productprice']; ?>">
					
					<option value="1">Motherboard</option>
					<option value="2">Processor</option>
					<option value="3">Memory RAM</option>
					<option value="4">Power supply</option>
					<option value="5">Floppy drive</option>
					<option value="6">Keyboard</option>
					<option value="7">Mouse</option>
					<option value="8">Monitor</option>
					<option value="9">Video card</option>
				</select>
			</div>
			<div class="fields">
				<label>Product Image</label>
				<input type="text" required id="ProductImage" name="ProductImage" value="<?php echo $row['ProductImage']; ?>">
			</div>

			<div class="fields">
				<label>Product Description </label>
				<textarea required id="Description" name="Description"><?php echo $row['Description']; ?></textarea>
				
			</div>
			<input type="submit" id="submit" value="Update Product"/>
			
			
	
	<?php 
}



?>
