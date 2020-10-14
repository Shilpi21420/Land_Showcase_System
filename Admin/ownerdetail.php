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
    <h2>Details of Owner</h2>
    <?php
    $res=mysqli_query($db,"SELECT * FROM `ownerdetail`;");
    echo "<table class='table table-bordered table-hover' >";
    echo "<tr style='background-color:white;'>";

        echo "<th>"; echo "Owner_id"; echo "</th>";
        echo "<th>"; echo "Name"; echo "</th>";
        echo "<th>"; echo "Place"; echo "</th>";
        echo "<th>"; echo "Contact"; echo "</th>";
        echo "<th>"; echo "Email"; echo "</th>";
        echo "<th>"; echo "State"; echo "</th>";
    echo "</tr>";

  while($row=mysqli_fetch_assoc($res))
  {
  	echo "<tr>";
    echo "<td>"; echo $row['ownid']; echo "</td>";
    echo "<td>"; echo $row['name']; echo"</td>";
    echo "<td>"; echo $row['place']; echo"</td>";
    echo "<td>"; echo $row['contact']; echo"</td>";
    echo "<td>"; echo $row['email']; echo"</td>";
    echo "<td>"; echo $row['state']; echo"</td>";

	echo "</tr>";
  }
  echo "</table>"


    ?>

    
        <br><br><br>
<h2 style="color:brown;text-align:left;"><i>LAND DETAILS.......<hr></i></h2>
  <form name="ownerdetail" action="landdetail.php" method="post">
        
  <input class="btn btn-default" type="submit" name="submit" value="LAND DETAILS" style="color: black;width: 150px; height: 35px">
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
                    <li><a href="addownerdetail.php"><strong>ADD</strong></a></li><br>
                    <li><a href="deleteownerdetail.php"><strong>DELETE</strong></a></li><br>
                </ul>
        </nav>        
    

</footer>
 				
</body>
</html>