<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit();
}
?>

    <?php include '../Components/HeroNav.php' ?>
    <?php include '../Components/HomeCard.php' ?>
    <hr style="margin: 20px 0; border: 1px solid #eee;">
    <?php include '../Components/aptSearch.php' ?>
    <?php include '../Components/Footer.php' ?>
</body>
</html>