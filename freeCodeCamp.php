<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
</head>

<body>
    <form action="freeCodeCamp.php" method="post">
        Number 1:<input type="number" step="0.1" name="num1">
        OP: <input type="text" name="OP">
        Number 2:<input type="number" step="0.1" name="num2">
        <input type="submit">
    </form>

    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $OP = $_POST["OP"];

    if($OP == "+") {
        echo "Your result is: "  . ($num1 + $num2);
    }
    else if ($OP == "-") {
        echo "Your result is: " . ($num1 - $num2);
    }
    else if ($OP == "*") {
        echo "Your result is: " . ($num1 * $num2);
    }
    else if ($OP == "/") {
        echo "Your result is: " . ($num1 / $num2);
    }
    else {
        echo "Invalid Operator";
    }


    ?>
</body>

</html>