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

		<div class="row form-group" style="position: relative;">
			<img src="hot.jpg" style="height: 300px; width: 100%">
			<div style="position:absolute;top:0;left:0; height: 100%;width: 100%;align-content: center;display: inline">
				<center><br><br><br><br><br><form>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-5 " style="padding:0px;">
									<span style="color: black;font-size: 20px;"><b>Check In:-</b></span><input type="date" class="form-control" name="checkin" style="width: 55%;" max="2019-12-31" min="2017-12-31" id="checkin">
								</div>
								<div class="col-md-5 ">
									<span style="color: black;font-size: 20px;"><b>Check Out:-</b></span><input type="date" class="form-control" name="checkin" style="width: 55%;" autocomplete="on" min="document.getElementById('checkin').value;" max="2019-12-31">
								</div><br>
								<div class="col-md-2">
									<button type='submit' class='btn btn-default'><span class='glyphicon glyphicon-search'></span></button>
								</div>
							</div>
						</div>
					</div>
				</form></center>
			</div>
		</div><br><br>

<center><span style="color: black; font-family: Mistral; font-size: 48px;"><b><i>HOTELS ON DISCOUNT</i></b></span></center><br><br>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-1 col-md-11 " style="height: 280px; width: 80%;padding: 2px;">
			<div class="col-md-3 " style="padding:0px;">
				<img src="t1.jpg" height="270" width="350">
			</div>
			<div class="col-md-6 " style="margin-left: 4.7%;">
				<span class='glyphicon glyphicon-bookmark' style="float: right;"></span><span><h4><b style="color: blue; font-size: 25px;">Trident Udaipur</b></h4><hr></span>&nbsp&nbsp<span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;">&nbsp</span><span class='glyphicon glyphicon-thumbs-up' style="color: #FF9100;"></span>&nbspHotel<br><br>
				<span class='glyphicon glyphicon-map-marker'><a href="https://goo.gl/maps/D7uCQeP33rE2"> <u>Udaipur, Rajasthan, India</u></a></span><br><br>
				<span class='glyphicon glyphicon-hand-right'>
					<b>Excellent</b>(1231 reviews)<br>
					<span>&nbsp&nbspExtreme clean (8.4/10)</span><br>
					<span style="color: #C62828;">&nbsp&nbspBest of the best in location, cleanliness, staff</span><br>
					<span style="color: #2E7D32;">&nbsp&nbsp93% of guest reviewers had their expectations of this property met or &nbsp&nbspexceeded.</span>
				</span>
			</div>
			<div class="col-md-2 well" style="margin-left: 1%; margin-top: 2%">
				<center>
					<span style="margin-top: 5%;">Expidea</span><br>
					<i class="fa fa-rupee" style="font-size:36px;color: #388E3C;">19500</i><br>
					21 nights stay for <i class="fa fa-rupee" style="font-size:24px;color: #388E3C;">409500</i><br>
					<button style="color: #388E3C; background: transparent; border-color: #388E3C;">&nbsp&nbsp&nbsp&nbspFree cancellation&nbsp&nbsp&nbsp</button><br><br>
					<button style="color: #388E3C; background: lightgreen; border-color: lightgreen; font-size: 20px;">&nbsp&nbspView Details&nbsp&nbsp&nbsp</button>
				</center>
			</div>
		</div>
	</div>
</div>
<br><br>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-1 col-md-11 " style="height: 280px; width: 80%;padding: 2px;">
			<div class="col-md-3 " style="padding:0px;">
				<img src="t1.jpg" height="270" width="350">
			</div>
			<div class="col-md-6 " style="margin-left: 4.7%;">
				<span class='glyphicon glyphicon-bookmark' style="float: right;"></span><span><h4><b style="color: blue; font-size: 25px;">Trident Udaipur</b></h4><hr></span>&nbsp&nbsp<span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;">&nbsp</span><span class='glyphicon glyphicon-thumbs-up' style="color: #FF9100;"></span>&nbspHotel<br><br>
				<span class='glyphicon glyphicon-map-marker'><a href="https://goo.gl/maps/D7uCQeP33rE2"> <u>Udaipur, Rajasthan, India</u></a></span><br><br>
				<span class='glyphicon glyphicon-hand-right'>
					<b>Excellent</b>(1231 reviews)<br>
					<span>&nbsp&nbspExtreme clean (8.4/10)</span><br>
					<span style="color: #C62828;">&nbsp&nbspBest of the best in location, cleanliness, staff</span><br>
					<span style="color: #2E7D32;">&nbsp&nbsp93% of guest reviewers had their expectations of this property met or &nbsp&nbspexceeded.</span>
				</span>
			</div>
			<div class="col-md-2 well" style="margin-left: 1%; margin-top: 2%">
				<center>
					<span style="margin-top: 5%;">Expidea</span><br>
					<i class="fa fa-rupee" style="font-size:36px;color: #388E3C;">19500</i><br>
					21 nights stay for <i class="fa fa-rupee" style="font-size:24px;color: #388E3C;">409500</i><br>
					<button style="color: #388E3C; background: transparent; border-color: #388E3C;">&nbsp&nbsp&nbsp&nbspFree cancellation&nbsp&nbsp&nbsp</button><br><br>
					<button style="color: #388E3C; background: lightgreen; border-color: lightgreen; font-size: 20px;">&nbsp&nbspView Details&nbsp&nbsp&nbsp</button>
				</center>
			</div>
		</div>
	</div>
