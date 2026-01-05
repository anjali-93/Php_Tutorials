<!-- Step 5 -->

<?php

// include the connection file code
include("connection.php");

// Reporting the error on Screen -0 means no error
error_reporting(0);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Page</title>
    <link rel="stylesheet" href="survey.css">
</head>
<body>
    <h1>Registration Form</h1>
    <p>Please fill out this form with the required information</p>
    <form method="" action=''>
      <fieldset>

        <label for="first-name">Enter Your Roll Number: <input id="first-name" name="id" type="text" required /></label>


        <label for="first-name">Enter Your User Name: <input id="first-name" name="username" type="text" required /></label>
        <label for="email">Enter Your Email: <input id="email" name="email" type="email" required /></label>
        <label for="new-password">Create a New Password: <input id="new-password" name="password" type="password" required /></label>

        <label for="gender">Gender:
             <input id="gender" type="radio" name="r1" value="male" class="inline" />Male         
             <input id="gender" type="radio" name="r1" value="female" class="inline" /> Female
        </label>

        <label for="referrer">How did you hear about us?
          <select id="referrer" name="refer">
            <option value="">(select one)</option>
            <option value="Telegram">Telegram</option>
            <option value="LinkedIn">LinkedIn</option>
            <option value="Instagram">Instagram</option>
            <option value="Other">Other</option>
          </select>
        </label>

         <label for="languages">Languages:
         Hindi <input id="language" type="checkbox" value="Hindi" class="inline" name="language[]" />
         English <input id="language" type="checkbox" value="English" class="inline" name="language[]" />
        Punjabi <input id="language" type="checkbox" value="Punjabi" class="inline" name="language[]" />
        </label>

      </fieldset>
     
      
      <input type="submit" value="Submit" name="submit" />
    </form>
</body>
</html>

<!-- PHP STARTING -->
<?php
$id = $_GET['id'];
$username = $_GET['username'];
$email = $_GET['email'];
$password = $_GET['password'];
$gender = $_GET['r1'];
$referer = $_GET['refer'];
$language = $_GET['language'];

// Convert Array into String -
$lan = implode(",", $language);

// insert the data into Database -
$query = "INSERT INTO REGISTRATION VALUES ('$id' , '$username', '$email', '$password', '$gender', '$referer', '$lan')";

// Collect to All the Data 
$data = mysqli_query($conn, $query);

// Check the data Inserted or not
if($data){
    echo "Data insrted into database";
}

else{
    echo "Data failed";
}


?>