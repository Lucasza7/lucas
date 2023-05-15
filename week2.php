<?php
// Opdracht 1
$variabele1 = 10;
$variabele2 = 10;

if ($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
} else {
    echo "De twee waarden zijn ongelijk";
}

// Opdracht 2
$variabele1 = 10;
$variabele2 = 12;

if ($variabele1 != $variabele2) {
    echo "De twee waarden zijn ongelijk";
}

// Opdracht 3
$variabele1 = 10;
$variabele2 = 10;

if ($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
} else {
    echo "De twee waarden zijn ongelijk";
}

// Formulier met inputvelden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    echo "Username: $username<br>";
    echo "Password: $password<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulier</title>
</head>
<body>
    <h2>Formulier</h2>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Verzenden">
    </form>
</body>
</html>
