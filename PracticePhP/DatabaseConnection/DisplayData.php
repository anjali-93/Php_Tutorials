<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data From Database</title>
</head>
<body>
<table border="2px">
    <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Student Email</th>

    </tr>

    
</body>
</html>


<?php

// for Connection Established -
include("connection.php");

// What Operation Performed -
$query = "SELECT * FROM REGISTRATION";

// if connection Okay - and Query
$data = mysqli_query($conn,$query);

// print the No. Of Rows -
$total = mysqli_num_rows($data);
// echo $total;

// $result = mysqli_fetch_assoc($data)
// echo $result['id']. " ". $result['username'];

// if No. Of Rows is not equal to 0
if($total != 0){

    // Fetch the Data from Database
    while($result = mysqli_fetch_assoc($data)){
        echo " 
            <tr>
                <td>".$result['id']."</td>
                  <td>".$result['username']."</td>
                    <td>".$result['email']."</td>
        
        
            </tr>
        ";

    }

}
else{
    echo "Table has no Records";
}

?>