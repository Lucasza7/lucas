<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "winkel";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['product_code'])) {
        $productCode = $_GET['product_code'];

        $sql = "DELETE FROM producten WHERE product_code = :productCode";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':productCode', $productCode);
        $stmt->execute();

        echo "Het product met code $productCode is succesvol verwijderd.";
    } else {
        echo "Product code niet meegegeven in de URL.";
    }
} catch (PDOException $e) {
    echo "Fout bij het verbinden met de database: " . $e->getMessage();
}

$conn = null;
?>
