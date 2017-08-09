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
		
		<link rel="stylesheet" type="text/css" href="../css/Input_Table.css">
		 
		 <meta charset="utf-8"/>
  
		<script type="text/javascript" src="../js/Input_Table.js"></script>
			
	</head>
	
	<body style="background-color:WhiteSmoke;" >

		<div id="header">
			<img src="../img/VESITLOGO1.png" alt="VESIT Logo" width="1200" height="125" align="left"/>
		</div>
			
		<div id="menu">
			<ul>
				<li><a class="active" href="welcome.php">Grade System Home</a></li>
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
					<a href="../php/Welcome.php">INFT</a>
					 <div class="dropdown-content">
					  <a href="../php/Sem.php">D10</a>
					  <a href="#">D15</a>
					  <a href="#">D20</a>
					</div>
				</li>
				
			<ul style="float:right;list-style-type:none;">
				<li><a href="About.php">About</a></li>
				<li><a href="../php/logout.php">Log Out</a></li>
			</ul>
		</div>
			
		<div id="RecordsDiv">
			<table id="Record" border="1">
				<tr>
					<td align="center">ROLL NO</td>
					<td align="center">Name</td>
					<td align="center">EXP 1<br>(10)</td>
					<td align="center">EXP 2<br>(10)</td>
					<td align="center">EXP 3<br>(10)</td>
					<td align="center">EXP 4<br>(10)</td>
					<td align="center">EXP 5<br>(10)</td>
					<td align="center">EXP 6<br>(10)</td>
					<td align="center">EXP 7<br>(10)</td>
					<td align="center">EXP 8<br>(10)</td>
					
					<td align="center">MINI PROJECT<br>(5)</td>
					<td align="center">VIVA<br>(5)</td>
					<td align="center">ATTENDANCE<br>(5)</td>
					
					<td align="center">TEST 1<br>(20)</td>
					<td align="center">TEST 2<br>(20)</td>
				</tr>
			<form method = "post" action = "../php/table.php">
				<tr>
					<td><input  size=5 type="text" name="roll_no" /></td>
					<td><input  size=30 type="text" name="name" /></td>
					<td><input  size=5 type="text" name="E1" /></td>
					<td><input  size=5 type="text" name="E2" /></td>
					<td><input  size=5 type="text" name="E3" /></td>
					<td><input  size=5 type="text" name="E4" /></td>
					<td><input  size=5 type="text" name="E5" /></td>
					<td><input  size=5 type="text" name="E6" /></td>
					<td><input  size=5 type="text" name="E7" /></td>
					<td><input  size=5 type="text" name="E8" /></td>
					
					<td><input  size=10 type="text" name="mp" /></td>
					<td><input  size=10 type="text" name="viva" /></td>
					<td><input  size=15 type="text" name="attendance" /></td>
					
					<td><input  size=5 type="text" name="ut1" /></td>
					<td><input  size=5 type="text" name="ut2" /></td>
				</tr>
				<div align="center">
					<button type="submit" class="button" style="vertical-align:middle" align="center"><span>Submit</span></button><br>
				</div>
				
			</form>
			</table><br><br>
	
		<div align="center">
		<a href="../php/Output_Table.php">
					<button class="button" style="vertical-align:middle" align="center"><span>View Records</span></button><br>
		</a>
		</div>
	
		</div>

		<div id="footer">
			Mini Project : Grading System<br>
			Class : D10<br>
			Batch : B<br>
			Roll numbers : 38,42,44,46,50<br>
		</div>
	</body>
</html>

