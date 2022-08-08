
<?php

//this page shows login successful and hyperlink to logout page
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
?>






<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Menu</title>
		<meta name="description" content="Menu" />
		<meta name="keywords" content="Alimuzzaman" />
		<meta name="author" content="Alimuzzaman" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
							
							<li><a class="gn-icon gn-icon-article" href="home.php">Dashboard</a></li>
							<li><a class="gn-icon gn-icon-illustrator" href="addrequisition.php">Requisition</a></li>	
							<li><a class="gn-icon gn-icon-article" href="allsolutionsrc.php">Training Report</a></li>
								
								
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="home.php">Dashboard</a></li>
				<li><a class="codrops-icon codrops-icon-prev" href="logout.php?logout"><span>Sign Out</span></a></li>
				<li><a 
			</ul>
			
			</div><!-- /container -->	
			
			
			<header>
			<br/><br/><br/><br/><br/><br/><br/><div>
			

</header>							
			
		
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
<?php ob_end_flush(); ?>