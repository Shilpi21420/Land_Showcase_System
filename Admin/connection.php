<?php



  $db=mysqli_connect("localhost","root","","land_showcase");   /*server name,username,password,database name*/


 if (!$db) {

  	die("connecton failed:".mysql_connect_error());
  	
  }
?>