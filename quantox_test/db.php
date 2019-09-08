
<?php 

$db_server = "localhost";
$db_user = "admin";
$db_password = "admin123";
$db_name = "quantox";  

// Connection to database
$conn = new mysqli($db_server, $db_user, $db_password, $db_name);
if ($conn->connect_errno)
{
    exit("Database connection failed: " . $conn->connect_errno);
}


$conn->set_charset('utf8');




