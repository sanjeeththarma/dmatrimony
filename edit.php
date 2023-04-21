<?php
    session_start();
    if(isset($_SESSION["email"])==false){
        header("Location: login.html");
    }
    include 'connection.php';
?>
<html>
<head>
<title>D-Matrimony</title> 
<style>
.transbutton2 {
	padding: 10px  25px  25px  25px;
	margin: 25px  25px  25px  25px;
	opacity: 0.9;
    filter: alpha(opacity=90); /* For IE8 and earlier */
    width:95px;
    height: 40px;
    background-color:black;
    border-radius:5px;
    color:white;
    display:inline-block;
    cursor:pointer;
    border: none;
 }
 .transbutton2:hover {
	  background-color:#333333;
 }
.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

.col-1 {width: 8.33%; box-sizing: border-box;}
.col-2 {width: 16.66%; box-sizing: border-box;}
.col-3 {width: 25%; box-sizing: border-box;}
.col-4 {width: 33.33%; box-sizing: border-box;}
.col-5 {width: 41.66%; box-sizing: border-box;}
.col-6 {width: 50%; box-sizing: border-box;}
.col-7 {width: 58.33%; box-sizing: border-box;}
.col-8 {width: 66.66%; box-sizing: border-box;}
.col-9 {width: 75%; box-sizing: border-box;}
.col-10 {width: 83.33%; box-sizing: border-box;}
.col-11 {width: 91.66%; box-sizing: border-box;}
.col-12 {width: 100%; box-sizing: border-box;}

.file {
  opacity: 0;
  width: 0.1px;
  height: 0.1px;
  position: absolute;
}

.file-input label {
  display: block;
  position: relative;
  width: 200px;
  height: 30px;
  border-radius: 5px;
  background: linear-gradient(40deg,black,#000);
  box-shadow: 0 4px 7px rgba(0, 0, 0, 0.4);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-weight: bold;
  cursor: pointer;
  transition: transform .2s ease-out;
  margin-left:-10px;
}

.file-name {
  position: absolute;
  bottom: -35px;
  left: 10px;
  font-size: 0.85rem;
  color: #555;
}

input:hover + label,
input:focus + label {
  transform: scale(1.02);
}

/* Adding an outline to the label on focus */
input:focus + label {
  outline: 1px solid #000;
  outline: -webkit-focus-ring-color auto 2px;
}

h1 {
  margin-top: 100px;
  text-align: center;
  font-size: 60px;
  line-height: 70px;
  font-family: 'roboto', sans-serif;
}
#container {
  margin: 0 auto;
  max-width: 890px;
}
p { text-align: center; }
 .toggle, [id^=drop] {
 display: none;
}
nav {
  margin: 0;
  padding: 0;
  background-color: #4F7777;
  opacity:0.9;
}

#logo {
  display: block;
  padding: 0 30px;
  float: left;
  font-size: 20px;
  line-height: 60px;
}

nav:after {
  content: "";
  display: table;
  clear: both;
}

nav ul {
  float: left;
  padding: 0;
  margin: 0;
  list-style: none;
  position: relative;
}

nav ul li {
  margin: 0px;
  display: inline-block;
  float: left;
  background-color: #4F7777;
}

nav a {
  display: block;
  padding: 0 20px;
  color: #FFF;
  font-size: 20px;
  line-height: 60px;
  text-decoration: none;
}

