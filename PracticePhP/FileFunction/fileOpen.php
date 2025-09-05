<?php

// Steps to read a file in PHP :
// 1. Open the file using fopen() function
// 2. Use fread() function to read the file
// 3. Close the file using fclose() function

// read file and display content in static way :

// $file = "Files/dummy.txt";
// $myFile = fopen($file, "r") or die("Unable to open file!");
// echo fread($myFile, filesize($file));
// fclose($myFile);


// read file and display content in dynamic way :
if(isset($_FILES['file'])){
    $file = $_FILES['file']['tmp_name'];
    $myFile = fopen($file, "r") or die("Unable to open file!");
    echo fread($myFile, filesize($file));
    fclose($myFile);
}

?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="fileToUpload">
    <br><br>
    <button type="submit">Read File</button>