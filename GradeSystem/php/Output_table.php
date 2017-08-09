
<!DOCTYPE html>
<html>
	<head>
		<title>Grade System</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="../css/Input_Table.css">
		
	</head>
	
	<body style="background-color:WhiteSmoke;" >

		<div id="header">
			<img src="../img/VESITLOGO1.png" alt="VESIT Logo" width="1200" height="125" align="left"/>
		</div>
			
		<div id="menu">
			<ul>
				<li><a class="active" href="welcome.php"> Grade System Home</a></li>
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
					<a href="Welcome.php">INFT</a>
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
		
			<?php
				error_reporting(0);

				include("connect.php");
				session_start();
				include ("session.php");
			
				$result = mysqli_query($conn,"SELECT ROLL_NO, NAME, EXP_AVG, MP, VIVA, ATTENDANCE, TOTAL, GRADE, UT_AVG, UT_GRADE FROM web_programming");
				if (!$result) {
					printf("Error: %s\n", mysqli_error($conn));
					exit();
				}

				echo"<table width='100%' border='1' >
				<th >ROLL NO</th>
				<th >NAME</th>
				<th>EXPERIMENT AVERAGE</th>
				<th>MINI PROJECT</th>
				<th>VIVA</th>
				<th>ATTENDANCE</th>
				<th>TOTAL</th>
				<th>GRADE</th>
				<th>TEST AVERAGE</th>
				<th>TEST GRADE</th>";

				while($row = mysqli_fetch_array($result))
				{
				
					echo "<tr>";
					echo "<td>" . $row['ROLL_NO'] . "</td>";
					echo "<td>" . $row['NAME'] . "</td>";
					echo "<td>" . $row['EXP_AVG'] . "</td>";
					echo "<td>" . $row['MP'] . "</td>";
					echo "<td>" . $row['VIVA'] . "</td>";
					echo "<td>" . $row['ATTENDANCE'] . "</td>";
					echo "<td>" . $row['TOTAL'] . "</td>";
					echo "<td>" . $row['GRADE'] . "</td>";
					echo "<td>" . $row['UT_AVG'] . "</td>";
					echo "<td>" . $row['UT_GRADE'] . "</td>";
					echo "</tr>";
				}
				echo"</table>";
				
				mysqli_close($conn);
				?>
				<br>
				
				<div align="center">
				<a href="Input_Table.php">
					<button class="button" style="vertical-align:middle" align="center"><span>Add more Records</span></button>
				</a>
				
				<a href="Edit.php">
					<button class="button" style="vertical-align:middle" align="center"><span>Edit/Delete Records</span></button>
				</a>
				
				<a href="logout.php">
					<button class="button" style="vertical-align:middle" align="center"><span>Log Out</span></button>
				</a>
				</div>
	
		<div id="footer">
			Mini Project : Grading System<br>
			Class : D10<br>
			Batch : B<br>
			Roll numbers : 38,42,44,46,50<br>
		</div>
	</body>
</html>



