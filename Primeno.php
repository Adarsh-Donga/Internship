<?php
	$num = 13;  
	$count=0;  
	for ( $i=1; $i<=$num; $i++){  
		if (($num%$i)==0){  
			$count++;  
		}
	}
	if ($count<3){  
	echo "The $num is a prime number.";  
	}
	else{
	echo " The $num is a not prime number."; 
	}
?>