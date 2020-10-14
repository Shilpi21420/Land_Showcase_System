<?php
include "connection.php";
include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>LandDetail</title>
</head>
<body>
<style type="text/css">
    .h
    {
    background-color:bisque;
    font-family: "Lato", sans-serif;  
    }
</style>
    
   &nbsp&nbsp&nbsp&nbsp<h1><i>Add Land Details....<i></h1>&nbsp&nbsp
    <form class="h" action="" method="post">
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>City Name</label><input type="text" name="city" class="form-control" required=""><br>
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>Area Name</label><input type="text" name="area" class="form-control" required=""><br>
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>No. of Acre</label><input type="text" name="acre" class="form-control" required=""><br>
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>Price</label><input type="text" name="price" class="form-control" required=""><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>Owner Name</label><input type="text" name="name" class="form-control" required=""><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>Owner_Id</label><input type="text" name="ownid" class="form-control" required=""><br>
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button class="btn btn-default" type="submit" name="submit">ADD</button><br>
   </form>
   
   <?php
       if(isset($_POST['submit']))
       {

         if(isset($_SESSION['login_user']))
         {
           mysqli_query($db,"INSERT INTO land VALUES ('$_POST[city]','$_POST[area]','$_POST[acre]','$_POST[price]','$_POST[name]',
            '$_POST[ownid]');");

         ?>

         <script type="text/javascript">
            alert("Added Successfully.");
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