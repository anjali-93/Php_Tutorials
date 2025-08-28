<?php
if($_POST){
     echo "User name is " .$_POST['user_name'];
echo"<br>";
echo " Password is " .$_POST['user_password'];
echo"<br>";
 
if($_POST['user_name'] == "Anil"){
    echo "Welcome Anil";
} else {
    echo "You are not Anil";
}


}
?>