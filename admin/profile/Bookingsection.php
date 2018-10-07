<?php require_once('header.php'); ?>


	<?php 
	include_once("../includes/Crud.php");  
	$crud = new Crud();
	$query = "SELECT * FROM bookings WHERE CustomerID='".$_SESSION['CustomerID']."'" ;
	$result = $crud->getData($query);
    ?><br>
	<center><h1>BOOKED ROOM</h1></center>

	<div class="row product" id="productbook" style="width: 1000px; margin: auto;">
        <div class="col-md-5 col-md-offset-0"> <div id="image"><img class="img-responsive" src="../css/Hadouken/img/Alfresco-Phuket-Hotel-Download-Alfresco-VIP-SUITE1.jpg" id="imgbook"></div> </div>
        <div class="col-md-5">
	<!--Name of the Hotel-->
            <h1 class="text-center bg-primary">PALADIN HOTEL</h1>
            <div class="table-responsive"> 
                <table class="table">
                    <thead>
                        <tr>
	<!--Room information and description-->
                            <th>Room Type</th>
                            <th>No. Of Person</th>
                            <th>Price </th>
							<th>Check In</th>
							<th>Check Out</th>
							<th>Date Paid</th>
                        </tr>
                    </thead>
					
                    <tbody><?php foreach ($result as $key => $row) { ?>
                        <tr>
                            <td><?php echo $row['roomtype'];?></td>
				<td><?php echo $row['noofperson'];?></td>
				<td><?php echo $row['price'];?></td>
				<td><?php echo $row['checkin'];?></td>
				<td><?php echo $row['checkout'];?></td>
				<td><?php echo $row['datepaid'];?></td>
                        </tr>
                        <?php } ?>	
                    </tbody>
                </table>
            </div> <center>
        <!--Update button-->   
		   <button class="btn btn-success" type="button" id="myBtn">UPDATE</button>

 
			<button class="btn btn-success" type="button" onclick="myFunction()">CANCEL </button>

			</center>
         </div>
    </div>

<?php require_once('footer.php'); ?>