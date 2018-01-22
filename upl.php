<?php
$con= mysql_connect("localhost","root","");
mysql_select_db("sale",$con);
$a=$_SESSION['email'];
echo $a;
if(@$_POST['submit'] && $h=$_POST['g'])
{
	
   
$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];


if($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif")&& $file_size<=5000000)


    if(move_uploaded_file ($file_path,'uploads/'.$file_name))
 $query8="SELECT * FROM record WHERE email='$a'";
  $result8=mysql_query($query8);
  $row8=mysql_fetch_array($result8); 
	 {
       $query=mysql_query("insert into record(email,img)values('$h','$file_name')" );
    }
if($query==true)
{
    echo "File Uploaded";
}
}



?>