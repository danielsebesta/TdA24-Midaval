<?php
// Připojení k databázi
$servername = "localhost"; // nebo "127.0.0.1" v závislosti na umístění databáze
$username = "databaze"; // Uživatelské jméno pro přihlášení k databázi
$password = getenv('DB_PASSWORD'); // Načtení hesla z repozitářového tajemství v GitHubu
$dbname = "lecturerdb"; // Jméno databáze

/try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    echo "Connected successfully!";
    $conn->close();
} catch(mysqli_sql_exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
