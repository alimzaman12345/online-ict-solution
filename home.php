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
			<center>

<center>
<img src="govtlogo2.jpg"><br/>
<marquee scrollamount="5"><h1><font color="#158915">অনলাইন আইসিটি সল্যুশন সিষ্টেম, বস্ত্র ও পাট মন্ত্রণালয়</font><h1></marquee>			
				 <p><form action="inr.php" method="post">

<center>	
				<svg width="400" height="110">
  <rect width="300" height="200" style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" />
  <text x="85" y="15" fill="white">সফটওয়্যার সংক্রান্ত  সমাধান</text>
  <text x="85" y="85" fill="red" font-size="60">
  
  
  <?php 

// connect to database. 
$conn=mysql_connect("localhost","root","");
mysql_select_db("motjt2",$conn);
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection='utf8_general_ci'");


// we'll select all the information in the database for five dogs. 
$query = "SELECT count(problemcategory) AS total FROM tinfo where problemcategory='সফটওয়্যার সংক্রান্ত'"; 

// actually "do" the query. 
$result = mysql_query($query); 





mysql_select_db('motjt2');
$result = mysql_query($query); 
$values = mysql_fetch_assoc($result); 
$num_rows = $values['total']; 
echo $num_rows;








?>
  
  
  
  
  
  
  
  
  
   <?php  echo $num_rows; ?> </text>
 
</svg>

<svg width="400" height="110">
  <rect width="300" height="200" style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" />
  <text x="85" y="15" fill="white">হার্ডওয়্যার সংক্রান্ত সমাধান</text>
  <text x="85" y="80" fill="red" font-size="60">
  
  
  
    
  <?php 

// connect to database. 
$conn=mysql_connect("localhost","root","");
mysql_select_db("motjt2",$conn);
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection='utf8_general_ci'");


// we'll select all the information in the database for five dogs. 
$query = "SELECT count(problemcategory) AS total FROM tinfo where problemcategory='হার্ডওয়্যার সংক্রান্ত'"; 

// actually "do" the query. 
$result = mysql_query($query); 





mysql_select_db('motjt2');
$result = mysql_query($query); 
$values = mysql_fetch_assoc($result); 
$num_rows = $values['total']; 
echo $num_rows;



?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <?php  echo $num_rows; ?> </text>
  Sorry, your browser does not support inline SVG.  
</svg>

<svg width="400" height="110">
  <rect width="300" height="200" style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" />
  <text x="85" y="15" fill="white">ই-ফাইল সংক্রান্ত সমাধান</text>
  <text x="85" y="80" fill="red" font-size="60">
  
  
   <?php 

// connect to database. 
$conn=mysql_connect("localhost","root","");
mysql_select_db("motjt2",$conn);
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection='utf8_general_ci'");


// we'll select all the information in the database for five dogs. 
$query = "SELECT count(problemcategory) AS total FROM tinfo where problemcategory='ই-ফাইল সংক্রান্ত'"; 

// actually "do" the query. 
$result = mysql_query($query); 





mysql_select_db('motjt2');
$result = mysql_query($query); 
$values = mysql_fetch_assoc($result); 
$num_rows = $values['total']; 
echo $num_rows;



?>
  
  
  
  
  
  
  
 <?php  echo $num_rows; ?></text>
  Sorry, your browser does not support inline SVG.  
</svg>

<svg width="400" height="110">
  <rect width="300" height="200" style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" />
  <text x="85" y="15" fill="white">নেটওয়ার্ক সংক্রান্ত সমাধান</text>
  <text x="85" y="80" fill="red" font-size="60">
  
  
  <?php 

// connect to database. 
$conn=mysql_connect("localhost","root","");
mysql_select_db("motjt2",$conn);
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection='utf8_general_ci'");


// we'll select all the information in the database for five dogs. 
$query = "SELECT count(problemcategory) AS total FROM tinfo where problemcategory='নেটওয়ার্ক সংক্রান্ত'"; 

