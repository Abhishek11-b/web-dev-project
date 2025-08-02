<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hardcoded admin credentials for demonstration purposes
    $adminUsername = "admin";
    $adminPassword = "admin";

    // Get user input
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    // Check if entered credentials match the admin credentials
    if ($enteredUsername === $adminUsername && $enteredPassword === $adminPassword) {
        // Redirect to dashboard.php on successful login
        header("Location: home.php");
        exit();
    } else {
        // Display an error message if credentials are incorrect
        $errorMessage = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neural Network</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins';
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url("images/background.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .home-container {
            width: 1450px;
            height: 600px;
            background-color: rgba(0, 0, 0, 0.5);
            color: rgb(255, 255, 255);
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
            padding: 0 !important;
        }

        .title> h1 {
           font-size: 140px;
             text-shadow: 2px 2px rgb(150, 150, 150);
            color:rgba(53, 21, 234, 0.67); /* deep brown vintage */
            font-family: 'Playfair Display', serif;
        }

        .title>p {
             .vintage-text {
                font-size: 150px;
                text-shadow: 2px 2px rgb(150, 150, 150);
                color: rgb(242, 242, 247); /* soft vintage white */
                font-family: 'Georgia', 'Times New Roman', serif;
            }
        }

        .title {
            padding: 50px;
            
        }

        .login-register-container {
            display: flex;
            justify-content: center;   
            align-items: center; 
            height: 100%;
            background-color: rgba(243, 191, 132, 0.87);

        }

        .login {
            width: 500px;
            border-radius: 0 10px 10px 0;
        }
    </style>

</head>
<body>
    
<div class="main">

    <div class="home-container row">

        <div class="title-container col-7">
            <div class="title">
                <h1>NeuroLock</h1>
                <p font-size=15px>
                NeuroLock is an AI-powered wearable + app system that helps students and professionals improve their focus using real-time brainwave data and smart alerts. Designed to combat digital
                distractions, boost productivity, and build healthier habits..
            </p>
            </div>
        </div>

        <div class="login-register-container col-5">
        <!-- Login Area -->
        <div class="login" id="loginForm">
            <h1 class="text-center"><b>Welcome back!</b></h1>
            <p class="text-center mb-4">Login your account.</p>
            <!-- Di splay error message if login fails -->
            <?php if (isset($errorMessage)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $errorMessage; ?>
                </div>
            <?php endif; ?>
            <div class="login-form">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-light login-btn form-control">Login</button>
                </form>
            </div>
        </div>
    </div>
<!-- Marquee Effect (using CSS for modern compatibility) -->
<head>
  <!-- Embed Cooper Black from CDN -->
  <link href="https://fonts.cdnfonts.com/css/cooper-black" rel="stylesheet"> <!-- Embed via CDNFonts.com :contentReference[oaicite:1]{index=1} -->
</head>
<body>
  <div class="marquee-container">
    <div class="marquee-content">
      © 2025 Abhishek B. All rights reserved. Welcome to My Project!
    </div>
    <div class="marquee-content" aria-hidden="true">
      © 2025 Abhishek B. All rights reserved. Welcome to My Project!
    </div>
  </div>

  <style>
    .marquee-container {
      display: flex;
      overflow: hidden;
      white-space: nowrap;
    }
    .marquee-content {
      display: inline-block;
      padding-right: 100%;
      animation: marqueeScroll 15s linear infinite;
      /* Font styling */
      font-family: 'Cooper Black', serif;
      font-size: 2rem;       /* adjust size as needed */
      font-weight: bold;
      color: white;
    }
    .marquee-content:hover {
      animation-play-state: paused;
    }
    @keyframes marqueeScroll {
      from { transform: translateX(0%); }
      to   { transform: translateX(-100%); }
    }
  </style>
</body>

</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    
    <!-- Script JS -->
    <script src="./assets/script.js"></script>
</body>
</html>