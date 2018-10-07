	
	<link rel="stylesheet" href="template/style.css">
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/tether/tether.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
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
	
	</footer>
    
</body>

</html>

