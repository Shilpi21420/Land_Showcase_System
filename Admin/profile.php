<?php
    include "connection.php";
    include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<style type="text/css">
		.wrapper
		{
		  width:350px;
			height: 400px;
			margin: 60px auto;
			background-color: bisque;
		}


		footer
		{
			width: auto;
			height: 50px;

        }
	</style>
</head>
<body style="background-color: #b0c191;">
	<div>
		<form action="" method="post">
           <a href="landdetail.php"><strong><h3 style="color: black; width: 50%;display: inline;">LandDetail</h3></strong>
           </a>&nbsp&nbsp&nbsp&nbsp
       </form>
		<div class="wrapper">
		 <?php

		   $q=mysqli_query($db,"SELECT *FROM admin where username='$_SESSION[login_user]' ;");

		 ?>	<br><br>
		 <?php
		    $row=mysqli_fetch_assoc($q);

		 ?>
		  <div style="text-align:center ;font-size: 18px; padding-top: 20px;"><b>Welcome <?php echo $_SESSION['login_user']; ?></b></div>
		  <?php
		      echo "<table class='table table-bordered'>";
              
		       echo "<tr>";
		        echo "<td>";
		           echo "<b> First Name: </b>";
		        echo "</td>";

		        echo "<td>";
		           echo $row['first'];
		        echo "</td>";
		      echo "</tr>";

		      echo "<tr>";
		        echo "<td>";
		           echo "<b> Last Name: </b>";
		        echo "</td>";

		        echo "<td>";
		           echo $row['last'];
		        echo "</td>";
		      echo "</tr>";

		      echo "<tr>";
		        echo "<td>";
		           echo "<b> User Name: </b>";
		        echo "</td>";

		        echo "<td>";
		           echo $row['username'];
		        echo "</td>";
		      echo "</tr>";

		      echo "<tr>";
		        echo "<td>";
		           echo "<b> Password: </b>";
		        echo "</td>";

		        echo "<td>";
		           echo $row['password'];
		        echo "</td>";
		      echo "</tr>";

		      echo "<tr>";
		        echo "<td>";
		           echo "<b> E-mail: </b>";
		        echo "</td>";

		        echo "<td>";
		           echo $row['email'];
		        echo "</td>";
		      echo "</tr>";

		      echo "<tr>";
		        echo "<td>";
		           echo "<b> Contact: </b>";
		        echo "</td>";

		        echo "<td>";
		           echo $row['contact'];
		        echo "</td>";
		      echo "</tr>";

		       echo "<tr>";
		        echo "<td>";
		           echo "<b> Place: </b>";
		        echo "</td>";

		        echo "<td>";
		           echo $row['place'];
		        echo "</td>";
		      echo "</tr>";

              
		      
		      echo "</table>";
		  ?>
		</div>
	</div>
	<footer>
		 <div>
		<form action="" method="post">
           <a href="adminfirstnameedit.php"><strong><h3 style="color: black;width: 50%; display: inline;">UpdateFirstName</h3></strong>
           </a>&nbsp&nbsp&nbsp&nbsp&nbsp
           <a href="adminlastnameedit.php"><strong><h3 style="color: black;width: 50%; display: inline;">UpdateLastName</h3></strong>
           </a>&nbsp&nbsp&nbsp&nbsp&nbsp
           <a href="adminemailedit.php"><strong><h3 style="color: black; width: 50%; display: inline;">UpdateEmail</h3></strong>
           </a>&nbsp&nbsp&nbsp&nbsp&nbsp
           <a href="admincontactedit.php"><strong><h3 style="color: black; width: 50%; display: inline;">UpdateContact</h3></strong>
           </a>&nbsp&nbsp&nbsp&nbsp&nbsp
             <a href="adminplaceedit.php"><strong><h3 style="color: black; width: 50%; display: inline;">UpdatePlace</h3></strong>
           </a>&nbsp&nbsp&nbsp&nbsp&nbsp
              <a href="adminUseredit.php"><strong><h3 style="color: black; width: 50%; display: inline;">Updateusername</h3></strong>
           </a>&nbsp&nbsp&nbsp&nbsp&nbsp
         
     
     
        </form>
	     </div>
	</footer>
	

</body>
</html>