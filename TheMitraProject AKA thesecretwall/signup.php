<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign Up | the secret box</title>
    <meta name="theme-color" content="rgb(0,0,85)">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/img/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="assets/img/android-chrome-512x512.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Callout-Success.css">
    <link rel="stylesheet" href="assets/css/Bottom-Resonsive-Menu.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/gradient-navbar-1.css">
    <link rel="stylesheet" href="assets/css/gradient-navbar.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Novos-Imveis.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navbar---Apple-1.css">
    <link rel="stylesheet" href="assets/css/Navbar---Apple.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/PJansari-Accordion-3-Columns.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="font-family: Aladin, cursive;background-image: url(&quot;assets/img/pexels-hristo-fidanov-1252869.jpg&quot;);">
    <?php include_once("analyticstracking.php") ?>
    <div class="register-photo" style="background-color: rgba(255,255,255,0);">
        <div class="form-container">
            <form method="post" style="background-color: rgba(5,6,41,0.73);font-family: Bitter, serif;">
                <h2 class="text-center" style="color: rgb(227,230,232);"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username" style="background-color: rgba(247,249,252,0);"></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" style="background-color: rgba(247,249,252,0);"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="New Password" style="background-color: rgba(247,249,252,0);"></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Confirm Password" style="background-color: rgba(247,249,252,0);"></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" style="background-color: #ffffff;">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="reg_user" style="background-color: #031544;font-size: 16px;">Sign Up</button></div><a class="already" href="login.php" style="font-size: 18px;">You already have an account? Login here.</a></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Navbar---Apple.js"></script>
    <script src="assets/js/PJansari-Accordion-3-Columns.js"></script>
</body>

</html>