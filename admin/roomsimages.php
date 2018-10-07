<?php 
require_once('connection.php');
header('Content-type:image/png');
$res = mysqli_query($mysqli, "SELECT * FROM rooms WHERE ID ='".$_GET['id']."'"); 

$row = mysqli_fetch_assoc($res);
echo $row['Image'];