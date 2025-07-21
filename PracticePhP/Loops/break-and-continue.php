<!-- for Break -->

<?php
$user_num = 5;
for($i=0 ; $i<=10 ; $i++){
    echo $i;
    echo "<br>";
    if($i == $user_num){
        echo "<br>";
        break;   //OP -> 012345
        
    }
}
?>

<!-- for Continue -->

<?php
$user_num = 5;
for($i = 0; $i <= 10; $i++){
 
    if($i == $user_num){
        continue;  //OP -> 01234678910
    }
    echo $i;
    echo "<br>";
}

?>