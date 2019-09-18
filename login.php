<?php
session_start();
?>

<html>
<head>
</head>

<body>
<center>
<?php
//these functions decrypt and encrypt a file
function decrypt($filename)
{
	rename($filename,"enc.txt");
	exec('dc.exe');
	$recieve=file_get_contents("dec.txt");
	return $recieve;
}
function encrypt($filename)
{
	$addr="./";
	$addr.=$filename;
	if(file_exists($addr))
	{
		rename($filename,"dec.txt");
	}
	exec('ec.exe');
	rename("enc.txt",$filename);
}

//this makes variables from the info that the program got from login.html and then makes a variable for them
$username=$_POST['username'];
$password=$_POST['password'];
$filename = "account_$username.txt";

//this checks if the aformentioned variable already exists
if(file_exists($filename))
{
	//this decrypts the file, gets the junk it needs out of it, and encrypts it again. then in unserializes the data into, like, comprehensible words
	$recieve=decrypt($filename);
	encrypt($filename);
	$array=unserialize($recieve);
	
	//this checks if the usernames and passwords match
	if($password==$array['pass'])
	{
		$_SESSION['player']=$array;
		
		//use file_get_contents on the map file, unserialize that information, and set $_SESSION['maps'] to it
		$file=file_get_contents("maps.txt");
		$maps=unserialize($file);
		$_SESSION['maps']=$maps;
		
		print"Welcome $username.<br>";
		print"<a href=\"http://comptech.capetech.com/students/Ana/FighttheWorld2/main.php\">Go to game.</a>";
	}
	else
	{
		print"Invalid password.<br>";
		print"<a href=\"http://comptech.capetech.com/students/Ana/FighttheWorld2/signup.html\">Make an account?</a>";
	}
}
else
{
	print"That username does not exist.<br>";
	print"<a href=\"http://comptech.capetech.com/students/Ana/FighttheWorld2/signup.html\">Make an account?</a>";
}
?>
</center>
</body>
</html>