<?php
// Připojení k databázi
$servername = "localhost"; // nebo "127.0.0.1" v závislosti na umístění databáze
$username = "databaze"; // Uživatelské jméno pro přihlášení k databázi
$password = getenv('DB_PASSWORD'); // Načtení hesla z repozitářového tajemství v GitHubu
$dbname = "lecturerdb"; // Jméno databáze

// Vytvoření spojení
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrola spojení
if ($conn->connect_error) {
    die("Spojení se nezdařilo: " . $conn->connect_error);
}

// Dotaz pro vytvořenou tabulku
$sql = "SELECT * FROM lecturers";
$result = $conn->query($sql);

if ($result === false) {
    echo "Chyba při provádění dotazu: " . $conn->error;
} else {
    echo "Spojení k databázi bylo úspěšné! Tabulka 'lecturers' byla vytvořena.";
}

// Uzavření spojení
$conn->close();
?>
