<?php
   include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
    	body
    	{
    		background-color: cornsilk;
    		background-image: url(images/122.jpg);
    		background-repeat: no-repeat;
    		background-size: cover;
    	}
    	.form-control
    	{
    		height: 70px;
    		width: 1050px;
    	}
    	.scroll
    	{
    		width: 100%;
    		height:400px;
    		overflow: auto;
    	}
    </style>
</head>
<body>
     <div>
     	 <header>
      <div class="logo">
       
        <h1 style="color: white">LAND SHOWCASE SYSTEM</h1>
      </div>
     <nav>
        <ul>
          <li><a href="login.php"><h3 style="text-align: right;">LOGOUT</h3></a></li>
     
        </ul>
      </nav>
      </header>
     	<br><br><br>

     	<h1>Please do comment below for any queries or suggestions.</h1><br><br>
     	<form style="" action="" method="post">
     		<input class="form-control" type="text" name="comment" placeholder="comment here"><br><br>
     		<input class="btn btn-default" type="submit" name="submit" value="comment" style="width: 200px; height:35px; background-color: cornsilk;">
     	</form>
     <br><br>

     <div class="scroll">
   <!--------------------------------------php code----------------------------------------------->
     	
		
		<?php
			if(isset($_POST['submit']))
			{
				$sql="INSERT INTO `feedback` VALUES('', '$_POST[comment]');";
				if(mysqli_query($db,$sql))
				{
					$q="SELECT * FROM `feedback` ORDER BY `feedback`.`no` DESC";
					$res=mysqli_query($db,$q);

				echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{

						echo "<tr>";
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
				echo "</table>";
				}

			}

			else
			{
				$q="SELECT * FROM `feedback` ORDER BY `feedback`.`no` DESC"; 
					$res=mysqli_query($db,$q);

				echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{
						echo "<tr>";
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
				echo "</table>";
			}
		?>
       </div>
     </div>
</body>
</html>