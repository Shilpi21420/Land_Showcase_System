<?php
    include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Contact</title>

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
        <h1 style="color: black; text-align: center; font-size: 35px;font-family: lucida Console;">Change Contact</h1>
    </div>
    <div style="padding-left:25px">
    <form action="" method="post">
    	<input class="form-control" type="number" name="contact" placeholder="Enter Your present Contact" required=""><br><br>
    	<input class="form-control" type="number" name="contact" placeholder="Enter your new Contact" required=""><br><br>
      <input class="form-control" type="password" name="password" placeholder="Enter Your password" required=""><br><br>
    	<button class="btn btn-default" type="submit" name="submit">Save</button>
    </form>
    </div>
    </div>
    <?php
       if(isset($_POST['submit']))
       {
       	if(mysqli_query($db,"UPDATE admin SET contact='$_POST[contact]' WHERE password='$_POST[password]';"))
       	{
       		?>
       		<script type="text/javascript">
       			alert("The Contact updated successfully.");
       		</script>

       		<?php
       	}
       }
    ?>
</body>
</html>