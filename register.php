<?php
$a=$_POST['e1'];
$b=$_POST['e2'];
$c=$_POST['e3'];
$d=$_POST['e4'];
$e=$_POST['e5'];
$f=$_POST['e6'];
$g=$_POST['e8'];
$h=$_POST['e9'];
$i=$_POST['e10'];
$j=$_POST['e11'];
$severname="localhost";
$username="root";
$password="";
$dbname="register";
$conn=mysqli_connect($severname,$username,$password,$dbname);
if(!$conn)
{
	die("connection failed:".mysqli_connect_error());
}
else
{
	$sql="insert into `signup`(`First name`,`Last name`,`Username`,`Mobile No`,`Email`,`Password`,`address`,`country`,`identity`,`idnumber`)values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j');";
	$var=mysqli_query($conn,$sql);
	if($var)
	{
		header('location:index.php');
	}
	else
	{
		echo "Error:".$sql."<br>".mysqli_error($conn);
	}
}
mysqli_close($conn);

?>