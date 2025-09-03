<form action="" method="post">
    <input type="text" name="user" id="user" placeholder="Enter your name">
    <br>
    <br>
    <button value ="set" name="button">Set Session</button>
    <br> <br>
    <button value ="display" name="button">Display Session</button>
    <br> <br>
    <button value ="delete" name="button">Delete Session</button>
</form>


<?php
session_start();
if(isset($_POST['button'])){
    if($_POST['button'] == 'set'){
        $val = $_POST['user'];
        $_SESSION["user"]= $val;
        echo "Session has been set!";
    }

    if($_POST['button'] == 'display'){
        if(isset($_SESSION['user'])){
            echo "Welcome " . $_SESSION['user'];
        } else {
            echo "No Session found!";
        }

    }

    if($_POST['button'] == 'delete'){
      session_destroy();
    }
}


?>