nav ul li ul li:hover { background: #000000; }

nav a:hover { background-color: #000000; }

nav ul ul {
  display: none;
  position: absolute;
  top: 60px;
}

nav ul li:hover > ul { display: inherit; }

nav ul ul li {
  width: 270px;
  float: none;
  display: list-item;
  position: relative;
}

nav ul ul ul li {
  position: relative;
  top: -60px;
  left: 170px;
}

li > a:after { content: ' '; }

li > a:only-child:after { content: ''; }


/* Media Queries
--------------------------------------------- */

@media all and (max-width : 768px) {

#logo {
  display: block;
  padding: 0;
  width: 100%;
  text-align: center;
  float: none;
}

nav { margin: 0; }

.toggle + a,
 .menu { display: none; }

.toggle {
  display: block;
  background-color: #4F7777;
  padding: 0 20px;
  color: #FFF;
  font-size: 22px;
  font-weight:bold;
  line-height: 60px;
  text-decoration: none;
  border: none;
}

.toggle:hover { background-color: #000000; cursor:pointer;}

[id^=drop]:checked + ul { display: block; }

nav ul li {
  display: block;
  width: 100%;
}

nav ul ul .toggle,
 nav ul ul a { padding: 0 40px; }

nav ul ul ul a { padding: 0 80px; }

nav a:hover,
 nav ul ul ul a { background-color: #000000; }

nav ul li ul li .toggle,
 nav ul ul a { background-color: #212121; }

nav ul ul {
  float: none;
  position: static;
  color: #ffffff;
}

nav ul ul li:hover > ul,
nav ul li:hover > ul { display: none; }

nav ul ul li {
  display: block;
  width: 100%;
}

nav ul ul ul li { position: static;

}
}



/* CSS */
.button-12 {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 6px 14px;
  font-family: -apple-system, BlinkMacSystemFont, 'Roboto', sans-serif;
  border-radius: 6px;
  border: none;

  background: #000000;
  box-shadow: 0px 0.5px 1px rgba(0, 0, 0, 0.1), inset 0px 0.5px 0.5px rgba(255, 255, 255, 0.5), 0px 0px 0px 0.5px rgba(0, 0, 0, 0.12);
  color: #DFDEDF;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-12:focus {
  box-shadow: inset 0px 0.8px 0px -0.25px rgba(255, 255, 255, 0.2), 0px 0.5px 1px rgba(0, 0, 0, 0.1), 0px 0px 0px 3.5px rgba(58, 108, 217, 0.5);
  outline: 0;
}

.button5 {
  display: block;
  position: relative;
  width: 200px;
  height: 50px;
  border-radius: 5px;
  background: linear-gradient(40deg,black,#000);
  box-shadow: 0 4px 7px rgba(0, 0, 0, 0.4);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-weight: bold;
  cursor: pointer;
  transition: transform .2s ease-out;
  left:75%;
}
.button5:hover {
  background: linear-gradient(40deg,#000,grey);
}
.button6 {
  display: block;
  
  width: 200px;
  height: 50px;
  border-radius: 5px;
  background: linear-gradient(40deg,black,#000);
  box-shadow: 0 4px 7px rgba(0, 0, 0, 0.4);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-weight: bold;
  cursor: pointer;
  transition: transform .2s ease-out;
  
}
.button6:hover {
  background: linear-gradient(40deg,#000,grey);
}
.errmsg1 {
	background-color:#222; 
	color: white; 
	border-radius: 5px; 
	box-shadow: 0px 4px 8px 0 rgba(100, 100, 100, 0.7), 0px 6px 20px 0 rgba(100, 100, 100, 0.7); 
	max-width:350px; 
	width:90%;
	height:auto; 
	display:none; 
	z-index: 99999; 
	padding: 25px 25px 25px 25px;
}

@media screen and (max-width: 600px) {
  .errmsg1 {
	width:100px;
	font-size:12px;
  }
}

@media all and (max-width: 900px) {
  .col-1 {width: 100%; box-sizing: border-box; display: inline-block;}
  .col-2 {width: 100%; box-sizing: border-box; display: inline-block;}
  .col-3 {width: 100%; box-sizing: border-box; display: inline-block;}
  .col-4 {width: 100%; box-sizing: border-box; display: inline-block;}
  .col-5 {width: 100%; box-sizing: border-box; display: inline-block;}
  .col-6 {width: 100%; box-sizing: border-box; display: inline-block;}
  .col-7 {width: 100%; box-sizing: border-box; display: inline-block;}
  .col-8 {width: 100%; box-sizing: border-box; display: inline-block;}
  .col-9 {width: 100%; box-sizing: border-box; display: inline-block;}
  .col-10 {width: 100%; box-sizing: border-box; display: inline-block;}
  .col-11 {width: 100%; box-sizing: border-box; display: inline-block;}
  .col-12 {width: 100%; box-sizing: border-box; display: inline-block;}
  .button5 {left:55%;}
}

@media all and (max-width : 330px) {

nav ul li {
  display: block;
  width: 94%;
}

}
.profilepic{
    max-width:300px;
    width:100%;
    height:auto;
    box-shadow: 4px 4px 4px 2px rgba(0, 0, 0, 0.2);
    
    border-radius:10px;
}

.profilepic2{
    max-width:250px;
    
    height:250px;
    box-shadow: 4px 4px 4px 2px rgba(0, 0, 0, 0.2);
    
    border-radius:10px;
}
body{
  margin: 0;
  padding:0;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav>
<img src="logo2.png" id="logo" style="width:75px; height:50px; position:relative; top:5px;">
  <label for="drop" class="toggle"><img src="mobile-menu.png" style="position:relative; top:8px;">&nbsp; Menu</label>
  <input type="checkbox" id="drop" />
  <ul class="menu">
    <li> 
      <!-- First Tier Drop Down -->
      <label for="drop-1" class="toggle">My Home </label>
      <a href="#">My Home</a>
      <input type="checkbox" id="drop-1"/>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="edit.php">Edit My Profile</a></li>
        <li><a href="viewmyprofileown.php">View My Profile</a></li>
      </ul>
    </li>
    <li> 
      <!-- First Tier Drop Down -->
      <label for="drop-2" class="toggle">Matches </label>
      <a href="#">Matches</a>
      <input type="checkbox" id="drop-2"/>
      <ul>
        <li><a href="browse.php">Browse Matches</a></li>
        <li><a href="viewed2.php">Who Viewed My Profile</a></li>
        <li><a href="whoshortlisted.php">Who Shortlisted My Profile</a></li>
        <li><a href="myshortlists.php">My Shortlisted Profiles</a></li>
      </ul>
    </li>
    <li> 
      <!-- First Tier Drop Down -->
      <label for="drop-3" class="toggle">Messages </label>
      <a href="#">Messages&nbsp;<i class="fa fa-bell">&nbsp;<span id="msgbox" style="background-color:red; padding: 0px 2px 2px 2px; border-radius: 100%; width:auto; position:relative; left:-15px; top:-10px;"><font size="3" color="white">New</font></span></i></a>
      <input type="checkbox" id="drop-3"/>
      <ul>
        <li><a href="message2.php">Inbox</a></li>
        <li><a href="likesreceived.php">Likes Received</a></li>
      </ul>
    </li>
    
    <li> 
      <!-- First Tier Drop Down -->
      <label for="drop-4" class="toggle">Search </label>
      <a href="#">Search</a>
      <input type="checkbox" id="drop-4"/>
      <ul>
        <li><a href="search.html">Regular Search</a></li>
        <li><a href="search2.html">Search By Profile ID</a></li>
      </ul>
    </li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</nav>

<div class="row">
 
    <div class="col-3" style="text-align: left; padding: 25px 25px 25px 25px;">
    <?php
                global $d;
                global $a;
                global $c;
                global $i;
                global $pic1;
                global $pic2;
                global $pic3;
                global $pic4;
                global $pic5;
                global $pic6;
                global $date1;
                global $height1;
                global $mstatus1;
                global $religion1;
                global $country1;

                $email = $_SESSION["email"];
                $img="";
                
                $sql = "SELECT * FROM profile WHERE email='$email'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        if($row["profilepicset"] == "false"){
                            if($row["gender"] == "male") {
                                $img = '<img id="pimg" class="profilepic" src="male.png">';
                            }
                            else {
                                $img = '<img id="pimg" class="profilepic" src="female.png">';
                            }
                        }
                        else {
                            $img='<img id="pimg" class="profilepic" src="profiles/' . $row["id"] . '/' . $row["flename"] . '">';
                        }
                        echo $img;
                        ?>
                        <br><br>
                        
                        <div class="file-input" style="position:relative; left:15%;"> 
                          <input type="file" id="file" class="file" accept="image/*" onchange="showPreview(event)";>
                          <label for="file">
                            Change Profile Picture
                            <p class="file-name"></p>
                          </label>
                        </div>
                      
                        <div style="position:relative; left:15%;">
                        <?php
                        echo '<br><br><font size="4">';
                        echo '<b>First Name: </b><br>' . '<input id="fname" type="text" value = "' . $row["fname"] . '"><br><br><b>Last Name: </b><br> <input id="lname" type="text" value = "' . $row["lname"] . '"><br><br>' ;
                        $txt1;
                        $txt2;
                        $cnt=0;
                        $array = explode(".",$row["height"]);
                        foreach($array as $element){
                          $cnt = $cnt +1;
                          if($cnt==1){
                              $txt1=$element . '\'';
                          }
                          if($cnt==2){
                            $txt2=$element . '\'\'';
                          }
                        }

                        $d = $row["disability"];
                        $a = $row["about"];
                        $i= $row["id"];
                        $pic1 = $row["pic1"];
                        $pic2 = $row["pic2"];
                        $pic3 = $row["pic3"];
                        $pic4 = $row["pic4"];
                        $pic5 = $row["pic5"];
                        $pic6 = $row["pic6"];
                        $date1 = $row["bday"];
                        $height1 = $row["height"];
                        $mstatus1 = $row["mstatus"];
                        $religion1 = $row["religion"];
                        $country1 = $row["country"];

                        if($row["children"]=='0'){
                          $c = '0';
                        }
                        else {
                          $c = $row["children"];
                        }
                        
                        $dateOfBirth = $row["bday"];
                        
                        echo '<b>Birth Date: </b><br><br>';
                        ?>
                        	<select size="1" name="optdays" id="optdays" style="border-radius:5px; height:30px; border: 1px solid black;" onchange="setborder(this)" onclick="setborder(this)" onkeydown="setborder(this)"></select>
						<select size="1" name="optmonths" id="optmonths" style="border-radius:5px; height:30px; border: 1px solid black;" onchange="setborder(this)" onclick="setborder(this)" onkeydown="setborder(this)"></select>
						<select size="1" name="optyears" id="optyears" style="border-radius:5px; height:30px; border: 1px solid black;" onchange="setborder(this)" onclick="setborder(this)" onkeydown="setborder(this)"></select>
					<br><br>

                       <?php
                        echo '<b>Height: </b><br><br>'; ?>
                        <select size="1" name="optheights" id="optheights" style="border-radius:5px; height:30px; border: 1px solid black;" onchange="setborder(this)" onclick="setborder(this)" onkeydown="setborder(this)">
								<option value="0">Select Height</option>
								<option value="3.11">Shorter Than 4 ft</option>
								<option value="4.0">4 ft</option>
								<option value="4.1">4 ft 1 inch</option>
								<option value="4.2">4 ft 2 inch</option>
								<option value="4.3">4 ft 3 inch</option>
								<option value="4.4">4 ft 4 inch</option>
								<option value="4.5">4 ft 5 inch</option>
								<option value="4.6">4 ft 6 inch</option>
								<option value="4.7">4 ft 7 inch</option>
								<option value="4.8">4 ft 8 inch</option>
								<option value="4.9">4 ft 9 inch</option>
								<option value="4.10">4 ft 10 inch</option>
								<option value="4.11">4 ft 11 inch</option>
								<option value="5.0">5 ft</option>
								<option value="5.1">5 ft 1 inch</option>
								<option value="5.2">5 ft 2 inch</option>
								<option value="5.3">5 ft 3 inch</option>
								<option value="5.4">5 ft 4 inch</option>
								<option value="5.5">5 ft 5 inch</option>
								<option value="5.6">5 ft 6 inch</option>
								<option value="5.7">5 ft 7 inch</option>
								<option value="5.8">5 ft 8 inch</option>
								<option value="5.9">5 ft 9 inch</option>
								<option value="5.10">5 ft 10 inch</option>
								<option value="5.11">5 ft 11 inch</option>
								<option value="6.0">6 ft</option>
								<option value="6.1">6 ft 1 inch</option>
								<option value="6.2">6 ft 2 inch</option>
								<option value="6.3">6 ft 3 inch</option>
								<option value="6.4">6 ft 4 inch</option>
								<option value="6.5">6 ft 5 inch</option>
								<option value="6.6">6 ft 6 inch</option>
								<option value="6.7">6 ft 7 inch</option>
								<option value="6.8">6 ft 8 inch</option>
								<option value="6.9">6 ft 9 inch</option>
								<option value="6.10">6 ft 10 inch</option>
								<option value="6.11">6 ft 11 inch</option>
								<option value="7.0">7 ft</option>
								<option value="7.1">Taller Than 7 ft</option>
						</select>
<br><br>
                        <?php
                       
                        echo '<b>Marital Status: </b><br><br>';
                        ?>
                        <select size="1" name="optmaritals" id="optmaritals" style="border-radius:5px; height:30px; border: 1px solid black;" onchange="setborder(this)" onclick="setborder(this)" onkeydown="setborder(this)">
							<option value="0">Select Marital Status</option>
							<option value="Single">Single</option>
							<option value="Seperated">Seperated</option>
							<option value="Divorced">Divorced</option>
							<option value="Awaiting Divorce">Awaiting Divorce</option>
							<option value="Widowed">Widowed</option>
							<option value="Annulled">Annulled</option>
						</select>
            <br><br>
            <?php
                        echo '<b>Religion: </b><br><br>';
            ?>
            <select size="1" name="optreligions" id="optreligions" style="border-radius:5px; height:30px; border: 1px solid black;" onchange="setborder(this)" onclick="setborder(this)" onkeydown="setborder(this)">
							<option value="Select Religion">Select Religion</option>
							<option value="African Traditional and Diasporic">African Traditional and Diasporic</option>
							<option value="Agnostic">Agnostic</option>
							<option value="Atheist">Atheist</option>
							<option value="Baha'i">Bahai</option>
							<option value="Buddhism">Buddhism</option>
							<option value="Cao Dai">Cao Dai</option>
							<option value="Chinese traditional religion">Chinese traditional religion</option>
							<option value="Christianity">Christianity</option>
							<option value="Hinduism">Hinduism</option>
							<option value="Islam">Islam</option>
							<option value="Jainism">Jainism</option>
							<option value="Juche">Juche</option>
							<option value="Judaism">Judaism</option>
							<option value="Neo Paganism">Neo Paganism</option>
							<option value="Nonreligious">Nonreligious</option>
							<option value="Rastafarianism">Rastafarianism</option>
							<option value="Secular">Secular</option>
							<option value="Shinto">Shinto</option>
							<option value="Sikhism">Sikhism</option>
							<option value="Spiritism">Spiritism</option>
							<option value="Tenrikyo">Tenrikyo</option>
							<option value="Unitarian Universalism">Unitarian Universalism</option>
							<option value="Zoroastrianism">Zoroastrianism</option>
							<option value="primal indigenous">primal indigenous</option>
							<option value="Other">Other</option>
						  </select>	
              <br><br>
            <?php
                        
                        echo '<b>Country: </b><br><br>';
            ?>
            <select size="1" name="optcountries" id="optcountries" style="border-radius:5px; height:30px; width:180px; border: 1px solid black;" onchange="setborder(this)" onclick="setborder(this)" onkeydown="setborder(this)">
							<option value="0">Select Country</option>
							<option value="Afganistan">Afghanistan</option>
							<option value="Albania">Albania</option>
							<option value="Algeria">Algeria</option>
							<option value="American Samoa">American Samoa</option>
							<option value="Andorra">Andorra</option>
							<option value="Angola">Angola</option>
							<option value="Anguilla">Anguilla</option>
							<option value="Antigua & Barbuda">Antigua & Barbuda</option>
							<option value="Argentina">Argentina</option>
							<option value="Armenia">Armenia</option>
							<option value="Aruba">Aruba</option>
							<option value="Australia">Australia</option>
							<option value="Austria">Austria</option>
							<option value="Azerbaijan">Azerbaijan</option>
							<option value="Bahamas">Bahamas</option>
							<option value="Bahrain">Bahrain</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="Barbados">Barbados</option>
							<option value="Belarus">Belarus</option>
							<option value="Belgium">Belgium</option>
							<option value="Belize">Belize</option>
							<option value="Benin">Benin</option>
							<option value="Bermuda">Bermuda</option>
							<option value="Bhutan">Bhutan</option>
							<option value="Bolivia">Bolivia</option>
							<option value="Bonaire">Bonaire</option>
							<option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
							<option value="Botswana">Botswana</option>
							<option value="Brazil">Brazil</option>
							<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
							<option value="Brunei">Brunei</option>
							<option value="Bulgaria">Bulgaria</option>
							<option value="Burkina Faso">Burkina Faso</option>
							<option value="Burundi">Burundi</option>
							<option value="Cambodia">Cambodia</option>
							<option value="Cameroon">Cameroon</option>
							<option value="Canada">Canada</option>
							<option value="Canary Islands">Canary Islands</option>
							<option value="Cape Verde">Cape Verde</option>
							<option value="Cayman Islands">Cayman Islands</option>
							<option value="Central African Republic">Central African Republic</option>
							<option value="Chad">Chad</option>
							<option value="Channel Islands">Channel Islands</option>
							<option value="Chile">Chile</option>
							<option value="China">China</option>
							<option value="Christmas Island">Christmas Island</option>
							<option value="Cocos Island">Cocos Island</option>
							<option value="Colombia">Colombia</option>
							<option value="Comoros">Comoros</option>
							<option value="Congo">Congo</option>
							<option value="Cook Islands">Cook Islands</option>
							<option value="Costa Rica">Costa Rica</option>
							<option value="Cote DIvoire">Cote DIvoire</option>
							<option value="Croatia">Croatia</option>
							<option value="Cuba">Cuba</option>
							<option value="Curaco">Curacao</option>
							<option value="Cyprus">Cyprus</option>
							<option value="Czech Republic">Czech Republic</option>
							<option value="Denmark">Denmark</option>
							<option value="Djibouti">Djibouti</option>
							<option value="Dominica">Dominica</option>
							<option value="Dominican Republic">Dominican Republic</option>
							<option value="East Timor">East Timor</option>
							<option value="Ecuador">Ecuador</option>
							<option value="Egypt">Egypt</option>
							<option value="El Salvador">El Salvador</option>
							<option value="Equatorial Guinea">Equatorial Guinea</option>
							<option value="Eritrea">Eritrea</option>
							<option value="Estonia">Estonia</option>
							<option value="Ethiopia">Ethiopia</option>
							<option value="Falkland Islands">Falkland Islands</option>
							<option value="Faroe Islands">Faroe Islands</option>
							<option value="Fiji">Fiji</option>
							<option value="Finland">Finland</option>
							<option value="France">France</option>
							<option value="French Guiana">French Guiana</option>
							<option value="French Polynesia">French Polynesia</option>
							<option value="French Southern Ter">French Southern Ter</option>
							<option value="Gabon">Gabon</option>
							<option value="Gambia">Gambia</option>
							<option value="Georgia">Georgia</option>
							<option value="Germany">Germany</option>
							<option value="Ghana">Ghana</option>
							<option value="Gibraltar">Gibraltar</option>
							<option value="Great Britain">Great Britain</option>
							<option value="Greece">Greece</option>
							<option value="Greenland">Greenland</option>
							<option value="Grenada">Grenada</option>
							<option value="Guadeloupe">Guadeloupe</option>
							<option value="Guam">Guam</option>
							<option value="Guatemala">Guatemala</option>
							<option value="Guinea">Guinea</option>
							<option value="Guyana">Guyana</option>
							<option value="Haiti">Haiti</option>
							<option value="Hawaii">Hawaii</option>
							<option value="Honduras">Honduras</option>
							<option value="Hong Kong">Hong Kong</option>
							<option value="Hungary">Hungary</option>
							<option value="Iceland">Iceland</option>
							<option value="Indonesia">Indonesia</option>
							<option value="India">India</option>
							<option value="Iran">Iran</option>
							<option value="Iraq">Iraq</option>
							<option value="Ireland">Ireland</option>
							<option value="Isle of Man">Isle of Man</option>
							<option value="Israel">Israel</option>
							<option value="Italy">Italy</option>
							<option value="Jamaica">Jamaica</option>
							<option value="Japan">Japan</option>
							<option value="Jordan">Jordan</option>
							<option value="Kazakhstan">Kazakhstan</option>
							<option value="Kenya">Kenya</option>
							<option value="Kiribati">Kiribati</option>
							<option value="Korea North">Korea North</option>
							<option value="Korea Sout">Korea South</option>
							<option value="Kuwait">Kuwait</option>
							<option value="Kyrgyzstan">Kyrgyzstan</option>
							<option value="Laos">Laos</option>
							<option value="Latvia">Latvia</option>
							<option value="Lebanon">Lebanon</option>
							<option value="Lesotho">Lesotho</option>
							<option value="Liberia">Liberia</option>
							<option value="Libya">Libya</option>
							<option value="Liechtenstein">Liechtenstein</option>
							<option value="Lithuania">Lithuania</option>
							<option value="Luxembourg">Luxembourg</option>
							<option value="Macau">Macau</option>
							<option value="Macedonia">Macedonia</option>
							<option value="Madagascar">Madagascar</option>
							<option value="Malaysia">Malaysia</option>
							<option value="Malawi">Malawi</option>
							<option value="Maldives">Maldives</option>
							<option value="Mali">Mali</option>
							<option value="Malta">Malta</option>
							<option value="Marshall Islands">Marshall Islands</option>
							<option value="Martinique">Martinique</option>
							<option value="Mauritania">Mauritania</option>
							<option value="Mauritius">Mauritius</option>
							<option value="Mayotte">Mayotte</option>
							<option value="Mexico">Mexico</option>
							<option value="Midway Islands">Midway Islands</option>
							<option value="Moldova">Moldova</option>
							<option value="Monaco">Monaco</option>
							<option value="Mongolia">Mongolia</option>
							<option value="Montserrat">Montserrat</option>
							<option value="Morocco">Morocco</option>
							<option value="Mozambique">Mozambique</option>
							<option value="Myanmar">Myanmar</option>
							<option value="Nambia">Nambia</option>
							<option value="Nauru">Nauru</option>
							<option value="Nepal">Nepal</option>
							<option value="Netherland Antilles">Netherland Antilles</option>
							<option value="Netherlands">Netherlands (Holland, Europe)</option>
							<option value="Nevis">Nevis</option>
							<option value="New Caledonia">New Caledonia</option>
							<option value="New Zealand">New Zealand</option>
							<option value="Nicaragua">Nicaragua</option>
							<option value="Niger">Niger</option>
							<option value="Nigeria">Nigeria</option>
							<option value="Niue">Niue</option>
							<option value="Norfolk Island">Norfolk Island</option>
							<option value="Norway">Norway</option>
							<option value="Oman">Oman</option>
							<option value="Pakistan">Pakistan</option>
							<option value="Palau Island">Palau Island</option>
							<option value="Palestine">Palestine</option>
							<option value="Panama">Panama</option>
							<option value="Papua New Guinea">Papua New Guinea</option>
							<option value="Paraguay">Paraguay</option>
							<option value="Peru">Peru</option>
							<option value="Phillipines">Philippines</option>
							<option value="Pitcairn Island">Pitcairn Island</option>
							<option value="Poland">Poland</option>
							<option value="Portugal">Portugal</option>
							<option value="Puerto Rico">Puerto Rico</option>
							<option value="Qatar">Qatar</option>
							<option value="Republic of Montenegro">Republic of Montenegro</option>
							<option value="Republic of Serbia">Republic of Serbia</option>
							<option value="Reunion">Reunion</option>
							<option value="Romania">Romania</option>
							<option value="Russia">Russia</option>
							<option value="Rwanda">Rwanda</option>
							<option value="St Barthelemy">St Barthelemy</option>
							<option value="St Eustatius">St Eustatius</option>
							<option value="St Helena">St Helena</option>
							<option value="St Kitts-Nevis">St Kitts-Nevis</option>
							<option value="St Lucia">St Lucia</option>
							<option value="St Maarten">St Maarten</option>
							<option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
							<option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
							<option value="Saipan">Saipan</option>
							<option value="Samoa">Samoa</option>
							<option value="Samoa American">Samoa American</option>
							<option value="San Marino">San Marino</option>
							<option value="Sao Tome & Principe">Sao Tome & Principe</option>
							<option value="Saudi Arabia">Saudi Arabia</option>
							<option value="Senegal">Senegal</option>
							<option value="Seychelles">Seychelles</option>
							<option value="Sierra Leone">Sierra Leone</option>
							<option value="Singapore">Singapore</option>
							<option value="Slovakia">Slovakia</option>
							<option value="Slovenia">Slovenia</option>
							<option value="Solomon Islands">Solomon Islands</option>
							<option value="Somalia">Somalia</option>
							<option value="South Africa">South Africa</option>
							<option value="South Sudan">South Sudan</option>
							<option value="Spain">Spain</option>
							<option value="Sri Lanka">Sri Lanka</option>
							<option value="Sudan">Sudan</option>
							<option value="Suriname">Suriname</option>
							<option value="Swaziland">Swaziland</option>
							<option value="Sweden">Sweden</option>
							<option value="Switzerland">Switzerland</option>
							<option value="Syria">Syria</option>
							<option value="Tahiti">Tahiti</option>
							<option value="Taiwan">Taiwan</option>
							<option value="Tajikistan">Tajikistan</option>
							<option value="Tanzania">Tanzania</option>
							<option value="Thailand">Thailand</option>
							<option value="Togo">Togo</option>
							<option value="Tokelau">Tokelau</option>
							<option value="Tonga">Tonga</option>
							<option value="Trinidad & Tobago">Trinidad & Tobago</option>
							<option value="Tunisia">Tunisia</option>
							<option value="Turkey">Turkey</option>
							<option value="Turkmenistan">Turkmenistan</option>
							<option value="Turks & Caicos Is">Turks & Caicos Is</option>
							<option value="Tuvalu">Tuvalu</option>
							<option value="Uganda">Uganda</option>
							<option value="United Kingdom">United Kingdom</option>
							<option value="Ukraine">Ukraine</option>
							<option value="United Arab Erimates">United Arab Emirates</option>
							<option value="United States of America">United States of America</option>
							<option value="Uraguay">Uruguay</option>
							<option value="Uzbekistan">Uzbekistan</option>
							<option value="Vanuatu">Vanuatu</option>
							<option value="Vatican City State">Vatican City State</option>
							<option value="Venezuela">Venezuela</option>
							<option value="Vietnam">Vietnam</option>
							<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
							<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
							<option value="Wake Island">Wake Island</option>
							<option value="Wallis & Futana Is">Wallis & Futana Is</option>
							<option value="Yemen">Yemen</option>
							<option value="Zaire">Zaire</option>
							<option value="Zambia">Zambia</option>
							<option value="Zimbabwe">Zimbabwe</option>
						</select>

            <input type="hidden" name="txtdate" id="txtdate">
			<input type="hidden" name="txtcountry" id="txtcountry">
			<input type="hidden" name="txtreligion" id="txtreligion">
			<input type="hidden" name="txtgender" id="txtgender">
			<input type="hidden" name="txtmarital" id="txtmarital">
			<input type="hidden" name="txtheight" id="txtheight">
                        </div>
                        <input type="hidden" id="pid" value="<?php echo $i;?>">
                        <br><br>
                        <center><button class="button6" onclick="updatefrm1()">Update</button></center>
                        <br><br>
                        <?php
                    }
                } 

                

                mysqli_close($conn);
            
        ?>
    </div>
 <?php
    if($pic1==""){
        $pic1="pic1.jpg";
    }
    else {
      $pic1='profiles/' . $i . '/' . $pic1;
    }
    if($pic2==""){
      $pic2="pic2.jpg";
    }
    else {
      $pic2='profiles/' . $i . '/' . $pic2;
    }
    if($pic3==""){
      $pic3="pic3.jpg";
    }
    else {
      $pic3='profiles/' . $i . '/' . $pic3;
    }
    if($pic4==""){
      $pic4="pic4.jpg";
    }
    else {
      $pic4='profiles/' . $i . '/' . $pic4;
    }
    if($pic5==""){
      $pic5="pic5.jpg";
    }
    else {
      $pic5='profiles/' . $i . '/' . $pic5;
    }
    if($pic6==""){
      $pic6="pic6.jpg";
    }
    else {
      $pic6='profiles/' . $i . '/' . $pic6;
    }
 ?>
    <div class="col-9">
      <center>
      <div style="display:inline-block; margin:25px 25px 25px 25px"><img src="<?php echo $pic1;?>" id="pimg2" class="profilepic2" style="width:250px; height:250px;">
          <div class="file-input" style="position:relative; margin-top:10px;"> 
            <input type="file" id="file2" class="file" accept="image/*" onchange="showPreview2(event)";>
            <label for="file2">
              Change Picture
              <p class="file-name"></p>
            </label>
          </div>
      </div>
      <div style="display:inline-block; margin:25px 25px 25px 25px"><img src="<?php echo $pic2;?>" id="pimg3" class="profilepic2" style="width:250px; height:250px;">
          <div class="file-input" style="position:relative; margin-top:10px;"> 
            <input type="file" id="file3" class="file" accept="image/*" onchange="showPreview3(event)";>
            <label for="file3">
              Change Picture
              <p class="file-name"></p>
            </label>
          </div>
      </div>
      <div style="display:inline-block; margin:25px 25px 25px 25px"><img src="<?php echo $pic3;?>" id="pimg4" class="profilepic2" style="width:250px; height:250px;">
          <div class="file-input" style="position:relative; margin-top:10px;"> 
            <input type="file" id="file4" class="file" accept="image/*" onchange="showPreview4(event)";>
            <label for="file4">
              Change Picture
              <p class="file-name"></p>
            </label>
          </div>
      </div>
      <div style="display:inline-block; margin:25px 25px 25px 25px"><img src="<?php echo $pic4;?>" id="pimg5" class="profilepic2" style="width:250px; height:250px;">
          <div class="file-input" style="position:relative; margin-top:10px;"> 
            <input type="file" id="file5" class="file" accept="image/*" onchange="showPreview5(event)";>
            <label for="file5">
              Change Picture
              <p class="file-name"></p>
            </label>
          </div>
      </div>
      <div style="display:inline-block; margin:25px 25px 25px 25px"><img src="<?php echo $pic5;?>" id="pimg6" class="profilepic2" style="width:250px; height:250px;">
          <div class="file-input" style="position:relative; margin-top:10px;"> 
            <input type="file" id="file6" class="file" accept="image/*" onchange="showPreview6(event)";>
            <label for="file6">
              Change Picture
              <p class="file-name"></p>
            </label>
          </div>
      </div>
      <div style="display:inline-block; margin:25px 25px 25px 25px"><img src="<?php echo $pic6;?>" id="pimg7" class="profilepic2" style="width:250px; height:250px;">
          <div class="file-input" style="position:relative; margin-top:10px;"> 
            <input type="file" id="file7" class="file" accept="image/*" onchange="showPreview7(event)";>
            <label for="file7">
              Change Picture
              <p class="file-name"></p>
            </label>
          </div>  
      </div>
      </center>
      <br><br>
      <center>
      <h1>About</h1>
      <p><b>Disability:</b><br><br><?php echo '<textarea id="dis1" style="height:100px; width:250px;">' . $d . '</textarea>'?></p>
      <br><br>
      <p><b>About:</b><br><br><?php echo '<textarea id="abt1" style="height:100px; width:250px;">' . $a . '</textarea>';?></p>
      <br><br>
      <p><b>Children I have:</b><br><br><?php echo '<input id="child1" type="number" style="width:100px;" min="0" max="100" value = "' . $c . '">';?></p>
      </center>
      <br><br>
      <center><button class="button6" onclick="updatefrm2()">Update</button></center>
      <br><br>
    </div>

</div>
<div id="errmsg" class="errmsg1"></div>	
<script>
  addDaysoptions();
	addMonthoptions();
	addYearsoptions();
	setsels();
	
	function shw(page){
		window.location.href=page;
	}
	
	function addDaysoptions(){
		var sel = document.getElementById("optdays");
		var option = document.createElement("option");
		option.text = "Date";
		option.value = "0";
		sel.add(option);
		for(i=1; i<=9; i++){
			var option = document.createElement("option");
			option.text = "0" + i;
			option.value = "0" + i;
			sel.add(option);
		}
		for(i=10; i<=31; i++){
			var option = document.createElement("option");
			option.text = i;
			option.value = i;
			sel.add(option);
		}
    var date1 = <?php echo json_encode(substr($date1,8,2)); ?>;
    for(i=0; i<sel.length; i++){
      if(sel.options[i].value==date1){
        sel.selectedIndex=i;
        break;
      }
    }
	}
	
	function addMonthoptions(){
		var sel = document.getElementById("optmonths");
		var months =["Month", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
		for(i=0; i<13; i++){
			var option = document.createElement("option");
			option.text = months[i];
			if(i<=9){
				option.value = "0" + i;
			}
			else {
				option.value = i;
			}
			sel.add(option);
		}
    var date1 = <?php echo json_encode(substr($date1,5,2)); ?>;
    for(i=0; i<sel.length; i++){
      if(sel.options[i].value==date1){
        sel.selectedIndex=i;
        break;
      }
    }
	}
	
	function addYearsoptions(){
		var sel = document.getElementById("optyears");
		var yr = new Date().getFullYear();
		var option = document.createElement("option");
		option.text = "Year";
		option.value = "0";
		sel.add(option);
		for(i=1930; i<=yr; i++){
			var option = document.createElement("option");
			option.text = i;
			option.value = i;
			sel.add(option);
		}
    var date1 = <?php echo json_encode(substr($date1,0,4)); ?>;
    for(i=0; i<sel.length; i++){
      if(sel.options[i].value==date1){
        sel.selectedIndex=i;
        break;
      }
    }
	}
  function setsels(){
    var sel;
    sel = document.getElementById("optheights");
    var height1 = <?php echo json_encode($height1); ?>;
    for(i=0; i<sel.length; i++){
      if(sel.options[i].value==height1){
        sel.selectedIndex=i;
        break;
      }
    }
    sel = document.getElementById("optmaritals");
    var mstatus1 = <?php echo json_encode($mstatus1); ?>;
    for(i=0; i<sel.length; i++){
      if(sel.options[i].value==mstatus1){
        sel.selectedIndex=i;
        break;
      }
    }
    sel = document.getElementById("optreligions");
    var religion1 = <?php echo json_encode($religion1); ?>;
    for(i=0; i<sel.length; i++){
      if(sel.options[i].value==religion1){
        sel.selectedIndex=i;
        break;
      }
    }
    sel = document.getElementById("optcountries");
    var country1 = <?php echo json_encode($country1); ?>;
    for(i=0; i<sel.length; i++){
      if(sel.options[i].value==country1){
        sel.selectedIndex=i;
        break;
      }
    }
  }
  function showPreview(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("pimg");
      preview.src = src;
      submitfrm();
    }
  }
  function showPreview2(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("pimg2");
      preview.src = src;
      submitfrm2();
    }
  }
  function showPreview3(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("pimg3");
      preview.src = src;
      submitfrm3();
    }
  }
  function showPreview4(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("pimg4");
      preview.src = src;
      submitfrm4();
    }
  }
  function showPreview5(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("pimg5");
      preview.src = src;
      submitfrm5();
    }
  }
  function showPreview6(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("pimg6");
      preview.src = src;
      submitfrm6();
    }
  }
  function showPreview7(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("pimg7");
      preview.src = src;
      submitfrm7();
    }
  }

  function submitfrm(){
            var p = document.getElementById('pid').value;
            var myFile = document.getElementById('file');  // Our HTML files' ID

                // Get the files from the form input
                var files = myFile.files;

                // Create a FormData object
                var formData = new FormData();

                // Select only the first file from the input array
                var file = files[0]; 

                // Add the file to the AJAX request
                formData.append('fle1', file, file.name);
                formData.append('pid', p);
                // Set up the request
                var xhr = new XMLHttpRequest();

                // Open the connection
                xhr.open('POST', 'setprofilepic.php', true);

                // Set up a handler for when the task for the request is complete
                xhr.onload = function () {
                if (xhr.status == 200) {
                    //statusP.innerHTML = xhr.responseText;
                    
            
                } else {
                    
                }
                };

                // Send the data.
                xhr.send(formData);
            //}
        }
        function submitfrm2(){
            var p = document.getElementById('pid').value;
            var myFile = document.getElementById('file2');  // Our HTML files' ID

                // Get the files from the form input
                var files = myFile.files;

                // Create a FormData object
                var formData = new FormData();

                // Select only the first file from the input array
                var file = files[0]; 

                // Add the file to the AJAX request
                formData.append('fle1', file, file.name);
                formData.append('pid', p);
                // Set up the request
                var xhr = new XMLHttpRequest();

                // Open the connection
                xhr.open('POST', 'setprofilepic2.php', true);

                // Set up a handler for when the task for the request is complete
                xhr.onload = function () {
                if (xhr.status == 200) {
                    //statusP.innerHTML = xhr.responseText;
                    
            
                } else {
                    
                }
                };

                // Send the data.
                xhr.send(formData);
            //}
        }
        function submitfrm3(){
            var p = document.getElementById('pid').value;
            var myFile = document.getElementById('file3');  // Our HTML files' ID

                // Get the files from the form input
                var files = myFile.files;

                // Create a FormData object
                var formData = new FormData();

                // Select only the first file from the input array
                var file = files[0]; 

                // Add the file to the AJAX request
                formData.append('fle1', file, file.name);
                formData.append('pid', p);
                // Set up the request
                var xhr = new XMLHttpRequest();

                // Open the connection
                xhr.open('POST', 'setprofilepic3.php', true);

                // Set up a handler for when the task for the request is complete
                xhr.onload = function () {
                if (xhr.status == 200) {
                    //statusP.innerHTML = xhr.responseText;
                    
            
                } else {
                    
                }
                };

                // Send the data.
                xhr.send(formData);
            //}
        }
        function submitfrm4(){
            var p = document.getElementById('pid').value;
            var myFile = document.getElementById('file4');  // Our HTML files' ID

                // Get the files from the form input
                var files = myFile.files;

                // Create a FormData object
                var formData = new FormData();

                // Select only the first file from the input array
                var file = files[0]; 

                // Add the file to the AJAX request
                formData.append('fle1', file, file.name);
                formData.append('pid', p);
                // Set up the request
                var xhr = new XMLHttpRequest();

                // Open the connection
                xhr.open('POST', 'setprofilepic4.php', true);

                // Set up a handler for when the task for the request is complete
                xhr.onload = function () {
                if (xhr.status == 200) {
                    //statusP.innerHTML = xhr.responseText;
                    
            
                } else {
                    
                }
                };

                // Send the data.
                xhr.send(formData);
            //}
        }
        function submitfrm5(){
            var p = document.getElementById('pid').value;
            var myFile = document.getElementById('file5');  // Our HTML files' ID

                // Get the files from the form input
                var files = myFile.files;

                // Create a FormData object
                var formData = new FormData();

                // Select only the first file from the input array
                var file = files[0]; 

                // Add the file to the AJAX request
                formData.append('fle1', file, file.name);
                formData.append('pid', p);
                // Set up the request
                var xhr = new XMLHttpRequest();

                // Open the connection
                xhr.open('POST', 'setprofilepic5.php', true);

                // Set up a handler for when the task for the request is complete
                xhr.onload = function () {
                if (xhr.status == 200) {
                    //statusP.innerHTML = xhr.responseText;
                    
            
                } else {
                    
                }
                };

                // Send the data.
                xhr.send(formData);
            //}
        }
        function submitfrm6(){
            var p = document.getElementById('pid').value;
            var myFile = document.getElementById('file6');  // Our HTML files' ID

                // Get the files from the form input
                var files = myFile.files;

                // Create a FormData object
                var formData = new FormData();

                // Select only the first file from the input array
                var file = files[0]; 

                // Add the file to the AJAX request
                formData.append('fle1', file, file.name);
                formData.append('pid', p);
                // Set up the request
                var xhr = new XMLHttpRequest();

                // Open the connection
                xhr.open('POST', 'setprofilepic6.php', true);

                // Set up a handler for when the task for the request is complete
                xhr.onload = function () {
                if (xhr.status == 200) {
                    //statusP.innerHTML = xhr.responseText;
                    
            
                } else {
                    
                }
                };

                // Send the data.
                xhr.send(formData);
            //}
        }
        function submitfrm7(){
            var p = document.getElementById('pid').value;
            var myFile = document.getElementById('file7');  // Our HTML files' ID

                // Get the files from the form input
                var files = myFile.files;

                // Create a FormData object
                var formData = new FormData();

                // Select only the first file from the input array
                var file = files[0]; 

                // Add the file to the AJAX request
                formData.append('fle1', file, file.name);
                formData.append('pid', p);
                // Set up the request
                var xhr = new XMLHttpRequest();

                // Open the connection
                xhr.open('POST', 'setprofilepic7.php', true);

                // Set up a handler for when the task for the request is complete
                xhr.onload = function () {
                if (xhr.status == 200) {
                    //statusP.innerHTML = xhr.responseText;
                    
            
                } else {
                    
                }
                };

                // Send the data.
                xhr.send(formData);
            //}
        }
        function updatefrm1(){
                var p = document.getElementById('pid').value;
                var fname1 = document.getElementById('fname').value;
                var lname1 = document.getElementById('lname').value;

                document.getElementById('txtdate').value=document.getElementById("optyears").options[document.getElementById("optyears").selectedIndex].text + "-" + document.getElementById("optmonths").options[document.getElementById("optmonths").selectedIndex].value + "-" + document.getElementById("optdays").options[document.getElementById("optdays").selectedIndex].text;
                document.getElementById('txtreligion').value=document.getElementById("optreligions").options[document.getElementById("optreligions").selectedIndex].text;
			          document.getElementById('txtcountry').value=document.getElementById("optcountries").options[document.getElementById("optcountries").selectedIndex].text;
			          document.getElementById('txtmarital').value=document.getElementById("optmaritals").options[document.getElementById("optmaritals").selectedIndex].text;
			          document.getElementById('txtheight').value=document.getElementById("optheights").options[document.getElementById("optheights").selectedIndex].value;
			
                var bday1 = document.getElementById('txtdate').value;
                var religion1 = document.getElementById('txtreligion').value;
                var country1 = document.getElementById('txtcountry').value;
                var marital1 = document.getElementById('txtmarital').value;
                var height1 = document.getElementById('txtheight').value;
                
                // Create a FormData object
                var formData = new FormData();

                // Select only the first file from the input array
               
                formData.append('pid', p);
                formData.append('fname', fname1);
                formData.append('lname', lname1);
                formData.append('lname', lname1);
                formData.append('bday', bday1);
                formData.append('religion', religion1);
                formData.append('country', country1);
                formData.append('marital', marital1);
                formData.append('height', height1);
                // Set up the request
                var xhr = new XMLHttpRequest();

                // Open the connection
                xhr.open('POST', 'update1.php', true);

                // Set up a handler for when the task for the request is complete
                xhr.onload = function () {
                if (xhr.status == 200) {
                  var msg2 ='<br><center><input type="button" value="OK" name="ok" class="transbutton2" onclick="javascript:hideerr()"></center>';
		
                    document.getElementById('errmsg').innerHTML = xhr.responseText + msg2;
			              document.getElementById('errmsg').style.display="block";
			              centerDiv("errmsg");
            
                } 
                };

                // Send the data.
                xhr.send(formData);
            //}
        }
        function updatefrm2(){
                var p = document.getElementById('pid').value;
                var dis2 = document.getElementById('dis1').value;
                var abt2 = document.getElementById('abt1').value;
                var child2 = document.getElementById('child1').value;
                
                
                // Create a FormData object
                var formData = new FormData();

                // Select only the first file from the input array
               
                formData.append('pid', p);
                formData.append('dis', dis2);
                formData.append('abt', abt2);
                formData.append('child', child2);
                // Set up the request
                var xhr = new XMLHttpRequest();

                // Open the connection
                xhr.open('POST', 'update2.php', true);

                // Set up a handler for when the task for the request is complete
                xhr.onload = function () {
                if (xhr.status == 200) {
                  var msg2 ='<br><center><input type="button" value="OK" name="ok" class="transbutton2" onclick="javascript:hideerr()"></center>';
		
                    document.getElementById('errmsg').innerHTML = xhr.responseText + msg2;
			              document.getElementById('errmsg').style.display="block";
			              centerDiv("errmsg");
            
                } 
                };

                // Send the data.
                xhr.send(formData);
            //}
        }
