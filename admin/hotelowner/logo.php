<?php 
include_once("../includes/Crud.php");
$crud = new Crud();
$query ="SELECT HotelLogo FROM hotels WHERE ID =3";
$result = $crud->getData($query);


echo $result[0]['HotelLogo'];