<?php 
include("connection.php");
?>

<!DOCTYPE html>
<html>
  
<head>
    <title>Delete page</title>
    <style type="text/css">.a{
    	background-image: url(images.png);
    	height: fit-content;
		background-position: center; 
    }
    </style>
</head>
  
<body div class="a"><center>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "staff");

	$rn =$_POST['r_name'];
	$re =$_POST['r_email'];
	$rt	 =$_POST['r_tel'];
	$rrd =$_POST['r_rrd'];
	$radr =$_POST['r_addr'];
	$did = $_POST["did"];
	
	echo "Before delete";
	$sql = "DELETE FROM internship WHERE r_email='".$re."' "; 
	$result = mysqli_query($con,$sql) or die ( mysqli_error());
	$status = "Record Deleteddd Successfully </br></br> <a href='view.php'>View Updated Record</a>";

	echo "<br>Deletedd".$rn.$re.$rt.$rrd.$radr;
	
		$result = mysqli_query($con,$sql); 
		if(mysqli_query($con, $sql)){

			
	            echo nl2br("\n$r_name\n $r_email\n "
	                . "$r_tel\n $r_rrd\n $r_addr");
	            echo "<br>Data deleted successfully";
	            header("Location: view.php"); 
	        } else{
	            echo "ERROR: Hush! Sorry $sql. " 
	                . mysqli_error($con);
	        }
		echo $result;
        mysqli_close($con);
	
	mysqli_close($con);
	header("Location: view.php"); 
	?>
	<p><a href="view.php">View Record </a></p>
</center></div>
</body>
</html>