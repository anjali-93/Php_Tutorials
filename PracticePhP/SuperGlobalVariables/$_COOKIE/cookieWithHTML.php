<form action="" method="post">
    <input type="text" name="user" id="user" placeholder="Enter your name">
    <br>
    <br>
    <button value ="set" name="button">Set Cookie</button>
    <br> <br>
    <button value ="display" name="button">Display Cookie</button>
    <br> <br>
    <button value ="delete" name="button">Delete Cookie</button>
</form>

<?php

if(isset($_POST['button'])){
    if($_POST['button'] == 'set'){
        $val = $_POST['user'];
        setcookie("user", $val);
        echo "Cookie has been set!";
    }

    if($_POST['button'] == 'display'){
        if(isset($_COOKIE['user'])){
            echo "Welcome " . $_COOKIE['user'];
        } else {
            echo "No cookie found!";
        }

    }

    if($_POST['button'] == 'delete'){
        setcookie("user", null, -1);
        // echo "Cookie has been deleted!";
    }
}





?>