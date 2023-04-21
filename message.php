<?php
session_start();
if(isset($_SESSION["email"])==false){
  header("Location: login.html");
}
set_error_handler(function(int $number, string $message) {
    
});
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                include 'connection.php';
                    $f  = mysqli_real_escape_string($conn, $_POST['from1']);
                    $t = mysqli_real_escape_string($conn, $_POST['to1']);
                    $m = mysqli_real_escape_string($conn, $_POST['msg1']);
                    // connect to database
                    $mysqli = new mysqli("localhost","root","","dmatrimony");

                    $query = "SELECT * FROM msgt WHERE from1 = '$f' AND to1 = '$t'";

                    $result = $mysqli->query($query);

                    if ($result) {
                        if (mysqli_num_rows($result) > 0) {
                            $conn1 = new mysqli("localhost", "root", "", "dmatrimony");
                                // Check connection
                                if ($conn1->connect_error) {
                                //die("Connection failed: " . $conn2->connect_error);
                                }
                                global $tb1;
                                $tb1 = "msg";
                                $dt1 = date('Y-m-d H:i:s');
                                // sql to create table
                                    $sql1 = "INSERT INTO $tb1 (from1, to1, msg, msgread, tme, msgtype, replyid)
                                    VALUES ('$f', '$t', '$m' , 'false', '$dt1', '', '-1')";

                                if ($conn1->query($sql1) === TRUE) {
                                //echo "Table MyGuests created successfully";
                                } else {
                                //echo "Error creating table: " . $conn->error;
                                }

                                $conn1->close();
                                echo '<br><br><center><font size="6">Message Sent ! <br></center><br><br>';
                        } else {
                            $sql = "INSERT INTO msgt (from1, to1)
                            VALUES ('$f', '$t')";
                            
                            
                            if ($conn->query($sql) === TRUE) {
                                $conn2 = new mysqli("localhost", "root", "", "dmatrimony");
                                // Check connection
                                if ($conn2->connect_error) {
                                //die("Connection failed: " . $conn2->connect_error);
                                }
                                global $tb;
                                $tb = "msg";
                                $dt1 = date('Y-m-d H:i:s');
                                // sql to create table
                                    $sql2 = "INSERT INTO $tb (from1, to1, msg, msgread, tme, msgtype, replyid)
                                    VALUES ('$f', '$t', '$m' , 'false', '$dt1' , '', '-1')";

                                if ($conn2->query($sql2) === TRUE) {
                                //echo "Table MyGuests created successfully";
                                } else {
                                //echo "Error creating table: " . $conn->error;
                                }

                                $conn2->close();
                                echo '<br><br><center><font size="6">Message Sent ! <br></center><br><br>';
                            } else {
                                echo '<br><br><center><font size="5">Error: " . $sql . "<br><br>" . $conn->error . "</font><br><br><font size="6">Please, try again ! <br><br><a style="text-decoration:none;" href="javascript:history.back();" class="transbutton2">Back</a></font></center><br><br>';
                            }
                            $conn->close();
                        }
                    } else {
                        //echo 'Error: ' . mysqli_error();
                    }

                    // close connection
                    mysqli_close($mysqli);

                }
                
            
        ?>