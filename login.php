<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: url('https://source.unsplash.com/1600x900/?nature,city,travel') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .login-container {
            background: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center;
        }

        .login-container h2 {
            color: #fff;
            margin-bottom: 20px;
            font-size: 2em;
        }

        .login-container input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            background: #fff;
            border: none;
            border-radius: 5px;
            color: #333;
            font-size: 1.2em;
            outline: none;
            transition: 0.3s ease;
        }

        .login-container input:focus {
            border: 2px solid #4CAF50;
            box-shadow: 0 0 10px rgba(0, 128, 0, 0.5);
        }

        .login-container button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2em;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #45a049;
        }

        .login-container .error {
            color: #ff0000;
            margin-top: 10px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .login-container {
                width: 80%;
            }

            .login-container h2 {
                font-size: 1.5em;
            }

            .login-container input {
                font-size: 1em;
            }

            .login-container button {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

<?php
session_start();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // For simplicity, hardcode the valid credentials here
    $valid_username = 'user123';
    $valid_password = 'password123';

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if credentials are correct
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: home.php"); // Redirect to home page after successful login
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

