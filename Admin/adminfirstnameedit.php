<?php
    include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update FirstName</title>

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
        <h1 style="color: black; text-align: center; font-size: 35px;font-family: lucida Console;">Change FirstName</h1>
    </div>
    <div style="padding-left:25px">
    <form action="" method="post">
    	<input class="form-control" type="text" name="first" placeholder="Enter Your present FirstName" required=""><br><br>
    	<input class="form-control" type="text" name="first" placeholder="Enter your new FirstName" required=""><br><br>
      <input class="form-control" type="password" name="password" placeholder="Enter Your password" required=""><br><br>
    	<button class="btn btn-default" type="submit" name="submit">Save</button>
    </form>
    </div>
    </div>
    <?php
       if(isset($_POST['submit']))
       {
       	if(mysqli_query($db,"UPDATE admin SET first='$_POST[first]' WHERE password='$_POST[password]';"))
       	{
       		?>
       		<script type="text/javascript">
       			alert("The First name updated successfully.");
       		</script>

         
       		<?php
       	}
       }
    ?>
</body>
</html>