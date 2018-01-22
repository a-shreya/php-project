<?php
$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];
if($x=="" || $y=="" || $z=="")
{
	echo "PLS FILL ALL";
	
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("sale");
	$query="SELECT * FROM user WHERE email='$y' AND password='$z'";
	$result=mysql_query($query);
	$row=mysql_num_rows($result);
	if($row>0)
	{
		echo "user already exist";
		
	}
	else 
	{
		$query1="INSERT INTO user(name,email,password) VALUES('$x','$y','$z')";
		mysql_query($query1);
		$query12="INSERT INTO relation(email) VALUES('$y')";
		mysql_query($query12);
		echo "REGISTERATION DONE<br>";
		echo "<a href='index.php'>CLICK HERE TO LOGIN</a>";
		
	}
	
}
?>