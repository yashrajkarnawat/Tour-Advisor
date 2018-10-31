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
	</div><br><br><br>
	<!--Close Row-->
	<div class="row">
		<div id="mycarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="mycarousel" data-slide-to="0" class="active"></li>
				<li data-target="mycarousel" data-slide-to="1"></li>
				<li data-target="myc4rousel" data-slide-to="2"></li>
				<li data-target="myc4rousel" data-slide-to="3"></li>
				<li data-target="myc4rousel" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active"><img src="eat2.jpg" style="height: 400px;width: 100%;"></div>
				<div class="item"><img src="eat4.jpg" style="height: 400px;width: 100%;"></div>
				<div class="item"><img src="eat.jpg" style="height: 400px;width: 100%;"></div>
				<div class="item"><img src="eat3.jpg" style="height: 400px;width: 100%;"></div>
				<div class="item"><img src="eat1.jpg" style="height: 400px;width: 100%;"></div>
			</div>
			 <a href="#mycarousel" class="left carousel-control" data-slide="prev">
				<span class="glyphicon glyphicon-cheveron-left"></span>
				<span class="sr-only">previous</span>
			</a>
			<a href="#mycarousel" class="right carousel-control" data-slide="next">
				<span class="glyphicon glyphicon-cheveron-right"></span>
				<span class="sr-only">next</span>
			</a>
		</div>
	</div>

<div style="background: #F5F5F5;"><br><br>
	<center><span style="color: #1E90FF; font-family: Mistral; font-size: 48px;"><b><i>TOP RESTAURANTS</i></b></span></center><br><br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-1 col-md-15 " style="height: 50%; width: 92%;padding: 2px;">
				<div class="col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>
				
				<div class="col-md-offset-1 col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>

		    	<div class="col-md-offset-1 col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>
			</div>
		</div>
	</div><br><br><br>

<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-1 col-md-15 " style="height: 50%; width: 92%;padding: 2px;">
				<div class="col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>
				
				<div class="col-md-offset-1 col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>

		    	<div class="col-md-offset-1 col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>
			</div>
		</div>
	</div><br><br><br>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-1 col-md-15 " style="height: 50%; width: 92%;padding: 2px;">
				<div class="col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>
				
				<div class="col-md-offset-1 col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>

		    	<div class="col-md-offset-1 col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>
			</div>
		</div>
	</div><br><br><br>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-1 col-md-15 " style="height: 50%; width: 92%;padding: 2px;">
				<div class="col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>
				
				<div class="col-md-offset-1 col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>

		    	<div class="col-md-offset-1 col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>
			</div>
		</div>
	</div><br><br><br>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-1 col-md-15 " style="height: 50%; width: 92%;padding: 2px;">
				<div class="col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>
				
				<div class="col-md-offset-1 col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>

		    	<div class="col-md-offset-1 col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>
			</div>
		</div>
	</div><br><br><br>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-1 col-md-15 " style="height: 50%; width: 92%;padding: 2px;">
				<div class="col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>
				
				<div class="col-md-offset-1 col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>

		    	<div class="col-md-offset-1 col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>
			</div>
		</div>
	</div><br><br><br>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-1 col-md-15 " style="height: 50%; width: 92%;padding: 2px;">
				<div class="col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>
				
				<div class="col-md-offset-1 col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>

		    	<div class="col-md-offset-1 col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>
			</div>
		</div>
	</div><br><br><br>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-1 col-md-15 " style="height: 50%; width: 92%;padding: 2px;">
				<div class="col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>
				
				<div class="col-md-offset-1 col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>

		    	<div class="col-md-offset-1 col-md-3 " style="padding:0px; background-color: #FFFFFF; ">
					<p style="margin-left: 5%; margin-top: 3%;">
		    		<b>WTF</b><br>
		    		C Scheme, Jaipur<br>
		    		Cost for two &nbsp&nbsp&nbsp&nbsp<b><i class="fa fa-rupee" style="font-size:20px;color: #388E3C;">800</i></b><br>
		    		Cuisine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Multicuisine</b><br>
		    		<span class='glyphicon glyphicon-map-marker'><a href="#"><u>Jaipur,Rajasthan</u></a></span>
		    		</p>
		    		<img src="wtf.jpg" style="width: 100%;"><br><br>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">View Details</button>
		    		<button style="color: #388E3C; background: transparent; border-color: #388E3C; border-radius: 10%; margin-left: 5%;">Deal</button>
		    		<br>
		    		<p style="margin-left: 5%; margin-bottom: 3%;">
		    		Upload your bill and get 15% cash back in your Paytm wallet
		    		</p>
		    	</div>
			</div>
		</div>
	</div><br><br><br>
	



</div>


			
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