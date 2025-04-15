<?php
$host = "localhost";       // Database host
$dbname = "agency";        // Your database name
$username = "root";        // Your MySQL username
$password = "";            // Your MySQL password (usually blank for local)

try {
    // Use the correct variable names here
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
