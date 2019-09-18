<html>
<?php
session_start();
?>
<head>
<title>FIGHT THE WORLD</title>
<style>
body {
}
div {
}
.sidebar
{
	width: 20%;
	height: 100%;
	left:0px;
	top:0px;
	
	border:4px black;
	border-style:solid;	
}
.holder
{
	display: flex;
	align-items: center;
	justify-content: center;
	height: 100%;
	width: 80%;
}
.box
{
	height: 550px;
	width: 600px;
   	border: 4px black;
	margin-left: auto ;
	margin-right: auto ;
	border-style:solid;
}
.textbox
{
	height: 150px;
	width: 550px;
	padding: 25px;
	border: 4px: light blue;
	margin-left: auto ;
	margin-right: auto ;
	border-style:solid;
}
.bigholder
{
	display: flex;
	align-items: center;
	justify-content: center;
	height: 95%;
	width: 95%;
	position:absolute;
}
.numbers
{
	display: flex;
	align-items: center;
	justify-content: center;
	position:absolute;
	height: 150px;
	width: 550px;
	padding: 25px;
	border: 4px: light blue;
	margin-left: auto ;
	margin-right: auto ;
}
</style>
<script>
function bio() {
	myWindow = window.open("http://comptech.capetech.com/students/Ana/FighttheWorld2/bio.php", "bio", "width=350, height=350, resizable=0");
}
</script>
</head>

<body>

<?php
//this makes it so the map changes to the next map away
if(isset($_POST["direction"]))
{
	if(isset($_SESSION['maps'][$_SESSION['player']['map']][$_POST["direction"]]))
	{
		$_SESSION['player']['map']=$_SESSION['maps'][$_SESSION['player']['map']][$_POST["direction"]];
	}
	
}
?>

<font face="Comic sans MS">
<div class="bigholder">

<div class="sidebar">
<center>
<h1>Protagonist</h1>
<img src="http://comptech.capetech.com/students/Ana/FighttheWorld2/game/profile.png"><br><br>
<button onclick="bio()">Bio</button><br><br>
<a href="http://comptech.capetech.com/students/Ana/FighttheWorld2/save.php">Save</a><br><br>
<a href="http://comptech.capetech.com/students/Ana/FighttheWorld2/unsave.php">Delete Save File</a>
</center>
</div>


<div class="holder">
<center>
		<div class="textbox">
		<?php
		//this puts the text from the arrays in here
		print$_SESSION['maps'][$_SESSION['player']['map']]['text'];
		?>
		</div>
		<div class="box">
		<?php
		print "<img src=\"http://comptech.capetech.com/students/Ana/FighttheWorld2/game/";
		print$_SESSION['player']['map'];
		print".png\"><br>";
		
		//then, it assigns values to the buttons
		?>
		</div>
		<div class="numbers">
		<form action="http://comptech.capetech.com/students/Ana/FighttheWorld2/main.php" method="post">
		<input type="image" src="http://comptech.capetech.com/students/Ana/FighttheWorld2/game/1.png" alt="Submit">
		<input type="hidden" value="1" name="direction">
		</form>
		<form action="http://comptech.capetech.com/students/Ana/FighttheWorld2/main.php" method="post">
		<input type="image" src="http://comptech.capetech.com/students/Ana/FighttheWorld2/game/2.png" alt="Submit">
		<input type="hidden" value="2" name="direction">
		</form>
		<form action="http://comptech.capetech.com/students/Ana/FighttheWorld2/main.php" method="post">
		<input type="image" src="http://comptech.capetech.com/students/Ana/FighttheWorld2/game/3.png" alt="Submit">
		<input type="hidden" value="3" name="direction">
		</form>
		<form action="http://comptech.capetech.com/students/Ana/FighttheWorld2/main.php" method="post">
		<input type="image" src="http://comptech.capetech.com/students/Ana/FighttheWorld2/game/4.png" alt="Submit">
		<input type="hidden" value="4" name="direction">
		</form>
		</div>
	</center>
	</div>

	
</div>
</font>
</body>
</html>
