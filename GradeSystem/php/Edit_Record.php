<?php
	
	include("connect.php");
	session_start();
	include ("session.php");
	
	$roll_no = $_POST["roll_no"];
	$class = "D10";
	$E1 = $_POST["E1"];
	$E2 = $_POST["E2"];
	$E3 = $_POST["E3"];
	$E4 = $_POST["E4"];
	$E5 = $_POST["E5"];
	$E6 = $_POST["E6"];
	$E7 = $_POST["E7"];
	$E8 = $_POST["E8"];
	$mp = $_POST["mp"];
	$viva = $_POST["viva"];
	$at = $_POST["attendance"];
	$ut1 = $_POST["ut1"];
	$ut2 = $_POST["ut2"];
	
	$exp_avg = ($E1+$E2+$E3+$E4+$E5+$E6+$E7+$E8)/8;
	$utavg = ($ut1+$ut2)/2;
	
	$tot = $exp_avg+$mp+$viva+$at;
	if($tot > 20)
		$grade = 'O';
	else if($tot > 18 && $tot < 20)
		$grade = 'A';
	else if($tot > 16 && $tot < 18)
		$grade = 'B';
	else if($tot > 14 && $tot < 16)
		$grade = 'C';
	else if($tot > 12 && $tot < 14)
		$grade = 'D';
	else if($tot > 10 && $tot < 12)
		$grade = 'E';
	else if($tot < 10)
		$grade = 'F';
		
	if($utavg > 16)
		$utgrade = 'O';
	else if($utavg > 14  && $utavg < 16)
		$utgrade = 'A';
	else if($utavg > 12 && $utavg < 14)
		$utgrade = 'B';
	else if($utavg > 11 && $utavg < 12)
		$utgrade = 'C';
	else if($utavg > 10 && $utavg < 11)
		$utgrade = 'D';
	else if($utavg > 8 && $utavg < 10)
		$utgrade = 'E';
	else if($uavg < 8)
		$utgrade = 'F';
	
	$sql="UPDATE web_programming
		  SET  CLASS='$class',
				E1='$E1',
				E2='$E2',
				E3='$E3',
				E4='$E4',
				E5='$E5',
				E6='$E6',
				E7='$E7',
				E8='$E8',
				EXP_AVG='$exp_avg',
				MP='$mp',
				VIVA='$viva',
				ATTENDANCE='$at',
				TOTAL='$tot',
				GRADE='$grade',
				UT1='$ut1',
				UT2='$ut2',
				UT_AVG='$utavg',
				UT_GRADE='$utgrade'
		 WHERE ROLL_NO='$roll_no'";

	if ($conn->query($sql) === TRUE) {
    header("location: Output_Table.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	 
?>
		
	
		
	