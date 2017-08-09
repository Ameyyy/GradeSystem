<?php
error_reporting(0);
include("connect.php");
session_start();
include ("session.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Grade System</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="../css/Standard.css">
	</head>
	
	<body style="background-color:WhiteSmoke;" >

		<div id="header">
			<img src="../img/VESITLOGO1.png" alt="VESIT Logo" width="1200" height="125" align="left"/>
		</div>
			
		<div id="menu">
			<ul>
				<li><a class="active" href="../Grade_System_Home.html"> Grade System Home</a></li>
				<li class="dropdown">
					<a href="#fe">FE</a>
					 <div class="dropdown-content">
					  <a href="#">FE 1</a>
					  <a href="#">FE 2</a>
					  <a href="#">FE 3</a>
					  <a href="#">FE 4</a>
					  <a href="#">FE 5</a>
					  <a href="#">FE 6</a>
					  <a href="#">FE 7</a>
					  <a href="#">FE 8</a>
					  <a href="#">FE 9</a>
					</div>
				</li>
				<li class="dropdown">
					<a href="#inst">INST</a>
					 <div class="dropdown-content">
					  <a href="#">D8</a>
					  <a href="#">D13</a>
					  <a href="#">D18</a>
					</div>
				</li>
				<li class="dropdown">
					<a href="#etrx">ETRX</a>
					 <div class="dropdown-content">
					  <a href="#">D6 A</a>
					  <a href="#">D6 B</a>
					  <a href="#">D11 A</a>
					  <a href="#">D11 B</a>
					  <a href="#">D16 A</a>
					  <a href="#">D16 B</a>
					</div>
				</li>
				<li class="dropdown">
					<a href="#cmpn">CMPN</a>
					 <div class="dropdown-content">
					  <a href="#">D7 A</a>
					  <a href="#">D7 B</a>
					  <a href="#">D7 C</a>
					  <a href="#">D12 A</a>
					  <a href="#">D12 B</a>
					  <a href="#">D12 C</a>
					  <a href="#">D17 A</a>
					  <a href="#">D17 B</a>
					  <a href="#">D17 C</a>
					</div>
				</li>
				<li class="dropdown">
					<a href="#extc">EXTC</a>
					 <div class="dropdown-content">
					   <a href="#">D9 A</a>
					  <a href="#">D9 B</a>
					  <a href="#">D9 C</a>
					  <a href="#">D14 A</a>
					  <a href="#">D14 B</a>
					  <a href="#">D14 C</a>
					  <a href="#">D19 A</a>
					  <a href="#">D19 B</a>
					  <a href="#">D19 C</a>
					</div>
				</li>
				<li class="dropdown">
					<a href="#inft">INFT</a>
					 <div class="dropdown-content">
					  <a href="Sem.php">D10</a>
					  <a href="#">D15</a>
					  <a href="#">D20</a>
					</div>
				</li>
				
			<ul style="float:right;list-style-type:none;">
				<li><a href="About.php">About</a></li>
				<li><a href="logout.php">Log Out</a></li>
			</ul>
		</div>
			
		<div id="nav">
			<ul>
				<li><a class="#active" href="html/Sign_In.html">Semester</a></li>
				<li class = "sem4"><a href="">Sem I</a>
				</li>
				<li class = "sem4"><a href="">Sem II</a>
				</li>
				<li class = "sem3"><a href="">Sem III</a>
				</li>
				<li class = "sem4"><a href="">Sem IV</a>
				</li>
				<li class = "sem4"><a href="">Sem V</a>
				</li>
				<li class = "sem4"><a href="">Sem VI</a>
				</li>
				<li class = "sem4"><a href="">Sem VII</a>
				</li>
				<li class = "sem4"><a href="">Sem VIII</a>
				</li>
			</ul>
		</div>

		<div id="section" align="left">
			<h1 style="color:#800000; font-size:250%"> Welcome <?php echo $_SESSION['login_user']; ?> </h1>
			<h3 style="color:#330033 ; font-size:150%"> Following are the steps to be followed:</h3>
			<p>
					1.	Select a Branch from the navigation.<br>
					2.	Select a Class from the dropdown.<br>
					3.	You will be redirected to another page.<br>
			</p>
			
				
			
		</div>
		
		

		<div id="footer">
			Mini Project : Grading System<br>
			Class : D10<br>
			Batch : B<br>
			Roll numbers : 38,42,44,46,50<br>
		</div>
	</body>
</html>

