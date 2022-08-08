<?php

//fetch.php

include('database_connection.php');
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection='utf8_general_ci'");

if(isset($_POST["problemcategory"]))
{
 $query = "
 SELECT * FROM tinfo 
 WHERE problemcategory = '".$_POST["problemcategory"]."' 
 ORDER BY problemcategory
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'dept'   => $row["dept"],
   'name'  => floatval($row["name"])
  );
 }
 echo json_encode($output);
}

?>