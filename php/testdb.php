<?php
// Připojení k databázi
$servername = "127.0.0.1";
$username = "databaze";
$password = getenv('DB_PASSWORD');
$dbname = "lecturerdb";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    echo "Connected successfully!";
    $conn->close();
} catch(mysqli_sql_exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
