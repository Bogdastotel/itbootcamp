
<?php

$servername = "localhost";
$username = "admin";
$password = "admin123";
$database = "mreza1";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error) {
    die("neuspela konekcija: Razlog- " . $conn->connect_error);
}

echo "uspesno povezivanje" . "<br>";

$sql = "CREATE TABLE IF NOT EXISTS korisnici (
        id INT UNSIGNED AUTO_INCREMENT,
        username VARCHAR(60) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        PRIMARY KEY(id)
    ) ENGINE = InnoDB;

    CREATE TABLE IF NOT EXISTS profili (
        id INT UNSIGNED AUTO_INCREMENT,
        korisnik_id INT UNSIGNED UNIQUE,
        ime VARCHAR(150) NOT NULL,
        prezime VARCHAR(200),
        pol CHAR(1),
        PRIMARY KEY(id),
        FOREIGN KEY (korisnik_id) 
        REFERENCES korisnici(id)

    ) ENGINE = InnoDB;

    CREATE TABLE IF NOT EXISTS prijatelji (
        id INT UNSIGNED AUTO_INCREMENT,
        korisnik_id INT UNSIGNED NOT NULL,
        prijatelj_id INT UNSIGNED NOT NULL,
        PRIMARY KEY(id),
        FOREIGN KEY(korisnik_id) 
        REFERENCES korisnici(id),
        FOREIGN KEY(prijatelj_id)
        REFERENCES korisnici(id)
    ) ENGINE = InnoDB;

    
";
if($conn->multi_query($sql)) {
    echo "Uspesno izvrseni upiti";
}
else {
    echo "Greska u upitima: razlog- "; 
    echo $conn->error;
}




?>