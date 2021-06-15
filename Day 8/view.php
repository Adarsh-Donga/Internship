<?php 
	include("connection.php");
 ?>

<!DOCTYPE html>
<html>
  
<head>
    <title>View page</title>
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
  
        $con = mysqli_connect("localhost", "root", "", "staff");
          
        // Check connection
        if($con === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Performing insert query execution
        // here our table name is internship
        $sql = "select * from internship";
        $result = mysqli_query($con,$sql);?>
        <table border=1>
        <th>
        	<td>User name</td>
        	<td>Email</td>
        	<td>Mobile no</td>
        	<td>Gender</td>
        	<td>Address</td>
        	<td>Update</td>
        	<!-- <td>Delete</td> -->
        </th>
        <?php
		while($row = mysqli_fetch_assoc($result)) { ?>

			<tr><td align="center"><?php $count=1;echo $count; ?></td>
			<td align="center"><?php echo $row["r_name"]; ?></td>
			<td align="center"><?php echo $row["r_email"]; ?></td>
			<td align="center"><?php echo $row["r_tel"]; ?><br></td>
			<td align="center"><?php echo $row["r_rrd"]; ?><br></td>
			<td align="center"><?php echo $row["r_addr"]; ?></td>
			<?php echo "<td><a href='edit.php?did=$data[0]'>Update</a></td>"; ?>
			<?php //echo "<td><a href='delete.php?did=$data[0]'>Delete</a></td>"; ?>
			
			</tr>
			<?php  $count+=1;  $did =["count"];}?> </table> <?php
	          
	        if(mysqli_query($con, $sql)){
	  
	            echo nl2br("\n$r_name\n $r_email\n "
	                . "$r_tel\n $r_rrd\n $r_addr");
	        } else{
	            echo "ERROR: Hush! Sorry $sql. " 
	                . mysqli_error($con);
	        }
          
        // Close connection
        mysqli_close($con);
        ?>
        
        <p><a href="Register.php">Insert a New Record ?</a></p>

    </center></div>
</body>
  
</html>