<?php require_once("utils/utilities.php");?>
<?php  $baseurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<head>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techie Product</title>
	<link rel="stylesheet" href="template/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
	<style>
	#productlist{max-height: 215px; height: 100%;}
	#productlist .ProductData{border:1px solid #ccc; margin:5px; padding:10px; height:200px; width:32.3%; float:left; text-align:center;}
	#prpductlist .ProductData a{background:#385693; color:#fff; padding:5px; text-align:center; display:block;}
	</style>
	<script>
		var xhttp = new XMLHttpRequest();
		
		function logout(){
			
		
			var r = confirm("Do you want to logout?");
			if (r == true) {
				window.location ="logout.php";
			} else {
				
			}			
						
		}
	</script>
</head>
<body>
  <nav>	<!-- This is the start of the navigation bar for users who visits the website-->
        <div class="container-fluid" style="background:#003E52;">		
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="index.php">LOGO</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">			<!--these are the dropdowns for the website and when the user clicks on the button it would collapse and show more options-->
                <ul class="nav navbar-nav navbar-right">
					
                    <li><a href="profile/FAQ.php">Logs </a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" id="drph">Profile </a>
                        <?php if(!isset($_SESSION['username']) && !isset($_SESSION['ID'] )){ ?>
						<ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="Login.php">LOG IN</a></li>			
                            <li role="presentation"><a href="register.php">SIGN UP</a></li>
                        </ul>
						<?php } else{ ?>
							<?php if($_SESSION['usertype'] == 1) { ?>
							<ul class="dropdown-menu" role="menu">
								<li role="presentation"><a href="administrator/index.php">Dashboard</a></li>
								<li role="presentation"><a href="logout.php">Logout</a></li>								
							</ul>
							<?php } ?>
							
							<?php if($_SESSION['usertype'] == 2) { ?>
							<ul class="dropdown-menu" role="menu">
								<li role="presentation"><a href="hotelowner/index.php">Dashboard</a></li>	
								<li role="presentation"><a href="javascript:void();" onclick="logout()">Logout</a></li>									
							</ul>
							<?php } ?>
							
							<?php if($_SESSION['usertype'] == 3) { ?>
							<ul class="dropdown-menu" role="menu">
								<li role="presentation"><a href="profile/index.php">Account</a></li>	
								<li role="presentation"><a href="javascript:void();" onclick="logout()">Logout</a></li>									
							</ul>
							<?php } ?>
						<?php } ?>
                    </li>
                </ul>
            </div>					<!-- End of the dropdown buttons-->
        </div>
    </nav>	
		