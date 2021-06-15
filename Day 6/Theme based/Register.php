<?php 
	include("connection.php");
 ?>
<html>
<head>
	<title>Insert page</title>
	<link rel="stylesheet" type="text/css" href="Register_style.css">
</head>
<body>
	<div class="regstbox">
		<img src="user_avt.png" class="user_avt">
		<h1>Registrastion Here</h1>

		<form action="" method="POST"><p>
			User name:<input type="text" name="r_name" value="" placeholder="Enter your name">
			<br>E-mail:<input type="email" name="r_email" value="" placeholder="Enter your E-mail id">
			<br>Mobile No:<input type="tel" name="r_tel" value="" minLength = "10"maxLength = "13" placeholder="Enter your Mobile No">
			<br>Gender:<input type="radio" name="r_rrd" value="Male">Male<input type="radio" name="r_rrd" value="Female">Female
			<p>Address<input type="text" name="r_addr" value="" minLength = "8"maxLength = "50" placeholder="Enter your address"></p>
			<center><p><input type="submit" name="Registeration" value="submit" 
			<?php //header("Location:/Day 6/view.php"); ?>></p></center><br>
			<p><a href="view.php">View data!</a><p>	
	</form>
	<?php 
		include("Register_to_home.php");
	?>
			
		
	</div>

</body>
</html>