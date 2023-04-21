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
                    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
                    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
                    $bday = mysqli_real_escape_string($conn, $_POST['bday']);
                    $country = mysqli_real_escape_string($conn, $_POST['country']);
                    $religion = mysqli_real_escape_string($conn, $_POST['religion']);
                    $mstatus = mysqli_real_escape_string($conn, $_POST['marital']);
                    $height = mysqli_real_escape_string($conn, $_POST['height']);
                    
                    $sql = "UPDATE profile SET fname='$fname', lname='$lname', bday='$bday', height='$height', mstatus='$mstatus', religion='$religion', country='$country' WHERE id = '$i'";
                    
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