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
			include("additionalCodes/styles.txt");
			include("additionalCodes/styles2Overlay.txt");
		?>
		.video{
				position: fixed;
				top:0;
				right:0;
				botton:0;
				left:0;
				overflow:hidden;
				z-index:-100;
		}
		
		.inline {
			display: inline-block;
			margin-right: 15px;
		}
		.check{
			visibility:hidden;
		}
		.pointed{
			cursor: pointer;
		}
		
		.check:checked + .pointed{
			color:#00D8FF;
		}
		
		.check:hover + .pointed{
			color:#00B0D0;
		}
	</style>
</head>
<body class="bodybg">

	<div class='video'>
			<video width='100%' height='100%' muted loop autoplay>
				<source src="overwatch/Video/OverwatchBackground.mp4" type="video/mp4">
			</video>
		</div>

	<?php
		include ("additionalCodes/MenuBar.txt");
	?>

	<div align="center">
		<img src = 'overwatch/Overwatch_Single_Line.png' style='height:auto;width:40%;'><br>
		<span id="mapTitle" class="h1" style = "font-size:40px;">Calculator</span>
	</div>
	<br><br>
	<div align="center" class='container' style='background:rgba(0,0,0,0.4);border-radius:20px;'>
		<span class="h1"><font color = 'Red'>Enemy </font>Team</span>
	
		<div align="center" >
			<?php //Makes Empty Characters Slots from 0 to 5
				$counter = 0;
				while($counter<6){
					echo"<div class='col-md-2' >
							<img id = 'imag".$counter."'src='overwatch/HexagonIcon/empty.png' width='80%' height='80%'></img>
							<div id = 'team_comp'>
								<span id = 'name".$counter."'class='h2'>EMPTY</span>
							</div>
						
							<div>";
								require("additionalCodes/charSelectdropDown.txt"); //check on folder 'additionalCodes'
							echo"</div>
							<br><br>
						</div>";
						$counter++;
				}
			?>
		</div>
		<div class='container'><!-- Modes(Offense or Defense) -->
			<span class='h1'><font color='orange'>Mode:</font></span>
					<input class='check' value='1' type='radio' name='radio' id='Defense1' onclick='check();'>
					<label class='pointed h2'for='Defense1'><font size='10px'>Defend</font></label>
			
					<input class='check' value='1' type='radio' name='radio' id='Offense1' checked>
					<label class='pointed h2'for='Offense1'><font size='10px'>Attack</font></label>
		</div>
	</div >	
	
	
	<div align='center' class='container'>
		<form action='viewResult.php' method='GET'>
			<input id='RedMode' type = 'hidden' name = 'RedMode' value='' class = 'form-control'>
			<input id='BlueMode' type = 'hidden' name = 'BlueMode' value='' class = 'form-control'>
			<input id='Red0' type = 'hidden' name = 'Red0' placeholder = 'en0' value='' class = 'form-control'>
			<input id='Red1' type = 'hidden' name = 'Red1' placeholder = 'en1' value='' class = 'form-control'>
			<input id='Red2' type = 'hidden' name = 'Red2' placeholder = 'en2' value='' class = 'form-control'>
			<input id='Red3' type = 'hidden' name = 'Red3' placeholder = 'en3' value='' class = 'form-control'>
			<input id='Red4' type = 'hidden' name = 'Red4' placeholder = 'en4' value='' class = 'form-control'>
			<input id='Red5' type = 'hidden' name = 'Red5' placeholder = 'en5' value='' class = 'form-control'>
			<input id='Blue6' type = 'hidden' name = 'Blue6' placeholder = 'fr6' value='' class = 'form-control'>
			<input id='Blue7' type = 'hidden' name = 'Blue7' placeholder = 'fr7' value='' class = 'form-control'>
			<input id='Blue8' type = 'hidden' name = 'Blue8' placeholder = 'fr8' value='' class = 'form-control'>
			<input id='Blue9' type = 'hidden' name = 'Blue9' placeholder = 'fr9' value='' class = 'form-control'>
			<input id='Blue10' type = 'hidden' name = 'Blue10' placeholder = 'fr10' value='' class = 'form-control'>
			<input id='Blue11' type = 'hidden' name = 'Blue11' placeholder = 'fr11' value='' class = 'form-control'>
			<input class='h2 btn btn-danger' type="submit" value="CALCULATE">
		</form>
		<br>
	</div>
	
	
	
	<div align="center" class='container' style='background:rgba(0,0,0,0.4);border-radius:20px;'> 
		<span class="h1"><font color = 'Blue'>Friendly </font>Team</span>
		<div align="center">
			<?php // Makes Empty Character Slots From 5 to 11
				while($counter<12){
					echo"<div class='col-md-2'>
							<img id = 'imag".$counter."'src='overwatch/HexagonIcon/empty.png' width='80%' height='80%'></img>
							<div id = 'team_comp'>
								<span id = 'name".$counter."'class='h2'>EMPTY</span> 
							</div>
						
							<div>";
								require("additionalCodes/charSelectdropUp.txt"); //check on folder 'additionalCodes'
							echo"</div>
							<br><br>
						</div>";
						$counter++;
				}	
			?>
		</div>
		<div class='container'><!-- Modes(Offense or Defense) -->
			<span class='h1'><font color='orange'>Mode:</font></span>
					<input class='check' value='2' type='radio' name='radio1' id='Defense2' onclick='check();' >
					<label class='pointed h2'for='Defense2'><font size='10px'>Defend</font></label>
					
					<input class='check' value='2' type='radio' name='radio1' id='Offense2' checked>
					<label class='pointed h2'for='Offense2'><font size='10px'>Attack</font></label>
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
	
	var i = 0;
	var check;
	//Initialize hidden text list
	while(i < 12){
		if(i>5){
			check = 'Blue';
		} else {
			check = 'Red';
		}
		document.getElementById(check+i).value = 'EMPTY';
		i++;
	}
	
	//Test
	function alertID(id,id2){
		alert(id+","+id2);
	}
	
	function alertWarning(){
		alert('WARNING: There can be only one Unique Hero in a Team.');
	}
	
	//Updates Picture and Name
	function updateChar(charID,insertID){
		var check = 'Red';
		var trav = 0;
		var limit = 6;
		
		if(insertID>5){
			check = 'Blue';
			limit = 12;
			trav = 6;
		}
		
		var original = 'overwatch/HexagonIcon/'+check+'/'+document.getElementById(charID).value; // The Desired Image To Insert
		var target = document.getElementById('imag'+trav).src; //Getting Image Source
		target = target.split('overwatchCalcV4/'); // Splitting http;//localHost/ & the image path
		
		for(;trav != limit && target[1] != original;trav++){
			target = document.getElementById('imag'+trav).src; //Getting Image Source
			target = target.split('overwatchCalcV4/'); // Splitting 'http;//localHost/' & the image path
		}
		if(target[1] != original){ // Checking If Unique
			document.getElementById('imag'+insertID).src = 'overwatch/HexagonIcon/'+check+'/'+document.getElementById(charID).value;
			document.getElementById('name'+insertID).innerHTML = document.getElementById(charID).innerHTML;
			document.getElementById(check+insertID).value = charID;
		}else{
			alertWarning();
		}
	}
	
	
	//Change Char to EMPTY
	function removeChar(insertID){
		var check = 'Red';
		
		if(insertID>5){
			check = 'Blue';
		}
		
		document.getElementById('imag'+insertID).src = 'overwatch/HexagonIcon/empty.png';
		document.getElementById('name'+insertID).innerHTML = 'EMPTY';
		document.getElementById(check+insertID).value = 'EMPTY';
	}

	$("#result_body").hide();
	$("#result_head .panel-heading").on("click", function(){
			$("#result_body").slideToggle(500);	
	});

	function check(){//If the two pairs of Radio Buttons are on Defense Mode
		if(document.getElementById('Defense1').checked && document.getElementById('Defense2').checked){
			alert('WARNING:You cannot make 2 team on Defense. Modes will Reset.');
			$('#Defense1').prop('checked',false);
			$('#Defense2').prop('checked',false);
			$('#Offense1').prop('checked',true); //Changes 2 Pairs Radio Button to Offense Mode
			$('#Offense2').prop('checked',true);
		}
	}
	
	function changeMode(mode, teamMode){
		if(teamMode == "BlueMode"){
			document.getElementById(BlueMode).value = mode;
		} else {
			document.getElementById(RedMode).value = mode;
		}
		var j;
		
		j = document.getElementById(RedMode).value;
		alert("Hello");
	}
	
	//Closes Navigation Bar
	function closeNav() {
		document.getElementById("myNav").style.width = "0%";
	}
	
	//Opens Navigation Bar
	function openNav() {
		document.getElementById("myNav").style.width = "10%";
	}
</script>