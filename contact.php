<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="x-icon/image" href="to.jpg"><title>Tour Advisor</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
	.q{
		height: 43px; width: 350px; border: 2px; border-bottom-left-radius: 15px;border-top-left-radius: 15px;
        margin-top: 16px; margin-left: 370px; border-color: black; opacity: .5 ;background-color: #f1f1f1;
    }
    .w{
        height: 44px; width: 170px; border: 2px; border-bottom-right-radius: 15px; border-top-right-radius: 15px; opacity: .8; text-orientation: sideways;
    }
    .w:hover{
        background-color: #B2F0B2;
    }
    .ftr{
			background-color: black;
			
			padding: 60px 0px 30px 0px;
		}
		.ftr address,.ftr a,.ftr p{
			color:#fff;
		}
		.padded{
			padding-right: 30px;padding-left: 30px;
		}
		input[type=text], input[type=comment], input[type=email] ,input[type=number]{
    width: 300px;
    height: 40px;
    margin: 8px 0;
    display: inline-block;
    border: 3px solid #ccc;
    box-sizing: border-box;
    opacity: .7;border-top: 0px;border-right: 0px;border-radius: 10px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}


.submitbtn {
    margin-left: 10px;
    width: 70%;border-radius: 20px;
}

.container {
    padding: 16px;
}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

@media screen and (max-width: 300px) {
     .submitbtn {
       width: 100%;
    }
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
<body style="background-attachment: fixed;">
<div class="container-fluid">
<!--Code Below-->
	<div class="row" >
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-header">
				<a  class="navbar-brand" style="color: white">TOUR &nbspADVISOR&nbsp<sub>(RAJASTHAN)</sub></a>
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
				<li class="active"><a href="restaurant.php">Restaurants</a></li>
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
	</div><br><br><br><br>
	<!--Close Row-->
	
		<div class="well" style="width: 33%;margin-left: 34%;box-shadow: 0px 10px 20px;">
			<form action="contactus.php" method="POST" name="contact">
				<center><p><h3><b>Contact Us</b></h3></p></center>
				<div class="row">
     						<div class="col-md-6">   
     								<label><b>First Name</b></label>
    										<input type="text" placeholder="Enter First Name" name="e1" id="n1" required="">
    								<label><b>Last Name</b></label>
    										<input type="text" placeholder="Enter Last Name" name="e2" id="n2" required>
    								<label><b>Email Address</b></label>
    										<input type="email" placeholder="eg. example@gmail.com" name="e3" id="n3" required>
    								<label><b>Mobile no.</b></label>
    										<input type="number" placeholder="eg. 8529499637" name="e4" id="n4" required minlength="10" required maxlength="11">
									<label><b>Message</b></label>
   										 <input type="comment" placeholder="Please enter your comments..." name="e5" id="n5" required="">
	     						 	<button type="submit" class="submitbtn" style="margin-left: 65%;">submit</button>
	    					</div>
			</form>
		</div>
</div><br>
<div class="row form-group" style="position: relative;">
	<div class="ftr" style="width: 100%;">
		<div class="container padded" style="width: 100%;">
			<div class="row">
				<footer>
					<div class="pull-left ft_space">
						<address>
							<a href="contact.php" style="font-size: 17px;">&nbsp &nbsp CONTACT US</a><br><br>
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
</body>
</html>
