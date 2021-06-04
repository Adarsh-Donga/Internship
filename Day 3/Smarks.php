<!DOCTYPE html>
<html>
<body>

<?php 
$oop;

	$marks=$_POST["c"] + $_POST["cpluse"] + $_POST["oop"] + $_POST["ajava"] + $_POST["python"];

	$percentage = $percentage=($marks/350)*100;

	if($_POST["c"]<35){
		$remark1="<font color='red'>Fail</font>";
	} else $remark1="<font color='green'>Pass</font>";
	if ( $_POST["cpluse"]<35 ) {
		$remark2="<font color='red'>Fail</font>";
	} else $remark2="<font color='green'>Pass</font>";
	if($_POST["oop"]<35){
		$remark3="<font color='red'>Fail</font>";
	} else $remark3="<font color='green'>Pass</font>";
	if ( $_POST["ajava"]<35 ) {
		$remark4="<font color='red'>Fail</font>";
	} else $remark4="<font color='green'>Pass</font>";
	if($_POST["python"]<35){
		$remark5="<font color='red'>Fail</font>";
	} else $remark5="<font color='green'>Pass</font>";


?>



<center>
		<tr>
		<td>
			<table border=1>
				<tr>
					<th><i>Subject name</i></th>
					<th><i>Total marks</i></th>
					<th><i>Remark</i></th>
				</tr>
				<tr>
					<td>C</td>
					<td><?php echo $_POST["c"]; ?></td>
					</td><td><?php echo $remark1; ?></td>
				</tr>
				<tr>
					<td>Cpluse</td>
					<td><?php echo $_POST["cpluse"]; ?></td>
					</td><td><?php echo $remark2; ?></td>
				</tr>
				<tr>
					<td>Oop</td>
					<td><?php echo $_POST["oop"]; ?></td>
					<td><?php echo $remark3; ?></td>
				</tr>
				<tr>
					<td>Ajava</td>
					<td><?php echo $_POST["ajava"]; ?></td>
					</td><td><?php echo $remark4; ?></td>
				</tr>
				<tr>
					<td>Python</td>
					<td><?php echo $_POST["python"]; ?></td>
					</td><td><?php echo $remark5; ?></td>
				</tr>

				<tr>
					<td><b>Total</b></td>
					<td><b><?php echo "$marks"; ?><b></td><td></td>
				</tr>
				<tr>
					<td><b>Persentage</b></td>
					<td><b><?php echo "$percentage"."%"; ?><b></td><td></td>
				</tr>
			</table>
		</td>
		</tr>
	</center>


</body>
</html>