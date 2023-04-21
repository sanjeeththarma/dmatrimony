<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
session_start();
if(isset($_SESSION["email"])==false){
  //header("Location: login.html");
}
set_error_handler(function(int $number, string $message) {
    
});
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                include 'connection.php';
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $sqlchk = "SELECT email FROM profile WHERE email = '$email'";
                $result = $conn->query($sqlchk);
                
                if ($result->num_rows > 0) {
                    echo '<br><br><center><font size="6">Error: Email already exists ! <br><br> Please, enter a different email ! </font><br><br><font size="6">Please, try again ! <br><br><a style="text-decoration:none;" href="javascript:history.back();" class="transbutton2">Back</a></font></center><br><br>';
                }
                else {
                    
                    $password = mysqli_real_escape_string($conn, $_POST['password']);
                    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
                    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
                    $children = mysqli_real_escape_string($conn, $_POST['children']);
                    $disability = mysqli_real_escape_string($conn, $_POST['disability']);
                    $about = mysqli_real_escape_string($conn, $_POST['about']);
                    $gender = mysqli_real_escape_string($conn, $_POST['txtgender']);
                    $bday = mysqli_real_escape_string($conn, $_POST['txtdate']);
                    $country = mysqli_real_escape_string($conn, $_POST['txtcountry']);
                    $religion = mysqli_real_escape_string($conn, $_POST['txtreligion']);
                    $mstatus = mysqli_real_escape_string($conn, $_POST['txtmarital']);
                    $height = mysqli_real_escape_string($conn, $_POST['txtheight']);
                    
                    $sql = "INSERT INTO profile (email, password, fname, lname, gender, bday, height, mstatus, children, religion, country, disability, about, profilepicset, flename, pic1, pic2, pic3, pic4, pic5, pic6)
                    VALUES ('$email', '$password', '$fname', '$lname', '$gender', '$bday', '$height', '$mstatus', '$children', '$religion', '$country', '$disability', '$about', 'false', '', '', '', '', '', '', '' )";
                    
                    if ($conn->query($sql) === TRUE) {
                        $last_id = $conn->insert_id;
                        mkdir('profiles/' . $last_id , 0700);

                        $conn2 = new mysqli("localhost", "root", "", "dmatrimony");
                        // Check connection
                        if ($conn2->connect_error) {
                            die("Connection failed: " . $conn2->connect_error);
                        }
                        
                        echo '<br><br><center><font size="6">Your Profile created successfully ! <br><br><a style="text-decoration:none;" href="login.html" class="transbutton2">Login</a></font></center><br><br>';
                    } else {
                        echo '<br><br><center><font size="5">Error: " . $sql . "<br><br>" . $conn->error . "</font><br><br><font size="6">Please, try again ! <br><br><a style="text-decoration:none;" href="javascript:history.back();" class="transbutton2">Back</a></font></center><br><br>';
                    }
                }
                $conn->close();
            }
        ?>
    </body>
</html>
