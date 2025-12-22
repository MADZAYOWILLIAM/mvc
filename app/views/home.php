<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= baseUrl() ?>/public/assests/css/home.css">
    <title>Home</title>
    <style>

    </style>
</head>

<body>


    <header>
        <nav class="navbar">
            <a href="home.php" style="text-decoration:none;">
                <p class="logo">Empoweredge Club</p>
            </a>
            <ul class="nav-links">
                <li><a href="home.php">Home</a></li>
                <li><a href="./services.php">Services</a></li>
                <li><a href="./about.php">About</a>
                </li>
                <li><a href="./programs.php">Programs</a></li>
                <li><a href="./login.php">Login</a></li>
            </ul>
            <a href="./contact.php"><button class="btn">Contact Us</button></a>
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

    <section class="hero">
        <img class="hero-image" src="<?= baseUrl() ?>/public/images/hero-community.jpg" alt="hero image">
        <div class="hero-text">
            <h1 style="color:white">Welcome to Empoweredge Club</h1>
            <p style="color: white;">Your gateway to excellence and innovation.</p>
            <button class="hero-btn">
                Donate
            </button>
            <button class="hero-btn">
                Volunteer
            </button>
        </div>

    </section>



    <section class="programs-layout">
        <div class="mission-card">
            <h2>Our Mission</h2>
            <p>To provide mentorship that enhances the social,economic adn leadership abilities among young youths.</p>
        </div>
        <div class="mission-card">
            <h2>Our Vision</h2>
            <p>To nurture confident,skilled and empowered youths who can actively participate in the community Development and drive positive change globally.</p>
        </div>
        <div class="mission-card">
            <h2>Promote Innovation</h2>
            <p>We encourage creativity and innovation by offering platforms for youths to explore new ideas, collaborate, and bring their visions to life.</p>
        </div>
        <div class="mission-card">
            <h2>Our Core Values</h2>
            <p> &#10003 Integrity</p>
            <p> &#10003 Teamwork</p>
            <p> &#10003 Innovation</p>
            <p> &#10003 Inclusivity</p>
            <p> &#10003 Community Service</p>

        </div>

    </section>

    <section class="scroll-section">
        <p class="title">Our Programs</p>

        <button class="scroll-btn left" onclick="scrollLeft()">&#10094;</button>

        <div class="cards-container" id="cardsContainer">

            <div class="card">
                <img src="<?= baseUrl() ?>/public/images/motivation.jpeg" alt="">
                <div class="card-info">
                    <h3>Youth Mentorship</h3>
                </div>
            </div>


            <div class="card">
                <img src="<?= baseUrl() ?>/public/images/download (1).jpeg" alt="">
                <div class="card-info">
                    <h3>Community Volunteering</h3>
                </div>
            </div>

            <div class="card">
                <img src="<?= baseUrl() ?>/public/images/download.jpeg" alt="">
                <div class="card-info">
                    <h3>Youth Training</h3>
                </div>
            </div>

            <div class="card">
                <img src="<?= baseUrl() ?>/public/images/motivation.jpeg" alt="">
                <div class="card-info">
                    <h3>Mental&Peer Support</h3>
                </div>
            </div>

            <div class="card">
                <img src="<?= baseUrl() ?>/public/images/download (1).jpeg" alt="">
                <div class="card-info">
                    <h3>Talent Development</h3>
                </div>
            </div>

            <div class="card">
                <img src="<?= baseUrl() ?>/public/images/download (1).jpeg" alt="">
                <div class="card-info">
                    <h3>Youth Training</h3>
                </div>
            </div>

        </div>

        <button class="scroll-btn right" onclick="scrollRight()">&#10095;</button>


    </section>
    <section class="solution-section">
        <div class="container">
            <div class="header">
                <div class="header-content">
                    <p>Our Services:</p>
                    <h2>Empoweredge Club Limited .</h2>
                </div>

                <a href="/services.php" class="cta-button" id="ctaButton">
                    PICK A SERVICE
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>

            <div class="solutions-grid">

                <a href="#" class="solution-card" id="bulkSmsCard">
                    <div class="card-header">
                        <div class="icon-wrapper">
                            <i class="fas fa-calendar-alt"></i>

                        </div>
                        <h3>Event Plannings</h3>
                    </div>
                    <div class="card-body">
                        <p>Planning,Executing Events</p>
                    </div>
                    <div class="card-footer">
                        <span class="arrow-link">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </div>
                </a>

                <a href="#" class="solution-card" id="techAcademyCard">
                    <div class="card-header">
                        <div class="icon-wrapper">
                            <i class="fas fa-broom nav-icon"></i>

                        </div>
                        <h3>Residential Cleaning</h3>
                    </div>
                    <div class="card-body">
                        <p>Provide Cleaning Service at your Door.</p>
                    </div>
                    <div class="card-footer">
                        <span class="arrow-link">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </div>
                </a>

                <a href="#" class="solution-card" id="webDevCard">
                    <div class="card-header">
                        <div class="icon-wrapper">
                            <i class="fas fa-industry"></i>

                        </div>
                        <h3>Indusrial Cleaning</h3>
                    </div>
                    <div class="card-body">
                        <p>Provide Cleaning Service to Industries.</p>
                    </div>
                    <div class="card-footer">
                        <span class="arrow-link">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <section class="metrics-section">
        <div class="metrics-container">
            <div class="metric-card">
                <div class="metric-header">Revenue</div>
                <div class="metric-value">$128,450</div>
                <div class="metric-sub">+12.4% this month</div>
            </div>
            <div class="metric-card">
                <div class="metric-header">Active Users</div>
                <div class="metric-value">3,842</div>
                <div class="metric-sub">+8.1% this week</div>
            </div>
            <div class="metric-card">
                <div class="metric-header">Programs Finished</div>
                <div class="metric-value">57</div>
                <div class="metric-sub">+5 completed this quarter</div>
            </div>
        </div>
    </section>


    <section class="testimonials-section">
        <div class="testimonials-header">
            <h2>What People Say</h2>
            <p>Real stories from our community and partners</p>
        </div>
        <div class="testimonials-container">
            <div class="testimonial-card">
                <p class="testimonial-quote">Empoweredge Club helped me gain confidence and practical skills. The programs are engaging and truly impactful.</p>
                <div class="testimonial-author">
                    <div class="avatar">AM</div>
                    <div class="author-info">
                        <span class="author-name">Aisha Musa</span>
                        <span class="author-role">Program Alumni</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-quote">Our collaboration drove measurable results for our community. The team's dedication is unmatched.</p>
                <div class="testimonial-author">
                    <div class="avatar">KO</div>
                    <div class="author-info">
                        <span class="author-name">Kofi Osei</span>
                        <span class="author-role">Community Partner</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-quote">As a volunteer, I felt supported and inspired. I highly recommend getting involved.</p>
                <div class="testimonial-author">
                    <div class="avatar">JN</div>
                    <div class="author-info">
                        <span class="author-name">Jane N.</span>
                        <span class="author-role">Volunteer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <h3>Get In touch</h3>
        <div class="layout">
            <img src="<?= baseUrl() ?>/public/images/download (1).jpeg" alt="">
            <form action="send-message.php" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" id="">
                <label for="textarea">Input Your Message</label>
                <textarea name="textarea" id=""></textarea>
                <input type="submit" value="Send Message">
            </form>
        </div>
    </section>
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

    <script>
        // Example JavaScript to enhance interactivity (if needed)
        document.querySelectorAll('.hero-btn').forEach(button => {
            button.addEventListener('click', () => {
                window.location.href = './donate.php';
            });
        });

        document.querySelectorAll('.program-card').forEach(card => {
            card.addEventListener('click', () => {
                // Adding the scrolling logic from left to right and vice verse

            });
        });


        document.addEventListener('DOMContentLoaded', () => {
            const ctaButton = document.getElementById('ctaButton');
            const bulkSmsCard = document.getElementById('bulkSmsCard');
            const techAcademyCard = document.getElementById('techAcademyCard');
            const webDevCard = document.getElementById('webDevCard');

            // Define the actual URLs (Replace '#' with your real page links)
            const links = {
                ctaButton: 'services.php',
                bulkSmsCard: 'services.php',
                techAcademyCard: 'services.php',
                webDevCard: 'services.php'
            };

            // Set the actual links on load
            ctaButton.href = links.ctaButton;
            bulkSmsCard.href = links.bulkSmsCard;
            techAcademyCard.href = links.techAcademyCard;
            webDevCard.href = links.webDevCard;

            // Optional: Log clicks for demonstration (Remove in production)
            function handleLinkClick(event) {
                // event.preventDefault(); // Uncomment this to stop actual navigation
                console.log(`Navigating to: ${event.currentTarget.href}`);
                // In a Single Page Application (SPA) you might use: 
                // router.navigate(event.currentTarget.getAttribute('href'));
            }

            ctaButton.addEventListener('click', handleLinkClick);
            bulkSmsCard.addEventListener('click', handleLinkClick);
            techAcademyCard.addEventListener('click', handleLinkClick);
            webDevCard.addEventListener('click', handleLinkClick);
        });
    </script>
</body>

</html>