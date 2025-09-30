<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #eef2f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .signup-container {
            background-color: white;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #444;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            transition: border 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 14px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
        }
    </style>
    <script>
        function validateForm() {
            const password = document.getElementById("password").value;
            const errorDiv = document.getElementById("passwordError");

            // Regex for at least one uppercase letter and one number
            const regex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;

            if (!regex.test(password)) {
                errorDiv.innerText = "Password must be at least 8 characters long and contain at least one uppercase letter and one number.";
                return false;
            }

            errorDiv.innerText = ""; // Clear error if valid
            return true;
        }
    </script>
</head>
<body>

<div class="signup-container">
    <h2>Create an Account</h2>
    <form action="signup_handler.php" method="POST" onsubmit="return validateForm()">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">New Password:</label>
        <input type="password" id="password" name="password" required>
        <div id="passwordError" class="error"></div>

        <input type="submit" value="Sign Up">
    </form>
</div>

</body>
</html>