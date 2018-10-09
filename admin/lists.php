<?php
include_once("includes/Crud.php");
$crud = new Crud();
$query = "SELECT HotelName,Description FROM Hotels";
$result = $crud->getData($query);
echo json_encode($result);
?>

