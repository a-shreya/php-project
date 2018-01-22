<?php
  $p=$_POST['d'];
  $q=$_POST['e'];
  if($p=="" || $q=="")
  {
	  echo "Please fill all..";
  }
  else
  {
	  mysql_connect("localhost","root","");
	  mysql_select_db("sale");
	  
	  $query="SELECT * FROM user WHERE email='$p' AND password='$q'";
      $result=mysql_query($query);
	  $row=mysql_num_rows($result);
	  if($row>0)
	  {
		  echo "user exists";
		  echo "<a href='up.php'> click here to upload photo  </a>";
		  echo "<a href='show.php'>  click here to show uploaded picture</a>";
	  }
	  else
	  {
		  echo "user not found";
		  echo "<a href='reg.php'> click here to login</a>";	 }
  } 	  
 ?>