<?php

	include("connection.php");
	
		if (empty($rn) && empty($re) && empty($rt) && empty($rrd) && empty($radr))
		{
			echo "All fields are requered";
		}
		else
		{
			if(empty($rn))
		 	{
		 		echo "Username is Requrid<br>";
		 	}
	 		if(empty($re))
	 		{
	 			echo "Email id is requered<br>";
	 			//array_push($errors,"Email is Requrid");
	 		}
	 		if(empty($rt))
	 		{
	 			echo "Mobile no is requered<br>";
	 		}
	 		if(empty($rrd))
			{
	 			echo "Select your gender<br>";
	 		}
	    	if(empty($radr) )
	    	{
	     		echo "Address is requered<br>";
	     	}
	     		if($rn!="" && $re!="" && $rt!="" && $rrd!="" && $radr!="")
				{
					// echo "Enter in-to IF part";
					// if ($data) {
					// 	echo "Data inserted";
					// }
					$rmil="select $re from register where $re!=$r_email";
					$rtel="select $rt from register where $rt!=$r_tel";
					if ($rmil)
					{
						if ($rtel) {
							if($re==$_POST["rmil"]) echo "Enter valid id"; 
						}
						else{
							echo "\n\n\n\ INsert";
						    $query = "INSERT INTO `internship` (`r_name`, `r_email`, `r_tel`, `r_rrd`, `r_addr`)  values ('$rn','$re','$rt','$rrd','$radr')";
						    $data = mysqli_query($con,$query); //echo "<br>Data Inserted";
							

							mysql_close($con);
						    echo "Data is inserted Finish";
					}	
					else
						echo "Wrong phone number";
					}
					else
						echo "Wrong E-mail id";
				}
		    header("Location:/Day 6/view.php");
     	
?>