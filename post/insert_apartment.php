<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'Rentli';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
$user_id = $_SESSION['user_id'] ?? 0; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $address = $_POST['address'];
    $pricing = $_POST['pricing'];
    $description = $_POST['description'];
    $imagePath = $_POST['image'];

$sql = "INSERT INTO apartment (title, address, pricing, image, discription, user_id)
        VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssissi", $title, $address, $pricing, $imagePath, $description, $user_id);

    if ($stmt->execute()) {
        header("Location: ../Searched/Search.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>