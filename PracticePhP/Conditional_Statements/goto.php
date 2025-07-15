<?php
// $num = 10;
// echo "before condition <br>";

// if($num == 10){
//     goto jump;
// }

// $name = "abc <br>";
// echo $name;


// jump:
// echo "statement is jumped ";


for($i = 0; $i < 10; $i++){
    echo "$i <br>";

    if($i == 5){
        goto outsideLoop;
    }
}

outsideLoop:
echo "loop is break";
?>