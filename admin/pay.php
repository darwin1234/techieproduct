<?php 
require_once('utils/utilities.php');
require_once('pgateway/init.php');

$t = new dsPaymentGateway; 

$t->dsSubmit();
?>
