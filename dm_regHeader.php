<?php
session_start();

require_once 'dm_konekcija.php';

// Podesavanje id logovanog korisnika 
if (!isset($_SESSION['id'])) {
    header('Location: dm_login.php');
}
$id = $_SESSION['id'];


?>

<html>

<head>
    <link rel="stylesheet" href="mrezaStyle.css">
    
</head>

<body>
    


</body>

</html>