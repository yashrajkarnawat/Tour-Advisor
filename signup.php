<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><link rel="icon" type="x-icon/image" href="to.jpg"><title>Tour Advisor</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function check()
        {
            var x=document.getElementById('n6').value;
            var y=document.getElementById('n7').value;
            if(x!=y)
            {
               alert("Password not match");
               return false;
            }
        }
    </script>
</head>
<style>
input[type=text], input[type=password], input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
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

.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
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
    .cancelbtn, .signupbtn {
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
<body background="lb3.jpg">
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
                <li><a href="login.php">Login</a></li>
                <li class="active"><a href="signup.php">Signup</a></li>
                </ul>
            </div>
        </div>
    </div><br>
<Fieldset>
<form action="phpmail/mail.php" method="POST" onsubmit="return check()">
<br><br><br><br>
  <div class="container">
  <div class="well"> 
    <center><legend> SIGNUP </legend></center>
    <div class="row">
     <div class="col-md-6">   
     <label><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="e1" id="n1" required>
    <label><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="e2" id="n2" required>
    <label><b>Username</b></label>
    <input type="text" placeholder="Different from first name" name="e3" id="n3" required>
    <label><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="e4" id="n4" required maxlength="10">
    <label><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="e5" id="n5" required>
</div>
     <div class="col-md-6">
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="e6" id="n6" required minlength="6" required maxlength="15">

    <label><b>Confirm Password</b></label>
    <input type="password" placeholder="Repeat Password" name="e7" id="n7" required minlength="6" required maxlength="15">
    <label><b>Address</b></label>
    <input type="text" name="e8" id="n8" placeholder="Enter your address" required=""><br>
    <label><b>Country</b></label>&nbsp&nbsp
    <select style="padding: 10px 20px;" name="e9" id="n9" required="">
        <option>--Select--</option>
        <option value="AF">Afghanistan</option>
        <option value="AX">Åland Islands</option>
        <option value="AL">Albania</option>
        <option value="DZ">Algeria</option>
        <option value="AS">American Samoa</option>
        <option value="AD">Andorra</option>
        <option value="AO">Angola</option>
        <option value="AI">Anguilla</option>
        <option value="AQ">Antarctica</option>
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
        <option value="BW">Botswana</option>
        <option value="BV">Bouvet Island</option>
        <option value="BR">Brazil</option>
        <option value="BG">Bulgaria</option>
        <option value="BF">Burkina Faso</option>
        <option value="BI">Burundi</option>
        <option value="KH">Cambodia</option>
        <option value="CM">Cameroon</option>
        <option value="CA">Canada</option>
        <option value="CV">Cape Verde</option>
        <option value="KY">Cayman Islands</option>
        <option value="TD">Chad</option>
        <option value="CL">Chile</option>
        <option value="CN">China</option>
        <option value="CX">Christmas Island</option>
        <option value="CO">Colombia</option>
        <option value="KM">Comoros</option>
        <option value="CG">Congo</option>
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
        <option value="EC">Ecuador</option>
        <option value="EG">Egypt</option>
        <option value="SV">El Salvador</option>
        <option value="ER">Eritrea</option>
        <option value="EE">Estonia</option>
        <option value="ET">Ethiopia</option>
        <option value="FO">Faroe Islands</option>
        <option value="FJ">Fiji</option>
        <option value="FI">Finland</option>
        <option value="FR">France</option>
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
        <option value="VA">Holy See</option>
        <option value="HN">Honduras</option>
        <option value="HK">Hong Kong</option>
        <option value="HU">Hungary</option>
        <option value="IS">Iceland</option>
        <option value="IN">India</option>
        <option value="ID">Indonesia</option>
        <option value="IR">Iran</option>
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
        <option value="KP">Korea</option>
        <option value="KW">Kuwait</option>
        <option value="KG">Kyrgyzstan</option>
        <option value="LV">Latvia</option>
        <option value="LB">Lebanon</option>
        <option value="LS">Lesotho</option>
        <option value="LR">Liberia</option>
        <option value="LY">Libya</option>
        <option value="LI">Liechtenstein</option>
        <option value="LT">Lithuania</option>
        <option value="LU">Luxembourg</option>
        <option value="MO">Macao</option>
        <option value="MK">Macedonia</option>
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
        <option value="FM">Micronesia</option>
        <option value="MD">Moldova</option>
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
        <option value="NO">Norway</option>
        <option value="OM">Oman</option>
        <option value="PK">Pakistan</option>
        <option value="PW">Palau</option>
        <option value="PA">Panama</option>
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
        <option value="RU">Russian</option>
        <option value="RW">Rwanda</option>
        <option value="LC">Saint Lucia</option>
        <option value="MF">Saint Martin</option>
        <option value="WS">Samoa</option>
        <option value="SM">San Marino</option>
        <option value="SA">Saudi Arabia</option>
        <option value="SN">Senegal</option>
        <option value="RS">Serbia</option>
        <option value="SC">Seychelles</option>
        <option value="SL">Sierra Leone</option>
        <option value="SG">Singapore</option>
        <option value="SX">Sint Maarten</option>
        <option value="SK">Slovakia</option>
        <option value="SI">Slovenia</option>
        <option value="SB">Solomon Islands</option>
        <option value="SO">Somalia</option>
        <option value="ZA">South Africa</option>
        <option value="GS">South Georgia</option>
        <option value="SS">South Sudan</option>
        <option value="ES">Spain</option>
        <option value="LK">Sri Lanka</option>
        <option value="SD">Sudan</option>
        <option value="SR">Suriname</option>
        <option value="SZ">Swaziland</option>
        <option value="SE">Sweden</option>
        <option value="CH">Switzerland</option>
        <option value="SY">Syrian Arab</option>
        <option value="TW">Taiwan</option>
        <option value="TJ">Tajikistan</option>
        <option value="TZ">Tanzania</option>
        <option value="TH">Thailand</option>
        <option value="TL">Timor-Leste</option>
        <option value="TG">Togo</option>
        <option value="TK">Tokelau</option>
        <option value="TO">Tonga</option>
        <option value="TN">Tunisia</option>
        <option value="TR">Turkey</option>
        <option value="TM">Turkmenistan</option>
        <option value="TC">Turks</option>
        <option value="TV">Tuvalu</option>
        <option value="UG">Uganda</option>
        <option value="UA">Ukraine</option>
        <option value="AE">UAE</option>
        <option value="GB">UK</option>
        <option value="US">US</option>
        <option value="UY">Uruguay</option>
        <option value="UZ">Uzbekistan</option>
        <option value="VU">Vanuatu</option>
        <option value="VE">Venezuela</option>
        <option value="VN">Viet Nam</option>
        <option value="YE">Yemen</option>
        <option value="ZM">Zambia</option>
        <option value="ZW">Zimbabwe</option>
    </select>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label><b>Identity</b></label>&nbsp&nbsp
    <select style="padding: 10px 20px;" name="e10" id="n10" required="">
        <option>--Select--</option>
        <option>Passport</option>
        <option>Addhar Card</option>
        <option>Driving Licence</option>
        <option>Voter ID Card</option>
    </select><br><br>
    <label><b>Identity Number</b></label>
    <input type="text" placeholder="Enter Identity Number" name="e11" id="n11" required="" maxlength="16">
        </div>
    <br><br>
    <input type="checkbox" checked="checked"> Remember me
    <p>By creating an account you agree to our <a href="#">Terms & Privacy.</a></p>

    <div class="clearfix">
      <a href="#"><button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</Fieldset><br><br>
<!--footer-->
<div class="ftr" style="width: 100%;">
    <div class="container padded" style="width: 100%;">
        <div class="row">
            <footer>
                <div class="pull-left ft_space">
                    <address>
                        <a href="cotact.php" style="font-size: 17px;">&nbsp &nbsp CONTACT US</a><br><br>
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
