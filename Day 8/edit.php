<?php
	include("connection.php");
// require('db.php');
// include(".php");
//$id=$_REQUEST['No'];
// $query = "SELECT * from internship where id='".$No."'"; 
// $result = mysqli_query($conn, $query) or die ( mysqli_error());
// $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
  
<head>
    <title>Update Page</title>
    <style type="text/css">.a{
    	background-image: url(images.png);
    	height: fit-content;
		background-position: center; 
    }
    </style>
</head>
  
<body div class="a">
    <center>
        <?php
  
        $conn = mysqli_connect("localhost", "root", "", "staff");
          
        // Check connection
        if($conn == false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }?>
          
        <table border=1>
        <?php

        $status = "";
		if(isset($_POST['new']) && $_POST['new']==1)
		{
			// Taking all 5 values from the form data(input)
			$rn =$_POST['r_name'];
			$re =$_POST['r_email'];
			$rt	 =$_POST['r_tel'];
			$rrd =$_POST['r_rrd'];
			$radr =$_POST['r_addr'];
			$did = $_POST["did"];
			$submittedby = $_SESSION["r_name"];

			// Performing insert query execution
        	// here our table name is internship
			$update="update internship set r_name='".$rn."', r_email='".$re."', r_tel='".$rt."', r_rrd='".$rrd."', r_addr='".$radr."',submittedby='".$submittedby."' where r_email='".$re."' "; 


			mysqli_query($con, $update) or die(mysqli_error());
			$status = "Record Updated Successfully </br></br> <a href='view.php'>View Updated Record</a>";
			// echo "'<p style="color:#FF0000";>'".$status.'</p>';
			echo "<br><br>STATUS IS,".$status;
		}else {
			?>
			<div>
			<form name="form" method="post" action=""> 
			<input type="hidden" name="new" value="1" />

			<!-- <input name="id" type="hidden" value="<?php //echo $row['id'];?>" /> -->
			<p><input type="text" name="r_name" placeholder="Enter Name" required value="<?php echo $row["r_name"];?>" /></p>
			<p><input type="text" name="r_email" placeholder="Enter Email" required value="<?php echo $row['r_email'];?>" /></p>
			<p><input type="text" name="r_tel" placeholder="Enter Mobile no" required value="<?php echo $row["r_tel"];?>" /></p>
			<p><input type="radio" name="r_rrd" value="Male" required value="<?php echo $row['r_rrd'];?>" />Male</p>
			<input type="radio" name="r_rrd" value="Female" required value="<?php echo $row['r_rrd'];?>" />Female
			<p><input type="text" name="r_addr" placeholder="Enter Address" required value="<?php echo $row["r_addr"];?>" /></p>
			
			<p><input name="submit" type="submit" value="Update" /></p>
			<p><a href="view.php">View Record</a></p>
			<br><br><br>Data updated successfully.
			</form>
		<?php }
		$result = mysqli_query($con,$sql); 
		if(mysqli_query($con, $sql)){

			
	            echo nl2br("\n$r_name\n $r_email\n "
	                . "$r_tel\n $r_rrd\n $r_addr");
	            header("Location: view.php"); 
	        } else{
	            echo "ERROR: Hush! Sorry $sql. " 
	                . mysqli_error($con);
	        }
		echo $result;
        mysqli_close($con);
        ?>
    </table>
    </center>
</div>
</body>
  
</html>