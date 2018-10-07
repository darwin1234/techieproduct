<?php 

session_start();
$lastID = $_SESSION['lastID'];
$HotelID = $_SESSION['HotelID'];
$pm 	 = @$_SESSION['pm'];
include_once("/includes/Crud.php");
 
if(!isset($_SESSION['Price']) && !isset($_SESSION['lastID']) && !isset($_SESSION['HotelID'])) { 

	header("location:../index.php");

}
$crud = new Crud();

//yyyy-m-d
	$datepaid = date('Y-m-d',strtotime('now'));
	if($pm == 2){
		$crud->execute("UPDATE bookings SET HotelID = '$HotelID' WHERE ID=$lastID;");
	}else{
		$crud->execute("UPDATE bookings SET status= 1 , datepaid='$datepaid', HotelID = '$HotelID' WHERE ID=$lastID;");
	}
	unset($_SESSION['Price']);
	unset($_SESSION['lastID']);
	unset($_SESSION['HotelID']);
	
	$query = "SELECT * FROM bookings WHERE ID= $lastID";
	$result = $crud->getData($query);

	
 ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong><img class="img-responsive" src="../images/grabhotel.png" style="width:100px"></strong>
                       
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date: <?php echo date('Y-m-d',strtotime('now'))?></em>
                    </p>
                    
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Official Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Room Type</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em><?php echo $result[0]['firstname'];?>&nbsp<?php echo $result[0]['lastname'];?></em></h4></td>
                            <td class="col-md-1" style="text-align: center"> <?php echo $result[0]['roomtype'];?> </td>
                            <td class="col-md-1 text-center"><?php echo $result[0]['email'];?></td>
                            <td class="col-md-1 text-center"><?php echo $result[0]['price'];?></td>
                        </tr>
                      
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
       
                           
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong><?php echo $result[0]['price'];?></strong></h4></td>
                        </tr>
                    </tbody>
                </table>
              
            </div>
        </div>
    </div>