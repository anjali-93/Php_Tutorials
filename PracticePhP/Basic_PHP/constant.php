<?php
 echo "<h2>Constants in PHP</h2>";
const data= "abc <br/>";



// data ="zxgt"; we cannot change the value of a constant
echo  "data". data; // Output: abc

//another way to define a constant
define("data2", "xyz");
echo data2; // Output: xyz

?>

<!-- some points about constant -->
 <!--1. //$data we cannot use $ sign with constants -->
