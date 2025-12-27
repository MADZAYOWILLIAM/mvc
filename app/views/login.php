<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= baseUrl() ?>/public/assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= baseUrl() ?>/public/assests/css/login.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="home.php" style="text-decoration:none;">
                <p class="logo">Empoweredge Club</p>
            </a>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="./services.php">Services</a></li>
                <li><a href="./about.php">About</a>
                </li>
                <li><a href="./programs.php">Programs</a></li>
                <li><a href="./login.php">Login</a></li>
            </ul>
            <a href="./donate.php"><button class="btn">Donate</button></a>
        </nav>
        <div class="mobile">
            <div class="burger-menu">
                <div class="menu">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <div class="title">
                    <a href="../home.php" style="text-decoration:none;">
                        <p>Empoweredge Club</p>
                    </a>
                </div>


            </div>
        </div>

        <div class="links">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About</a>
                </li>
                <li><a href="programs.php">Programs</a></li>
                <li><a href="./login.php">Login</a></li>
            </ul>
        </div>
    </header>

    <div class="container">
        <h2>Login In Account</h2>
        <form action="<?= baseUrl() ?>/login" method="POST">

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>

            <button class="btn-primary btn" type="submit">Log In</button>
        </form>
        <p>Don't have an account? <a href="./sign_up.php">Sign Up</a>.</p>
    </div>
    <footer class="footer">
        <?php
        $current_year = date('Y');
        $site_name = 'Empoweredge Club';
        ?>
        <div class="footer-content">
            <div class="footer-section">
                <h3><?php echo $site_name; ?></h3>
                <p>&copy; <?php echo $current_year; ?> All rights reserved.</p>
            </div>

            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="programs.php">Programs</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="donate.php">Donate</a></li>


                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Follow Us</h4>
                <ul>
                    <li><a href="#" target="_blank">Facebook</a></li>
                    <li><a href="#" target="_blank">Twitter</a></li>
                    <li><a href="#" target="_blank">LinkedIn</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Legal</h4>
                <ul>
                    <li><a href="/privacy">Privacy Policy</a></li>
                    <li><a href="/terms">Terms of Service</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>Designed with care | <a href="#">Back to Top</a></p>
        </div>
    </footer>
    <script src="<?php echo baseUrl() ?>/public/assests/js/mobile.js"></script>
    <script src="<?php echo baseUrl() ?>/public/assests/js/login.js"></script>

</body>

</html>