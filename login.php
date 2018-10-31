<?php
session_start();
if (!empty($_SESSION["name"])) {
	header('location:index.php');
}
else{
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
	}input[type=text], input[type=password] 
	{
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	}

	.bu 
	{
    	background-color: #4CAF50;
	    color: white;
	    padding: 14px 20px;
	    margin: 8px 0;
	    border: none;
	    cursor: pointer;
	    width: 5%;
	    height: 3%;
	}

	.bu:hover 
	{
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
<script type="text/javascript">
   function sign()
    {
        window.location.assign("./signup.html");
    }
</script>
</head>
<body background="lb3.jpg">
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
	</div><br><br><br><br><br>
	<div>
		<form method="post">
			<div class="container well" style="width: 30%;">
				<center><legend> User Login </legend></center>
				<center><img src="login.jpg" style="border-radius: 50%;"></center><br>
    			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label><b>Email</b></label><br>
    			<center><input type="text" placeholder="Enter Email" name="uname" id="p" required=""><br></center>

    			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label><b>Password</b></label><br>
    			<center><input type="password" placeholder="Enter Password" name="psw" id="r" required=""><br></center>
        
    			<center><button class="bu" style="width: 20%" type="submit" name="submit">Login</button>&nbsp<a href="signup.html"><button class="bu" style="width: 20%;" onClick="sign()">Signup</button></a></center><br>
    			<center><div style="margin-top: -3%; margin-bottom: 3%;"><?php
					//Include GP config file && User class
					include_once 'gpConfig.php';
					include_once 'User.php';

					if(isset($_GET['code'])){
						$gClient->authenticate($_GET['code']);
						$_SESSION['token'] = $gClient->getAccessToken();
						header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
					}

					if (isset($_SESSION['token'])) {
						$gClient->setAccessToken($_SESSION['token']);
					}

					if ($gClient->getAccessToken()) {
						//Get user profile data from google
						$gpUserProfile = $google_oauthV2->userinfo->get();
						
						//Initialize User class
						$user = new User();
						
						//Insert or update user data to the database
					    $gpUserData = array(
					        'oauth_provider'=> 'google',
					        'oauth_uid'     => $gpUserProfile['id'],
					        'first_name'    => $gpUserProfile['given_name'],
					        'last_name'     => $gpUserProfile['family_name'],
					        'email'         => $gpUserProfile['email'],
					        'gender'        => $gpUserProfile['gender'],
					        'locale'        => $gpUserProfile['locale'],
					        'picture'       => $gpUserProfile['picture'],
					        'link'          => $gpUserProfile['link']
					    );
					    $userData = $user->checkUser($gpUserData);
						
						//Storing user data into session
						$_SESSION['userData'] = $userData;
						
						//Render facebook profile data
					    if(!empty($userData)){
					        $output = '<h1>Google+ Profile Details </h1>';
					        $output .= '<img src="'.$userData['picture'].'" width="300" height="220">';
					        $output .= '<br/>Google ID : ' . $userData['oauth_uid'];
					        $output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
					        $output .= '<br/>Email : ' . $userData['email'];
					        $output .= '<br/>Gender : ' . $userData['gender'];
					        $output .= '<br/>Locale : ' . $userData['locale'];
					        $output .= '<br/>Logged in with : Google';
					        $output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Google+ Page</a>';
					        $output .= '<br/>Logout from <a href="logout.php">Google</a>';
					    }else{
					        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
					    }
					} else {
						$authUrl = $gClient->createAuthUrl();
						$output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="login.png" alt=""/></a>';
					}
					?>
					<html>
					<head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					<title>Login with Google using PHP by CodexWorld</title>
					<style type="text/css">
					h1{font-family:Arial, Helvetica, sans-serif;color:#999999;}
					</style>
					</head>
					<body>
					<div><?php echo $output; ?></div>
					</body>
					</html></div></center>
    			<input type="checkbox" checked="checked"> Remember me <span style="float: right;">Forgot <a href="fp.php">password?</a></span><br>
  			</div>
		</form>
	</div><br><br><br>
	<?php 
		if (isset($_POST['submit']))
		 	{
		 	$a=$_POST['uname'];
		 	$b=$_POST['psw'];	

		 	$conn=mysqli_connect("localhost","root","","register");
		 	$sql="select * from signup where Email='$a' && Password='$b'";
		 	$result=mysqli_query($conn,$sql);
		 		if (mysqli_num_rows($result))
			 		 {
				 			$row=mysqli_fetch_assoc($result);
			 			$_SESSION["name"]=$row['First name'];
			 			$_SESSION["lname"]=$row['Last name'];
			 			$_SESSION["Email"]=$row['Email'];
			 			header('location:index.php');
			 		}
			 	else{?>
			 			<script type="text/javascript">
			 				alert("Invalid Inputs");
			 			</script>
			<?php 
			 	}
		}
	}
	 ?>
<!--foter code-->
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
	<!--Code Above-->
</div>
</body>
</html>