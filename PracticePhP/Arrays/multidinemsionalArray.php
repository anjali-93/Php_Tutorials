<?php
$users = [
    [1,"Abc", 21, "abc@gmail.com"],
    [2,"xyz" , 23 , "xyx@textgmail.com"],
    [3,"pqr" , 22 , "pqr@gmail.com"]
];

// for ( $i = 0; $i < count($users); $i++){
//     for ($j = 0; $j < count($users[$i]); $j++){
//         echo $users[$i][$j];
//             echo "<br>";
        
//     }
// }
?>


<!-- display Data in table  -->
 <?php
 $users = [
    [1, "Abc", 21, "noida" , "abc@gmail.com"],
     [2,"xyz" , 23 , "delhi","xyx@textgmail.com"],
    [3,"pqr" , 22 , "gurugram","pqr@gmail.com"],
    [4,"lmn" , 24 , "bangalore","lmn@gmail.com"]
 ];
 for ($i = 0; $i < count($users); $i++){
     echo "<table border='1'>";
     echo "<tr>";
     for ($j = 0; $j < count($users[$i]); $j++){
         echo "<td>" . $users[$i][$j] . "</td>";
     }
     echo "</tr>";
     echo "</table>";
 }
 
?>