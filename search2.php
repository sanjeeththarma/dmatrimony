
        <?php
            session_start();
            if(isset($_SESSION["email"])==false){
              header("Location: login.html");
            }
            set_error_handler(function(int $number, string $message) {
                
            });

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $age  = $_POST['txtage'];
                    $height = $_POST['txtheight'];
                    $martial = $_POST['txtmarital'];
                    $religion = $_POST['txtreligion'];
                    $country = $_POST['txtcountry'];
                    $hasChild = $_POST['txtchildren'];


                    $ageArr = explode(",",$age);
                    $ageMin = $ageArr[0];
                    $ageMax = $ageArr[1];

                    $heightArr = explode(",",$height);
                    $heightMin = $heightArr[0];
                    $heightMax = $heightArr[1];

                    $_SESSION["searchagemin"] = $ageMin;
                    $_SESSION["searchagemax"] = $ageMax;

                    $_SESSION["searchheightmin"] = $heightMin;
                    $_SESSION["searchheightmax"] = $heightMax;

                    $_SESSION["searchmartial"] = $martial;
                    $_SESSION["searchreligion"] = $religion;
                    $_SESSION["searchcountry"] = $country;
                    $_SESSION["searchhaschild"] = $hasChild;

                    header("Location: search.php");
                }
                
            
        ?>
  