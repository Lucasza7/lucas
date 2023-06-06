<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "Winkel";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$conn = null;

//select alle data
$stmt = $pdo->query("SELECT * FROM producte"); 
$resultaat1 = $stmt->fetchAll(); 

foreach ($resultaat as $row) {
    echo $row['product_code'] . "br/>";
    echo $row['product_naam'] . "br/>";
    echo $row['prijs_per_stuk'] . "br/>";
    echo $row['omschrijving'] . "br/>";
 }
 

 //deel2
 //hoe je een single row selecteert met placeholder
 $zoek_product_code = 1;
 $stmt = $pdo->prepare("SELECTFROM producte WHERE product_code = ?");
 $stmt->exute([$zoek_product_code]);
$resultaat2 = $stmt->fetch(); 

foreach ($resultaat2 as $row) {
    echo $row['product_code'] . "br/>";
    echo $row['product_naam'] . "br/>";
    echo $row['prijs_per_stuk'] . "br/>";
    echo $row['omschrijving'] . "br/>";
 }

 $zoek_product_code = 2;
 $stmt = $pdo->prepare("SELECTFROM producte WHERE product_code = :product_code");
 $stmt->exute([$zoek_product_code]); 
$resultaat3 = $stmt->fetch();

foreach ($resultaat3 as $row) {
    echo $row['product_code'] . "br/>";
    echo $row['product_naam'] . "br/>";
    echo $row['prijs_per_stuk'] . "br/>";
    echo $row['omschrijving'] . "br/>";
 }

 exit;