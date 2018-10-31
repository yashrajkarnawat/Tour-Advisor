<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="x-icon/image" href="to.jpg"><title>Tour Advisor</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/ihover.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
	.i1{
		width: 100%;height: 300px;
	}
	.i1:hover{
		opacity: 0.5;
		box-shadow: 0px 10px 50px;	
		transition: 0.4s;
	}
	.cont{
		margin: 10px auto 0;margin-bottom: 10px;display: flex;flex-direction: row;
		flex-wrap: wrap;
	}
	.cont .box{
		position: relative;height: 280px;width: 320px;background: #ff0;margin: 10px;box-sizing: border-box;display: inline-block;
	}
	.cont .box .imgBox{
		position: relative;overflow: hidden;
	}
	.cont .box .imgBox img{
		width: 300px;height: 280px;transition: transform 1s;
	}
	.cont .box:hover .imgBox img{
		transform: scale(1.2);
	}
	.cont .box .details{
		position: absolute;top: 20px;bottom: 1px;left: 2px;right: 1px;background: rgba(0,0,0,0.8);
		transform: scaleY(0);transition: transform 1s;
	}
	.cont .box:hover .details {
		transform: scaleY(1);
	}
	.cont .box .details .content h2{
		font-size: 30px;
	}
	.cont .box .details .content{
		position: absolute;top: 50px;transform: translateY(-50%);text-align: center;padding: 25px;color: #fff;
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
				<li class="active"><a href="place.php">Place</a></li>
				<li><a href="hotel.php">Hotel</a></li>
				<li><a href="restaurant.php">Restaurants</a></li>
				<?php
					if (!empty($_SESSION["name"])) { 
				?>
				<li><a href="login.php"><?php echo $_SESSION["name"]; echo "&nbsp".$_SESSION["lname"]; ?></a></li>
				<li><a href="logout.php">logout</a></li>
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

	<div class="row">
		<div id="mycarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="mycarousel" data-slide-to="0" class="active"></li>
				<li data-target="mycarousel" data-slide-to="1"></li>
				<li data-target="mycarousel" data-slide-to="2"></li>
				<li data-target="mycarousel" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active"><img src="p2.jpg" style="height: 400px;width: 100%;"></div>
				<div class="item"><img src="2.jpg" style="height: 400px;width: 100%;"></div>
				<div class="item"><img src="p6.jpg" style="height: 400px;width: 100%;"></div>
				<div class="item"><img src="chittor.jpg" style="height: 400px;width: 100%;"></div>
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
	</div><br><br>


<center><span style="color: #1E90FF; font-family: Mistral; font-size: 48px;"><b><i>TOP DESTINATIONS</i></b></span></center><br><br>
					
<br>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-1 col-md-10" >
			<div class="col-md-4">
				<div class="cont" style="border-color: grey;">
							
							<div class="box">
								<div class="imgBox">
									<img src="jaisalmer.jpg" style="width: 100%; height: 300px;">
								</div>
								<div class="details">
									<div class="content"><center><h2 style="margin-top: 50%; margin-left: 10px;">JAISALMER</h2>
										<p>A gate way to the Thar Desert, the ‘Golden City’ of Rajasthan is home to one of India’s most famous Living forts, Jaisalmer Fort.</p></center> </div>
								</div>
							</div>
				</div>
			</div>
		

		<div class="col-md-4">
			
			<div class="cont" style="border-color: grey;">
						
						<div class="box">
							<div class="imgBox">
								<img src="jodhpur.jpg" style="width: 100%; height: 300px;">
							</div>
							<div class="details">
								<div class="content"><center><h2 style="margin-top: 50%; margin-left: 10px;">JODHPUR</h2>
									<p>This bustling Blue City is the second largest in Rajasthan after Jaipur and holds with it a treasure trover of historically relevant landmarks.</p></center> </div>
							</div>
						</div>
			</div>
		</div>

		<div class="col-md-4">
			
			<div class="cont" style="border-color: grey;">
						
						<div class="box">
							<div class="imgBox">
								<img src="barmer.jpg" style="width: 100%; height: 300px;">
							</div>
							<div class="details">
								<div class="content"><center><h2 style="margin-top: 50%; margin-left: 10px;">BARMER</h2>
								<p>Resting on banks of Luni river, it is one the largest districts of Rajasthan.</p></center> </div>
							</div>
						</div>
			</div>
		</div>
	</div>
</div>
<br><br>

	<div class="row">
		<div class="col-md-offset-1 col-md-10" >
			<div class="col-md-4">
				<div class="cont" style="border-color: grey;">
							
							<div class="box">
								<div class="imgBox">
									<img src="jaipur.jpg" style="width: 100%; height: 300px;">
								</div>
								<div class="details">
									<div class="content"><center><h2 style="margin-top: 50%; margin-left: 10px;">JAIPUR</h2>
										<p>The Pink City is a bustling capital with a modern business centre that still retains its rustic age-old charm. Jaipur never fails to surprise a curious traveller.</p></center> </div>
								</div>
							</div>
				</div>
			</div>
		

		<div class="col-md-4">
			
			<div class="cont" style="border-color: grey;">
						
						<div class="box">
							<div class="imgBox">
								<img src="c.jpg" style="width: 100%; height: 300px;">
							</div>
							<div class="details">
								<div class="content"><center><h2 style="margin-top: 50%; margin-left: 10px;">CHITTORGHAR</h2>
								<p>Named after its most imposing structure, the Chittorgarh Fort, this city epitomises the Rajput spirit, valour, pride and romance.</p></center> </div>
							</div>
						</div>
			</div>
		</div>

		<div class="col-md-4">
			
			<div class="cont" style="border-color: grey;">
						
						<div class="box">
							<div class="imgBox">
								<img src="udaipur.jpg" style="width: 100%; height: 300px;">
							</div>
							<div class="details">
								<div class="content"><center><h2 style="margin-top: 50%; margin-left: 10px;">UDAIPUR</h2>
								<p>Known as the ‘Venice of the East’. Udaipur’s Lake Palace (Jag Niwas) is one of the finest marvels of architectural and cultural splendor in India today.</p></center> </div>
							</div>
						</div>
			</div>
		</div>
	</div>
</div>

<br><br>


	<div class="row">
		<div class="col-md-offset-1 col-md-10" >
			<div class="col-md-4">
				<div class="cont" style="border-color: grey;">
							
							<div class="box">
								<div class="imgBox">
									<img src="bikaner.jpg" style="width: 100%; height: 300px;">
								</div>
								<div class="details">
									<div class="content"><center><h2 style="margin-top: 50%; margin-left: 10px;">BIKANER</h2>
									<p>Often referred to as camel country, Bikaner’s distinguished for the best riding camels in the world and boasts of having one of the largest Camel Research and Breeding farms in the world.</p></center></div>
								</div>
							</div>
				</div>
			</div>
		

		<div class="col-md-4">
			
			<div class="cont" style="border-color: grey;">
						
						<div class="box">
							<div class="imgBox">
								<img src="shekhawati.jpg" style="width: 100%; height: 300px;">
							</div>
							<div class="details">
								<div class="content"><center><h2 style="margin-top: 60%; margin-left: 10px;">SHEKHAWATI</h2>
								<p>Churu, Jhunjhunu and Sikar.The place of Art and Design.</p></center> </div>
							</div>
						</div>
			</div>
		</div>

		<div class="col-md-4">
			
			<div class="cont" style="border-color: grey;">
						
						<div class="box">
							<div class="imgBox">
								<img src="pushkar.jpg" style="width: 100%; height: 300px;">
							</div>
							<div class="details">
								<div class="content"><center><h2 style="margin-top: 50%; margin-left: 10px;">PUSHKAR</h2>
								<p>Lying on the shore of a magnificent lake, Pushkar is one of the oldest existing cities of India and is home to one of its oldest temples.</p></center> </div>
							</div>
						</div>
			</div>
		</div>
	</div>
</div>
</div>


<br><br><br>








<center><span style="color: #1E90FF; font-family: Mistral; font-size: 48px;"><b><i>MORE PLACES TO VISIT</i></b></span></center><br><br>



<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-1 col-md-11">
			<div class="col-md-5 well" style="padding: 2px;">
				<a href="#"><div>
					<img src="ajmer.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">AJMER</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>
			</div>
			<div class="col-md-offset-1 col-md-5 well" style="padding: 2px";>
				<a href="#"><div>
					<img src="alwar.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">ALWAR</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>
			</div>
		</div>
		<div class="col-md-offset-1 col-md-11" style="margin-top: 20px;">
			<div class="col-md-5 well" style="padding: 2px;">
				<a href="#"><div>
					<img src="baran.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">BARAN</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>
			</div>
			<div class="col-md-offset-1 col-md-5 well" style="padding: 2px";>
				<a href="#"><div>
					<img src="banswara.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">BANSWARA</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>
			</div>
		</div>
		<div class="col-md-offset-1 col-md-11" style="margin-top: 20px;">
			<div class="col-md-5 well" style="padding: 2px;">
				<a href="#"><div>
					<img src="bundi.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">BUNDI</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>
			</div>
			<div class="col-md-offset-1 col-md-5 well" style="padding: 2px";>
				<a href="#"><div>
					<img src="bhilwara.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">BHILWARA</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>
			</div>
		</div>
		<div class="col-md-offset-1 col-md-11" style="margin-top: 20px;">
			<div class="col-md-5 well" style="padding: 2px;">
				<a href="#"><div>
					<img src="dausa.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">DAUSA</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>
			</div>
			<div class="col-md-offset-1 col-md-5 well" style="padding: 2px";>
				<a href="#"><div>
					<img src="dholpur.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">DHOLPUR</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>	
			</div>
		</div>
		<div class="col-md-offset-1 col-md-11" style="margin-top: 20px;">
			<div class="col-md-5 well" style="padding: 2px;">
				<a href="#"><div>
					<img src="hanumanghar.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">HANUMANGHAR</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>
			</div>
			<div class="col-md-offset-1 col-md-5 well" style="padding: 2px";>
				<a href="#"><div>
					<img src="karauli.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">KARAULI</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>	
			</div>
		</div>
		<div class="col-md-offset-1 col-md-11" style="margin-top: 20px;">
			<div class="col-md-5 well" style="padding: 2px;">
				<a href="#"><div>
					<img src="sriganganagar.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">SRIGANGANAGAR</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>
			</div>
			<div class="col-md-offset-1 col-md-5 well" style="padding: 2px";>
				<a href="#"><div>
					<img src="tonk.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">TONK</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>	
			</div>
		</div>
		<div class="col-md-offset-1 col-md-11" style="margin-top: 20px;">
			<div class="col-md-5 well" style="padding: 2px;">
				<a href="#"><div>
					<img src="pali.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">PALI</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>
			</div>
			<div class="col-md-offset-1 col-md-5 well" style="padding: 2px";>
				<a href="#"><div>
					<img src="jalore.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">JALORE</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>	
			</div>
		</div>
		<div class="col-md-offset-1 col-md-11" style="margin-top: 20px;">
			<div class="col-md-5 well" style="padding: 2px;">
				<a href="#"><div>
					<img src="bharatpur.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">BHARATPUR</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>
			</div>
			<div class="col-md-offset-1 col-md-5 well" style="padding: 2px";>
				<a href="#"><div>
					<img src="sawaimadhopur.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">SAWAIMADHOPUR</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>	
			</div>
		</div>
		<div class="col-md-offset-1 col-md-11" style="margin-top: 20px;">
			<div class="col-md-5 well" style="padding: 2px;">
				<a href="#"><div>
					<img src="nagaur.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">NAGAUR</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>
			</div>
			<div class="col-md-offset-1 col-md-5 well" style="padding: 2px";>
				<a href="#"><div>
					<img src="kota.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">KOTA</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>	
			</div>
		</div>
		<div class="col-md-offset-1 col-md-11" style="margin-top: 20px;">
			<div class="col-md-5 well" style="padding: 2px;">
				<a href="#"><div>
					<img src="jhalawar.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">JHALAWAR</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>
			</div>
			<div class="col-md-offset-1 col-md-5 well" style="padding: 2px";>
				<a href="#"><div>
					<img src="dungarpur.jpg" style="width: 100%;height: 300px;">
					<center>
						<div class="info">
							<h4 style="font-size: 25px;">DUNGARPUR</h4>
							<p>Enhance your floor with tiles beauty.</p>
						</div>
					</center>
				</div></a>	
			</div>
		</div>
	</div>
</div>

<!--footer-->
	<br><br>
		<div class="row well" style="background-color: #0C0C0C;">	
			<div class="col-sm-3 well" style="background-color: #0C0C0C; font-size: 15px; color: white;border:none;border-right: 2px solid;height: 200px;">Disclaimer <br>FAQ <br> Terms & Condition <br> About Us <br> Privacy Policy</div>
			<div class="col-sm-3 col-sm-offset-1 well" style="background-color: #0C0C0C; height: 200px;font-size: 15px; color: white;border:none;border-right: 2px solid;"><u style="font-size: 20px;">Follow Us On</u><br>Facebook <br>Instagram <br> Google+<br> Twitter</div>
			<div class="col-sm-3 col-sm-offset-2 well" style="background-color: #0C0C0C; font-size: 15px;height: 200px; color: white;border:none;border-right: 2px solid;">
				Poornima Institute of Engineering & Technology <br> Poornima Marg, Sitapura<br> Jaipur, 302022  <br> Rajasthan <br>E-mail:-karnawatyashraj782@gmail.com <br>Contact No:- 8502075265
			</div>
			<div class="footer-copyright text-center"><span style="font-color: white;">© 2018 Copyright:Int Elligence</span></div>
		</div>
	<!--Code Above-->
</div>	
</body>
</html>