<!DOCTYPE html>
<html>
<head>
	<title>Overwatch Calculator</title>
	<link rel="shortcut icon" href="overwatch\Favicon.ico">
	<link rel="stylesheet" href="css/bootstrap.min.css"></link>
	<link rel="stylesheet" href="css/hover-min.css"></link>
	<style>
		<?php
			include("additionalCodes/sql_connect.php");
			include("additionalCodes/stylesHeroSheet.txt");
			include("additionalCodes/styles2Overlay.txt");
		?>
		
	</style>
</head>
<body class = 'bodybg'>
	<table class="table table-hover">
		<tr class='h4'>
			<th>Hero</th>
			<th>Class</th>
			<th>Origin</th>
			<th>Health</th>
			<th>Armor</th>
			<th>Shield</th>
			<th>Max Damage</th>
			<th>Min Damage</th>
			<th>Ammo</th>
			<th>Rate of Fire</th>
			<th>Reload Time</th>
		</tr>
	<?php
		include ("additionalCodes/MenuBar.txt");
		
		$result = mysqli_query($mysqli, "SELECT * FROM hero");
					
			if($result){
				while($row = mysqli_fetch_array($result)){
					echo "<tr class='h4'>";
					echo"
						<td id='hero'>".$row[2]."</th>
						<td>".$row[3]."</th>
						<td>".$row[4]."</th>
						<td id='health'>".$row[11]."</th>
						<td id='armor'>".$row[12]."</th>
						<td id='shield'>".$row[13]."</th>
						<td>".$row[6]."</th>
						<td>".$row[7]."</th>
						<td>";if($row[2] == "D.Va") echo "Infinite"; else echo $row[9];echo "</th>
						<td>".$row[8]."</th>
						<td>".$row[10]."</th>
					";
					echo "</tr>";
				}
			}
	?>
	</table>
	
</body>
</html>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script>
	//Closes Navigation Bar
	function closeNav() {
		document.getElementById("myNav").style.width = "0%";
	}
	
	//Opens Navigation Bar
	function openNav() {
		document.getElementById("myNav").style.width = "10%";
	}
</script>