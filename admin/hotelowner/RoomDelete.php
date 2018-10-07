<?php 
include_once("../includes/Crud.php");
$crud = new Crud();
$result = $crud->delete($_GET['ID'],'rooms');

 header("location: index.php");
//echo var_dump($result);
