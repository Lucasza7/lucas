<?php
session_start();

// Variabelen ophalen uit de sessie
$naam = $_SESSION['naam'];
$email = $_SESSION['email'];

// Variabelen weergeven
echo "Naam: " . $naam . "<br>";
echo "Email: " . $email . "<br>";
?>



<?php
// Databaseverbinding maken met PDO
$host = 'localhost:3307'; // Verander naar de juiste hostnaam
$dbname = 'winkel'; // Verander naar de juiste databasenaam
$username = 'root'; // Verander naar de juiste gebruikersnaam
$password = ''; // Verander naar het juiste wachtwoord

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Fout bij de databaseverbinding: " . $e->getMessage());
}

// Gegevens uit de tabel ophalen
$stmt = $pdo->query("SELECT * FROM tabelnaam"); // Verander 'tabelnaam' naar de juiste tabelnaam
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// ID's opslaan in de sessie
$ids = array_column($result, 'id'); // Verander 'id' naar de juiste kolomnaam
$_SESSION['ids'] = $ids;
?>


<?php
session_start();

// ID's ophalen uit de sessie
$ids = $_SESSION['ids'];

// ID's weergeven
echo "Geselecteerde ID's:<br>";
foreach ($ids as $id) {
    echo $id . "<br>";
}
?>

