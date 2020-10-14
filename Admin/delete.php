<?php
include "connection.php";
include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>DeleteLandDetail</title>
</head>
<body>
<style type="text/css">
    .h
    {
    background-color:bisque;
    font-family: "Lato", sans-serif;  
    }
</style>

   &nbsp&nbsp&nbsp&nbsp<h1><i>Delete Land Details....<i></h1>&nbsp&nbsp
    <form class="h" action="" method="post">
      &nbsp&nbsp&nbsp<label>OWNER_ID</label> <input class="form-control " type="text" name="ownid">
      &nbsp&nbsp&nbsp&nbsp<button class="btn btn-default" type="submit" name="submit">DELETE</button><br>
  </form>

   <?php
       if(isset($_POST['submit']))
       {

         if(isset($_SESSION['login_user']))
         {
           mysqli_query($db,"DELETE FROM `land` WHERE ownid=$_POST[ownid];");

         ?>

         <script type="text/javascript">
            alert("DELETE Successfully.");
         </script>


         <?php

         }
        }
    ?>

    <form name="landdetail" action="landdetail.php" method="post">
    <input class="btn btn-default" type="submit" name="submit" value="LAND DETAILS" style="color: black;width: 150px; height: 35px">
    </form>
        
</body>
</html>






























    
  
 