<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - JJ Tech Solutions</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/about.css">
</head>
<body>
    <!-- Custom Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top shadow bg-white">
        <div class="container">
            <a class="navbar-brand fw-bold" href="../index.php">JJ TECH SOLUTIONS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                    <li class="nav-item dropdown custom-dropdown">
                        <a class="nav-link" href="products.html">Products</a>
                        <div class="dropdown-menu shadow-lg p-4">
                            <a class="dropdown-item" href="accounts.html">Accounts</a>
                            <a class="dropdown-item" href="#">Integration</a>
                            <a class="dropdown-item" href="../products/breeder.php">Breeder</a>
                            <a class="dropdown-item" href="../products/hatchery.php">Hatchery</a>
                            <a class="dropdown-item" href="#">Feed Mill</a>
                            <a class="dropdown-item" href="#">Processing Unit</a>
                            <a class="dropdown-item" href="#">Retail Outlet</a>
                            <a class="dropdown-item" href="#">Trading</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="client.html">Client</a></li>
                    <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="../contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Parallax -->
    <section class="parallax-hero" id="home">
        <div class="parallax-bg"></div>
        <div class="parallax-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title">We Are JJ Tech Solutions</h1>
            <p class="hero-subtitle">Revolutionizing poultry management with cutting-edge software solutions</p>
            <a href="#about" class="cta-button">Discover Our Story</a>
        </div>
    </section>

    <!-- Story Section -->
    <section class="content-section story-section" id="about">
        <div class="container-custom">
            <h2 class="section-title fade-in">Our Story</h2>
            <div class="story-grid">
                <div class="story-text fade-in">
                    <p>Founded in 2018, <span class="highlight">JJ Tech Solutions</span> emerged from a vision to transform the poultry industry through innovative software solutions. What started as a specialized team of agricultural technologists has grown into a leading provider of comprehensive poultry management systems.</p>
                    <p>We specialize in developing <span class="highlight">intelligent farm management software</span> that streamlines operations, improves efficiency, and maximizes profitability for poultry farmers worldwide.</p>
                    <p>Our journey has been marked by continuous innovation, deep industry expertise, and an unwavering commitment to helping poultry businesses thrive in the digital age.</p>
                </div>
                <div class="story-stats fade-in">
                    <div class="stat-item">
                        <div class="stat-number">150+</div>
                        <div class="stat-label">Farms Managed</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">2M+</div>
                        <div class="stat-label">Birds Tracked</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Efficiency Increase</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Second Parallax Section -->
    <section class="parallax-section">
        <div class="parallax-bg-2"></div>
        <div class="parallax-overlay"></div>
        <div class="parallax-quote">
            <p class="quote-text">"Technology is best when it brings people together and solves real problems."</p>
            <p class="quote-author">— Matt Mullenweg</p>
        </div>
    </section>



    <!-- Values Section -->
    <section class="content-section values-section">
        <div class="container-custom">
            <h2 class="section-title fade-in">Our Values</h2>
            <div class="values-grid">
                <div class="value-card fade-in">
                    <div class="value-icon">🚀</div>
                    <h3 class="value-title">Innovation</h3>
                    <p class="value-description">We leverage cutting-edge technology to solve complex challenges in modern poultry farming operations.</p>
                </div>
                <div class="value-card fade-in">
                    <div class="value-icon">🤝</div>
                    <h3 class="value-title">Partnership</h3>
                    <p class="value-description">We work hand-in-hand with farmers, understanding their unique needs to deliver tailored solutions.</p>
                </div>
                <div class="value-card fade-in">
                    <div class="value-icon">📊</div>
                    <h3 class="value-title">Data-Driven</h3>
                    <p class="value-description">Our solutions provide actionable insights through advanced analytics and real-time monitoring systems.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Custom dropdown hover functionality
        document.addEventListener("DOMContentLoaded", function () {
            const dropdown = document.querySelector(".custom-dropdown");
            if (dropdown) {
                dropdown.addEventListener("mouseenter", function () {
                    this.classList.add("show");
                    const menu = this.querySelector(".dropdown-menu");
                    if (menu) {
                        menu.classList.add("show");
                        menu.style.marginTop = "10px";
                        menu.style.borderTop = "4px solid #ff6b6b";
                    }
                });
                dropdown.addEventListener("mouseleave", function () {
                    this.classList.remove("show");
                    const menu = this.querySelector(".dropdown-menu");
                    if (menu) {
                        menu.classList.remove("show");
                    }
                });
            }
        });

        // Parallax effect
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxBg = document.querySelector('.parallax-bg');
            const parallaxBg2 = document.querySelector('.parallax-bg-2');
            
            if (parallaxBg) {
                parallaxBg.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
            
            if (parallaxBg2) {
                const section2Offset = document.querySelector('.parallax-section').offsetTop;
                if (scrolled > section2Offset - window.innerHeight) {
                    parallaxBg2.style.transform = `translateY(${(scrolled - section2Offset) * 0.5}px)`;
                }
            }
        });

        // Fade in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar-custom');
            if (window.scrollY > 100) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const navbarHeight = document.querySelector('.navbar').offsetHeight;
                    const targetPosition = target.offsetTop - navbarHeight;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>