<?php
  // $name = $_POST['username'];
  // // $len = $name.length;
  // echo "The length of String : ". strlen($name);
  //   echo "<br> Hello, " . htmlspecialchars($name) . "!";

  $txtarea = $_POST['txtarea'];
  $len = str_word_count($txtarea);
  echo "Only Count Words : " . $len;
  echo "<br> The text from textarea :" . $txtarea;
  ?>

<!-- Sum of Two Number -->
<!-- <?php
$First_Number = $_POST['FirstNumber'];
$Second_Number = $_POST['SecondNumber'];
$sum = $First_Number + $Second_Number;
echo "Sum of Two Number is : " . $sum;

?> -->

<!-- Check EvenOdd Number -->
<!-- <?php
$Number = $_POST['Number'];
if($Number % 2 == 0)
  echo "Even Numbers";
else 
  echo "Odd Numbers";


?> -->