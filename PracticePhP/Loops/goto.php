<?php
// $x= 20;
//  echo "before goto <br>";


//  if($x == 20){
//     goto label1; //OP -> before goto label1
//  }

//  $name = "abcd";
//  echo $name; //goto skip this part


//     label1:
//      echo " heyy !label1"; //OP -> before goto label1 label1


// With for loop

for($i = 0; $i <= 10; $i++){
    echo $i;
    echo "<br>";
    if($i == 5){
        goto label2; //OP -> 01234
    }
}
echo "after goto <br>";
label2:
echo " heyy !label2"; //OP -> 01234 heyy !label2




?>