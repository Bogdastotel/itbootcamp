<?php
require_once 'dm_header.php';


$imeProvera = "*";
$prezimeProvera = "*";

// session_start();
// require_once 'dm_konekcija.php';
// $servername = "localhost";
// $username = "admin";
// $password = "admin123";
// $database = "mreza";

// // objekat konekcije

// $conn = new mysqli($servername, $username, $password, $database);

// if ($conn->connect_error) {
//     die("Neuspela konekcija! Razlog: " . $conn->connect_error);
// }

// $conn->set_charset("utf8");

// ako postoji neko kao korisnik ali nije uredjeno ime prezime pol (nije sredjen profil)

$sql = "SELECT * FROM profili WHERE korisnik_id = $id";

$result = $conn->query($sql);

if($result->num_rows == 0) {
    $imeValue = "";
    $prezimeValue = "";
    $pol = "O";

}
else {
    $red = $result->fetch_assoc();
    $imeValue = $red['ime'];
    $prezimeValue = $red['prezime'];
    $pol = $red['pol'];
}


if (!empty($_POST)) {
    
    $ime = $conn->real_escape_string($_POST['ime']);
    $prezime = $conn->real_escape_string($_POST['prezime']);
    $pol = $conn->real_escape_string($_POST['pol']);
    if (empty($ime) && empty($prezime)) {
        $imeProvera = "Morate uneti ime";
        $prezimeProvera = "Morate uneti prezime";
    }else if (empty($ime)) {
        $imeProvera = "Morate uneti ime";
    }else if (empty($prezime)) {
        $prezimeProvera = "Morate uneti prezime";
    }
        
    
    else {
        if($result->num_rows == 0) {
        
                $sql = "INSERT INTO profili (korisnik_id, ime, prezime, pol)
                VALUES ($id, '$ime', '$prezime', '$pol' )";
       
           $conn->query($sql);
           header("Refresh: 0; formaZaEditovanjeProfila.php");
        }
        else {
            $sql = "UPDATE profili SET ime ='$ime', prezime = '$prezime', pol = '$pol'
            WHERE korisnik_id = $id;
            ";
            
        }
    }
    
    $conn->query($sql);
    // header("Refresh: 0; formaZaEditovanjeProfila.php");
    $imeValue = $ime;
    $prezimeValue  = $prezime;
    
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="formaEdit.css">
    <!-- <style>
    header h1 {
        color: wheat
    }
    a {
	color:darkmagenta;
	text-decoration: none;
}
    form {
        color: white;
    }
    .logo {
            margin-top: -80px;
            float: right;
            width: 300px;
            /* border: 1px solid black; */
            text-align: center;
            color: wheat;
        }
    
    </style> -->
</head>

<!-- <body> -->
<div class="logo">
        <h1>IT social network</h1>
        <img src="images/svetce.png" width="200" alt="">
        
        </div>
    <header>
        
            <h1>Forma za Editovanje profila<h1>
        
    </header>
    <!-- <header>
        <ul>
            <li class='navi'><a href="indexx.php" target="_blank">HOME</a></li>
            <li class='navi'><a href="vezbaUpitPrijateljiOOP.php" target="_blank">PRIJATELJI</a></li>
            <li class='navi'><a href="formaZaEditovanjeProfila.php" target="_blank">EDIT</a></li>
            <li class='navi'><a href="dm_logout.php" target="_blank">LOGOUT</a></li>

        </ul>
        <header>
            <hr> -->

            <form action="formaZaEditovanjeProfila.php" method="POST">
                Ime:
                <input type="text" name="ime" value="<?php echo $imeValue ?>">
                <span><?php echo $imeProvera ?></span>
                <br><br>
                Prezime:
                <input type="text" name="prezime" value="<?php echo $prezimeValue ?>">
                <span><?php echo $prezimeProvera ?></span>
                  <br>
                Pol:<br>
                 Zenski <input type='radio' name='pol' value='Z'
                  <?php 
                 if($pol == "Z") {
                     echo "checked";
                 }
                 
                 ?>>
                 <br>
                 Muski <input type='radio' name='pol' value='M'
                 <?php 
                 if($pol == "M") {
                     echo "checked";
                 }
                 
                 ?>
                 >
                 <br>
                 Ostalo <input type='radio' name='pol' value='O'
                 <?php 
                 if($pol == "O") {
                     echo "checked";
                 }
                 
                 ?>
                 >
                 <br>
                 <br>
                 <input type='submit' value='Potvrdi'>
                 <?php
                //     if($pol == "Z") {
                //        echo "Pol:<br>
                // Zenski <input type='radio' name='pol' value='Z' checked><br>
                // Muski <input type='radio' name='pol' value='M'><br>
                // Ostalo <input type='radio' name='pol' value='O'><br><br>
                // <input type='submit' value='Potvrdi'>";
                //     }
                //     elseif ($pol == "M") {
                //         echo "Pol:<br>
                //         Zenski <input type='radio' name='pol' value='Z'><br>
                //         Muski <input type='radio' name='pol' value='M' checked><br>
                //         Ostalo <input type='radio' name='pol' value='O'><br><br>
                //         <input type='submit' value='Potvrdi'>";
                //     }
                //     else {
                //         echo "Pol:<br>
                //         Zenski <input type='radio' name='pol' value='Z'><br>
                //         Muski <input type='radio' name='pol' value='M' ><br>
                //         Ostalo <input type='radio' name='pol' value='O' checked><br><br>
                //         <input type='submit' value='Potvrdi'>";
                //     }


                ?>

               
                
            </form>


</body>

</html>