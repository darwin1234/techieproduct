
<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$mysqli = new mysqli("localhost", "root", "", "techieproduct2");


if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if ($result = $mysqli->query("SELECT ID,SUBSTR(productname,1,10) AS pname,productprice,productCat,SUBSTR(Description,1,20) AS Description FROM product ORDER BY ID DESC")) {


    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
      
	   
	   
		echo "<div class='productData'>";		
		echo "<h3> <strong>Product Name: " . $row["pname"] . "...</strong></h3>";	
		echo "<h4> Price: ₱ " . $row["productprice"] . ".00</h4>";
		echo "<h5> Product Category: " . $row["productCat"] . "</h5>";
		echo "<h4>  Description: " . $row["Description"] . "...</h4>";
		echo "<div class='image'><img src='sample.jpg'></div>";
		echo "</div>";
		
		echo "<div class='productData2'>";
		echo "<center>" . "<button href='javascript::void()' class='fa fa-edit button button2' onclick='update(".$row['ID'].")'> Update</button>". "". "<button href='javascript:void()' class='fa fa-trash-o button button3' onclick='remove(".$row["ID"].")'> Delete</button>" . "</center><br>";
		echo "</div>";
    }

	$result->close();
}


$mysqli->close();
