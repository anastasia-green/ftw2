<?php
session_start();
?>

<html>
<head>
</head>

<body>
<?php
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

//this gets the session variable data (the stuff you want saved) and puts it into an array and then translates it into a string
$user=$_SESSION['player']['name'];
$$user=$_SESSION['player'];
$string=serialize($$user);

//this "saves" the data to the file and encrypts it
file_put_contents("account_$user.txt", $string);
encrypt("account_$user.txt");
print"<script language=\"javascript\">";
print"window.location = \"http://comptech.capetech.com/students/Ana/FighttheWorld2/main.php\"";
print"</script>";
?>
</body>
</html>