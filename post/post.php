<!DOCTYPE html>
<html>
<head>
    <title>Add Apartment</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 40px;
            background-color: white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #444;
            font-weight: 600;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: 0.3s ease;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.2);
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 14px;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        #decleration {
            color: red;
            font-size: 14px;
            margin-left: 5px;
        }
    </style>
        <script>
        function validateForm() {
            const title = document.forms["apartmentForm"]["title"].value.trim();
            const address = document.forms["apartmentForm"]["address"].value.trim();
            const pricing = document.forms["apartmentForm"]["pricing"].value.trim();
            const description = document.forms["apartmentForm"]["description"].value.trim();
            const image = document.forms["apartmentForm"]["image"].value.trim();

            if (!title || !address || !pricing || !description || !image) {
                alert("All fields are required.");
                return false;
            }

            if (isNaN(pricing)) {
                alert("Pricing must be a number.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>

<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit();
}
?>

<div class="form-container">
    <h2>Add Apartment Rental</h2>
<form name="apartmentForm" action="insert_apartment.php" method="POST" onsubmit="return validateForm()">
        <label>Title:</label>
        <input type="text" name="title">

        <label>Address:</label>
        <input type="text" name="address">

        <label>Pricing (in Nrs):</label>
        <input type="text" name="pricing">

        <label>Description:</label>
        <textarea name="description" rows="5"></textarea>

        <label>Image (path or URL):</label>
        <input type="text" name="image">

        <input type="submit" value="Add Apartment">
    </form>
</div>

</body>
</html>