<!-- Step 4  -->

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signupforms";

// connect the database - connected or not
$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    // echo "Connectiomn Okay";

}
    
else {
    echo "Connection Failed".mysqli_connect_error();

}
    


?>