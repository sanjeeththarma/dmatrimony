<?php
namespace Phppot;
session_start();
if(isset($_SESSION["email"])==false){
  header("Location: login.html");
}
set_error_handler(function(int $number, string $message) {
    
});
require_once __DIR__ . '/Model/Pagination3.php';

$paginationModel = new Pagination();
$pageResult = $paginationModel->getPage();
$queryString = "?";
if (isset($_GET["page"])) {
    $pn = $_GET["page"];
} else {
    $pn = 1;
}
$limit = Config::LIMIT_PER_PAGE;

$totalRecords = $paginationModel->getAllRecords();
$totalPages = ceil($totalRecords / $limit);

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>D-Matrimony</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
                
        

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="assets/css/pagination.css">
<link rel="stylesheet" type="text/css"
    href="assets/css/phppot-style.css">
<script src="vendor/jquery/jquery-3.3.1.js"></script>
<script>
function pageValidation()
{
    var valid=true;
    var pageNo = $('#page-no').val();
    var totalPage = $('#total-page').val();
    if(pageNo == ""|| pageNo < 1 || !pageNo.match(/\d+/) || pageNo > parseInt(totalPage)){
        $("#page-no").css("border-color","#ee0000").show();
        valid=false;
    }
    return valid;
}
</script>


<style>
body{
  margin: 0;
  padding:0;
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
  left:75%;
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
.mcard{
  display:block;
}
.card1{
  max-width:300px;
  width:100%;
  height:auto;
  display:inline-block;
  padding: 20px 20px 20px 20px;
}
.card2{
  max-width:500px;
  width:100%;
  height:auto;
  display:inline-block;
  padding: 20px 20px 20px 20px;
}
.imgp{
  position:relative;
  top:10px;
  z-index:-1;
}
@media all and (max-width: 815px) {
  .imgp{
  position:relative;
  top:10px;
}
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
<center><h2>Who Shortlisted My Profile</h2></center>
<div class="mcard">

    <?php
    $connp = mysqli_connect("localhost", "root", "", "dmatrimony");
    
if (! empty($pageResult)) {
    foreach ($pageResult as $page) {
      $pid2 =$page["from1"];
      $sqlp = "SELECT * FROM profile WHERE id = '$pid2'";
      $resultp = mysqli_query($connp, $sqlp);
        ?>
         
    <div class="card2">
      <?php
      if (mysqli_num_rows($resultp) > 0) {
          while($rowp = mysqli_fetch_assoc($resultp)) {
            echo '<div class="card1">';
            echo '<img class="imgp" style="-webkit-box-shadow: 5px 5px 15px 5px #000000; box-shadow: 5px 5px 15px 5px #000000; max-width:300px; width:100%; height:auto;" id="img'. $rowp['id'] . '"' . ' src="profiles/' . $rowp['id'] . '/'. $rowp['flename'] . '" alt="" style="width:100%">';
            echo '</div>';
            echo '<h3><b>Name: </b>' . $rowp["fname"] . ' ' . $rowp["lname"] . '</h3>';
            $dateOfBirth = $rowp["bday"];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($dateOfBirth), date_create($today));
            echo '<b>Age: '. $diff->format('%y') . '</b>';
             
            $txt1;
            $txt2;
            $cnt=0;
            $array = explode(".",$rowp["height"]);
            foreach($array as $element){
              $cnt = $cnt +1;
              if($cnt==1){
                  $txt1=$element . '\'';
              }
              if($cnt==2){
                $txt2=$element . '\'\'';
              }
            }
            echo '<br><b>Height: </b>' . $txt1 . $txt2;
            echo '<br>';
                        echo '<b>Marital Status: </b>' . $rowp["mstatus"];
                        echo '<br>';
                        echo '<b>Religion: </b>' . $rowp["religion"];
                        echo '<br>';
                        echo '<b>Country: </b>' . $rowp["country"];
                        echo '<br>';
                        echo '<button class="button5" onclick="viewprofile(\'' . $rowp["id"] . '\')">View Profile</button>';
          }
      }
      
      ?>
</div>
        </div>  
        </div>  
        <hr style="border: 1px solid #333333; border-radius: 1px; -webkit-box-shadow: 5px 5px 15px 5px #000000; box-shadow: 5px 5px 15px 5px #000000;"> 
 <?php }} ?> 
<br><br>
 <center>
    

<div class="pagination"> 			
 <?php
if (($page > 1) && ($pn > 1)) {
    ?>
    <a class="previous-page" id="prev-page"
                    href="<?php echo $queryString;?>page=<?php echo (($pn-1));?>"
                    title="Previous Page"><span>&#10094; Previous</span></a>
            <?php }?>
<?php
if (($pn - 1) > 1) {
    ?>
    <a href='whoshortlisted.php?page=1'><div class='page-a-link'>1</div></a>
                <div class='page-before-after'>...</div>
<?php
}

for ($i = ($pn - 1); $i <= ($pn + 1); $i ++) {
    if ($i < 1)
        continue;
    if ($i > $totalPages)
        break;
    if ($i == $pn) {
        $class = "active";
    } else {
        $class = "page-a-link";
    }
    ?>
    <a href='whoshortlisted.php?page=<?php echo $i; ?>'>
                    <div class='<?php echo $class; ?>'><?php echo $i; ?></div>
                </a>
    <?php
}

if (($totalPages - ($pn + 1)) >= 1) {
    ?>
    <div class='page-before-after'>...</div>
<?php
}
if (($totalPages - ($pn + 1)) > 0) {
    if ($pn == $totalPages) {
        $class = "active";
    } else {
        $class = "page-a-link";
    }
    ?>
    <a href='whoshortlisted.php?page=<?php echo $totalPages; ?>'><div
                        class='<?php echo $class; ?>'><?php echo $totalPages; ?></div></a> 
    <?php
}
?>
    <?php
    if (($page > 1) && ($pn < $totalPages)) {
        ?>
				<a class="next" id="next-page"
                    href="<?php echo $queryString;?>page=<?php echo (($pn+1));?>"
                    title="Next Page"><span>Next &#10095;</span></a> 
        <?php
    }
    ?>
    </div>
            <div class="goto-page">
                <form action="" method="GET"
                    onsubmit="return pageValidation()">
                    <input type="submit" class="goto-button"
                        value="Go to"> <input type="text"
                        class="enter-page-no" name="page" min="1"
                        id="page-no"> <input type="hidden"
                        id="total-page"
                        value="<?php echo $totalPages;?>">
                </form>
            </div>
        </div>
  
</center>
    <br><br>
    </div>
 
    
</div>
<script>
  function shwedit(){
    location.href="edit.php";
  }
  function showPreview(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("pimg");
      preview.src = src;
      submitfrm();
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

        function viewprofile(i){
            location.href="viewprofile.php?i=" + i ;
        }
</script>
</body>
</html>