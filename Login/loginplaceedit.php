<?php
    include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update PlaceName</title>

	<style type="text/css">
		body
		{
			
			height:650px;
			background-color: lightsalmon;
		}
		.wrapper
		{
			width:400px;
			height: 400px;
			background-color: darkred;
			margin: 100px auto;
			opacity: .7;
		}
		.form-control
		{
			width: 350px;
		}
	</style>
</head>
<body>

   <form action="profile.php" method="post">
          <input class="btn btn-default" type="submit" name="submit" value="Profile">&nbsp&nbsp&nbsp&nbsp
       </form>

	<div class="wrapper">
	<div><br>
        <h1 style="color: black; text-align: center; font-size: 35px;font-family: lucida Console;">Change Place</h1>
    </div>
    <div style="padding-left:25px">
    <form action="" method="post">
    	<input class="form-control" type="text" name="place" placeholder="Enter Your present place" required=""><br><br>
    	<input class="form-control" type="text" name="place" placeholder="Enter your new Place" required=""><br><br>
      <input class="form-control" type="password" name="password" placeholder="Enter Your password" required=""><br><br>
    	<button class="btn btn-default" type="submit" name="submit">Save</button>
    </form>
    </div>
    </div>
    <?php
       if(isset($_POST['submit']))
       {
       	if(mysqli_query($db,"UPDATE user SET place='$_POST[place]' WHERE password='$_POST[password]';"))
       	{
       		?>
       		<script type="text/javascript">
       			alert("The Email updated successfully.");
       		</script>

       		<?php
       	}
       }
    ?>
</body>
</html>