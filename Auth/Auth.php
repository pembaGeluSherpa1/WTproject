<?php
// '$' sign is used to declare the variable and $_POST["userName"] post is the method that
// is declared in a form method = "post"  which fetch the data from the 'form' whose name 
// is userName

    $userName = $_POST["userName"];
    $password = $_POST["password"];

    if($userName ==="admin@gmail.com" && $password === "admin"){
    header("Location: ../HeroPage/Hero.php");
    exit;
    } else {
    echo "Wrong Authorization"; 
    }
?>