<?php
// Start the session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: showp.php"); // Redirect to the main page if logged in
    exit;
}

// Hardcoded credentials (for demonstration purposes only)
$validUsername = "admin";
$validPassword = "password123";

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate credentials
    if ($username === $validUsername && $password === $validPassword) {
        // Set session variable
        $_SESSION["loggedin"] = true;

        // Redirect to the main page
        header("Location: showp.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            background: url('./oikko cc bg (1).jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-box {
            display: flex;
            flex-direction: row;
            width: 80%;
            max-width: 900px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        .login-box .left {
            flex: 1;
            background: url('./oikko_cc.jpg') no-repeat center center;
            background-size: cover;
            border-radius: 10px 0 0 10px;
        }
        .login-box .right {
            flex: 1;
            background: rgba(255, 255, 255, 0.85);
            padding: 30px;
            border-radius: 0 10px 10px 0;
            text-align: center;
        }
        .login-box .right h1 {
            margin-bottom: 20px;
            font-size: 28px;
            color: #333;
        }
        .login-box .right input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .login-box .right button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        .login-box .right button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <!-- Left side with the background image -->
        <div class="left"></div>
        
        <!-- Right side with the login form -->
        <div class="right">
            <h1>Login</h1>
            <form method="POST" action="">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
            <?php if (isset($error)): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
