<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="x-icon/image" href="to.jpg"><title>Tour Advisor</title>
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
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="place.php">Place</a></li>
				<li><a href="hotel.php">Hotel</a></li>
				<li><a href="restaurant.php">Restaurants</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="signup.php">Signup</a></li>
				</ul>
			</div>
		</div>
	</div><br><br><br>
		<!-- Footer -->
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
</body>
</html>
