<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $pol = "z";
    $godine =24;
    
    if($pol == "z") {
        echo "zena ";
        if ($godine >=18) {
            echo "punoletna";
        }
        else {
            echo "maloletna";
        }
    }
    else {
        echo "muskarac";
        if ($godine >=18) {
            echo "punoletan";
        }
        else {
            echo "maloletan";
        }
    }

    echo "<br>";

    $pol = "m";
    $god = 15;

    if ($pol == "z" and $god >= 18) {
        echo "zena, punoletna";
    }
    else if ($pol =="z" and $god <18) {
        echo "zena, maloletna";
    }
    else {
        if ($pol == "m" and $god >=18) {
            echo "muskarac, punoletan";
        }
        else {
            echo "muskarac, maloletan";
        }
    }

    echo "<br>";

    


    ?>

</body>
</html>