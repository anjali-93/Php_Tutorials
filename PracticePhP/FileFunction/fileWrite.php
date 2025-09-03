<?php

// File write operation in PHP in STATIC way :

// $filename = "Files/dummy.txt";
// $content = "This is a sample text file.";
// $file = fopen($filename, "w"); // Open the file in write mode
// fwrite($file, $content); // Write content to the file
// fclose($file); // Close the file
// echo "File '$filename' created and content written successfully.";


// File write operation in PHP in DYNAMIC way :

if(isset($_POST['filename'])){
    $filename = "Files/".$_POST['filename'];
    $content = $_POST['content'];
    $file = fopen($filename, "w"); // Open the file in write mode
    fwrite($file, $content); // Write content to the file
    fclose($file); // Close the file
    echo "File '$filename' created and content written successfully.";
}
?>


<form action="" method="post">
    <input type="text" name="filename" placeholder="Enter file name">
    <br><br>
    <textarea name="content" placeholder="Enter file content"></textarea>
    <br><br>
    <button type="submit" name="submit">Create File</button>
</form>