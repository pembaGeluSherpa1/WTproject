<?php
$conn = new mysqli("localhost", "root", "", "Rentli");
if ($conn->connect_error) die("Connection failed");

$id = $_POST['id'];
$title = $_POST['title'];
$address = $_POST['address'];
$pricing = $_POST['pricing'];
$description = $_POST['description'];
$image = $_POST['image'];

$sql = "INSERT INTO apartment (title, address, pricing, image, discription, user_id)
        VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssissi", $title, $address, $pricing, $image, $description, $user_id);

if ($stmt->execute()) {
    echo "Apartment updated successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

header("Location: ../Searched/Search.php");
exit();
?>