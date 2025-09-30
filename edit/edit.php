<?php
$conn = new mysqli("localhost", "root", "", "Rentli");
if ($conn->connect_error) die("Connection failed");

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM apartment WHERE id=$id");

if ($row = $result->fetch_assoc()) {
?>

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #eef2f3;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .edit-container {
        background-color: #ffffff;
        padding: 35px 45px;
        border-radius: 16px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
        width: 90%;
        max-width: 600px;
        margin: 20px;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 25px;
    }

    .edit-form label {
        display: block;
        font-weight: 600;
        color: #444;
        margin-top: 20px;
        margin-bottom: 6px;
    }

    .edit-form input[type="text"],
    .edit-form textarea {
        width: 100%;
        padding: 12px 14px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: #fefefe;
        font-size: 16px;
        transition: 0.3s ease-in-out;
    }

    .edit-form input[type="text"]:focus,
    .edit-form textarea:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.2);
    }

    .edit-form textarea {
        resize: vertical;
        min-height: 100px;
    }

    .edit-form img {
        margin-top: 10px;
        border-radius: 10px;
        max-width: 100%;
        height: auto;
        border: 1px solid #ccc;
    }

    .edit-form input[type="submit"] {
        margin-top: 25px;
        background-color: #007bff;
        color: white;
        border: none;
        padding: 14px;
        font-size: 17px;
        font-weight: bold;
        border-radius: 8px;
        cursor: pointer;
        width: 100%;
        transition: 0.3s ease-in-out;
    }

    .edit-form input[type="submit"]:hover {
        background-color: #0056b3;
    }

    @media (max-width: 600px) {
        .edit-container {
            padding: 25px;
        }
    }
</style>

<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit();
}
?>

<div class="edit-container">
    <h2>Edit Apartment Listing</h2>
    <form action="update.php" method="POST" class="edit-form">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="hidden" name="image" value="<?= $row['image'] ?>">

        <label>Title:</label>
        <input type="text" name="title" value="<?= $row['title'] ?>" required>

        <label>Address:</label>
        <input type="text" name="address" value="<?= $row['address'] ?>" required>

        <label>Pricing:</label>
        <input type="text" name="pricing" value="<?= $row['pricing'] ?>" required>

        <label>Description:</label>
        <textarea name="description" required><?= $row['discription'] ?></textarea>

        <label>Current Image:</label>
        <img src="<?= $row['image'] ?>" alt="Apartment Image">

        <input type="submit" value="Update Apartment">
    </form>
</div>

<?php
} else {
    echo "Apartment not found.";
}
$conn->close();
?>