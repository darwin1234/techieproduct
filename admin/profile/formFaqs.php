<?php 
session_start();
if($_SESSION['usertoken']=="0"){
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Log-In First Please');
    window.location.href='Login.php';
    </script>");
}
if($_SESSION['usertoken']=="3"){
require_once('template/clientheader.php');
}
?>
<html>
<body>
<header><center><h1> Please fill out the form </h1></center></header>
<div class="col-sm-4">
	<form  method="POST" action="Faqsend.php" enctype="multipart/form-data">
	 <label for="subject"><h3>Subject</h3></label>
      <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject" required>
	  <small class="form-text text-muted" style="color:red!important; display:block;"></small></br>
	 <label for="question"><h3>Question or Problem</h3></label></br>
	<textarea class="text" id="bug_report_textarea" name="description" rows="7"+
		placeholder="Briefly explain what your question is..." style="width:483px" required></textarea></br>
	 <label><h3>Add a screenshot(Optional)</h3></label>
	 
	<input type="file" name="testupload" /></br>
	<button type="submit" name="submit" value="Submit">Submit</button>
	</form>
</div>


<body>
</html>