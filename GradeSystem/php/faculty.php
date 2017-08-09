<?php

	session_start();
	require("connect.php");
	
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["pass"];
$dep = $_POST["dep"];


$sql = "INSERT INTO faculty_details

        (NAME, EMAIL, PASSWORD, DEPARTMENT)

        VALUES

        ('$name',

        '$email', '$password', '$dep')";



	if ($conn->query($sql) === TRUE) {
		 header("location: ../Grade_System_Home.html");
} else {
    echo "Already Registered" . $sql . "<br>" . $conn->error;
}

?>
