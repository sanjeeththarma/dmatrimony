<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            session_start();
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                include 'connection.php';
                $email = $_POST["email"];
                $password = $_POST["password"];
                $sql = "SELECT * FROM profile WHERE email='$email' AND password='$password'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    // get data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        $_SESSION["email"] = $row["email"];
                        $_SESSION["id"] = $row["id"];
                        $_SESSION["gender"] = $row["gender"];
                        mysqli_close($conn);
                        header("Location: home.php");
                    }
                } else {
                    echo '<br><br><center><font size="6">Error: Wrong email or password entered ! </font><br><br><font size="6">Please, try again ! <br><br><a style="text-decoration:none;" href="javascript:history.back();" class="transbutton2">Back</a></font></center><br><br>';
                    mysqli_close($conn);
                }
            }
        ?>
    </body>
</html>
