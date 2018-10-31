<?php
if (isset($_POST['submit'])) {
	$a=$_POST['for'];
	$severname="localhost";
	$username="root";
	$password="";
	$dbname="register";
	$conn=mysqli_connect($severname,$username,$password,$dbname);
	$sql="select * from signup where Email='$a'";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)) {
		$row=mysqli_fetch_assoc($result);
		$mobile=$row["Mobile No"];
		$message="Hi, "."your "."id's "."password "."is ".$row["Password"];
		$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=8502070012&Password=way2sms&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=karnaP61hRwVeyk7AlW5U"),true);
		if ($json["status"]==="success") {
		    echo $json["msg"];
		    //your code when send success
		}else{
		    echo $json["msg"];
		    //your code when not send
		}
 
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="x-icon/image" href="to.jpg"><title>Tour Advisor</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
	.bookname{
		font-size: 18px;
	}
	.bookprice{
		font-size: 20px;
	}
	input[type=email]{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
.bk{
    background-color: #3B5998;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}

button:hover {
    opacity: 0.8;
}
.ftr{
			background-color: black;
			padding: 60px 0px 30px 0px;
			margin-top: 20px;
		}
		.ftr address,.ftr a,.ftr p{
			color:#fff;
		}
		.padded{
			padding-right: 30px;padding-left: 30px;
		}
</style>
</head>
<body>
<div class="container-fluid">
<!--Code Below-->
	<div class="row" >
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-header">
				<a  class="navbar-brand" style="color: white">TOUR &nbspADVISER&nbsp<sub>(RAJASTHAN)</sub></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			</div>
			<div class="collapse navbar-collapse" id="nav">
			<ul class="nav navbar-nav navbar-right" style="margin-right: 20px;">
				<li><a href="index.php">Home</a></li>
				<li><a href="place.php">Place</a></li>
				<li><a href="hotel.php">Hotel</a></li>
				<li><a href="restaurant.php">Restaurants</a></li>
				<li class="active"><a href="login.php">Login</a></li>
				<li><a href="signup.php">Signup</a></li>
				</ul>
			</div>
		</div>
	</div><br><br><br><br><br><br><br>
	<center>
    <div class="container well" style="width: 50%; height: 70%;">
      <br>
      <img src="lock1.jpg" style="border-radius: 50%;"><br>
      <font size="7" style="font-family: ">Forgot Password?</font>
      <p>You can reset your password here.</p>
      <form id="f" method="POST" name="forgot">
        <input type="email" name="for" placeholder="Enter Email Address" id="f1"><br><br>
        <button class="bk" type="submit" name="submit">Get Your Password</button>
      </form>   
    </div>
  	</center>
  	<br><br><br><br>
  <!--footer-->
<div class="row form-group" style="position: relative;">
	<div class="ftr" style="width: 100%;">
		<div class="container padded" style="width: 100%;">
			<div class="row">
				<footer>
					<div class="pull-left ft_space">
						<address>
							<a href="#" style="font-size: 17px;">&nbsp &nbsp CONTACT US</a><br><br>
							<a href="#" style="font-size: 17px;">&nbsp &nbsp  ABOUT US</a><br><br>
							<a href="#" style="font-size: 17px;"> &nbsp &nbsp  TERMS & CONDITIONS</a><br><br>
							<a href="#" style="font-size: 17px;">&nbsp &nbsp  PRIVACY POLICY</a><br><br>
						</address>
					</div>
					<div class="pull-right ft_space">
						<img src="to.jpg" class="img-responsive" style="height:130px;width: 170px;">
						<p style="margin-top: 10px;">&copy;Int Elligence. 2018</p>
					</div>
				</footer>
			</div>
		</div>
	</div>
</div>
	<!--Code Above-->
</div>
</body>
</html>