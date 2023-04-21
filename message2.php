<?php
    session_start();
    if(isset($_SESSION["email"])==false){
      header("Location: login.html");
    }
    set_error_handler(function(int $number, string $message) {
        
    });
    include 'connection.php';
    global $f;
    $f=$_SESSION["id"];
?>
<html>
<head>
<title>D-Matrimony</title>
<style>
  .allmsg1{
    position:relative;
    top:0px;
    height:75%;
    border: 1px solid #333333; 
    border-radius: 1px; -webkit-box-shadow: 5px 5px 15px 5px #000000; 
    box-shadow: 5px 5px 15px 5px #000000; 
    width:99%;
    z-index:1;
    overflow-y:scroll;

  }
  .allmsg2{
    position:relative;
    top:5px;
    height:12%;
    border: 1px solid #333333; 
    border-radius: 1px; -webkit-box-shadow: 5px 5px 15px 5px #000000; 
    box-shadow: 5px 5px 15px 5px #000000; 
    width:99%;
    
  }
.transbutton2 {
	background-color:#000; 
  color:white; 
  border: 1px solid black; 
  height:100%; width:10%; 
  padding: 5px 5px 5px 5px; 
  position:relative; 
  top:-43%; 
  cursor:pointer;
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
  z-index:100;
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
.msgbg1{
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
  overflow-y:scroll;
}
@media all and (max-width: 400px) {
  .msgbg1{
    overflow-y:scroll;
    overflow-x:scroll;
  }
  .slidemainbg{
    overflow-y:scroll;
    overflow-x:scroll;
  }
}
.msgl a{
  text-decoration: none;
  color:white;
  background-color: black;
  padding: 5px 5px 5px 5px;
}
.msgl a:hover{
  text-decoration: none;
  color:#ccc;
  background-color: black;
}
.msgl a:active{
  text-decoration: none;
  color:green;
  background-color: #333;
}
.msgl a:visited{
  text-decoration: none;
  color:white;
  background-color: black;
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
  var simg = [];
  var activeusr="";
  var activenum ="";
  var mm = false;
  </script>
</head>
<body>
<nav style="z-index:1000">
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
    <div style="overflow-y:scroll; overflow-x:scroll; height:100%;">
          <?php
              global $clk;
              global $clkusrid;
              global $clkusrname;
              $clk=0;
              global $total;
              $total = 0;
              $_SESSION["fromname"]=array();
              global $tm;
              global $names1;
              $names1 = array();
              global $namecnt;
              $namecnt=-1;
              $f2 = $_SESSION["id"];
              $mysqli = new mysqli("localhost","root","","dmatrimony");
              $m2= 'msg';  
              $query = "SELECT * FROM msgt ORDER BY id DESC";

              $result = $mysqli->query($query);

              if ($result) {
                  if (mysqli_num_rows($result) > 0) {
                  
                      while($row = mysqli_fetch_assoc($result)) {
                            $f = $row["from1"]; 
                            $t = $row["to1"]; 
                            $mysqli2 = new mysqli("localhost","root","","dmatrimony");
                            if($_SESSION["id"]==$f){
                              $query2 = "SELECT * FROM profile WHERE id = '$t' ORDER BY id DESC";
                            }
                            else{
                              $query2 = "SELECT * FROM profile WHERE id = '$f' ORDER BY id DESC";
                            }
                           
              
                            $result2 = $mysqli->query($query2);
              
                            if ($result2) {
                                if (mysqli_num_rows($result2) > 0) {
                                
                                    while($row2 = mysqli_fetch_assoc($result2)) {
                                       if($_SESSION["id"]==$t){
                                        $total = $total + 1;
                                        $tm="true";
                                        $namecnt = $namecnt + 1;
                                        $names1[$namecnt] = $row2["fname"] . ' ' . $row2["lname"];
                                        $_SESSION["fromname"][$namecnt] = $names1[$namecnt];
                                        $clk = $clk + 1;
                                        if($clk == 1){
                                              $clkusrid = $row2["id"];
                                              $clkusrname = $namecnt;
                                        }
                                        echo '<div class="msgl"><div style="cursor:pointer; border-radius:5px; background-color:black; color:white;" id="chatusr' . $total . '" onclick="shwmsg(\'' . $row2["id"] .  '\'' . ',\'' . $namecnt . '\',\'' .  $total . '\')"><img src=" profiles/' . $row2["id"] . '/' . $row2["flename"] . '" style="width:50px; height:50px; position:relative; top:0px; border-radius:100%;"> <span style="position:relative; top:-15px;">'.  $row2["fname"] . ' ' . $row2["lname"] . '</span></div><img src="eye.png" style="width:35px; height:35px; float:right; right:5px; cursor:pointer;" onclick="viewprofile(\''. $row2["id"] .'\')"></div>';
                                        echo '<br><hr><br>';
                                       }
                                        
                                      }
                                }
                            }

                      }
                  }
              }
          ?>
    </div>
    </div>
    <div class="col-9">
      <script>
        var t = '<?php echo $tm; ?>';
        if(t == "true"){
          document.write('<div id="allmsg" class="allmsg1" onscroll="chkscroll()" onmouseout="javascript:mm=false;"></div><div class="allmsg2"><textarea id="txtmsg" placeholder="Enter Text" style="width:90%; height:100%; resize: none; padding:5px 5px 5px 5px; display:inline-block;"></textarea><button style="display:inline-block;" class="transbutton2" onclick="sendmsg()">Send</button> </div>');
        }
        else {
          document.write('<br><br><center><font size="6" color="black">No Messages Received !</font></center>');
        }
      </script>
    
</div>
<script>
  function shwmsg(i, c, a){
   

    var div = document.getElementById('allmsg');
    div.innerHTML ="";
    var t = i;
     activeusr=i;
     activenum = c;

     for(i=1; i<=<?php echo $total; ?>; i++){
      document.getElementById('chatusr' + i).style.background = "black";
    }
    document.getElementById('chatusr' + a).style.background = "#666";
                // Create a FormData object
                var formData = new FormData();

              
                // Add the file to the AJAX request
          
                formData.append('t1', t);
                formData.append('namescnt1', c);
                // Set up the request
                var xhr = new XMLHttpRequest();

                // Open the connection
                xhr.open('POST', 'getmessage.php', true);

                // Set up a handler for when the task for the request is complete
                xhr.onload = function () {
                if (xhr.status == 200) {
                    
                    
                    div.innerHTML += xhr.responseText;
                    div.scrollTop = div.scrollHeight;

                    setInterval(updatemsg, 500);

                } else {
                    
                }
                };

                // Send the data.
                xhr.send(formData);
            //}
      
  }

  function chkscroll(){
    var div = document.getElementById('allmsg');
    if(div.scrollTop < div.scrollHeight){
        mm=true;
    }
    else {
      mm=false;
    }
  }

  function updatemsg(){
    var div = document.getElementById('allmsg');
    
   
     if(activeusr !=""){
     

              
                // Create a FormData object
                var formData = new FormData();

              
                // Add the file to the AJAX request
          
                formData.append('t1', activeusr);
                formData.append('namescnt1', activenum);
                // Set up the request
                var xhr = new XMLHttpRequest();

                // Open the connection
                xhr.open('POST', 'getmessage3.php', true);

                // Set up a handler for when the task for the request is complete
                xhr.onload = function () {
                if (xhr.status == 200) {
                    if(xhr.responseText !=""){
                      div.innerHTML ="";
                      div.innerHTML += xhr.responseText;
                      if(mm==false){
                        div.scrollTop = div.scrollHeight;
                      }
                      
                    }
                } else {
                    
                }
                };

                // Send the data.
                xhr.send(formData);
         }
      
  }
  function sendmsg(){
    
    var div = document.getElementById('allmsg');
    var msg = document.getElementById('txtmsg').value;
        if(msg !=""){
     

              
                // Create a FormData object
                var formData = new FormData();

              
                // Add the file to the AJAX request
          
                formData.append('msg1', msg);
                
                // Set up the request
                var xhr = new XMLHttpRequest();

                // Open the connection
                xhr.open('POST', 'sendmessage.php', true);

                // Set up a handler for when the task for the request is complete
                xhr.onload = function () {
                if (xhr.status == 200) {
                    
                    
                    div.innerHTML += xhr.responseText;
                    div.scrollTop = div.scrollHeight;
                } else {
                    
                }
                };

                // Send the data.
                xhr.send(formData);
              }
      
  }
  function viewprofile(i){
    location.href="viewprofile.php?i=" + i ;
  }
  
    shwmsg('<?php echo $clkusrid; ?>','<?php echo $clkusrname; ?>', '1')
  
  </script>

</body>
</html>