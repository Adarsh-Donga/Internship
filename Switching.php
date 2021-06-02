<?php
	echo "Enter the alphabet between a to d<br><br>";
	$city='a';
	switch ($city) {
		case 'a':
			echo "The name of city start with '$city' is:<br>&nbspAhmedabad,<br>&nbspAmreli<br>";
			break;
		case 'b':
			echo "The name of city start with '$city' is:<br>&nbsp Banaskatha, <br>&nbsp Bharuch, <br>&nbsp  Bhavanagar,  <br>&nbsp Botad";
			break;	
		case 'c':
			echo "The name of city start with '$city' is:<br>  Chhota udepur";
			break;
		case 'd':
			echo "The name of city start with '$city' is: <br>&nbsp  Dahod,  <br>&nbsp Dangs ,  <br>&nbsp Devbhoomi Dwarka ";
			break;
		default:
			echo "Please!, enter valide alphabet";	
			break;
	}
?>