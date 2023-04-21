<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
if(isset($_SESSION["email"])==false){
    echo '<script>top.location.href = "login.html" </script>';
}
set_error_handler(function(int $number, string $message) {
    
});
global $last_id;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

include 'connection.php';

    
    $id = mysqli_real_escape_string($conn, $_POST['pid']);
    
    $original_filename2 = $_FILES['fle1']['name'];
    $filename1=basename($original_filename2);

    $sql = "UPDATE profile SET flename='$filename1', profilepicset='true' WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        $last_id = $id;
        
        
        // Set Upload Path
        $target_dir = 'profiles/'. $last_id . '/';
        if( isset($_FILES['fle1']['name'])) {
            
            $total_files = 1;
            
           
                
                // Check if file is selected
                if(isset($_FILES['fle1']['name']))
                    {
                        
                        $original_filename = $_FILES['fle1']['name'];
                        $target = $target_dir . basename($original_filename);
                        $tmp  = $_FILES['fle1']['tmp_name'];
                        move_uploaded_file($tmp, $target);
                        
                    }
                    
            
            
        }
        echo '<center>Added successfully !</center>';
    } else {
        echo '<center>Error adding: ' . $conn->error . '</center>';
    }
    
    $conn->close();
}
?>