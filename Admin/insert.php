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
    <div>
    <h1><i>Add Land Details....<i></h1>
    <form class="" action="" method="post">
      <label>City Name</label><br><input type="text" name="city" required="">;
      <label>Area Name</label><br><input type="text" name="area" required="">;
      <label>No. of Acre</label><br><input type="text" name="acre" required="">;
      <label>Price</label><br><input type="text" name="price" required="">;
      <label>Owner Name</label><br><input type="text" name="name" required="">;
     <label>Owner_Id</label><br><input type="text" name="ownid" required="">;
      <button class="btn btn-default" type="submit" name="submit">ADD</button>
   </form>
   </div>
   <?php
       if(isset($_POST['submit']))
       {

        if(isset($_SESSION['login_user']))
        {
          mysqli_query($db,"INSERT INTO `land` VALUES ('$_POST[city]','$_POST[area]','$_POST[acre]','$_POST[price]','$_POST[name]',
            '$_POST[ownid]');");
        ?>
        <script type="text/javascript">
            alert("Added Successfully.");
        </script>

       }
    }
    ?>


























    $res=mysqli_query($db,"SELECT * FROM `land`;");
    echo "<table class='table table-bordered table-hover' >";
    echo "<tr style='background-color:white;'>";

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
                    <li><a href="insert.php"><strong>INSERT</strong></a></li><br>
                    <li><a href="update.php"><strong>UPDATE</strong></a></li><br>
                    <li><a href="delete.php"><strong>DELETE</strong></a></li><br>
                </ul>
        </nav>        
    

</footer>
 				
</body>
</html>