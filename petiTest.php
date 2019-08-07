<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peti test</title>
    <style>
        body {

            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 22px;
            color: blue;
        }

        h1 {
            color: red;
            text-align: center;
        }

        .main {
            background-color: #cfcfcf;
            width: 33%;
            height: 700px;
            padding-bottom: 20px;
            margin: 20px auto;
            text-align: center;

        }

        form {
            text-align: left;
            margin-left: 30px;
            margin-top: 40px;
        }
        img {
            width: 250px;
        }

        /* .radioButtons {
            float: left;
            margin-left: 20px;
        } */
    </style>
</head>

<body>
    <div class="main">
        <h1>Izračunajte...</h1>
        <img src="images/matematika.png" alt="">
        <form action="petiTest.php" method="get">

            <label for="">Broj A</label>
            <input type="number" name="brojA" value="0"><br><br>
            <label for="">Broj B</label>
            <input type="number" name="brojB" value="0"><br><br>
            <input type="radio" name="radio" value="+" checked>Saberi<br><br>
            <input type="radio" name="radio" value="-">Oduzmi<br><br>
            <input type="radio" name="radio" value="*">Pomnoži<br><br>
            <input type="radio" name="radio" value="/">Podeli<br><br>
            <input type="submit" name="izracunaj" value="Izračunaj">

            <?php
            $brojA = $_GET["brojA"];
            $brojB = $_GET["brojB"];

            $rezultatSabiranja = $brojA + $brojB;
            $rezultatOduzimanja = $brojA - $brojB;
            $rezultatMnozenja = $brojA * $brojB;
            $rezultatDeljenja = $brojA / $brojB;



            if($_GET["radio"]  == "+") {
                echo "<p style='color: red;'> $brojA + $brojB = $rezultatSabiranja</p>";
            }
            if($_GET["radio"] == "-")  {
                echo "<p style='color: red;'> $brojA - $brojB = $rezultatOduzimanja</p>";
            }
            if($_GET["radio"] == "*") {
                echo "<p style='color: red;'> $brojA * $brojB = $rezultatMnozenja</p>";
            }
            if($_GET["radio"] == "/") {
                echo "<p style='color: red;'> $brojA / $brojB = $rezultatDeljenja</p>";
            }














            ?>

        </form>

    </div>












</body>

</html>