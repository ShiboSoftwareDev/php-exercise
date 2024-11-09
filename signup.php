<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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

        .signup-container {
            background: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center;
        }

        .signup-container h2 {
            color: #fff;
            margin-bottom: 20px;
            font-size: 2em;
        }

        .signup-container input {
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

        .signup-container input:focus {
            border: 2px solid #4CAF50;
            box-shadow: 0 0 10px rgba(0, 128, 0, 0.5);
        }

        .signup-container button {
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

        .signup-container button:hover {
            background-color: #45a049;
        }

        .signup-container .error {
            color: #ff0000;
            margin-top: 10px;
        }

        .signup-container .success {
            color: #28a745;
            margin-top: 10px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .signup-container {
                width: 80%;
            }

            .signup-container h2 {
                font-size: 1.5em;
            }

            .signup-container input {
                font-size: 1em;
            }

            .signup-container button {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="number" name="mobile" placeholder="Mobile Number" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>

<?php
session_start();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // Basic validation
    if (empty($username) || empty($password) || empty($email) || empty($mobile)) {
        $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {
        $error = "Invalid mobile number. Please enter a 10-digit number.";
    } else {
        // Simulate user registration
        // (In a real scenario, store data in a database)
        // For now, we’ll assume the user is registered successfully
        $success = "Signup successful! You can now <a href='login.php'>login</a>.";
    }
}
?>

