<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>

    <form action="rukovanjeFormama.php" method="post">
        <label for="">Name: </label>
        <input type="text" name="ime"><br><br>
        <label for="">E-mail:</label>
        <input type="email" name="email"><br><br>
        <label for="">Password: </label><br><br>
        <input type="password" name="Password"><br><br>
        <input type="submit" value="Potvrdite"><br><br>


    </form>

    <form action="rukovanjeFormama.php" method="post">

        <label for="">Broj 1: </label>
        <input type="number" name="number1" value="1"><br><br>
        <label for="">Operator: </label>
        <input type="text" name="operator"><br><br>
        <label for="">Broj 2: </label>
        <input type="number" name="number2" value="1"><br><br>
        <input type="submit" value="Izracunaj">

    </form>

    <h2>Php Validacija Forme</h2>

    <?php
    $ime = $prezime = $email = $website = $komentar = "";
    $imeO = $prezimeO = $emailO = $websiteO = $komentarO = "*";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["ime"]) == TRUE) {
            $imeO = "Ime ne sme biti prazan string";
        } else {
            $ime = $_POST["ime"];
        }

        if (empty($_POST["prezime"]) == TRUE) {
            $prezimeO = "prezime ne sme biti prazan string";
        } else {
            $prezime = $_POST["prezime"];
        }

        if (empty($_POST["email"]) == TRUE) {
            $emailO = "email ne sme biti prazan string";
        } else if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
            $emailO = "Niste uneli email pravilno";
        }
        else {
            $email = $_POST["email"];
        }

        if (empty($_POST["sajt"]) == TRUE) {
            $websiteO = "sajt ne sme biti prazan string";
        } else if (filter_var($_POST["sajt"], FILTER_VALIDATE_URL) == false) {
            $websiteO = "Niste uneli sajt pravilno";
        }
        else {
            $website = $_POST["sajt"];
        }





        $ime = $_POST["ime"];
        $prezime = $_POST["prezime"];
        $email = $_POST["email"];
        $website = $_POST["sajt"];
        $komentar = $_POST["komentar"];

        $pol = $_POST["pol"];

        // $pravilaKoriscenja = $_POST["pravila"];
        // if ($_POST["pravila"] == "Da") {
        //     $pravilaKoriscenja = "Prihvacena pravila";
        // } else {
        //     $pravilaKoriscenja = "Pravila nisu prihvacena";
        // }


        // regulisanje checkbox-a (ako nije selektovano nista a submitovali smo formu)

        // 1. nacin 

        // if (!isset($_POST["pravila"])) {
        //     $pravilaKoriscenja = "Niste prihvatili pravila koriscenja";
        // } else {
        //     $pravilaKoriscenja = $_POST["pravila"];
        // }
           
        // 2. nacin 

        if(isset($_POST["pravila"]) == true) {
            $pravilaKoriscenja = "pravila su prihvacena";
        }
        else {
            $pravilaKoriscenja = "pravila nisu prihvacena";
        }
    }
    ?>

    <form action="rukovanjeFormama.php" method="post">
        <label for="">Ime: </label><br><br>
        <input type="text" name="ime">
        <span class="error"><?php echo $imeO; ?></span><br>
        <label for="">Prezime: </label><br><br>
        <input type="text" name="prezime">
        <span class="error"><?php echo $prezimeO; ?></span><br><br>
        <label for="">E-mail: </label><br><br>
        <input type="email" name="email">
        <span class="error"><?php echo $emailO; ?></span><br><br>
        <label for="">Sajt: </label><br><br>
        <input type="text" name="sajt">
        <span class="error"><?php echo $websiteO; ?></span><br><br>
        <label for="">Komentar: </label><br><br>
        <textarea name="komentar" id="" cols="30" rows="10"></textarea>
        <span class="error"><?php echo $komentarO; ?></span><br><br>
        <label for="">Pol:</label>
        <input type="radio" name="pol" value="zenski">Zenski
        <input type="radio" name="pol" value="muski" checked>Muski
        <input type="radio" name="pol" value="ostalo">Ostalo<br><br>
        <label for="">Prihvatite pravila koriscenja</label>
        <input type="checkbox" name="pravila" value="Da"><br><br>
        <input type="submit" name="submit" value="Potvrdi">

    </form>




    <?php

    // $broj1 = $_POST["number1"];
    // $broj2 = $_POST["number2"];
    // $OP = $_POST["operator"];

    // if($OP == "+" ) {
    //     echo $broj1 + $broj2;
    // }
    // else if ($OP == "-" ) {
    //     echo $broj1 - $broj2;
    // }
    // else if ($OP == "*" ) {
    //     echo $broj1 * $broj2;
    // }
    // else if ($OP == "/" ) {
    //     echo $broj1 / $broj2;
    // }
    // else {
    //     echo "Invalid operator";
    // }

    // echo "<br>";
    // echo "<h2>Vasi podaci:  </h2>";
    // echo "Vase ime je: " . $_POST["ime"] . "<br>";
    // echo "Vase prezime je: " . $_POST["prezime"] . "<br>";
    // echo "Vas email je : " . $_POST["email"] . "<br>";
    // echo "Vas sajt je : " . $_POST["sajt"] . "<br>";
    // echo "Vas komentar je : " . $_POST["tekstarea"] . "<br>";
    // echo "Vas pol je : " . $_POST["pol"] . "<br>";
    

    echo "<br>";
    echo "<h2>Vasi podaci:  </h2>";
    echo "Vase ime je: " . $ime . " " . $prezime . "<br>";
    echo "Vas email je : " . $email . "<br>";
    echo "Vas sajt je : " . $website . "<br>";
    echo "Vas komentar je : " . $komentar . "<br>";
    echo "Vas pol je : " . $pol . "<br>";
    echo "Pravila koriscenja : " . $pravilaKoriscenja . "<br>";

    ?>
</body>

</html>