</div>
<br><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-1 col-md-11 " style="height: 280px; width: 80%;padding: 2px;">
			<div class="col-md-3 " style="padding:0px;">
				<img src="t1.jpg" height="270" width="350">
			</div>
			<div class="col-md-6 " style="margin-left: 4.7%;">
				<span class='glyphicon glyphicon-bookmark' style="float: right;"></span><span><h4><b style="color: blue; font-size: 25px;">Trident Udaipur</b></h4><hr></span>&nbsp&nbsp<span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;">&nbsp</span><span class='glyphicon glyphicon-thumbs-up' style="color: #FF9100;"></span>&nbspHotel<br><br>
				<span class='glyphicon glyphicon-map-marker'><a href="https://goo.gl/maps/D7uCQeP33rE2"> <u>Udaipur, Rajasthan, India</u></a></span><br><br>
				<span class='glyphicon glyphicon-hand-right'>
					<b>Excellent</b>(1231 reviews)<br>
					<span>&nbsp&nbspExtreme clean (8.4/10)</span><br>
					<span style="color: #C62828;">&nbsp&nbspBest of the best in location, cleanliness, staff</span><br>
					<span style="color: #2E7D32;">&nbsp&nbsp93% of guest reviewers had their expectations of this property met or &nbsp&nbspexceeded.</span>
				</span>
			</div>
			<div class="col-md-2 well" style="margin-left: 1%; margin-top: 2%">
				<center>
					<span style="margin-top: 5%;">Expidea</span><br>
					<i class="fa fa-rupee" style="font-size:36px;color: #388E3C;">19500</i><br>
					21 nights stay for <i class="fa fa-rupee" style="font-size:24px;color: #388E3C;">409500</i><br>
					<button style="color: #388E3C; background: transparent; border-color: #388E3C;">&nbsp&nbsp&nbsp&nbspFree cancellation&nbsp&nbsp&nbsp</button><br><br>
					<button style="color: #388E3C; background: lightgreen; border-color: lightgreen; font-size: 20px;">&nbsp&nbspView Details&nbsp&nbsp&nbsp</button>
				</center>
			</div>
		</div>
	</div>
</div>
<br><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-1 col-md-11 " style="height: 280px; width: 80%;padding: 2px;">
			<div class="col-md-3 " style="padding:0px;">
				<img src="t1.jpg" height="270" width="350">
			</div>
			<div class="col-md-6 " style="margin-left: 4.7%;">
				<span class='glyphicon glyphicon-bookmark' style="float: right;"></span><span><h4><b style="color: blue; font-size: 25px;">Trident Udaipur</b></h4><hr></span>&nbsp&nbsp<span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;">&nbsp</span><span class='glyphicon glyphicon-thumbs-up' style="color: #FF9100;"></span>&nbspHotel<br><br>
				<span class='glyphicon glyphicon-map-marker'><a href="https://goo.gl/maps/D7uCQeP33rE2"> <u>Udaipur, Rajasthan, India</u></a></span><br><br>
				<span class='glyphicon glyphicon-hand-right'>
					<b>Excellent</b>(1231 reviews)<br>
					<span>&nbsp&nbspExtreme clean (8.4/10)</span><br>
					<span style="color: #C62828;">&nbsp&nbspBest of the best in location, cleanliness, staff</span><br>
					<span style="color: #2E7D32;">&nbsp&nbsp93% of guest reviewers had their expectations of this property met or &nbsp&nbspexceeded.</span>
				</span>
			</div>
			<div class="col-md-2 well" style="margin-left: 1%; margin-top: 2%">
				<center>
					<span style="margin-top: 5%;">Expidea</span><br>
					<i class="fa fa-rupee" style="font-size:36px;color: #388E3C;">19500</i><br>
					21 nights stay for <i class="fa fa-rupee" style="font-size:24px;color: #388E3C;">409500</i><br>
					<button style="color: #388E3C; background: transparent; border-color: #388E3C;">&nbsp&nbsp&nbsp&nbspFree cancellation&nbsp&nbsp&nbsp</button><br><br>
					<button style="color: #388E3C; background: lightgreen; border-color: lightgreen; font-size: 20px;">&nbsp&nbspView Details&nbsp&nbsp&nbsp</button>
				</center>
			</div>
		</div>
	</div>
