
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
				<li><a class="active" href="../Grade_System_Home.html"> Grade System Home</a></li>
				
				
			<ul style="float:right;list-style-type:none;">
				<li><a href="../html/About.html">About</a></li>
				<li><a href="../html/Sign_In.html">Sign In</a></li>
			</ul>
		</div>
		
			<?php
				include("connect.php");
				
				$div = $_POST["div"];
				$sub = $_POST["sub"];
				$roll_no = $_POST["roll_no"];
				if($sub == "WP" && $div == 'D10')
				{
				$result = mysqli_query($conn,"SELECT * FROM web_programming WHERE CLASS='$div' AND ROLL_NO='$roll_no'");
				if (!$result) {
					printf("Error: %s\n", mysqli_error($conn));
					exit();
				}

				echo"<table width='100%' border='1' >
				<th>ROLL NO</th>
				<th>NAME</th>
				<th>EXP 1</th>
				<th>EXP 2</th>
				<th>EXP 3</th>
				<th>EXP 4</th>
				<th>EXP 5</th>
				<th>EXP 6</th>
				<th>EXP 7</th>
				<th>EXP 8</th>
				<th>EXPERIMENT AVERAGE</th>
				<th>MINI PROJECT</th>
				<th>VIVA</th>
				<th>ATTENDANCE</th>
				<th>TOTAL</th>
				<th>GRADE</th>
				<th>TEST 1</th>
				<th>TEST 2</th>
				<th>TEST AVERAGE</th>
				<th>TEST GRADE</th>";

				while($row = mysqli_fetch_array($result))
				{
				
					echo "<tr>";
					echo "<td>" . $row['ROLL_NO'] . "</td>";
					echo "<td>" . $row['NAME'] . "</td>";
					echo "<td>" . $row['E1'] . "</td>";
					echo "<td>" . $row['E2'] . "</td>";
					echo "<td>" . $row['E3'] . "</td>";
					echo "<td>" . $row['E4'] . "</td>";
					echo "<td>" . $row['E5'] . "</td>";
					echo "<td>" . $row['E6'] . "</td>";
					echo "<td>" . $row['E7'] . "</td>";
					echo "<td>" . $row['E8'] . "</td>";
					echo "<td>" . $row['EXP_AVG'] . "</td>";
					echo "<td>" . $row['MP'] . "</td>";
					echo "<td>" . $row['VIVA'] . "</td>";
					echo "<td>" . $row['ATTENDANCE'] . "</td>";
					echo "<td>" . $row['TOTAL'] . "</td>";
					echo "<td>" . $row['GRADE'] . "</td>";
					echo "<td>" . $row['UT1'] . "</td>";
					echo "<td>" . $row['UT2'] . "</td>";
					echo "<td>" . $row['UT_AVG'] . "</td>";
					echo "<td>" . $row['UT_GRADE'] . "</td>";
					echo "</tr>";
				}
				echo"</table>";
				}

				else if($div != "D10")
					echo "No database found for '$div'";
				else 
					echo "No database found for '$sub'";
				
				mysqli_close($conn);
				?>

	
		<div id="footer">
			Mini Project : Grading System<br>
			Class : D10<br>
			Batch : B<br>
			Roll numbers : 38,42,44,46,50<br>
		</div>
	</body>
</html>



