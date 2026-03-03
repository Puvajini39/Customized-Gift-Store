

<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gift_store";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect and sanitize form data
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $raw_password = $_POST['password'];
    
    // Hash the password
    $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);
    
    // Prepare SQL query
    $query = "INSERT INTO users (full_name, email, password) 
              VALUES ('$full_name', '$email', '$hashed_password')";
    
    // Execute query
    if (mysqli_query($conn, $query)) {
        echo "Registration successful!";
        // You might want to redirect to login page here
        // header('Location: login.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);
?>