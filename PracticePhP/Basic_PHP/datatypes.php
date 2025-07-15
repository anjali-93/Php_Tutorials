<!-- there are 8 types of datatype:
1.String
2.integer
3.float
4.boolean
5.object
6.array
7.recourse
8.null -->


<?php
// 1. String

$name = "John Doe"; 
echo "<h4> String</h4>";
echo $name . "<br>";
//var_dump is used to display structured information (type and value) about a variable
echo var_dump($name). "<br>"; 

// 2. Integer
echo "<h4>Integer</h4>";
$age = 30;
echo $age . "<br>";
echo var_dump($age);

// 3. Float
$height = 5.9;
echo "<h4>Float</h4>";
echo $height . "<br>";
echo var_dump($height);

// 4. Boolean
$isEmployed = true;
echo "<h4>Boolean</h4>";
echo $isEmployed ? 'True' : 'False' . "<br>";
echo var_dump($isEmployed);

// 5. Object
class Person {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}
$person = new Person("Jane Doe", 25);

// 6. Array     
$fruits = array("Apple", "Banana", "Cherry");
echo "<h4>Array</h4>";
echo var_dump($fruits) . "<br>";

// 7. Resource
$file = fopen("example.txt", "w");

// 8. Null
$nullValue = null;  
echo "<h4>Null</h4>";
echo var_dump($nullValue) . "<br>";
        






?>