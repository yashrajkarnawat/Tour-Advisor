<?php
$a=$_POST['e1'];
$c=$_POST['e3'];
$d=$_POST['e4'];
$e=$_POST['e5'];
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
	$sql="INSERT INTO `contact`(`Name`, `Email`, `Mobile`, `Message`) VALUES ('$a','$c','$d','$e');";
	$var=mysqli_query($conn,$sql);
	if($var)
	{
		echo"record inserted";
	}
	else
	{
		echo "Error:".$sql."<br>".mysqli_error($conn);
	}
}
mysqli_close($conn);
?>