</div>
<br><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-1 col-md-11 " style="height: 280px; width: 80%;padding: 2px;">
			<div class="col-md-3 " style="padding:0px;">
				<img src="t1.jpg" height="270" width="350">
			</div>
			<div class="col-md-6 " style="margin-left: 4.7%;">
				<span class='glyphicon glyphicon-bookmark' style="float: right;"></span><span><h4><b style="color: blue; font-size: 25px;">Trident Udaipur</b></h4><hr></span>&nbsp&nbsp<span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;">&nbsp</span><span class='glyphicon glyphicon-thumbs-up' style="color: #FF9100;"></span>&nbspHotel<br><br>
				<span class='glyphicon glyphicon-map-marker'><a href="https://goo.gl/maps/D7uCQeP33rE2"> <u>Udaipur, Rajasthan, India</u></a></span><br><br>
				<span class='glyphicon glyphicon-hand-right'>
					<b>Excellent</b>(1231 reviews)<br>
					<span>&nbsp&nbspExtreme clean (8.4/10)</span><br>
					<span style="color: #C62828;">&nbsp&nbspBest of the best in location, cleanliness, staff</span><br>
					<span style="color: #2E7D32;">&nbsp&nbsp93% of guest reviewers had their expectations of this property met or &nbsp&nbspexceeded.</span>
				</span>
			</div>
			<div class="col-md-2 well" style="margin-left: 1%; margin-top: 2%">
				<center>
					<span style="margin-top: 5%;">Expidea</span><br>
					<i class="fa fa-rupee" style="font-size:36px;color: #388E3C;">19500</i><br>
					21 nights stay for <i class="fa fa-rupee" style="font-size:24px;color: #388E3C;">409500</i><br>
					<button style="color: #388E3C; background: transparent; border-color: #388E3C;">&nbsp&nbsp&nbsp&nbspFree cancellation&nbsp&nbsp&nbsp</button><br><br>
					<button style="color: #388E3C; background: lightgreen; border-color: lightgreen; font-size: 20px;">&nbsp&nbspView Details&nbsp&nbsp&nbsp</button>
				</center>
			</div>
		</div>
	</div>
</div>
<br><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-1 col-md-11 " style="height: 280px; width: 80%;padding: 2px;">
			<div class="col-md-3 " style="padding:0px;">
				<img src="t1.jpg" height="270" width="350">
			</div>
			<div class="col-md-6 " style="margin-left: 4.7%;">
				<span class='glyphicon glyphicon-bookmark' style="float: right;"></span><span><h4><b style="color: blue; font-size: 25px;">Trident Udaipur</b></h4><hr></span>&nbsp&nbsp<span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;">&nbsp</span><span class='glyphicon glyphicon-thumbs-up' style="color: #FF9100;"></span>&nbspHotel<br><br>
				<span class='glyphicon glyphicon-map-marker'><a href="https://goo.gl/maps/D7uCQeP33rE2"> <u>Udaipur, Rajasthan, India</u></a></span><br><br>
				<span class='glyphicon glyphicon-hand-right'>
					<b>Excellent</b>(1231 reviews)<br>
					<span>&nbsp&nbspExtreme clean (8.4/10)</span><br>
					<span style="color: #C62828;">&nbsp&nbspBest of the best in location, cleanliness, staff</span><br>
					<span style="color: #2E7D32;">&nbsp&nbsp93% of guest reviewers had their expectations of this property met or &nbsp&nbspexceeded.</span>
				</span>
			</div>
			<div class="col-md-2 well" style="margin-left: 1%; margin-top: 2%">
				<center>
					<span style="margin-top: 5%;">Expidea</span><br>
					<i class="fa fa-rupee" style="font-size:36px;color: #388E3C;">19500</i><br>
					21 nights stay for <i class="fa fa-rupee" style="font-size:24px;color: #388E3C;">409500</i><br>
					<button style="color: #388E3C; background: transparent; border-color: #388E3C;">&nbsp&nbsp&nbsp&nbspFree cancellation&nbsp&nbsp&nbsp</button><br><br>
					<button style="color: #388E3C; background: lightgreen; border-color: lightgreen; font-size: 20px;">&nbsp&nbspView Details&nbsp&nbsp&nbsp</button>
				</center>
			</div>
		</div>
	</div>
