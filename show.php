<html>
<body>
<?php
session_start();
$b=$_SESSION['email'];
mysql_connect("localhost","root","");
mysql_select_db("sale");
echo"DASHBOARD          "; 
echo"                                                    CLICK RIGHT ON MOUSE ON IMAGE ICON ";
$result=  mysql_query("SELECT img FROM record WHERE email='$b'");
$row=  mysql_fetch_array($result);


	echo "<img src='uploads/".$row['img']."'>";

	 
	  ?>
	  </body>
</html>