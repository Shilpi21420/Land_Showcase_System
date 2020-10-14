<?php
include "connection.php";
include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>LandDetail</title>
    <style type="text/css">
        .srch
        { margin-top: 40px;
         padding-left: 1000px;

        }

    </style>
</head>
<body>
    
    <!-- -------------------------------search button------------------------->
     
     <div class="srch">
        <form class="navbar-form" method="post" name="form1">
            <input  class="form-control" type="text" name="search"
            placeholder="search Land..." required="">
            <button style="background-color: #6db6b9e6;" type="submit"
            name="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>

        </form>

     </div>
    
    <h2>Detail of Land</h2>
    <?php
       if(isset($_POST['submit']))
       {
         $q=mysqli_query($db,"SELECT *from land where city like '%$_POST[search]%' ");

         if(mysqli_num_rows($q)==0)
         {
          echo "Sorry! No city found.Try searching again.";

         }
         else
         {
        echo "<table class='table table-bordered table-hover' >";
        echo "<tr style='background-color:#6db6b9e6;'>";

        echo "<th>"; echo "City"; echo "</th>";
        echo "<th>"; echo "Area"; echo "</th>";
        echo "<th>"; echo "Acre"; echo "</th>";
        echo "<th>"; echo "Price"; echo "</th>";
        echo "<th>"; echo "Owner Name"; echo "</th>";
        echo "<th>"; echo "Owner_id"; echo "</th>";
    echo "</tr>";

  while($row=mysqli_fetch_assoc($q))
  {
    echo "<tr>";
    echo "<td>"; echo $row['city']; echo"</td>";
    echo "<td>"; echo $row['area']; echo"</td>";
    echo "<td>"; echo $row['acre']; echo"</td>";
    echo "<td>"; echo $row['price']; echo"</td>";
    echo "<td>"; echo $row['name']; echo"</td>";
    echo "<td>"; echo $row['ownid']; echo "</td>";

    echo "</tr>";
  }
  echo "</table>";
    }
    }
     /*if button is not pressed.*/
     else
     {
       

    $res=mysqli_query($db,"SELECT * FROM `land`;");
    echo "<table class='table table-bordered table-hover' >";
    echo "<tr style='background-color:#6db6b9e6;'>";

        echo "<th>"; echo "City"; echo "</th>";
        echo "<th>"; echo "Area"; echo "</th>";
        echo "<th>"; echo "Acre"; echo "</th>";
        echo "<th>"; echo "Price"; echo "</th>";
        echo "<th>"; echo "Owner Name"; echo "</th>";
        echo "<th>"; echo "Owner_id"; echo "</th>";
    echo "</tr>";

     while($row=mysqli_fetch_assoc($res))
      {
    echo "<tr>";
    echo "<td>"; echo $row['city']; echo"</td>";
    echo "<td>"; echo $row['area']; echo"</td>";
    echo "<td>"; echo $row['acre']; echo"</td>";
    echo "<td>"; echo $row['price']; echo"</td>";
    echo "<td>"; echo $row['name']; echo"</td>";
    echo "<td>"; echo $row['ownid']; echo "</td>";

    echo "</tr>";
  }
  echo "</table>";
  }
    ?>

    <br><br><br>
<h2 style="color:indianred;text-align:left;"><i>OWNER DETAILS.......<hr></i></h2>
	<form name="landdetail" action="ownerdetail.php" method="post">
				
	<input class="btn btn-default" type="submit" name="submit" value="OWNER DETAILS" style="color: black;width: 150px; height: 35px">
</form>
 				
</body>
</html>