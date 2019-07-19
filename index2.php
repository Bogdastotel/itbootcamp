<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>

<body>


    <?php


    $pol = "m";
    $godinaRodjenja = 1991;
    $tezinaUkilogramima = 84;

    $godina = date('Y') - $godinaRodjenja;
    $visinaUcentrimetrima = 180;

    $visinaUmetrima = $visinaUcentrimetrima / 100;

    $BMI = $tezinaUkilogramima / ($visinaUmetrima * $visinaUmetrima);

    if ($pol == "m") {
        echo "godina: $godina";
        echo "<img src='images/male.png'>";
        echo "<br>";
        echo "BMI: $BMI";
        echo "<br>";

        if ($BMI < 18.5) {
            echo "Pothranjenost";
        } else if ($BMI >= 18.5 and $BMI < 25) {
            echo "Normalna tezina";
        } else if ($BMI >= 25 and $BMI < 30) {
            echo "Povisena tezina";
        } else {
            echo "Prekomerna tezina";
        }
    }
    else if ($pol == "z") {
        echo "godina: $godina";
        echo "<img src='images/female.png'>";
        echo "<br>";
        echo "BMI: $BMI";
        echo "<br>";
        if ($BMI < 18.5) {
            echo "Pothranjenost";
        } else if ($BMI >= 18.5 and $BMI < 25) {
            echo "Normalna tezina";
        } else if ($BMI >= 25 and $BMI < 30) {
            echo "Povisena tezina";
        } else {
            echo "Prekomerna tezina";
        }
    }
    else {
        echo "Neodredjen pol";
    };

    


    
    




















    ?>
</body>

</html>