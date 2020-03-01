<!DOCTYPE html>
<html>
<head>
	<title>About-Overwatch Calculator</title>
	<link rel="shortcut icon" href="overwatch\Favicon.ico">
	<link rel="stylesheet" href="css/bootstrap.min.css"></link>
	<style>
		<?php
			include("additionalCodes/styles.txt");
			include("additionalCodes/styles2Overlay.txt");
		?>
		li{
			list-style-type: none;
		}
	</style>
</head>
<body style="background-image: url('overwatch/Background/about.jpg');background-size:cover;background-repeat: no-repeat;background-attachment: fixed;">
	<?php
		include ("additionalCodes/MenuBar.txt");//Navigation Bar
	?>
	<div class='container' align = "center" style="background:rgba(0,0,0,0.5);border-radius:20px;">
		<h1 class='h1'>About<h1>
		<div style="margin-left:60px;margin-right:40px;" align="center" >
			<span class='h2' style="font-size:30px;"><a href="index.php" alt='Overwatch Calculator'><span class='h1' style="font-size:30px;">Overwatch <font style="color:orange;">Calculator</font></span></a> is a 
			calculator for the game called <a class='h1' href = "https://playoverwatch.com/en-us/" style="color:orange;font-size:30px;" target='_blank'>OVERWATCH</a>. It calculates the stats in each hero in every team to find out which team is favoured to win. 
			<br><font size="5px">NOTE: Changes may occur for this website.</font>
			</span>
		</div>
	</div>
<br><br>
	<div align='center' class='container' style="background:rgba(0,0,0,0.5);border-radius:20px;">
		<span class='h1'>Credits</span>
		<div style='column-count:2;' class='container' align='left'>
			<div>
				<span class='h1'><font size='6px' color='orange'>Creator of Website</font></span>
				<ul>
					<li> <font size='4px' color='black'>Boss Roald Galano</li>
					<li> <font size='4px' color='black'>Senpai Maynard Awayan</li>
				</ul>
			</div>
		</div>
	</div>
	
<br><br>
	<div align='center' class='container' style="background:rgba(0,0,0,0.5);border-radius:20px;">
		<span class='h2'><font size='12px' color='orange'>"Heroes Never Die!"</span>
	</div>
	
	
	
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