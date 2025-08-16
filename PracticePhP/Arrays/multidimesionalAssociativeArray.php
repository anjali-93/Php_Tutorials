<?php
$users = [
    ["name" => "Abc", "age" => 21, "email" => "abc@gmail.com"],
    ["name" => "xyz", "age" => 23, "email" => "xyz@gmail.com"],
    ["name" => "pqr", "age" => 22, "email" => "pqr@gmail.com"]
];

foreach ($users as $user){
    foreach ($user as $key => $value) {
        echo $key . " is " . $value;
        echo "<br>";
    }
}


?>