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
				
<hr width="100%" color="#ff0000" size="5" />
<hr width="100%" color="#1e5611" size="22" />


<?php 

// connect to database. 
$conn=mysql_connect("localhost","root","");
mysql_select_db("motjt2",$conn);
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection='utf8_general_ci'");


// we'll select all the information in the database for five dogs. 
$query = "SELECT * FROM tinfo"; 

// actually "do" the query. 
$result = mysql_query($query); 


print "<center>";

print "<table width=100%>";
 print "<tr bgcolor=#1a9ea3>";  

  
  
   echo "<th>নাম</th>"; 
echo "<th>পদবী</th>";

   
echo "<th>শাখা</th>";
   echo "<th>মোবাইল নাম্বার</th>";  
    echo "<th>সমস্যার ধরণ</th>";
   echo "<th>সমস্যার বিবরণ</th>";
   echo "<th>তারিখ</th>";
  
    
  print "<tr/>";







// সকল প্রশিক্ষণার্থীদের তথ্য দেখাবে
while ($row = mysql_fetch_array($result)) 
{ 
 print "<tr bgcolor=#eae7e3>";  

 
   
    echo "<td>$row[name]</td>";
  
  echo "<td>$row[designation]</td>";
   
   
   echo "<td>$row[dept]</td>";
     echo "<td>$row[mno]</td>";
	  
   echo "<td> $row[problemcategory]</td>";
   echo "<td>$row[problemdesc]</td>";
   echo "<td>$row[pdate]</td>";
   
	  
  print "<tr/>";
  print "<tr/>";
   
} 

//print "<a href=finduserbypass.php>Back</a>";
print "</center>";








?>

<hr width="100%" size="4" />


<hr width="100%" color="#6f87c3" size="30"/> 

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