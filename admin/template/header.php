<?php require_once("utils/utilities.php");?>

<head>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techie Product</title>
	<link rel="stylesheet" href="template/style.css">
     <link rel="stylesheet" href="css/Hadouken/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="css/Hadouken/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/Hadouken/css/styles.css">
    <link rel="stylesheet" href="css/Hadouken/css/Bootstrap-Payment-Form.css">
    <link rel="stylesheet" href="css/Hadouken/css/Google-Style-Login.css">
    <link rel="stylesheet" href="css/Hadouken/css/Hero-Technology.css">

    <link rel="stylesheet" href="css/Hadouken/css/untitled.css">
    <link rel="stylesheet" href="css/Hadouken/css/untitled-1.css">
    <link rel="stylesheet" href="css/Hadouken/css/untitled-2.css">
    <link rel="stylesheet" href="css/Hadouken/css/user.css">
    <link rel="stylesheet" href="css/Hadouken/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Hadouken/css/Pretty-Footer.css">
	 <link rel="stylesheet" href="css/Hadouken/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Hadouken/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/Hadouken/css/user.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="apple-touch-icon" sizes="57x57" href="images/fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/fav/favicon-16x16.png">
	<script>
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
		