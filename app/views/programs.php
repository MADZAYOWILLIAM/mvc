<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= baseUrl() ?>/public/assests/css/program.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="#" style="text-decoration:none;">
                <p class="logo">Empoweredge Club</p>
            </a>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About</a>
                </li>
                <li><a href="programs.php">Programs</a></li>
                <li><a href="./login.php">Login</a></li>
            </ul>
            <button class="btn">Donate</button>
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
        <img class="hero-image" src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Community gathering">

        <div class="floating-element floating-1"></div>
        <div class="floating-element floating-2"></div>

        <div class="hero-content">
            <h1>Building Stronger Communities</h1>
            <p>Join our transformative programs designed to empower youth and develop thriving communities through structured initiatives and mentorship.</p>
            <button class="program-btn" id="openDialogBtn">
                Join A Program <i class="fas fa-user-plus"></i>
            </button>
        </div>
    </section>

    <!-- Modal -->
    <div id="modalOverlay" class="overlay">
        <div class="modal">
            <div class="modal-header">
                <h3>Program Registration</h3>
                <button class="close-modal" id="closeModalBtn">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <form id="programForm">
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
                    <label for="program">Select Program</label>
                    <select id="program" class="form-input" required>
                        <option value="" disabled selected>Choose a program</option>
                        <option value="youth_motivation">Youth Motivation</option>
                        <option value="community_development">Community Development</option>
                        <option value="youth_training">Youth Training</option>
                        <option value="youth_empowerment">Youth Empowerment</option>
                        <option value="youth_sponsorship">Youth Sponsorship</option>
                    </select>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="newsletter">
                    <label for="newsletter">I agree to receive updates about programs and events</label>
                </div>

                <div class="modal-actions">
                    <button type="submit" class="btn btn-primary">Register Now</button>
                    <button type="button" class="btn btn-secondary" id="closeDialogBtn">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Programs Section -->
    <div class="container">
        <div class="programs-section">
            <div class="section-header">
                <span class="section-tag">Our Initiatives</span>
                <h2 class="section-title">Transformative Community Programs</h2>
                <p class="section-subtitle">Each program is meticulously designed to address specific community needs while fostering personal growth and development.</p>
            </div>

            <div class="scroll-section">
                <button class="scroll-btn left" onclick="scrollLeft()">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <div class="cards-container" id="cardsContainer">
                    <!-- Youth Motivation Card -->
                    <div class="card" data-index="0">
                        <div class="card-badge">Motivation</div>
                        <img class="card-image" src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Youth Motivation">
                        <div class="card-info">
                            <h3>Youth Motivation</h3>
                            <p>Inspirational workshops and mentorship programs designed to help young people discover their potential and build confidence for future success.</p>
                            <a href="#" class="card-link">Learn more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Community Development Card -->
                    <div class="card" data-index="1">
                        <div class="card-badge">Development</div>
                        <img class="card-image" src="https://images.unsplash.com/photo-1593113630400-ea4288922497?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Community Development">
                        <div class="card-info">
                            <h3>Community Development</h3>
                            <p>Collaborative initiatives that bring together residents to improve local infrastructure, social services, and community well-being.</p>
                            <a href="#" class="card-link">Learn more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Youth Training Card -->
                    <div class="card" data-index="2">
                        <div class="card-badge">Training</div>
                        <img class="card-image" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" alt="Youth Training">
                        <div class="card-info">
                            <h3>Youth Training</h3>
                            <p>Practical skills development programs in technology, entrepreneurship, and leadership to prepare youth for the modern workforce.</p>
                            <a href="#" class="card-link">Learn more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Youth Empowerment Card -->
                    <div class="card" data-index="3">
                        <div class="card-badge">Empowerment</div>
                        <img class="card-image" src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Youth Empowerment">
                        <div class="card-info">
                            <h3>Youth Empowerment</h3>
                            <p>Programs that equip young people with the tools, resources, and networks needed to become change-makers in their communities.</p>
                            <a href="#" class="card-link">Learn more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Youth Sponsorship Card -->
                    <div class="card" data-index="4">
                        <div class="card-badge">Sponsorship</div>
                        <img class="card-image" src="https://images.unsplash.com/photo-1542744173-05336fcc7ad4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2068&q=80" alt="Youth Sponsorship">
                        <div class="card-info">
                            <h3>Youth Sponsorship</h3>
                            <p>Financial support and mentorship opportunities for talented youth to access education and career development programs.</p>
                            <a href="#" class="card-link">Learn more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <button class="scroll-btn right" onclick="scrollRight()">
                    <i class="fas fa-chevron-right"></i>
                </button>

                <!-- Program Indicators -->
                <div class="program-indicators" id="programIndicators">
                    <span class="indicator active" data-index="0"></span>
                    <span class="indicator" data-index="1"></span>
                    <span class="indicator" data-index="2"></span>
                    <span class="indicator" data-index="3"></span>
                    <span class="indicator" data-index="4"></span>
                </div>
            </div>
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
    <script src="<?= baseUrl() ?>/public/assests/js/program.js"></script>

</body>

</html>