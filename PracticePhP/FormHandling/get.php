<?php
if($_GET){
    echo "User name is " .$_GET['user_name'];
echo"<br>";
echo " Password is " .$_GET['user_password'];
}
?>

<!-- if you want to use POST method  -->
 <!-- you have to change the form action attribute in HTML file -->

<!-- <?php
if($_POST){
    echo "User name is " .$_POST['user_name'];
echo"<br>";
echo " Password is " .$_POST['user_password'];
}
?> -->


<!-- $_REQUEST is accept the  both methods - GET & POST -->
 <!-- you do not have to change the form action attribute in HTML file   "get m h ya post m doesn't matter" -->
 <!-- you can use loops for accessing the data -->
<?php
if($_REQUEST){
    foreach($_REQUEST as $key =>$data){
        echo $key ." is ". $data;
        echo "<br>";
    }
}
?>

