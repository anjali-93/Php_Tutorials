<?php
if($_POST){
    echo "Username is " . $_POST['user_name'];
    echo'<br>';
    echo "Password is : " . $_POST['user_password'];
    if($_POST['user_password']== "123"){
        echo "<br> <h4 style ='color : green'> 
         You are successfully logged in </h4>";
        echo "<br> Welcome " . $_POST['user_name'];
    } else {
        echo "<br> <br> <h3 style ='color : red'> 
        Invalid Password </h3>";   
    }

}
?>