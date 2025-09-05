<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operation'])) {
    $num1 = floatval($_GET['num1']);
    $num2 = floatval($_GET['num2']);
    $operation = $_GET['operation'];
    $result = null;

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: Division by zero";
            }
            break;
        default:
            $result = "Error: Invalid operation";
    }

   
}

?>

<form action="" method="get">
    <input type="number" name="num1" placeholder="First Number" required>
    <br>
    <br>
    <input type="number" name="num2" placeholder="Second Number" required>
    <br>
    <br>
    <select name="operation">
        <option value="add">Add</option>
        <option value="subtract">Subtract</option>
        <option value="multiply">Multiply</option>
        <option value="divide">Divide</option>
    </select> 
    <br>
    <br>
    <button type="submit">Calculate</button>
    <br>
    <br>    
    <?php
    if (isset($result)) {
        echo "<span style='color:red' >Result:  $result</span>";
    }
    ?>
</form>