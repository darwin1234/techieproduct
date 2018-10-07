<?php 
session_start();
if(@$_SESSION['usertoken']=="0"){
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Log-In First Please');
    window.location.href='Login.php';
    </script>");
}
if(@$_SESSION['usertoken']=="3"){
require_once('template/clientheader.php');
}
?>
<html>
<script>
function showHint() {
   
        var message = document.getElementById("subject").value;
        var description = document.getElementById("description").text;
	    alert(message);
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("POST", "gethint.php?q="+str, true);
        xmlhttp.send();
   
}

function loadmessage(){
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("messages").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("POST", "messages.php", true);
        xmlhttp.send();
	
	
}
setInterval(function(){ loadmessage();},1000);

</script>
<body>
<header><center><h1> Please fill out the form </h1></center></header>

<div id="messages">

</div>
<div class="col-sm-4">
	<form  method="POST" action="#" enctype="multipart/form-data" style="position:fixed; bottom:180px; width:100%; height:200px;">
	 <label for="subject"><h3>Subject</h3></label>
      <input type="text" class="form-control" id="subject" name="subject" style="width:100%;" placeholder="Enter subject" required>
	  <small class="form-text text-muted" style="color:red!important; display:block;"></small></br>
	 <label for="question"><h3>Question or Problem</h3></label></br>
	<textarea class="text" id="bug_report_textarea" id="description" name="description" rows="7"
		placeholder="Briefly explain what your question is..." style="width:100%;" required></textarea></br>
		<label><h3>Add a screenshot(Optional)</h3></label>
	 
	<input type="file" name="testupload" /></br>
	<button type="submit" name="submit" value="Submit" onclick="showHint()">Submit</button>
	</form>
</div>


<body>
</html>