<?php 
	$servername = "localhost";
	$r_name = "root";
	$r_email = "";
	$r_tel = "";
	$r_rrd = "";
	$r_addr = "";
	$dbname = "staff"; 

	$con = mysqli_connect($servername,$r_name,$r_email,$dbname);

	if ($con) {
		//echo "Conaction ok<br/>";
	}
	else{
		die("Connation Failed".mysqli_connect_error());
	} 

	error_reporting(0);

		$rn = $_POST['r_name'];
		$re = $_POST['r_email'];
		$rt = $_POST['r_tel'];
		$rrd = $_POST['r_rrd'];
		$radr = $_POST['r_addr']; 
		

 ?>