function hideerr(){
		document.getElementById('errmsg').style.display="none";
	}

function getElementSize(elementRef)
{
 if ( typeof elementRef == 'string' )
  elementRef = document.getElementById(elementRef);

 var widthValue = 0;
 var heightValue = 0;

 if ( elementRef.offsetWidth )
  widthValue = elementRef.offsetWidth;
 else if ( (document.layers) && (elementRef.document) && (elementRef.document.width) )
  widthValue = elementRef.document.width;
 else if ( (elementRef.clip) && (elementRef.clip.width) )
  widthValue = elementRef.clip.width;
 else if ( (elementRef.style) && (elementRef.style.width) )
  widthValue = elementRef.style.width;
 else if ( (elementRef.style) && (elementRef.style.pixelWidth) )
  widthValue = elementRef.style.pixelWidth;

 widthValue = parseInt(widthValue);
 if ( (isNaN(widthValue) == true) || (widthValue < 0) )
  widthValue = 0;

 if ( elementRef.offsetHeight )
  heightValue = elementRef.offsetHeight;
 else if ( (document.layers) && (elementRef.document) && (elementRef.document.height) )
  heightValue = elementRef.document.height;
 else if ( (elementRef.clip) && (elementRef.clip.height) )
  heightValue = elementRef.clip.height;
 else if ( (elementRef.style) && (elementRef.style.height) )
  heightValue = elementRef.style.height;
 else if ( (elementRef.style) && (elementRef.style.pixelHeight) )
  heightValue = elementRef.style.pixelHeight;

 heightValue = parseInt(heightValue);
 if ( (isNaN(heightValue) == true) || (heightValue < 0) )
  heightValue = 0;

 return { width:widthValue, height:heightValue }
}
// var screenSize = getViewportSize();
// var screenWidth = screenSize.width;
// var screenHeight = screenSize.height;
function getViewportSize()
{
 var heightValue = 0;
 widthValue = 0;

 if ( window.innerHeight )
 {
  heightValue = window.innerHeight;
  widthValue = window.innerWidth;
 }
 else if ( (document.documentElement) && (document.documentElement.clientHeight) )
 {
  heightValue = document.documentElement.clientHeight;
  widthValue = document.documentElement.clientWidth;
 }
 else if ( (document.body) && (document.body.clientHeight) )
 {
  heightValue = document.body.clientHeight;
  widthValue = document.body.clientWidth;
 }

 return { width: parseInt(widthValue, 10), height: parseInt(heightValue, 10) };
}

        // centerDiv('testDiv');
function centerDiv(divRef)
{
 if ( typeof divRef == 'string' )
  divRef = document.getElementById(divRef);

 // Get the screen dimensions...
 var screenSize = getViewportSize();
 var screenWidth = screenSize.width;
 var screenHeight = screenSize.height;

 // Get the element dimensions...
 var elementSize = getElementSize(divRef);
 var elementWidth = elementSize.width;
 var elementHeight = elementSize.height;

 // Calculate the centering positions...
 var xPos = (screenWidth - elementWidth) / 2;
 var yPos = (screenHeight - elementHeight) / 2;

 // Position the element...
 divRef.style.position = 'absolute';
 divRef.style.left = xPos + 'px';
 divRef.style.top = yPos + document.body.scrollTop + 'px';
}
// -->
</script>
</body>
</html>