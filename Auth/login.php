<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background-color: #fff;
      padding: 40px 30px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 12px 15px;
      margin: 10px 0 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
      transition: 0.3s ease;
    }

    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #007bff;
      box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.15);
      outline: none;
    }

    .login-btn {
      width: 100%;
      padding: 14px;
      background-color: #007bff;
      color: white;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .login-btn:hover {
      background-color: #0056b3;
    }

    .error {
      color: red;
      margin-bottom: 15px;
      text-align: center;
      font-weight: 600;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Login</h2>

<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: ../HeroPage/Hero.php");
    exit();
}
?>

    <form id="loginForm" method="post" action="login_handler.php" onsubmit="return validateForm()">
      <input type="email" placeholder="Email" name="email" id="email" required />
      <input type="password" placeholder="Password" name="password" id="password" required />
      <button type="submit" class="login-btn">Login</button>
    </form>
  </div>

  <script>
    function validateForm() {
      const email = document.getElementById('email').value.trim();
      const password = document.getElementById('password').value;

      if (!email) {
        alert('Email is required.');
        return false;
      }

      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(email)) {
        alert('Please enter a valid email address.');
        return false;
      }
      if (!password) {
        alert('Password is required.');
        return false;
      }
      return true;
    }
  </script>
</body>
</html>