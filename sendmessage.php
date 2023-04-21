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
            $allmsg ="";
            $msg= $_POST["msg1"];
            $f=$_SESSION["aid"];
            $t= $_SESSION["id"];
            $lid = $_SESSION["lastmsgid"];
            $r='msg';
            $dt1 = date('Y-m-d H:i:s');
            
            $mysqli2 = new mysqli("localhost","root","","dmatrimony");
            $query2 = "INSERT INTO $r (from1, to1, msg, msgread, msgtype, replyid, tme)
                            VALUES ('$t', '$f', '$msg', 'false', 'reply', '$lid', '$dt1')";
                            if($_SESSION["id"]==$_SESSION["aid"]){
                                $c2 = '#618585';
                            }
                            else {
                                $c2 = '#333';
                            }
                                
                            
           if ($mysqli2->query($query2) === TRUE) {
            $date=date_create($dt1);
                 $allmsg = $allmsg . '<div style="background-color:#ccc; color:black; padding: 5px 5px 5px 5px; margin: 5px 5px 5px 5px; position:relative; top:20px; left:75%; width:20%; height:auto; border-radius:5px;">'  . date_format($date,"Y/m/d h:i:s A") . '<br> You wrote: ' . '</div><div style="background-color:' . $c2. '; color:white; padding: 15px 15px 15px 15px; margin: 25px 25px 25px 25px; position:relative; left:75%; width:20%; height:auto; border-radius:5px;">' . $msg . '</div>';     
            }
           
           // connect to database
           $mysqli = new mysqli("localhost","root","","dmatrimony");

           $query = "SELECT * FROM msgt WHERE from1 = '$t' AND to1 = '$f'";

           $result = $mysqli->query($query);

           if ($result) {
               if (mysqli_num_rows($result) > 0) {
                  
               } else {
                   $sql = "INSERT INTO msgt (from1, to1)
                   VALUES ('$t', '$f')";
                   
                   
                   if ($conn->query($sql) === TRUE) {
                       
                   } else {
                       //echo '<br><br><center><font size="5">Error: " . $sql . "<br><br>" . $conn->error . "</font><br><br><font size="6">Please, try again ! <br><br><a style="text-decoration:none;" href="javascript:history.back();" class="transbutton2">Back</a></font></center><br><br>';
                   }
                   $conn->close();
               }
           } else {
               //echo 'Error: ' . mysqli_error();
           }

           // close connection
           mysqli_close($mysqli);
           echo $allmsg;  
          $mysqli2->close();
          ?>
   
  


</body>
</html>