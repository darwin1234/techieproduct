<?php 
session_start();
if(isset($_POST['submit'])){
		$conn=new mysqli("localhost","root","","grabhotel");
		$image = addslashes(file_get_contents($_FILES['testupload']['tmp_name']));
		if($conn->connect_error)
				{
					echo"<script>window.alert('Can't Connect !!!');</script>";
				}			
		$subject 				= $_POST['subject'];
		$description			= $_POST['description'];
		$ClientID				= $_SESSION['ID'];
		if($conn->query("INSERT INTO notification(NotifID,ClientID,NotifSubject,NotifText,NotifFile)
			VALUES('','$ClientID','$subject','$description','$image')")==TRUE)
						{
							echo "<script> window.alert('Thank you!');</script>";
							header("Location: ". "index.php");
						}
		else 
						{
							echo "<script>
							window.alert('can't connect');
							</script>";
							//header("Location: "."formfaqs.php");
		}
}
else{
	echo "NOT WORKING!";
}
?>