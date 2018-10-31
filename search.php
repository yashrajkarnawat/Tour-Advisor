
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<style type="text/css">
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
				<div class='col-xs-12 col-sm-12 col-md-4 col-lg-4'>
					<form class='navbar-form'>
						<div class='form-group'>
            				<input class='form-control' type='text' name='search' placeholder='Location'>

          				</div>
          				<button type='submit' class='btn btn-default'><span class='glyphicon glyphicon-search'></span></button>
        			</form>

      			</div>
			<ul class="nav navbar-nav navbar-right" style="margin-right: 20px;">
				<li><a href="index.php">Home</a></li>
				<li><a href="place.php">Place</a></li>
				<li class="active"><a href="hotel.php">Hotel</a></li>
				<li><a href="restaurant.php">Restaurants</a></li>
				<?php
					if (!empty($_SESSION["name"])) { 
				?>
				<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><b class="caret"></b><?php echo $_SESSION["name"]; echo "&nbsp".$_SESSION["lname"]; ?></a>
					<ul class="dropdown-menu">
						<li><a href="profile.php?value=details">View Profile</a></li>
						<li><a href="profile.php?value=editdetails">Edit Profile</a></li>
						<li><a href="profile.php?value=booking">Booking</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</li>
			<?php }
			else{ ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="signup.php">Signup</a></li>
				<?php }
				 ?>
				</ul>
			</div>
		</div>
	</div><br><br><br>
	<?php
$a=$_POST['tb1'];
$servername="localhost";
$username="root";
$password="";
$dbname="admin";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
	die("connection failed:".mysqli_connect_error());
}
else{
	$sql="SELECT `Hotel name`, `mobile`, `telephone`, `Address`, `City`, `Rating` FROM `hotel` WHERE City='$a'";
	$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			<div class="container-fliud">
				<div class="well" style="background-color: white; border-color: white;">
					<div class="well" style="height: 20%;width: 40%;"><b>
						<span class="text-default" style="font-size: 28px;"> <?php echo $row["Hotel name"]; ?> </span><br>
						<span class="text-info" style="font-size: 16px;">Mobile No. : <?php  echo $row["mobile"];?> </span><br>
						<span class="text-info" style="font-size: 16px;">Telephone No. : <?php  echo $row["telephone"];?> </span><br>
						<span class="text-info" style="font-size: 16px;">Address : <?php  echo $row["Address"];?></span><br>			
						<span class="text-info" style="font-size: 16px;">Ratings : <?php  echo $row["Rating"];?></span></span><br></b>			
					</div>
				</div>
			</div><?php 
		}
	}
	else{
		echo "0 results found";
	}
}
mysqli_close($con);
?>
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
</body>
</html>