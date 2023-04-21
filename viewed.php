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

                    $query = "SELECT * FROM viewed WHERE from1 = '$f' AND to1 = '$t'";

                    $result = $mysqli->query($query);

                    if ($result) {
                        if (mysqli_num_rows($result) > 0) {
                            
                        } else {
                            $sql = "INSERT INTO viewed (from1, to1)
                            VALUES ('$f', '$t')";
                            
                            
                            if ($conn->query($sql) === TRUE) {
                                
                            } else {
                                
                            }
                            $conn->close();
                        }
                    } else {
                        
                    }

                    // close connection
                    mysqli_close($mysqli);

                }
                
            
        ?>
    </body>
</html>