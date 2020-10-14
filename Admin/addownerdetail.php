<?php
include "connection.php";
include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>OwnerDetail</title>
</head>
<body>
<style type="text/css">
    .h
    {
    background-color:bisque;
    font-family: "Lato", sans-serif;  
    }
</style>
    
   &nbsp&nbsp&nbsp&nbsp<h1><i>Add Owner Details....<i></h1>&nbsp&nbsp
    <form class="h" action="" method="post">
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>Owner Id</label><input type="text" name="ownid" class="form-control" required=""><br>
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>Owner Name</label><input type="text" name="name" class="form-control" required=""><br>
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>Place</label><input type="text" name="place" class="form-control" required=""><br>
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>Contact Number</label><input type="text" name="contact" class="form-control" required=""><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>Email</label><input type="text" name="email" class="form-control" required=""><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>State</label><input type="text" name="state" class="form-control" required=""><br>
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button class="btn btn-default" type="submit" name="submit">ADD</button><br>
   </form>
   
   <?php
       if(isset($_POST['submit']))
       {

         if(isset($_SESSION['login_user']))
         {
           mysqli_query($db,"INSERT INTO ownerdetail VALUES ('$_POST[ownid]','$_POST[name]','$_POST[place]','$_POST[contact]','$_POST[email]',
            '$_POST[state]');");

         ?>

         <script type="text/javascript">
            alert("Add Successfully.");
         </script>


         <?php

         }
        }
    ?>

    <form name="landdetail" action="ownerdetail.php" method="post">
    <input class="btn btn-default" type="submit" name="submit" value="OWNER DETAIL" style="color: black;width: 150px; height: 35px">
    </form>
 				
</body>
</html>