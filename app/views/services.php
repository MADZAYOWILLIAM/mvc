<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= baseUrl() ?>/public/assests/css/bootstrap.css">
    <link rel="stylesheet" href="<?= baseUrl() ?>/public/assests/css/services.css">
    <link rel="stylesheet" href="<?= baseUrl() ?>/public/assests/css/footer.css">
    <link rel="stylesheet" href="<?= baseUrl() ?>/public/assests/css/header.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            <button class="btn">Contact Us</button>
        </nav>
        <div class="mobile-menu-overlay">

            <div class="mobile" role="dialog" aria-modal="true">
                <div class="burger-menu">
                    <div class="menu">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>
                    <div class="title">
                        <a href="home.php" style="text-decoration:none;">
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

    <section class="hero">
        <div class="hero-bg"></div>
        <img class="hero-image" src="<?= baseUrl() ?>/public/assets/hero_Service.png" alt="Professional service team">

        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>

        <div class="hero-content">
            <h1>Excellence in Every Service</h1>
            <p>Empoweredge Club delivers premium services designed to exceed expectations. From event planning to industrial cleaning, we ensure complete customer satisfaction.</p>
            <button class="hero-btn" id="openDialogBtn">
                Request A Service <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </section>

    <!-- Modal -->
    <div id="modalOverlay" class="overlay">
        <div class="modal">
            <div class="modal-header">
                <h3>Service Request Form</h3>
                <button class="close-modal" id="closeModalBtn">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <form id="serviceForm">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" class="form-input" placeholder="Enter your full name" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" class="form-input" placeholder="Enter your phone number" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" class="form-input" placeholder="Enter your email address" required>
                </div>

                <div class="form-group">
                    <label for="service">Choose a Service</label>
                    <select id="service" class="form-select" required>
                        <option value="" disabled selected>Select a service</option>
                        <option value="event_planning">Event Planning</option>
                        <option value="residential_cleaning">Residential Cleaning</option>
                        <option value="industrial_cleaning">Industrial Cleaning</option>

                    </select>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="newsletter">
                    <label for="newsletter">Subscribe to our newsletter for updates and promotions</label>
                </div>

                <div class="modal-actions">
                    <button type="submit" class="btn btn-primary">Submit Request</button>
                    <button type="button" class="btn btn-secondary" id="closeDialogBtn">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Services Section -->
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Our Services</span>
            <h2 class="section-title">Premium Solutions for Every Need</h2>
            <p class="section-subtitle">From meticulous event planning to comprehensive cleaning services, we deliver excellence with every project.</p>
        </div>

        <div class="services-grid">
            <a href="#" class="service-card">
                <div class="card-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <h3 class="card-title">Event Planning</h3>
                <p class="card-description">Professional planning and execution of events, from corporate conferences to private celebrations. We handle every detail so you can focus on what matters.</p>
                <span class="card-link">Learn more <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="#" class="service-card">
                <div class="card-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3 class="card-title">Residential Cleaning</h3>
                <p class="card-description">Premium cleaning services delivered right to your doorstep. We use eco-friendly products and professional equipment for a spotless home.</p>
                <span class="card-link">Learn more <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="#" class="service-card">
                <div class="card-icon">
                    <i class="fas fa-industry"></i>
                </div>
                <h3 class="card-title">Industrial Cleaning</h3>
                <p class="card-description">Comprehensive cleaning solutions for industrial facilities. We ensure safe, thorough cleaning that meets industry standards and regulations.</p>
                <span class="card-link">Learn more <i class="fas fa-arrow-right"></i></span>
            </a>
        </div>
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

    <script src="<?= baseUrl() ?>/public/assests/js/service.js"></script>
    <script src="<?php echo baseUrl() ?>/public/assests/js/mobile.js"></script>




</body>

</html>