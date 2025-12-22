<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= baseUrl() ?>/public/assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Navigation  */

        header {
            z-index: 1000;
            border-radius: 10px;

            position: sticky;

        }

        .navbar {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 1rem 2rem;
            gap: 2rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: green;
            margin: .2rem;
            text-decoration: none;
            background-color: white;
        }

        .logo:hover {
            color: #ffd700;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            gap: 2rem;
            flex: 1;
            margin: 0;
            align-items: center;
        }

        .navbar ul li a {
            color: green;
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 0;
            transition: all 0.3s ease;
            display: block;
        }

        .navbar ul li a:hover {
            color: #ffd700;
            border-bottom: 2px solid #ffd700;
        }



        /* Menu styling */
        .burger-menu {
            display: none;

        }

        .links ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: none;

        }

        .btn {
            background: linear-gradient(135deg, #ffd700 0%, #1f2c79ff 100%);
            color: #333;
            border: none;
            padding: 0.8rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
            white-space: nowrap;
        }

        .btn:hover {
            opacity: 0.5;
        }

        .title {
            display: flex;
            color: #333;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            float: right;
        }

        .mobile {
            display: grid;
            width: 100%;
            grid-template-columns: auto;
        }



        @media (max-width: 768px) {
            .navbar {
                display: none;
            }

            .burger-menu {
                display: flex;
                align-items: center;
                gap: 9rem;
                padding: 1rem 2rem;
                /* background-color: #ffd700; */
                flex-direction: row;
            }

            .menu {
                color: #3a3208ff;
            }

            .link ul {
                display: none;
                flex-direction: column;
            }

            .navbar ul {
                flex-direction: column;
                width: 100%;
            }

            .navbar ul li {
                width: 100%;
            }

            .navbar ul li a {
                width: 100%;
                padding: 0.5rem 1rem;
            }

            .container {
                max-width: 50%;
            }
        }

        .container {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            justify-content: center;
            align-items: center;
            height: 500px;
            background: white;
            padding: 40px;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            margin: auto;
        }

        .container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .form-group input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 5px rgba(102, 126, 234, 0.3);
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            background-color: #667eea;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn-primary:hover {
            background-color: #764ba2;
        }

        .container p {
            text-align: center;
            margin-top: 20px;
            font-size: 20px;
        }

        .container a {
            color: #667eea;
            text-decoration: none;
            font-size: 20px;
        }

        .container a:hover {
            text-decoration: underline;
        }

        .fa-google {
            font-size: 24px;
            color: #db4437;
            cursor: pointer;
            margin-top: 10px;
        }

        /* Footer */
        .footer {
            background-color: #222;
            color: #eee;
            padding: 2rem 1rem;
            text-align: center;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-bottom: 1rem;
        }

        .footer-section {
            flex: 1 1 200px;
            margin: 1rem;
        }

        .footer-section h4 {
            margin-bottom: 0.5rem;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin: 0.5rem 0;
        }

        .footer-section ul li a {
            color: #eee;
            text-decoration: none;
        }

        .footer-section ul li a:hover {
            text-decoration: underline;
        }

        .footer-bottom {
            border-top: 1px solid #444;
            padding-top: 1rem;
            font-size: 0.9rem;
        }

        .footer-bottom a {
            color: #eee;
            text-decoration: none;
        }

        .footer-bottom a:hover {
            text-decoration: underline;
        }
    </style>
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
                <label for="name">Username:</label>
                <input type="text" id="email" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" placeholder="Password" required>
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
                    <li><a href="/">Home</a></li>
                    <li><a href="/about.php">About</a></li>
                    <li><a href="/Programs.php">Programs</a></li>
                    <li><a href="/services.php">Services</a></li>
                    <li><a href="/donate.php">Donate</a></li>


                    <li><a href="/enquiry.php">Contact</a></li>
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

</body>

</html>