</div>
<br><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-1 col-md-11 " style="height: 280px; width: 80%;padding: 2px;">
			<div class="col-md-3 " style="padding:0px;">
				<img src="t1.jpg" height="270" width="350">
			</div>
			<div class="col-md-6 " style="margin-left: 4.7%;">
				<span class='glyphicon glyphicon-bookmark' style="float: right;"></span><span><h4><b style="color: blue; font-size: 25px;">Trident Udaipur</b></h4><hr></span>&nbsp&nbsp<span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;">&nbsp</span><span class='glyphicon glyphicon-thumbs-up' style="color: #FF9100;"></span>&nbspHotel<br><br>
				<span class='glyphicon glyphicon-map-marker'><a href="https://goo.gl/maps/D7uCQeP33rE2"> <u>Udaipur, Rajasthan, India</u></a></span><br><br>
				<span class='glyphicon glyphicon-hand-right'>
					<b>Excellent</b>(1231 reviews)<br>
					<span>&nbsp&nbspExtreme clean (8.4/10)</span><br>
					<span style="color: #C62828;">&nbsp&nbspBest of the best in location, cleanliness, staff</span><br>
					<span style="color: #2E7D32;">&nbsp&nbsp93% of guest reviewers had their expectations of this property met or &nbsp&nbspexceeded.</span>
				</span>
			</div>
			<div class="col-md-2 well" style="margin-left: 1%; margin-top: 2%">
				<center>
					<span style="margin-top: 5%;">Expidea</span><br>
					<i class="fa fa-rupee" style="font-size:36px;color: #388E3C;">19500</i><br>
					21 nights stay for <i class="fa fa-rupee" style="font-size:24px;color: #388E3C;">409500</i><br>
					<button style="color: #388E3C; background: transparent; border-color: #388E3C;">&nbsp&nbsp&nbsp&nbspFree cancellation&nbsp&nbsp&nbsp</button><br><br>
					<button style="color: #388E3C; background: lightgreen; border-color: lightgreen; font-size: 20px;">&nbsp&nbspView Details&nbsp&nbsp&nbsp</button>
				</center>
			</div>
		</div>
	</div>
</div>
<br><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-1 col-md-11 " style="height: 280px; width: 80%;padding: 2px;">
			<div class="col-md-3 " style="padding:0px;">
				<img src="t1.jpg" height="270" width="350">
			</div>
			<div class="col-md-6 " style="margin-left: 4.7%;">
				<span class='glyphicon glyphicon-bookmark' style="float: right;"></span><span><h4><b style="color: blue; font-size: 25px;">Trident Udaipur</b></h4><hr></span>&nbsp&nbsp<span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;">&nbsp</span><span class='glyphicon glyphicon-thumbs-up' style="color: #FF9100;"></span>&nbspHotel<br><br>
				<span class='glyphicon glyphicon-map-marker'><a href="https://goo.gl/maps/D7uCQeP33rE2"> <u>Udaipur, Rajasthan, India</u></a></span><br><br>
				<span class='glyphicon glyphicon-hand-right'>
					<b>Excellent</b>(1231 reviews)<br>
					<span>&nbsp&nbspExtreme clean (8.4/10)</span><br>
					<span style="color: #C62828;">&nbsp&nbspBest of the best in location, cleanliness, staff</span><br>
					<span style="color: #2E7D32;">&nbsp&nbsp93% of guest reviewers had their expectations of this property met or &nbsp&nbspexceeded.</span>
				</span>
			</div>
			<div class="col-md-2 well" style="margin-left: 1%; margin-top: 2%">
				<center>
					<span style="margin-top: 5%;">Expidea</span><br>
					<i class="fa fa-rupee" style="font-size:36px;color: #388E3C;">19500</i><br>
					21 nights stay for <i class="fa fa-rupee" style="font-size:24px;color: #388E3C;">409500</i><br>
					<button style="color: #388E3C; background: transparent; border-color: #388E3C;">&nbsp&nbsp&nbsp&nbspFree cancellation&nbsp&nbsp&nbsp</button><br><br>
					<button style="color: #388E3C; background: lightgreen; border-color: lightgreen; font-size: 20px;">&nbsp&nbspView Details&nbsp&nbsp&nbsp</button>
				</center>
			</div>
		</div>
	</div>
