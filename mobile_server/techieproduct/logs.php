
<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$mysqli = new mysqli("localhost", "root", "", "techieproduct2");


if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if ($result = $mysqli->query("SELECT * FROM logs ORDER BY ID DESC")) {

	   echo "<table class='w3-table w3-bordered'>";
		echo "<tr>";
		echo "<th>Time</th>";
		echo "<th>UserID</th>";
		echo "<th>Action</th>";
		echo "</tr>";

  
    while ($row = $result->fetch_assoc()) {
      

	   echo "<tr>";
		echo "<th>". $row["time"] ."</th>";
		echo "<th>" . $row["userID"] . "</th>";
		echo "<th>" . $row["action"] . "</th>";
		echo "</tr>";

	/*	echo "<div class='logs'>";
		
		echo "<h3> <strong>Action " . $row["action"] . "</strong></h3>";	
		echo "<h4> UserID " . $row["userID"] . "</h4>";
		echo "<h5> Time: " . $row["time"] . "</h5>";
		echo "</div>";
*/
    }
	echo "</table>";
	$result->close();
}


$mysqli->close();
