<?php
$sucess = 0;
$user = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'connect.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // duplicates values also entered in the datatbase:

    // $sql = "insert into `registration` (username ,email , password) values('$username', '$email' ,'$password')";
    // $result = mysqli_query($con , $sql);

    // if($result){
    //     echo "Data inserted successfully";
    // }
    // else{
    //     die(mysqli_error($con));
    // } 


// to prevent the duplicates values entered in database:
    $sql = "Select * from `registration` where username = '$username'";

    $result = mysqli_query($con, $sql);
    if($result){
        $num = mysqli_num_rows($result);
        if($num>0){
            // echo "User ALready exists";
            $user = 1;
        }
        else{
             $sql = "insert into `registration` (username ,email , password) values('$username', '$email' ,'$password')";
    $result = mysqli_query($con , $sql);
    if($result){
            // echo "Sign Up successfully";
            $sucess = 1;
            header('location:login.php')
        }
        else{
            die(mysqli_error($con));
        }

        }
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <?php
  if($user){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Ohh no Sorry </strong> User already exist.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    } 
  ?>

<?php
  if($sucess){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!! </strong> You are Successfully Signed up.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
     } 
?>




    <h1 class= "text-center">Sign Up Page</h1>
    <hr class="border border-primary border-2 opacity-50">
    <div class="container mt-5">

        <form action ="signup.php" method= "post">

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-primary w-100">Signup</button>

            <p class="text-center mt-2">Already have an accounts? <a href="Login.php" class="text-center ">Login</a></p>
        </form>

    </div>
  
  </body>
</html>