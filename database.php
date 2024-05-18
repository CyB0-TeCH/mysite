PHP

<?php
include 'config.php'; 
// Include configuration file

// Establish database connection and define database functions...
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Database connection details (replace with your actual credentials)
$servername = "your_servername"; // e.g., "localhost"
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to get data from the database (example: getting all products)
function getProducts() {
    global $conn;
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // Do something with the product data ($row)
        }
    } else {
        echo "No products found.";
    }
}

// Function to insert data into the database (example: adding a new product)
function addProduct($name, $description, $price) {
    global $conn;
    $sql = "INSERT INTO products (name, description, price) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssd", $name, $description, $price);
    $stmt->execute();
}

// ... (Add more functions for updating, deleting, etc.)

?>
