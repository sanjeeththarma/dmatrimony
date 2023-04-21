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
                    $i  = mysqli_real_escape_string($conn, $_POST['pid']);
                    $dis = mysqli_real_escape_string($conn, $_POST['dis']);
                    $abt = mysqli_real_escape_string($conn, $_POST['abt']);
                    $child = mysqli_real_escape_string($conn, $_POST['child']);
                    
                    
                    $sql = "UPDATE profile SET children='$child', disability='$dis', about='$abt' WHERE id = '$i'";
                    
                    if ($conn->query($sql) === TRUE) {
                        echo '<br><br><center><font size="6">Your Profile updated successfully ! <br></center><br><br>';
                    } else {
                        echo '<br><br><center><font size="5">Error: " . $sql . "<br><br>" . $conn->error . "</font><br><br><font size="6">Please, try again ! </font></center><br><br>';
                    }
                }
                $conn->close();
            
        ?>
    </body>
</html>