
<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
	<link rel="shortcut icon" href="overwatch\Favicon.ico">
	<link rel="stylesheet" href="css/bootstrap.min.css"></link>
	<link rel="stylesheet" href="css/hover-min.css"></link>
	<style>
		<?php
			include("additionalCodes/sql_connect.php");
			include("additionalCodes/styles.txt");
			include("additionalCodes/styles2Overlay.txt");
		?>
		
	</style>
</head>
<body class="bodybg">
	<?php
		include ("additionalCodes/MenuBar.txt");
	?>

	<div align="center">
		<span id="mapTitle" class="h1" style = "font-size:40px;">RESULT</span>
	</div>
	<br><br>
	<div class="col-md-12" align="center" class='container' style='background:rgba(0,0,0,0.4);border-radius:20px;'>
	
		<div align="center" >
			<?php 
				$counter = 0;
				$redEmpty = 6;
				$fill = 0;
				$RedOpoints = 0;
				$RedDpoints = 0;
				$RedTpoints = 0;
				$RedSpoints = 0;
				$RedHealing = 0;
				$RedHitpoints = 0;
				while($counter<6){
							$result = mysqli_query($mysqli, "SELECT * FROM hero");
							if($result){
								if($_GET['Red'.$counter] != 'EMPTY'){
									while($row = mysqli_fetch_array($result)){
										if($row[0] == $_GET['Red'.$counter]){
											if($row[3] == "Offense"){
												$RedOpoints += (($row[7] + $row[6])/2) * $row[8];
											} else if($row[3] == "Defense"){
												$RedDpoints += (($row[7] + $row[6])/2) * $row[8];
											} else if($row[3] == "Tank"){
												$RedTpoints += (($row[7] + $row[6])/2) * $row[8];
											} else if($row[3] == "Support"){
												$RedSpoints += (($row[7] + $row[6])/2) * $row[8];
											}
											$RedHealing += $row[5];
											$RedHitpoints += $row[11] + $row[12] + $row[13];
											echo"<div class='col-md-2' >";
												echo "<img id = 'imag".$counter."'src='overwatch/HexagonIcon/Red/".$row[1]."' width='75%' height='75%'></img>
														  <div id = 'team_comp'>
																<span id = 'name".$counter."'class='h2'>".$row[2]."</span>
														   </div>
												";
											echo"</div>";
											$redEmpty--;
											break;
										} 
									}
								} 
								
							} else {
								echo "ERROR! Connection to DataBase Invalid";
							}
							
						$counter++;
				}
				
				//fillup
				while($fill < $redEmpty){
					echo"<div class='col-md-2' >";
					echo "<img id = 'imag".$fill."'src='overwatch/HexagonIcon/empty.png' width='75%' height='75%'></img>
							<div id = 'team_comp'>
								<span id = 'name".$counter."'class='h2'>EMPTY</span>
							</div>
						";
					echo"</div>";
					$fill++;
				}
			?>
		</div>
		<span class="h2"><font size= '24px'color = 'Red'>Enemy </font>Team</span>
	</div >	
	
	<div class="col-md-12" align="center" class='container' style='background:rgba(0,0,0,0.4);border-radius:20px;'>
		<span class="h2"><font size= '24px'color = 'Blue'>Friendly </font>Team</span>
	
		<div align="center" >
			<?php 
				$counter = 6;
				$blueEmpty = 6;
				$fill = 0;
				$BlueOpoints = 0;
				$BlueDpoints = 0;
				$BlueTpoints = 0;
				$BlueSpoints = 0;
				$BlueHealing = 0;
				$BlueHitpoints = 0;
				while($counter<12){
							$result = mysqli_query($mysqli, "SELECT * FROM hero");
							if($result){
								if($_GET['Blue'.$counter] != 'EMPTY'){
									while($row = mysqli_fetch_array($result)){
										if($row[0] == $_GET['Blue'.$counter]){
											if($row[3] == "Offense"){
												$BlueOpoints += (($row[7] + $row[6])/2) * $row[8];
											} else if($row[3] == "Defense"){
												$BlueDpoints += (($row[7] + $row[6])/2) * $row[8];
											} else if($row[3] == "Tank"){
												$BlueTpoints += (($row[7] + $row[6])/2) * $row[8];
											} else if($row[3] == "Support"){
												$BlueSpoints += (($row[7] + $row[6])/2) * $row[8];
											}
											$BlueHealing += $row[5];
											$BlueHitpoints += $row[11] + $row[12] + $row[13];
											echo"<div class='col-md-2' >";
												echo "<img id = 'imag".$counter."'src='overwatch/HexagonIcon/Blue/".$row[1]."' width='75%' height='75%'></img>
														  <div id = 'team_comp'>
																<span id = 'name".$counter."'class='h2'>".$row[2]."</span>
														   </div>
												";
											echo"</div>";
											$blueEmpty--;
											break;
										} 
									}
								} 
								
							} else {
								echo "ERROR! Connection to DataBase Invalid";
							}
							
						$counter++;
				}
				
				//fillup
				while($fill < $blueEmpty){
					echo"<div class='col-md-2' >";
					echo "<img id = 'imag".$fill."'src='overwatch/HexagonIcon/empty.png' width='75%' height='75%'></img>
							<div id = 'team_comp'>
								<span id = 'name".$counter."'class='h2'>EMPTY</span>
							</div>
						";
					echo"</div>";
					$fill++;
				}
			?>
		</div>
	</div >
	
	<div class="col-md-12">
		<div id="Rresult" class="col-md-4">
			<div>
			<span class="h3" style="color: white;font-size:32px;"><?php echo $_GET['RedMode'];?></span>
			</div>
			<div>
			<span class="h3" style="color: white;font-size:24px;">Offense Points:<?php echo $RedOpoints;?></span>
			</div>
			<div>
			<span class="h3" style="color: white;font-size:24px;">Defense Points:<?php echo $RedDpoints;?></span>
			</div>
			<div>
			<span class="h3" style="color: white;font-size:24px;">Tank Points:<?php echo $RedTpoints;?></span>
			</div>
			<div>
			<span class="h3" style="color: white;font-size:24px;">Support Points:<?php echo $RedSpoints;?></span>
			</div>
			<div>
			<span class="h3" style="color: white;font-size:24px;">Healing:<?php echo $RedHealing;?></span>
			</div>
			<div>
			<span class="h3" style="color: white;font-size:24px;">Team HP:<?php echo $RedHitpoints;?></span>
			</div>
		</div>
		<div class="col-md-4" align='center'>
			<span class="h4" style = 'font-size:90px;'><font color = 'Orange'>Versus</font></span>
		</div>
		<div id="Bresult" class="col-md-4">
			<div>
			<span class="h3" style="color: white;font-size:32px;"><?php echo $_GET['RedMode'];?></span>
			</div>
			<div>
			<span class="h3" style="color: white;font-size:24px;">Offense Points:<?php echo $BlueOpoints;?></span>
			</div>
			<div>
			<span class="h3" style="color: white;font-size:24px;">Defense Points:<?php echo $BlueDpoints;?></span>
			</div>
			<div>
			<span class="h3" style="color: white;font-size:24px;">Tank Points:<?php echo $BlueTpoints;?></span>
			</div>
			<div>
			<span class="h3" style="color: white;font-size:24px;">Support Points:<?php echo $BlueSpoints;?></span>
			</div>
			<div>
			<span class="h3" style="color: white;font-size:24px;">Healing:<?php echo $BlueHealing;?></span>
			</div>
			<div>
			<span class="h3" style="color: white;font-size:24px;">Team HP:<?php echo $BlueHitpoints;?></span>
			</div>
		</div>
	</div>
	
		
	<div align = 'right' class='container'>
		<span class='h1' style="opacity:0.6;font-size:20px;">This is a Non-Profit School Project(2016-2017)</span>
	</div>
	
	
	
	
</body>
</html>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script>
	var nxt = 0;
	
	nxt = Math.floor((Math.random() * 11));
	$('.bodybg').css('background-image','url("overwatch/Background/'+nxt+'.png")').fadeIn(1000); 
	
	//Closes Navigation Bar
	function closeNav() {
		document.getElementById("myNav").style.width = "0%";
	}
	
	//Opens Navigation Bar
	function openNav() {
		document.getElementById("myNav").style.width = "10%";
	}
</script>