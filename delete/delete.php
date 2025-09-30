<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "Rentli");


if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $deleteQuery = "DELETE FROM apartment WHERE id = $id";
    $result = mysqli_query($conn, $deleteQuery);
    header("Location: ../Searched/search.php"); 
    exit;
}
?>