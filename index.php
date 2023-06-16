<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "winkel";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM producten ORDER BY naam ASC";
    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
        echo "<table>";
        echo "<tr><th>Product Code</th><th>Naam</th><th>Beschrijving</th></tr>";
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["product_code"] . "</td>";
            echo "<td>" . $row["naam"] . "</td>";
            echo "<td>" . $row["beschrijving"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Geen producten gevonden.";
    }
} catch (PDOException $e) {
    echo "Fout bij het verbinden met de database: " . $e->getMessage();
}

$conn = null;
?>

<a href="delete.php?product_code=2">Verwijder product met code 2</a>
