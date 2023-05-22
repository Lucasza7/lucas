<?php
$servername = "host";
$username = "root";
$password = "Lucasza2009"; 
$dbname = "Winkel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

echo "Connected to database ($dbname).";

$conn->close();
?>
