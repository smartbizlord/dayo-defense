<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/new.css">
    <title>ESGT University - Sign In</title>
</head>
<body>
    <!-- navigation section -->
    <nav>
        <div class="logo-wrapper">
            <a href="index.php" class="logo-link">
                <img class="logo-image" src="images/logo.WEBP" alt="logo">
                <span class="primary-green-text logo-text">ESGT</span>
            </a>
        </div>
        <ul class="links-wrapper">
            <li class="link-item"><a href="index.php">Home</a></li>
            <li class="link-item"><a href="about.php">About</a></li>
            <li class="link-item"><a href="team.php">Team</a></li>
            <li class="link-item"><a href="gallery.php">Gallery</a></li>
            <li class="link-item"><a href="contact.php">Contact Us</a></li>
        </ul>
        <div class="action-wrapper">
            <a href="login.php">
                <span>Sign In</span>
            </a>
            <a href="register.php">
                <span>Register now</span>
            </a>
        </div>
    </nav>
    <!-- hero section -->
    <!-- <div id="hero-section">
        <div class="welcome">Welcome to</div>
        <div class="school-name">ESGT</div>
        <div class="university-text">UNIVERSITY,</div>
        <div class="country-text">Benin</div>
        <div class="small-texts">
            <p>Ecole Superieure des Geston et technology</p>
            <p>our place, your future</p>
        </div>
        <div class="action-wrapper-inverse">
            <a href="login.php">
                <span>Sign In</span>
            </a>
        </div>
    </div> -->



    <!-- login section -->
    <section class="form-origin">
        <form action="./form_handlers/login_admin.includes.php" method="post" class="form-wrapper">
            <h2 class="form-heading">Sign In Form</h2>
            <div class="form-section">
                <div class="form-groups">
                    <div class="form-item">
                        <label for="">Username:</label>
                        <input type="text" name="username" required>
                    </div>
                    <div class="form-item">
                        <label for="">Password:</label>
                        <input type="password" name="password" required>
                    </div>
                </div>
                <div>
                    <button type="submit" class="register-submit">Sign In</button>
                </div>
            </div>
        </form>
    </section>





    <!-- about section -->
    <!-- services section -->
    <!-- research opportunities section -->
    <!-- meet the team section -->
    <!-- footer section -->
    <footer>
        &copy; esgt.com . All Rights Reserved Designed Olusegun Divine
    </footer>
</body>
</html>