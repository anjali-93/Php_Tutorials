<!-- for Break -->

<!-- <?php
$user_num = 5;
for($i=0 ; $i<=10 ; $i++){
    echo $i;
    echo "<br>";
    if($i == $user_num){
        break;
    }
}
?> -->

<!-- for Continue -->

<?php
$user_num = 5;
for($i = 0; $i <= 10; $i++){
 
    if($i == $user_num){
        continue;
    }
    echo $i;
    echo "<br>";
}

?>