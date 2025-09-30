<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php include '../Components/LandingNav.php' ?>

    <?php include '../Components/LandingCard.php' ?>

    <!-- ****** start renting ******-->
    <div class="start-container">
        <div class="start-subContainer">
            <p style="font-size: medium;"><span style="font-size: 40px;
            color: #007BFFFF;">Unlock Your Next Adventure</span><br><br>Discover endless possibilities and rent with ease. Your journey starts here!</p>
            <br><br>
            <a 
            href="../Auth/login.php"
            style="padding: 10px;
            font-size: medium;
            border-radius: 5px;
            border: none;
            background-color: #007BFFFF;
            color: white;
            ">Start Renting Now</a>
        </div>
    </div>
    <?php include '../Components/Footer.php' ?>
</body>

</html>