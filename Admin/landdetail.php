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
    <h2>Detail of Land</h2>
    <?php
    $res=mysqli_query($db,"SELECT * FROM `land`;");
    echo "<table class='table table-bordered table-hover' >";
    echo "<tr style='background-color:#6db6b9e6;'>";

        echo "<th>"; echo "City"; echo "</th>";
        echo "<th>"; echo "Area"; echo "</th>";
        echo "<th>"; echo "Acre"; echo "</th>";
        echo "<th>"; echo "Price"; echo "</th>";
        echo "<th>"; echo "Owner Name"; echo "</th>";
        echo "<th>"; echo "Owner_id";  echo "</th>";
    echo "</tr>";

  while($row=mysqli_fetch_assoc($res))
  {
  	echo "<tr>";
    echo "<td>"; echo $row['city']; echo"</td>";
    echo "<td>"; echo $row['area']; echo"</td>";
    echo "<td>"; echo $row['acre']; echo"</td>";
    echo "<td>"; echo $row['price']; echo"</td>";
    echo "<td>"; echo $row['name']; echo"</td>";
    echo "<td>"; echo $row['ownid']; echo"</td>";

	echo "</tr>";
  }
  echo "</table>"


    ?>

    <br><br><br><br><br><br>
<h2 style="color:indianred;text-align:left;"><i>OWNER DETAILS.......<hr></i></h2>
	<form name="ownerdetail" action="ownerdetail.php" method="post">
				
	<input class="btn btn-default" type="submit" name="submit" value="OWNER DETAILS" style="color: black;width: 150px; height: 35px">
</form>

<style type="text/css">

footer
{
     height: 200px;
    width: 100%;
    background-color:bisque;
    padding-left: 40px;
}
</style>

<footer>
        <nav>
                <ul>
                    <br><br>
                    <li><a href="landinsert.php"><strong>ADD</strong></a></li><br>
                    <li><a href="delete.php"><strong>DELETE</strong></a></li><br>
                    <li><a href="userinfo.php"><strong>USER INFORMATION</strong></a></li><br>
                </ul>

        </nav>        
    
</footer>
 				
</body>
</html>