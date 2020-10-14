<?php
include "connection.php";
include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>OwnerDetail</title>
   <style type="text/css">
     .srch
     {
       margin-top: 40px;
      padding-left: 1000px;
     }
   </style>
</head>
<body>

  <!----------------Search button-------------------------->
  <div class="srch">
        <form class="navbar-form" method="post" name="form1">
            <input  class="form-control" type="text" name="search"
            placeholder="search LandOwner Id..." required="">
            <button style="background-color: #6db6b9e6;" type="submit"
            name="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>

        </form>

     </div>

   <h2>Details of Owner</h2>
    <?php
       if(isset($_POST['submit']))
       {
         $q=mysqli_query($db,"SELECT * from ownerdetail where ownid like '%$_POST[search]%' ");

         if(mysqli_num_rows($q)==0)
         {
          echo "Sorry! No Owner id found.Try searching again.";

         }
         else
         {
          echo "<table class='table table-bordered table-hover' >";
          echo "<tr style='background-color:#6db6b9e6;'>";

          echo "<th>"; echo "Owner_id"; echo "</th>";
          echo "<th>"; echo "Name"; echo "</th>";
          echo "<th>"; echo "Place"; echo "</th>";
          echo "<th>"; echo "Contact"; echo "</th>";
          echo "<th>"; echo "Email"; echo "</th>";
          echo "<th>"; echo "State"; echo "</th>";
          echo "</tr>";

         while($row=mysqli_fetch_assoc($q))
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
       echo "</table>";

         }
       }
       else
       {
         $res=mysqli_query($db,"SELECT * FROM `ownerdetail`;");
    echo "<table class='table table-bordered table-hover' >";
    echo "<tr style='background-color:#6db6b9e6;'>";

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
  echo "</table>";
  }

    ?>

        <br><br><br>
<h2 style="color:brown;text-align:left;"><i>LAND DETAILS.......<hr></i></h2>
  <form name="ownerdetail" action="landdetail.php" method="post">
        
  <input class="btn btn-default" type="submit" name="submit" value="LAND DETAILS" style="color: black;width: 150px; height: 35px">
</form>
 				
</body>
</html>