// actually "do" the query. 
$result = mysql_query($query); 





mysql_select_db('motjt2');
$result = mysql_query($query); 
$values = mysql_fetch_assoc($result); 
$num_rows = $values['total']; 
echo $num_rows;



?>
  
  
  
  
  
  <?php  echo $num_rows; ?></text>
  Sorry, your browser does not support inline SVG.  
</svg>

<svg width="400" height="110">
  <rect width="300" height="200" style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" />
  <text x="85" y="15" fill="white">ইন্টারনেট সংক্রান্ত সমাধান</text>
  <text x="85" y="80" fill="red" font-size="60">
  
  
  
  
    <?php 

// connect to database. 
$conn=mysql_connect("localhost","root","");
mysql_select_db("motjt2",$conn);
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection='utf8_general_ci'");


// we'll select all the information in the database for five dogs. 
$query = "SELECT count(problemcategory) AS total FROM tinfo where problemcategory='ইন্টারনেট সংক্রান্ত'"; 

// actually "do" the query. 
$result = mysql_query($query); 





mysql_select_db('motjt2');
$result = mysql_query($query); 
$values = mysql_fetch_assoc($result); 
$num_rows = $values['total']; 
echo $num_rows;



?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <?php  echo $num_rows; ?></text>
  Sorry, your browser does not support inline SVG.  
</svg>

<svg width="400" height="110">
  <rect width="300" height="200" style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" />
  <text x="85" y="15" fill="white">অন্যান্য বিষয়ে সমাধান</text>
  <text x="85" y="80" fill="red" font-size="60">
  
  
  
   <?php 

// connect to database. 
$conn=mysql_connect("localhost","root","");
mysql_select_db("motjt2",$conn);
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection='utf8_general_ci'");


// we'll select all the information in the database for five dogs. 
$query = "SELECT count(problemcategory) AS total FROM tinfo where problemcategory='অন্যান্য'"; 

// actually "do" the query. 
$result = mysql_query($query); 





mysql_select_db('motjt2');
$result = mysql_query($query); 
$values = mysql_fetch_assoc($result); 
$num_rows = $values['total']; 
echo $num_rows;



?>
  
  
  
  
  
  
  
  
  
  
<?php  echo $num_rows; ?></text>
  Sorry, your browser does not support inline SVG.  
</svg>

<svg height="150" width="500">
  <ellipse cx="240" cy="100" rx="220" ry="30" style="fill:purple" />
  <ellipse cx="220" cy="70" rx="190" ry="20" style="fill:lime" />
  <ellipse cx="210" cy="45" rx="170" ry="15" style="fill:yellow" />
  
  <text x="110" y="55" fill="red">Internet problem Solve-->100%</text>
  <text x="110" y="85" fill="red">Hardware problem Solve-->100%</text>
  <text x="110" y="115" fill="white">Software problem Solve-->100%</text>
</svg>


<svg height="250" width="500">
  <polygon points="220,10 300,210 170,250 123,234" style="fill:lime;stroke:purple;stroke-width:1" />
  <text x="130" y="195" fill="red">Other's Solve->100%</text>
</svg>


<svg class="chart" width="500" height="500">
    <rect width="19" height="40" x="0" y="380"></rect>
    <rect width="19" height="80" x="20" y="340"></rect>
    <rect width="19" height="150" x="40" y="270"></rect>
    <rect width="19" height="160" x="60" y="260"></rect>
    <rect width="19" height="230" x="80" y="190"></rect>
    <rect width="19" height="420" x="100" y="0"></rect>
	<text x="170" y="295" fill="red">Other's Solve->100%</text>
	
</svg>




<center>
</div>


<hr width="100%" size="4" />




<hr width="100%" color="#6f87c3" size="10" />
<center>Copyright@Ministry of Textiles and Jute.<br/>




<center>
</div>

</header>							
			
		
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>