<?php
// Include the Composer autoloader
require 'vendor/autoload.php';

// Load the environment variables from the .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Get the database credentials from .env
$host = getenv('DB_HOST');
$dbname = getenv('DB_NAME');
$user = getenv('DB_USER');
$password = getenv('DB_PASS');

// Try to establish the database connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable exception mode for errors
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
