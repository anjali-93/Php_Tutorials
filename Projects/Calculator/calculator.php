<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>

     <style>
    body {
      font-family: Arial;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #f0f0f0;
    }
    form {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px #aaa;
    }
       input {
      padding: 8px;
      margin: 5px;
      width: 96%;
    }

        select {
      padding: 8px;
      margin: 5px;
      width: 100%;
    }
    button {
      padding: 10px;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
     
    }
  </style>
</head>
<body>
    

<form action="" method="get">
    <h1>Calculator</h1>
    <input type="number" name ="num1" placeholder = "Enter first number" required>
    <input type="number" name ="num2" placeholder = "Enter second number" required>
    <select name="operation" required>
        <option value="add">Add</option>
        <option value="subtract">Subtract</option>
        <option value="multiply">Multiply</option>
        <option value="divide">Divide</option>
        </select>
        <br>
    <button type="submit" name = "calculate">Calculate</button>

    <?php
    if(isset($_GET['calculate'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operation = $_GET['operation'];
        $result = 0;

        switch($operation) {
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
                    $result = "Cannot divide by zero";
                }
                break;
            default:
                $result = "Invalid operation";
        }
        echo "<h2>Result: $result</h2>";


    }
    ?>
</form>
    

    
</body>
</html>
