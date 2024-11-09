<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Dashboard</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f7f9fc;
        }

        /* Header */
        header {
            background-color: #4CAF50;
            padding: 15px 20px;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 24px;
        }

        header nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        header nav a:hover {
            text-decoration: underline;
        }

        /* Hero Section */
        .hero {
            background-color: #4CAF50;
            color: #fff;
            padding: 80px 20px;
            text-align: center;
        }

        .hero h2 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .hero button {
            background-color: #fff;
            color: #4CAF50;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
        }

        .hero button:hover {
            background-color: #e8f5e9;
        }

        /* Features Section */
        .features {
            display: flex;
            justify-content: space-around;
            padding: 40px 20px;
            margin: 20px 0;
        }

        .feature {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 30%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .feature img {
            width: 100px;
            margin-bottom: 15px;
        }

        .feature h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }

        .feature p {
            color: #555;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 15px 20px;
            margin-top: 30px;
        }

        footer p {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Dashboard</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">Profile</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h2>Welcome, <?php echo $username; ?>!</h2>
        <p>Your personalized dashboard is here. Explore and make the most of your account.</p>
        <button>Get Started</button>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="feature">
            <img src="https://via.placeholder.com/100" alt="Feature 1 Icon">
            <h3>Personalized Insights</h3>
            <p>Get insights tailored to your interests and activity.</p>
        </div>
        <div class="feature">
            <img src="https://via.placeholder.com/100" alt="Feature 2

<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

// Retrieve the user's name for the welcome message
$username = htmlspecialchars($_SESSION['username']);
?>

