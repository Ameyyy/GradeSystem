<?php
require_once("connect.php");
session_start();

 
$email = $_POST["email"];
$password = $_POST["password"];
 
$sql = "SELECT * FROM faculty_details where EMAIL='$email' and PASSWORD='$password'";

$result = $conn->query($sql);

if ($result->num_rows ==1){ 
         $_SESSION['login_user'] = $email;
         
         header("location: welcome.php");
	}
 else {
    echo "Login Failed";
}
$conn->close();
?>

