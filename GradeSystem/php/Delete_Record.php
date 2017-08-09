<?php
	
	include("connect.php");
	session_start();
	include ("session.php");
	
	$roll_no = $_POST["del"];
	
	$sql="DELETE FROM web_programming
		 WHERE ROLL_NO='$roll_no'";

	if ($conn->query($sql) === TRUE) {
    header("location: Output_Table.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	 
?>
		
	
		
	