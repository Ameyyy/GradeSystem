<?php
	error_reporting(0);
	include("connect.php");
	session_start();
	include ("session.php");
	$roll_no = $_POST["roll_no"];
	$name = $_POST["name"];
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
	if($E1 > 10 || $E2 > 10 || $E3 > 10 || $E4 > 10 || $E5 > 10 || $E6 > 10 || $E7 > 10 || $E8 > 10 || $mp > 5 || $viva > 5 || $at > 5 || $ut1 > 20 || $ut2 > 20)
		echo "Marks exceed the limit";
	else
	{
	$exp_avg = ($E1+$E2+$E3+$E4+$E5+$E6+$E7+$E8)/8;
	$utavg = ($ut1+$ut2)/2;
	$tot = $exp_avg+$mp+$viva+$at;
	if($tot >= 20)
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
	if($utavg >= 16)
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
	$sql = "INSERT INTO web_programming (ROLL_NO, NAME, CLASS, E1,E2,E3,E4,E5,E6,E7,E8, EXP_AVG, MP, VIVA, ATTENDANCE, TOTAL, GRADE, UT1, UT2, UT_AVG, UT_GRADE)
			VALUES ('$roll_no', '$name', '$class', '$E1', '$E2', '$E3', '$E4', '$E5', '$E6',' $E7', '$E8', '$exp_avg', '$mp', '$viva', '$at', '$tot', '$grade', '$ut1','$ut2', '$utavg', '$utgrade')";
	if ($conn->query($sql) === TRUE) {
    header("location: Output_Table.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}
	
?>
		
	
		
	