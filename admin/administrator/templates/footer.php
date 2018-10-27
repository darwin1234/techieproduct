
<script>

	var result, HTML = "";
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	   console.log(this.responseText);
	   
	    result = this.responseText;
	   result = JSON.parse(result);
	   HTML += "<table>";
	   HTML += "<tr><th>ID</th><th>Company Name</th><th>User Name</th><th>Address</th><th>Contact No.</th><th>Email Address</th><th>Action</th></tr>"
	   for(var i=0; i < result.length; i++){
			HTML +=  "<tr>";
			HTML +=  "<td>" + result[i].ID + "</td>";
			HTML +=  "<td>"+ result[i].CompanyName +"</td>";
			HTML +=  "<td>"+ result[i].username +"</td>";
			HTML +=  "<td>"+ result[i].address +"</td>";
			HTML +=  "<td>"+ result[i].contactno +"</td>";
			HTML +=  "<td>"+ result[i].email +"</td>";
			HTML +=  "<td>"+ "<button>view</button>"+"</td>";
			HTML +=  "</tr>";
			
	   }
		HTML += "</table>";	   
		document.getElementById("productlist").innerHTML = HTML;
	}else{
		console.log("not working!");
		 //document.getElementById("productList").innerHTML = "<h2 style='text-align:center;'>Cannot load Product Server Error!</h2>";
	}
	
	 };
	  xhttp.open("POST", "http://localhost/techieproduct/admin/administrator/lists.php", true);
	  xhttp.send();
	  

 </script>

</body>

</html>
