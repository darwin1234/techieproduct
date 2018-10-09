

<footer id="footer">
					<div class="inner">
						<center><h2><img class="img-responsive" src="../images/grabhotel.png" id="logofooter2"></center></h2>
						<h4>About the company</h4>
						<p>We are a dependent company who is gladly offering to advertise and help people who are in need of a lodge. &nbsp; &nbsp;&nbsp; </p>
                
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
					</div>
	  
	  
	  
	  <i class="fa fa-phone footer-contacts-icon"></i>+639062345123
	  <i class="fa fa-envelope footer-contacts-icon"></i>support@GRABHOTEL.com
	  
</footer>
<script>

	
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	   console.log(this.responseText);
		
	}else{
		console.log("not working!");
		 //document.getElementById("productList").innerHTML = "<h2 style='text-align:center;'>Cannot load Product Server Error!</h2>";
	}
	
 };
  xhttp.open("POST", "<?php echo $baseurl;?>/administrator/lists.php", true);
  xhttp.send();
  

 </script>
</body>

</html>
