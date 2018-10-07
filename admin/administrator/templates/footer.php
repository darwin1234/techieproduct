	<script src="../js/autocomplete.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClQwnk_NG4x6ezaiWpAEJrR1PfZTkQq-s&libraries=places&callback=initAutocomplete" async defer></script>
    <script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

	<script>
	var j = jQuery.noConflict();
	j(function(){
		var autosearch ={	
				autosearch: function(){
						j("#autosearch").on('submit',function(){
							
							alert(1);
			
						});
				},
				search: function(){
						j("#search").on("change", function(){
							
							alert(2);
		
						});
							
				}
		}
		//alert(1);
		autosearch.autosearch();
	});
	</script>

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
    
</body>

</html>
