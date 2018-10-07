<?php

$mysqli = mysqli_connect("localhost", "root", "", "grabhotel1");
if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>