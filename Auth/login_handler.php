<?php
session_start();
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'Rentli';

    $conn = new mysqli($host, $user, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = trim($_POST['email']);
    $pass = $_POST['password'];

    if (empty($email) || empty($pass)) {
        $_SESSION['loginError'] = "Please fill in all fields.";
        header("Location: login.php");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['loginError'] = "Invalid email format.";
        header("Location: login.php");
        exit();
    } else {
        $stmt = $conn->prepare("SELECT id, fullname, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            if (password_verify($pass, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['fullname'] = $user['fullname'];
                header("Location: ../HeroPage/Hero.php");
                exit();
            } else {
                $_SESSION['loginError'] = "Incorrect password.";
                header("Location: login.php");
                exit();
            }
        } else {
            $_SESSION['loginError'] = "No account found with that email.";
            header("Location: login.php");
            exit();
        }

        $stmt->close();
    }

    $conn->close();
} else {
    header("Location: login.php");
    exit();
}