</div>
<br><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-1 col-md-11 " style="height: 280px; width: 80%;padding: 2px;">
			<div class="col-md-3 " style="padding:0px;">
				<img src="t1.jpg" height="270" width="350">
			</div>
			<div class="col-md-6 " style="margin-left: 4.7%;">
				<span class='glyphicon glyphicon-bookmark' style="float: right;"></span><span><h4><b style="color: blue; font-size: 25px;">Trident Udaipur</b></h4><hr></span>&nbsp&nbsp<span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;">&nbsp</span><span class='glyphicon glyphicon-thumbs-up' style="color: #FF9100;"></span>&nbspHotel<br><br>
				<span class='glyphicon glyphicon-map-marker'><a href="https://goo.gl/maps/D7uCQeP33rE2"> <u>Udaipur, Rajasthan, India</u></a></span><br><br>
				<span class='glyphicon glyphicon-hand-right'>
					<b>Excellent</b>(1231 reviews)<br>
					<span>&nbsp&nbspExtreme clean (8.4/10)</span><br>
					<span style="color: #C62828;">&nbsp&nbspBest of the best in location, cleanliness, staff</span><br>
					<span style="color: #2E7D32;">&nbsp&nbsp93% of guest reviewers had their expectations of this property met or &nbsp&nbspexceeded.</span>
				</span>
			</div>
			<div class="col-md-2 well" style="margin-left: 1%; margin-top: 2%">
				<center>
					<span style="margin-top: 5%;">Expidea</span><br>
					<i class="fa fa-rupee" style="font-size:36px;color: #388E3C;">19500</i><br>
					21 nights stay for <i class="fa fa-rupee" style="font-size:24px;color: #388E3C;">409500</i><br>
					<button style="color: #388E3C; background: transparent; border-color: #388E3C;">&nbsp&nbsp&nbsp&nbspFree cancellation&nbsp&nbsp&nbsp</button><br><br>
					<button style="color: #388E3C; background: lightgreen; border-color: lightgreen; font-size: 20px;">&nbsp&nbspView Details&nbsp&nbsp&nbsp</button>
				</center>
			</div>
		</div>
	</div>
</div>
<br><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-1 col-md-11 " style="height: 280px; width: 80%;padding: 2px;">
			<div class="col-md-3 " style="padding:0px;">
				<img src="t1.jpg" height="270" width="350">
			</div>
			<div class="col-md-6 " style="margin-left: 4.7%;">
				<span class='glyphicon glyphicon-bookmark' style="float: right;"></span><span><h4><b style="color: blue; font-size: 25px;">Trident Udaipur</b></h4><hr></span>&nbsp&nbsp<span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;"></span><span class='glyphicon glyphicon-star' style="color: #FF9100;">&nbsp</span><span class='glyphicon glyphicon-thumbs-up' style="color: #FF9100;"></span>&nbspHotel<br><br>
				<span class='glyphicon glyphicon-map-marker'><a href="https://goo.gl/maps/D7uCQeP33rE2"> <u>Udaipur, Rajasthan, India</u></a></span><br><br>
				<span class='glyphicon glyphicon-hand-right'>
					<b>Excellent</b>(1231 reviews)<br>
					<span>&nbsp&nbspExtreme clean (8.4/10)</span><br>
					<span style="color: #C62828;">&nbsp&nbspBest of the best in location, cleanliness, staff</span><br>
					<span style="color: #2E7D32;">&nbsp&nbsp93% of guest reviewers had their expectations of this property met or &nbsp&nbspexceeded.</span>
				</span>
			</div>
			<div class="col-md-2 well" style="margin-left: 1%; margin-top: 2%">
				<center>
					<span style="margin-top: 5%;">Expidea</span><br>
					<i class="fa fa-rupee" style="font-size:36px;color: #388E3C;">19500</i><br>
					21 nights stay for <i class="fa fa-rupee" style="font-size:24px;color: #388E3C;">409500</i><br>
					<button style="color: #388E3C; background: transparent; border-color: #388E3C;">&nbsp&nbsp&nbsp&nbspFree cancellation&nbsp&nbsp&nbsp</button><br><br>
					<button style="color: #388E3C; background: lightgreen; border-color: lightgreen; font-size: 20px;">&nbsp&nbspView Details&nbsp&nbsp&nbsp</button>
				</center>
			</div>
		</div>
	</div>
</div>
<br><br>


<!--footer-->		
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
	<!--Code Above-->
</div>
</body>
</html>