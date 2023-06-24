<?php
session_start();

// Variabelen instellen
$naam = "Lucas Zegger";
$email = "Lucas@gmail.com";

// Variabelen opslaan in de sessie
$_SESSION['naam'] = $naam;
$_SESSION['email'] = $email;
?>
