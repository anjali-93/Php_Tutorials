<?php
$login = 0;
$invalid = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'connect.php';
    // $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "Select * from `registration` where email ='$email' and password = '$password'";

    $result = mysqli_query($con, $sql);
    if($result){
        $num = mysqli_num_rows($result);
        if($num>0){
            // echo "Login Successfully";
            $login = 1;
            session_start();
            $_SESSION['email'] = $email;
            header('location:home.php');
        }
        else{
            // echo "Invalid data";
            $invalid = 1;
        }
    }
}
?>








<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <?php
    if($login){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!! </strong> You are Successfully logged in.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    } 
    ?>

    <?php
    if($invalid){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!! </strong> Invalid credentials.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    } 
    ?>



    <h1 class= "text-center">Login Page</h1>
    <hr class="border border-primary border-2 opacity-50">
<div class="container mt-5">

        <form action ="login.php" method= "post">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <button type="submit" class="btn btn-primary w-100">Login</button>

        <p class="text-center mt-2">Don't have any accounts? <a href="signup.php" class="text-center ">Sign-up</a></p>
        </form>

</div>
  
  </body>
</html>