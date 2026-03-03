<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<?php
// Database connection configuration

$servername = "localhost"; // Database server (usually localhost)
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "gift_store"; // Your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Optionally, set the charset to ensure proper handling of characters
mysqli_set_charset($conn, 'utf8');

// For debugging purposes, you could print the successful connection
// echo "Connected successfully";
?>
