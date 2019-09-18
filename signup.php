<html>
<head>
</head>

<body>
<center>
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

//this sets the username and password as the username and password inputted in signup.html
$username=$_POST['username'];
$password=$_POST['password'];

//this puts them into an array and sets the default page page 1
$player = [
	'name' => $username,
	'pass' => $password,
	'map' => 'bg1',
];

//this changes that array to a string
$string=serialize($player);

//this checks if the username is already taken
$account="account_$username.txt";
if(file_exists($account))
{
	print"That username has already been taken.<br>";
	print"<a href=\"signup.html\">Try again?</a>";
}
else
{
	//if a file with the username doesn't exist, it creates one and puts the username and password in it and encrypts it
	$file=fopen($account,"w");
	fwrite($file, $string);
	fclose($file);
	encrypt($account);
	print"Account created.<br>";
	print"<a href=\"http://comptech.capetech.com/students/Ana/FighttheWorld2/login.html\">Click here to log in.</a>";
	
	//this stars sessions????????
	session_id($username);
	session_start();
}

?>
</center>
</body>
</html>