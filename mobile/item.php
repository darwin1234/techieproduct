<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$mysqli = new mysqli("localhost", "root", "", "eljohn");


if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if ($result = $mysqli->query("SELECT * FROM products order by productID DESC")) {


    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
      
	   echo "<div>";
	   
			
		echo "<div class='image'><img src='http://studio-ogien.com/images/csgreen.png'></div>";
		echo "<div class='productData'>";
		echo "<h3> Product Name: " . $row["ProductName"] . "</h3>";	
		echo "<h4> Price: ₱ " . $row["ProductPrice"] . ".00</h4>";
		echo "<h5> Product Category:" . $row["ProductCategory"] . "</h5>";
		echo "<p>  Description: " . $row["ProductDescription"] . "</p>";
		echo "</div>";

		echo "<div class='productData'><center>" . "<a href='update.html' class='button button2' onclick='update(".$row['productID'].")'>Update</a>". "&nbsp &nbsp". "<button href='javascript:void()' class='button button3' style='height:36px' onclick='remove(".$row["productID"].")'>Delete</button>" . "</div><br></center>";
	  
	   echo "</div>";
	  
    }

	$result->close();
}


$mysqli->close();