<?php
   include "connection.php";
   include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale-1">
	

  <style type="text/css">
  	section
  	{
  		margin-top: -20px;
  	}
  </style>
</head>
<body>
	<section>
		<div style=" height: 800px; margin-top: 0px;background-image: url(images/login.jpg); background-size: cover;background-repeat: no-repeat;">
			<br><br><br><br><br><br>
			<div class="box1">
				<br><br><br>
				<h1 style="color: black; text-align: center; font-size: 35px;font-family: lucida Console;">Land Showcase System</h1><br>
				<h1 style="color: black; text-align: center; font-size: 25px;">User Login Form</h1><br>
				<form name="login" action="" method="post">
					<div class="login">
					<input class="form-control" type="text" name="username" placeholder="username" required=""> <br>
					<input class="form-control" type="password" name="password" placeholder="password" required=""><br>
					<input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black;width: 90px; height: 35px">
					</div>
				
				<p ><br>
					<br>
					&nbsp &nbsp &nbsp &nbsp<a href="update_password.php">Forgot password?</a><br>&nbsp &nbsp &nbsp
					New to the website?<a href="registration.php">Sign Up</a>
				</p>
				</form>
			</div>
		</div>
	</section>

    <?php
    
     if(isset($_POST['submit']))
     {
     	$count=0;
     	$res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");

      $row= mysqli_fetch_assoc($res);

     	$count=mysqli_num_rows($res);
     	if($count==0)
     	{
     		?>
     		<script type="text/javascript">
     			alert("User name and password doesnat match.");
     		</script>
     		<?php
     	}
     	else
     	{
        /*--------------------------if username and password matches--------------------*/
     		$_SESSION['login_user'] = $_POST['username'];
        $_SESSION['pic']= $row['pic'];

     		?>
             <script type="text/javascript">
             	window.location="landdetail.php"
             </script>
     		<?php
     	}
     }

    ?>

</body>
</html>