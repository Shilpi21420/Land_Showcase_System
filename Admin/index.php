<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Land Showcase System</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width,initial-scale=1">
  <style type="text/css">
    nav
   {
    float: right;
    word-spacing: 20px;
    padding: 20px;
    padding-right: 50px;

   }
   nav li
  {
    display: inline-block;
    line-height: 70px;
  }
  </style>
</head>

<body>
	<div class="wrapper">
		<div class="logo">
			<img style="height:60px; width:60px;" src="images/logo.png">
		    <h1 style="color: white">LAND SHOWCASE SYSTEM</h1>
		</div>
		<?php
            if(isset($_SESSION['login_user']))
            {
            	?>
                <nav>
				<ul>
					<li><a href="index.php"><b>HOME</b></a></li>
					<li><a href="logout.php"><b>LOGOUT</b></a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			    </nav>
                <?php
            }
            else
            {
            	?>   
            	<nav>
			    <ul>
					<li><a href="index.php"><strong>HOME</strong></a></li>
					<li><a href="login.php"><strong>LOGIN</strong></a></li>
				    <li><a href="feedback.php"><strong>FEEDBACK</strong></a></li>
					<li><a href="registration.php"><strong>REGISTRATION</strong></a></li>
				</ul>
                </nav>
                <?php
            }
			?>

			
	<section>
        	<div class="sec">
        	<br><br><br>
        	<div class="box">
        		<br><br><br><br><br><br><br>
            <h1 style=" text-align:center;font-size:50px;color: darkred;">LAND SHOWCASE SYSTEM</h1>
        		<h1 style="text-align: center;font-size: 45px;color:firebrick;"><i><br>"Owning a land is a keystone of wealth...<br>both financial affluence and emotional security".</i></h1><br><br>
        		
        	</div>
      </div>
  </section>
       
         <footer>
              <br><br><br>
             <p>
             	<h3 style="text-align:left;color:darkred;font-size: 25px"><strong><i>Email:  Landshowcase@gmail.com<br>
             	Mobile:  9955432876</i></strong></h3>
             </p>
           </footer>  

    </div>
	
	

</body>
</html>