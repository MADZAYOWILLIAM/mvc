<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= baseUrl() ?>/public/assests/css/donate.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="home.php" style="text-decoration:none;">
                <p class="logo">Empoweredge Club</p>
            </a>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About</a>
                </li>
                <li><a href="programs.php">Programs</a></li>
                <li><a href="./login.php">Login</a></li>
            </ul>
            <button class="btn">Donate</button>
        </nav>
        <div class="mobile-menu-overlay">
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

        </div>

    </header>
    <section>
        <div class="header-content">
            <h1 class="page-title">Support Our Mission</h1>
            <p class="page-subtitle">
                Your generous contributions empower us to create lasting change in communities worldwide.
                Every donation, big or small, helps us continue our vital work.
            </p>
        </div>
    </section>

    <div class="container">
        <!-- Donation Options -->
        <section class="donation-options">
            <div class="option-card">
                <div class="card-icon sponsor-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h2 class="card-title">Become a Sponsor</h2>
                <p class="card-description">
                    Join our exclusive sponsor community and make a sustained impact. Sponsors receive regular updates,
                    recognition on our platforms, and invitations to special events. Your ongoing support fuels long-term projects.
                </p>
                <button class="action-btn sponsor-btn" id="sponsorBtn">
                    Sponsor Now <i class="fas fa-arrow-right"></i>
                </button>
            </div>

            <div class="option-card">
                <div class="card-icon donator-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h2 class="card-title">Become a Donator</h2>
                <p class="card-description">
                    Make a one-time contribution to support our current initiatives. Your donation will be directed
                    to where it's needed most, helping us respond quickly to emerging needs and opportunities.
                </p>
                <button class="action-btn donator-btn" id="donatorBtn">
                    Donate Now <i class="fas fa-gift"></i>
                </button>
            </div>
        </section>

        <!-- Donation Form -->
        <section class="donation-form-container">
            <div class="form-header">
                <h2 class="form-title">Make Your Contribution</h2>
                <p class="form-subtitle">Complete the form below to support our mission. All fields marked with <span class="required">*</span> are required.</p>
            </div>

            <form class="donation-form" id="donationForm">
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label" for="fullName">
                            Full Name <span class="required">*</span>
                        </label>
                        <input type="text" id="fullName" class="form-input" placeholder="Enter your full name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">
                            Email Address <span class="required">*</span>
                        </label>
                        <input type="email" id="email" class="form-input" placeholder="Enter your email address" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="phone">
                            Phone Number
                        </label>
                        <input type="tel" id="phone" class="form-input" placeholder="Enter your phone number">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="donationType">
                            Donation Type <span class="required">*</span>
                        </label>
                        <select id="donationType" class="form-select" required>
                            <option value="" disabled selected>Select donation type</option>
                            <option value="sponsor">Sponsor (Recurring)</option>
                            <option value="donator">Donator (One-time)</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label">
                            Amount <span class="required">*</span>
                        </label>


                        <div class="custom-amount">
                            <span class="currency">Ksh</span>
                            <input type="number" id="customAmount" class="form-input" placeholder="Custom amount" min="1" step="1">
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label" for="message">
                            Message (Optional)
                        </label>
                        <textarea id="message" class="form-textarea" placeholder="Add a personal message or specify how you'd like your donation to be used..."></textarea>
                    </div>
                </div>

                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i> Submit Donation
                </button>
            </form>

            <!-- Success Message (Initially Hidden) -->
            <div class="success-message" id="successMessage">
                <div class="success-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3 class="success-title">Thank You for Your Generosity!</h3>
                <p class="success-text" id="successText">
                    Your donation has been received successfully. You will receive a confirmation email shortly.
                    Your support makes a real difference in the lives of those we serve.
                </p>
            </div>
        </section>
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

    <script src="<?= baseUrl() ?>/public/assests/js/donate.js"></script>
    <script src="<?php echo baseUrl() ?>/public/assests/js/mobile.js"></script>

</body>

</html>