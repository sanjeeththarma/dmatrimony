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
        
 
          <?php
            
            
            global $allmsg;
            global $lid;
            global $usr;
            $allmsg ="";
            
              $f2 = $_SESSION["id"];
              $mysqli = new mysqli("localhost","root","","dmatrimony");
              $aid = $_SESSION["id"];
              $t2= $_POST["t1"];
              $_SESSION["aid"]=$t2;
              $n= $_POST["namescnt1"]; 

              
              $query= "SELECT update_time 
              FROM information_schema.tables 
              WHERE table_name = 'msg'";

                //$query="SELECT UPDATE_TIME FROM information_schema.tables WHERE TABLE_SCHEMA = 'dmatrimony' AND TABLE_NAME = 'msg' AND msg.from1 ='$t2' AND msg.to1 ='$f2' OR msg.from1 ='$f2' AND msg.to1 ='$t2' GROUP BY msg.id ORDER BY msg.tme DESC";
                
              $result = $mysqli->query($query);

              if ($result) {
                  if (mysqli_num_rows($result) > 0) {
                    $mysqli2 = new mysqli("localhost","root","","dmatrimony");
                    $query2 = "SELECT * FROM profile WHERE id = '$t2'";
                    $result2 = $mysqli2->query($query2);

                        if ($result2) {
                            if (mysqli_num_rows($result2) > 0) {
                                while($row2 = mysqli_fetch_assoc($result2)) {
                                    $usr = $row2["fname"];
                                }
                            }
                        }

                    while($row = mysqli_fetch_assoc($result)) {
                        
                        if($_SESSION["atime"]=="true"){
                            $_SESSION["atime1"] = $row["update_time"];
                            $_SESSION["atime"]="false";
                        }
                        else {
                            $_SESSION["atime2"] = $row["update_time"];
                            $_SESSION["atime"]="true";
                        }
                        
                            $f = $row["from1"]; 
                            $t = $row["to1"]; 
                            $fr = 'replies' . $f;
                            $tr = 'replies' . $t;
                            $tr2 = 'replies';
                            $mid = $row["id"] ;
                            $lid = $row["id"];
                            $_SESSION["lastmsgid"] = $lid;
                            $f2 = $row["from1"]; 
                                            $t2 = $row["to1"]; 
                                            $fr2 = 'replies' . $f;
                                            $tr2 = 'replies' . $t;
                                            $tr22 = 'replies';
                                            $mid2 = $row["id"] ;
                                            $lid2 = $row["replyid"];
                                            $_SESSION["lastmsgid2"] = $lid2;
                                            $date=date_create($row["tme"]);
                                            if($_SESSION["id"]==$row["from1"]){
                                                $c2 = '#333';
                                                $allmsg = $allmsg . '<div style="background-color:#ccc; color:black; padding: 5px 5px 5px 5px; margin: 5px 5px 5px 5px; position:relative; top:20px; left:75%; width:20%; height:auto; border-radius:5px;">' . date_format($date,"Y/m/d h:i:s A") . '<br> You wrote: ' . '</div><div style="background-color:' . $c2. '; color:white; padding: 15px 15px 15px 15px; margin: 25px 25px 25px 25px; position:relative; left:75%; width:20%; height:auto; border-radius:5px;">' . $row["msg"] . '</div>';
                                            }
                                            else {
                                                $c2 = '#618585';
                                                $allmsg = $allmsg . '<div style="background-color:#ccc; color:black; padding: 5px 5px 5px 5px; margin: 5px 5px 5px 5px; position:relative; top:20px; left:75%; width:20%; height:auto; border-radius:5px;">' . date_format($date,"Y/m/d h:i:s A")  . '<br>' . $usr  . ' wrote: ' . '</div><div style="background-color:' . $c2. '; color:white; padding: 15px 15px 15px 15px; margin: 25px 25px 25px 25px; position:relative; left:75%; width:20%; height:auto; border-radius:5px;">' . $row["msg"] . '</div>';
                                            }
                                            
                                            
                           
                          }
                          
                  }
              }
             
            if($_SESSION["atime1"]==$_SESSION["atime2"] || $_SESSION["atime1"]=="0"){
                $allmsg="";
            }

            echo $allmsg;
            
          ?>
   
  


</body>
</html>