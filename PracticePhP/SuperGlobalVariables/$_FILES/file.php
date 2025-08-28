<?php
// print_r($_FILES['UploadFile']);
if (isset($_FILES['UploadFile'])) {
    $file_name = $_FILES['UploadFile']['name'];
    // echo $file_name;

    $upload_path = 'uploads/' . $file_name;
    // echo $upload_path;

   if( move_uploaded_file($_FILES['UploadFile']['tmp_name'], $upload_path)) {
    echo("File uploaded sucessfully");
}else{
    echo("File not uploaded");
}
} 
else{
    die("no file found");
}


?>