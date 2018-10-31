
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
				<li><a href="hotel.php">Hotel</a></li>
				<li><a href="restaurant.php">Restaurants</a></li>
				<?php
					if (!empty($_SESSION["name"])) { 
				?>
				<li class="active" class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><b class="caret"></b><?php echo $_SESSION["name"]; echo "&nbsp".$_SESSION["lname"]; ?></a>
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
<?php
if(isset($_GET['value']))
{
$value=$_GET['value']; 
$conn=mysqli_connect("localhost","root","","register");
	
	if ($value=="details") {
		$user=$_SESSION["Email"];
		$sql="select * from signup where email='$user'";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)){
			$row=mysqli_fetch_assoc($result); ?>
	<div class="panel panel-info">
		<div class="panel-heading">My Details</div>
		<div class="panel-body">
			<table class="container" border="1">
				<tr>
					<td>
						<span>Name</span><span style="float: right;"><?php echo $row["First name"]; ?></span>
					</td>
				</tr>
				<tr>
				<tr>
					<td>
						<span>Last Name</span><span style="float: right;"><?php echo $row["Last name"]; ?></span>
					</td>
				</tr>
				<tr>	
					<td>
						E-mail<span style="float: right;"><?php echo $row["Email"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						Mobile No.<span style="float: right;"><?php echo $row["Mobile No"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						Address Line 1<span style="float: right;"><?php echo $row["address"]; ?></span>
					</td>
				</tr>
				
				<tr>
					<td>
						Country<span style="float: right;"><?php echo $row["country"]; ?></span>
					</td>
				</tr>
				
			</table>
		</div>

	</div>
	<?php }
		}
 	else if ($value=="editdetail") {
		$user=$_SESSION["Email"];
		$sql="select * from signup where email='$user'";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)){
			$row=mysqli_fetch_assoc($result); ?>
	<div class="panel panel-info">
		<div class="panel-heading">My Details</div>
		<div class="panel-body">
			<form method="post" onsubmit="return check()">
                 	<div class="col-md-6 form-group">
                 		<label for="usr">Name</label>
                 		<input type="name" class="form-control" value="<?php echo $_SESSION["NAME"]; ?>" name="uname" required>
                 		<label>E-mail</label>
                 		<input type="email" class="form-control" value="<?php echo $_SESSION["EMAIL"]; ?>"  name="uemail" required>
                 		<label>Mobile No.</label>
                 		<input type="text" class="form-control" maxlength="10" minlength="10" value="<?php echo $_SESSION["MNO"]; ?>"  name="umno" required>
                 		<label>Address line 1</label>
                 		<input type="text" class="form-control"  name="uadd1" value="<?php echo $_SESSION["ADD1"]; ?>" required>
                 	</div>
                 	<div class="col-md-6">
                 		
                 		<label>Address line 2</label>
                 		<input type="text" class="form-control"  name="uadd2" value="<?php echo $_SESSION["ADD2"]; ?>" required>
                 		<label>city</label>
                 		<input type="text" class="form-control"  name="ucity" value="<?php echo $_SESSION["CITY"]; ?>" required>
                 		<label>state</label>
                 			<select name="ustate" class="form-control">
   		<option><?php echo $_SESSION["country"]; ?></option>
	<option value="AF">Afghanistan</option>
	<option value="AX">Åland Islands</option>
	<option value="AL">Albania</option>
	<option value="DZ">Algeria</option>
	<option value="AS">American Samoa</option>
	<option value="AD">Andorra</option>
	<option value="AO">Angola</option>
	<option value="AI">Anguilla</option>
	<option value="AQ">Antarctica</option>
	<option value="AG">Antigua and Barbuda</option>
	<option value="AR">Argentina</option>
	<option value="AM">Armenia</option>
	<option value="AW">Aruba</option>
	<option value="AU">Australia</option>
	<option value="AT">Austria</option>
	<option value="AZ">Azerbaijan</option>
	<option value="BS">Bahamas</option>
	<option value="BH">Bahrain</option>
	<option value="BD">Bangladesh</option>
	<option value="BB">Barbados</option>
	<option value="BY">Belarus</option>
	<option value="BE">Belgium</option>
	<option value="BZ">Belize</option>
	<option value="BJ">Benin</option>
	<option value="BM">Bermuda</option>
	<option value="BT">Bhutan</option>
	<option value="BO">Bolivia, Plurinational State of</option>
	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
	<option value="BA">Bosnia and Herzegovina</option>
	<option value="BW">Botswana</option>
	<option value="BV">Bouvet Island</option>
	<option value="BR">Brazil</option>
	<option value="IO">British Indian Ocean Territory</option>
	<option value="BN">Brunei Darussalam</option>
	<option value="BG">Bulgaria</option>
	<option value="BF">Burkina Faso</option>
	<option value="BI">Burundi</option>
	<option value="KH">Cambodia</option>
	<option value="CM">Cameroon</option>
	<option value="CA">Canada</option>
	<option value="CV">Cape Verde</option>
	<option value="KY">Cayman Islands</option>
	<option value="CF">Central African Republic</option>
	<option value="TD">Chad</option>
	<option value="CL">Chile</option>
	<option value="CN">China</option>
	<option value="CX">Christmas Island</option>
	<option value="CC">Cocos (Keeling) Islands</option>
	<option value="CO">Colombia</option>
	<option value="KM">Comoros</option>
	<option value="CG">Congo</option>
	<option value="CD">Congo, the Democratic Republic of the</option>
	<option value="CK">Cook Islands</option>
	<option value="CR">Costa Rica</option>
	<option value="CI">Côte d'Ivoire</option>
	<option value="HR">Croatia</option>
	<option value="CU">Cuba</option>
	<option value="CW">Curaçao</option>
	<option value="CY">Cyprus</option>
	<option value="CZ">Czech Republic</option>
	<option value="DK">Denmark</option>
	<option value="DJ">Djibouti</option>
	<option value="DM">Dominica</option>
	<option value="DO">Dominican Republic</option>
	<option value="EC">Ecuador</option>
	<option value="EG">Egypt</option>
	<option value="SV">El Salvador</option>
	<option value="GQ">Equatorial Guinea</option>
	<option value="ER">Eritrea</option>
	<option value="EE">Estonia</option>
	<option value="ET">Ethiopia</option>
	<option value="FK">Falkland Islands (Malvinas)</option>
	<option value="FO">Faroe Islands</option>
	<option value="FJ">Fiji</option>
	<option value="FI">Finland</option>
	<option value="FR">France</option>
	<option value="GF">French Guiana</option>
	<option value="PF">French Polynesia</option>
	<option value="TF">French Southern Territories</option>
	<option value="GA">Gabon</option>
	<option value="GM">Gambia</option>
	<option value="GE">Georgia</option>
	<option value="DE">Germany</option>
	<option value="GH">Ghana</option>
	<option value="GI">Gibraltar</option>
	<option value="GR">Greece</option>
	<option value="GL">Greenland</option>
	<option value="GD">Grenada</option>
	<option value="GP">Guadeloupe</option>
	<option value="GU">Guam</option>
	<option value="GT">Guatemala</option>
	<option value="GG">Guernsey</option>
	<option value="GN">Guinea</option>
	<option value="GW">Guinea-Bissau</option>
	<option value="GY">Guyana</option>
	<option value="HT">Haiti</option>
	<option value="HM">Heard Island and McDonald Islands</option>
	<option value="VA">Holy See (Vatican City State)</option>
	<option value="HN">Honduras</option>
	<option value="HK">Hong Kong</option>
	<option value="HU">Hungary</option>
	<option value="IS">Iceland</option>
	<option value="IN">India</option>
	<option value="ID">Indonesia</option>
	<option value="IR">Iran, Islamic Republic of</option>
	<option value="IQ">Iraq</option>
	<option value="IE">Ireland</option>
	<option value="IM">Isle of Man</option>
	<option value="IL">Israel</option>
	<option value="IT">Italy</option>
	<option value="JM">Jamaica</option>
	<option value="JP">Japan</option>
	<option value="JE">Jersey</option>
	<option value="JO">Jordan</option>
	<option value="KZ">Kazakhstan</option>
	<option value="KE">Kenya</option>
	<option value="KI">Kiribati</option>
	<option value="KP">Korea, Democratic People's Republic of</option>
	<option value="KR">Korea, Republic of</option>
	<option value="KW">Kuwait</option>
	<option value="KG">Kyrgyzstan</option>
	<option value="LA">Lao People's Democratic Republic</option>
	<option value="LV">Latvia</option>
	<option value="LB">Lebanon</option>
	<option value="LS">Lesotho</option>
	<option value="LR">Liberia</option>
	<option value="LY">Libya</option>
	<option value="LI">Liechtenstein</option>
	<option value="LT">Lithuania</option>
	<option value="LU">Luxembourg</option>
	<option value="MO">Macao</option>
	<option value="MK">Macedonia, the former Yugoslav Republic of</option>
	<option value="MG">Madagascar</option>
	<option value="MW">Malawi</option>
	<option value="MY">Malaysia</option>
	<option value="MV">Maldives</option>
	<option value="ML">Mali</option>
	<option value="MT">Malta</option>
	<option value="MH">Marshall Islands</option>
	<option value="MQ">Martinique</option>
	<option value="MR">Mauritania</option>
	<option value="MU">Mauritius</option>
	<option value="YT">Mayotte</option>
	<option value="MX">Mexico</option>
	<option value="FM">Micronesia, Federated States of</option>
	<option value="MD">Moldova, Republic of</option>
	<option value="MC">Monaco</option>
	<option value="MN">Mongolia</option>
	<option value="ME">Montenegro</option>
	<option value="MS">Montserrat</option>
	<option value="MA">Morocco</option>
	<option value="MZ">Mozambique</option>
	<option value="MM">Myanmar</option>
	<option value="NA">Namibia</option>
	<option value="NR">Nauru</option>
	<option value="NP">Nepal</option>
	<option value="NL">Netherlands</option>
	<option value="NC">New Caledonia</option>
	<option value="NZ">New Zealand</option>
	<option value="NI">Nicaragua</option>
	<option value="NE">Niger</option>
	<option value="NG">Nigeria</option>
	<option value="NU">Niue</option>
	<option value="NF">Norfolk Island</option>
	<option value="MP">Northern Mariana Islands</option>
	<option value="NO">Norway</option>
	<option value="OM">Oman</option>
	<option value="PK">Pakistan</option>
	<option value="PW">Palau</option>
	<option value="PS">Palestinian Territory, Occupied</option>
	<option value="PA">Panama</option>
	<option value="PG">Papua New Guinea</option>
	<option value="PY">Paraguay</option>
	<option value="PE">Peru</option>
	<option value="PH">Philippines</option>
	<option value="PN">Pitcairn</option>
	<option value="PL">Poland</option>
	<option value="PT">Portugal</option>
	<option value="PR">Puerto Rico</option>
	<option value="QA">Qatar</option>
	<option value="RE">Réunion</option>
	<option value="RO">Romania</option>
	<option value="RU">Russian Federation</option>
	<option value="RW">Rwanda</option>
	<option value="BL">Saint Barthélemy</option>
	<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KN">Saint Kitts and Nevis</option>
	<option value="LC">Saint Lucia</option>
	<option value="MF">Saint Martin (French part)</option>
	<option value="PM">Saint Pierre and Miquelon</option>
	<option value="VC">Saint Vincent and the Grenadines</option>
	<option value="WS">Samoa</option>
	<option value="SM">San Marino</option>
	<option value="ST">Sao Tome and Principe</option>
	<option value="SA">Saudi Arabia</option>
	<option value="SN">Senegal</option>
	<option value="RS">Serbia</option>
	<option value="SC">Seychelles</option>
	<option value="SL">Sierra Leone</option>
	<option value="SG">Singapore</option>
	<option value="SX">Sint Maarten (Dutch part)</option>
	<option value="SK">Slovakia</option>
	<option value="SI">Slovenia</option>
	<option value="SB">Solomon Islands</option>
	<option value="SO">Somalia</option>
	<option value="ZA">South Africa</option>
	<option value="GS">South Georgia and the South Sandwich Islands</option>
	<option value="SS">South Sudan</option>
	<option value="ES">Spain</option>
	<option value="LK">Sri Lanka</option>
	<option value="SD">Sudan</option>
	<option value="SR">Suriname</option>
	<option value="SJ">Svalbard and Jan Mayen</option>
	<option value="SZ">Swaziland</option>
	<option value="SE">Sweden</option>
	<option value="CH">Switzerland</option>
	<option value="SY">Syrian Arab Republic</option>
	<option value="TW">Taiwan, Province of China</option>
	<option value="TJ">Tajikistan</option>
	<option value="TZ">Tanzania, United Republic of</option>
	<option value="TH">Thailand</option>
	<option value="TL">Timor-Leste</option>
	<option value="TG">Togo</option>
	<option value="TK">Tokelau</option>
	<option value="TO">Tonga</option>
	<option value="TT">Trinidad and Tobago</option>
	<option value="TN">Tunisia</option>
	<option value="TR">Turkey</option>
	<option value="TM">Turkmenistan</option>
	<option value="TC">Turks and Caicos Islands</option>
	<option value="TV">Tuvalu</option>
	<option value="UG">Uganda</option>
	<option value="UA">Ukraine</option>
	<option value="AE">United Arab Emirates</option>
	<option value="GB">United Kingdom</option>
	<option value="US">United States</option>
	<option value="UM">United States Minor Outlying Islands</option>
	<option value="UY">Uruguay</option>
	<option value="UZ">Uzbekistan</option>
	<option value="VU">Vanuatu</option>
	<option value="VE">Venezuela, Bolivarian Republic of</option>
	<option value="VN">Viet Nam</option>
	<option value="VG">Virgin Islands, British</option>
	<option value="VI">Virgin Islands, U.S.</option>
	<option value="WF">Wallis and Futuna</option>
	<option value="EH">Western Sahara</option>
	<option value="YE">Yemen</option>
	<option value="ZM">Zambia</option>
	<option value="ZW">Zimbabwe</option>
</select>
                 		<label>Pincode</label>
                 		<input type="text" class="form-control" maxlength="6" minlength="6" value="<?php echo $_SESSION["PIN"]; ?>"  name="upin" required>
                 	</div>
              
                 	</div>
                 </div>
                  <div class="panel-footer">
                        <input type="submit" name="submit" class="btn btn-success">&nbsp&nbsp<input type="reset" class="btn btn-danger">
                       </div>
                  </div>   </form>
	</div>
	<?php
}
				if (isset($_POST['submit'])) {
					
					$userid=$_SESSION["EMAIL"];
					$a=$_POST['uname'];
					$b=$_POST['uemail'];
					$c=$_POST['umno'];
					$e=$_POST['uadd1'];
					$f=$_POST['uadd2'];
					$g=$_POST['ucity'];
					$h=$_POST['ustate'];
					$i=$_POST['upin'];
					$sqli="UPDATE `users` SET `name`='$a',`email`='$b',`mobileno`='$c',`address1`='$e',`address2`='$f',`city`='$g',`state`='$h',`pincode`='$i' WHERE email='$userid'";
					if (mysqli_query($conn,$sqli)) 
						{
   					  $_SESSION["NAME"]=$a;$_SESSION["EMAIL"]=$b;
					  $_SESSION["MNO"]=$c;$_SESSION["ADD1"]=$e;
					  $_SESSION["ADD2"]=$f;$_SESSION["CITY"]=$g;
				      $_SESSION["STATE"]=$h;$_SESSION["PIN"]=$i;?>
						<script type="text/javascript">
							alert("Your Profile Has Been Updated");
							window.location.assign('profile.php?value=details');
						</script>
					<?php }
					else{
						echo "no";
					}
				}

			}
		}
 ?>

</div>
</div>
<br><br><br>
<!--footer-->

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