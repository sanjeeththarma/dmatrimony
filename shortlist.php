<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
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
                    // connect to database
                    $mysqli = new mysqli("localhost","root","","dmatrimony");

                    $query = "SELECT * FROM shortlists WHERE from1 = '$f' AND to1 = '$t'";

                    $result = $mysqli->query($query);

                    if ($result) {
                        if (mysqli_num_rows($result) > 0) {
                            echo '<br><br><center><font size="5">Profile Already Shortlisted ! <br></center><br><br>';
                        } else {
                            $sql = "INSERT INTO shortlists (from1, to1)
                            VALUES ('$f', '$t')";
                            
                            
                            if ($conn->query($sql) === TRUE) {
                                echo '<br><br><center><font size="6">Profile Shortlisted successfully ! <br></center><br><br>';
                            } else {
                                echo '<br><br><center><font size="5">Error: " . $sql . "<br><br>" . $conn->error . "</font><br><br><font size="6">Please, try again ! <br><br><a style="text-decoration:none;" href="javascript:history.back();" class="transbutton2">Back</a></font></center><br><br>';
                            }
                            $conn->close();
                        }
                    } else {
                        echo 'Error: ' . mysqli_error();
                    }

                    // close connection
                    mysqli_close($mysqli);

                }
                
            
        ?>
    </body>
</html>