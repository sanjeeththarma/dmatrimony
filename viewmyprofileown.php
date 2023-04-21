<?php
    session_start();
    if(isset($_SESSION["email"])==false){
        header("Location: login.html");
    }
    include 'connection.php';
    global $f;
    $f=$_SESSION["id"];
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
.button5 {
  display: inline-block;
 
  width: 200px;
  height: 30px;
  border-radius: 5px;
  background: linear-gradient(40deg,black,#000);
  box-shadow: 0 4px 7px rgba(0, 0, 0, 0.4);
  margin: 25px 25px 25px 25px;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-weight: bold;
  cursor: pointer;
  transition: transform .2s ease-out;
  
  
}
.button5:hover {
  background: linear-gradient(40deg,#333,black);
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
body{
  margin: 0;
  padding:0;
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
.slidemainbg{
  width:100%;
  height:100%;
  background-color:#333;
  padding:25px 25px 25px 25px;
  display:none;
  position:fixed;
  left:0px;
  right:0px;
  bottom:0px;
  top:0px;
  z-index:100;
}
* {box-sizing: border-box}

.mySlides {display: none}


/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.close {
  font-size: 45px;
  font-weight: 600;
  color:white;
  cursor:pointer;
  float:right;
  right:25px;
  top:-10px;
  z-index:99999;
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
  var simg = [];
  </script>
</head>
<body>
<nav>
<img src="logo2.png" id="logo" style="width:125px; height:50px; position:relative; top:5px;">
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
      <label for="drop-3" class="toggle">Messages</label>
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
                global $scnt;
                global $i;
                global $simg;
                $simg = array();
                $simg[0] = "";
                $scnt=0;
                global $simg2;
                $simg2 = array();
                
                $scnt2=-1;
                $i = $_SESSION["id"];
                $img="";
                $timg2;
                $sql = "SELECT * FROM profile WHERE id='$i'";
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
                            $simg[0] = 'profiles/' . $row["id"] . '/' . $row["flename"];
                        }
                        echo $img;
                        for($i=1; $i<=6; $i++){
                          $tmg2="pic" . $i;
                          if($row[$tmg2] != ""){
                            $scnt = $scnt + 1;
                            $simg[$scnt] = 'profiles/' . $row["id"] . '/' . $row[$tmg2];
                          }
                        }
                        for($i=0; $i<count($simg); $i++){
                          if($simg[$i] != ""){
                            $scnt2 = $scnt2 + 1;
                            $simg2[$scnt2] = $simg[$i];
                          }
                        }
                      
                        ?>
                        <br><br>
                      <script>
                        simg = <?php echo json_encode($simg2); ?>;
                      </script>
                        <div style="position:relative; left:15%;">
                        <?php
                        echo '<br><br><font size="4">';
                        echo '<b>Name: </b>' . $row["fname"] . ' ' . $row["lname"];
                        echo '<br><br>';
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
                        if($row["children"]=='0'){
                          $c = 'None';
                        }
                        else {
                          $c = $row["children"];
                        }
                        
                        $dateOfBirth = $row["bday"];
                        $today = date("Y-m-d");
                        $diff = date_diff(date_create($dateOfBirth), date_create($today));
                        echo '<b>Age: </b>'. $diff->format('%y');
                        echo '<br><br>';
                        echo '<b>Height: </b>' . $txt1 . $txt2;
                        echo '<br><br>';
                        echo '<b>Marital Status: </b>' . $row["mstatus"];
                        echo '<br><br>';
                        echo '<b>Religion: </b>' . $row["religion"];
                        echo '<br><br>';
                        echo '<b>Country: </b>' . $row["country"];
                        echo '<br><br>';
                        echo '<b>Profile ID: </b>' . $row["id"];
                        echo '</font><br>';
                        ?>
                        <button class="button5" onclick="viewphotos()">View Photos</button>
                        </div>
                        <input type="hidden" id="pid" value="<?php echo $i;?>">
                        <?php
                    }
                } 

                

                mysqli_close($conn);
            
        ?>
    </div>
 
    <div class="col-9">
      
      <h1>About</h1>
      <p><b>Disability:</b><br><br><?php echo $d;?></p>
      <br><br>
      <p><b>About:</b><br><br><?php echo $a;?></p>
      <br><br>
      <p><b>Children I have:</b><br><br><?php echo $c;?></p>
     
      <p><img src="heart.png" style="width:50px; height:50px; position:relative; top:20px; left:50px;"><button class="button5">Give Like</button><button class="button5">Send Message</button><button class="button5">Shortlist Profile</button></p>
    </div>

</div>
<div class="slidemainbg" id="slidebg">

<div class="slideshow-container">
<div class="close" onclick="closephotos()">&times;</div>
<script>
  if(simg.length==0){
    simg[0]='noimg.jpg';
  }
  for(i=0; i<simg.length; i++){
    document.write('<div class="mySlides fade">');
    document.write('<div class="numbertext">' + (i+1) + '/' +  simg.length + '</div>');
    document.write('<center><img src="' + simg[i] + '" style="vertical-align: middle; max-width:500px; width:100%; max-height:500px; height:auto;"></center>');
    document.write('</div>');
  }
  
  </script>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>


</div>
<div id="errmsg" class="errmsg1"></div>	
<script>
  
  
  function givelike(f,t){
    var formData = new FormData();
                // Add the file to the AJAX request
                formData.append('from1',f);
                formData.append('to1', t);
                // Set up the request
                var xhr = new XMLHttpRequest();

                // Open the connection
                xhr.open('POST', 'givelike.php', true);

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

        function shortlist(f,t){
               var formData = new FormData();
                // Add the file to the AJAX request
                formData.append('from1',f);
                formData.append('to1', t);
                // Set up the request
                var xhr = new XMLHttpRequest();

                // Open the connection
                xhr.open('POST', 'shortlist.php', true);

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
function viewphotos(){
  
  document.getElementById('slidebg').style.display="block";
}
function closephotos(){
  document.getElementById('slidebg').style.display="none";
}
</script>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");

  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  
  slides[slideIndex-1].style.display = "block";  
  
}
</script>

</body>
</html>