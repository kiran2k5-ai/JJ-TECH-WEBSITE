<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Clients - Premium Solutions</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
            background: linear-gradient(135deg, #ffffff, #f5deb3, #2d5016);
            color: #2d5016;
            line-height: 1.6;
        }

        /* Header Section */
        .header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            border-bottom: 2px solid rgba(45, 80, 22, 0.2);
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.15);
            border-bottom-color: rgba(45, 80, 22, 0.3);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #2d5016;
            text-decoration: none;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from { text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1), 0 0 10px rgba(45, 80, 22, 0.3); }
            to { text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1), 0 0 20px rgba(45, 80, 22, 0.6); }
        } 

        /* Hero Section with Parallax */
        .hero {
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
        }

        .parallax-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 120%;
            height: 120%;
            background: linear-gradient(rgba(255, 255, 255, 0.3), rgba(245, 222, 179, 0.5), rgba(45, 80, 22, 0.7)),
                        url('https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80') center/cover;
            will-change: transform;
            animation: parallaxFloat 20s ease-in-out infinite;
        }

        @keyframes parallaxFloat {
            0%, 100% { transform: translateY(0px) scale(1); }
            50% { transform: translateY(-20px) scale(1.02); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 2rem;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #2d5016, #f5deb3, #ffffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: textShine 3s ease-in-out infinite;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        @keyframes textShine {
            0%, 100% { filter: brightness(1); }
            50% { filter: brightness(1.3); }
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            color: #2d5016;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.8);
            background: rgba(255, 255, 255, 0.8);
            padding: 1rem 2rem;
            border-radius: 10px;
            backdrop-filter: blur(5px);
        }

        /* Client Logos Section */
        .clients-section {
            padding: 100px 0;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.95), rgba(245, 222, 179, 0.8), rgba(45, 80, 22, 0.1));
            position: relative;
        }

        .clients-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1574273787616-c1e661b1f4f4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80') center/cover fixed;
            opacity: 0.1;
            z-index: -1;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 3rem;
            color: #2d5016;
            text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.8);
            animation: slideInFromTop 1s ease-out;
        }

        @keyframes slideInFromTop {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .logos-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            margin-bottom: 4rem;
        }

        .logo-card {
            background: rgba(255, 255, 255, 0.9);
            border: 2px solid rgba(45, 80, 22, 0.3);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .logo-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.8), rgba(245, 222, 179, 0.3), transparent);
            transform: rotate(-45deg);
            transition: all 0.6s ease;
            opacity: 0;
        
           
        }

        .logo-card:hover::before {
            animation: shimmer 1.5s ease-in-out;
            opacity: 1;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%) translateY(-100%) rotate(-45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(-45deg); }
        }

        .logo-card:hover {
            transform: translateY(-10px) scale(1.05);
            background: rgba(255, 255, 255, 0.95);
            border-color: rgba(45, 80, 22, 0.6);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15), 0 0 30px rgba(245, 222, 179, 0.4);
        }

        .client-logo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9), rgba(245, 222, 179, 0.6), rgba(45, 80, 22, 0.2));
            border: 3px solid rgba(45, 80, 22, 0.4);
            transition: all 0.4s ease;
            animation: rotate 10s linear infinite;
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .client-logo:hover {
            animation-duration: 2s;
            border-color: rgba(45, 80, 22, 0.8);
            box-shadow: 0 0 30px rgba(45, 80, 22, 0.4), 0 10px 25px rgba(0, 0, 0, 0.2);
            background: linear-gradient(135deg, rgba(255, 255, 255, 1), rgba(245, 222, 179, 0.8), rgba(45, 80, 22, 0.3));
        }

        .client-logo img {
            width: 80px;
            height: 80px;
            object-fit: contain;
            filter: brightness(1.2) contrast(1.1);
            transition: all 0.3s ease;
        }

        .client-logo:hover img {
            transform: scale(1.1);
            filter: brightness(1.4) contrast(1.2);
        }

        .client-name {
            font-size: 1.2rem;
            font-weight: 600;
            color: #2d5016;
            margin-bottom: 0.5rem;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.8);
        }

        .client-desc {
            font-size: 0.9rem;
            color: rgba(45, 80, 22, 0.8);
            line-height: 1.4;
        }

        /* Rotating Logo Carousel */
        .carousel-section {
            padding: 80px 0;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.95), rgba(245, 222, 179, 0.7), rgba(45, 80, 22, 0.3));
            position: relative;
            overflow: hidden;
        }

        .carousel-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2d5016;
            text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.8);
        }

        .carousel-track {
            display: flex;
            animation: scroll 30s linear infinite;
            width: calc(200px * 16);
        }

        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(calc(-200px * 8)); }
        }

        .carousel-item {
            flex: 0 0 200px;
            height: 150px;
            margin: 0 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            border: 2px solid rgba(45, 80, 22, 0.3);
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .carousel-item:hover {
            background: rgba(255, 255, 255, 1);
            transform: scale(1.1);
            border-color: rgba(45, 80, 22, 0.6);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .carousel-item img {
            max-width: 100px;
            max-height: 100px;
            object-fit: contain;
            filter: brightness(1.2);
            transition: all 0.3s ease;
        }

        .carousel-item:hover img {
            filter: brightness(1.4);
            transform: rotate(5deg);
        }

        /* Parallax Content Section */
        .parallax-content {
            height: 60vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
        }

        .parallax-bg-2 {
            position: absolute;
            top: 0;
            left: 0;
            width: 120%;
            height: 120%;
            background: linear-gradient(rgba(255, 255, 255, 0.2), rgba(245, 222, 179, 0.6), rgba(45, 80, 22, 0.8)),
                        url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80') center/cover fixed;
            will-change: transform;
        }

        .parallax-text {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 2rem;
        }

        .parallax-text h2 {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(45, 80, 22, 0.8);
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .parallax-text p {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.95);
            text-shadow: 1px 1px 2px rgba(45, 80, 22, 0.8);
            animation: fadeInUp 1s ease-out 0.3s both;
            background: rgba(255, 255, 255, 0.1);
            padding: 1rem 2rem;
            border-radius: 10px;
            backdrop-filter: blur(5px);
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #2d5016, #1a3009, #0d1f05);
            padding: 60px 0 30px;
            text-align: center;
            border-top: 3px solid rgba(245, 222, 179, 0.5);
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .footer h3 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .footer p {
            color: rgba(245, 222, 179, 0.9);
            margin-bottom: 2rem;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-links a {
            color: #ffffff;
            text-decoration: none;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            border: 1px solid rgba(245, 222, 179, 0.3);
        }

        .footer-links a:hover {
            background: rgba(245, 222, 179, 0.2);
            transform: translateY(-2px);
            border-color: rgba(245, 222, 179, 0.6);
        }

        .copyright {
            color: rgba(245, 222, 179, 0.7);
            font-size: 0.9rem;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(245, 222, 179, 0.3);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .hero p { font-size: 1.2rem; }
            .section-title { font-size: 2rem; }
            .logos-container { grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 2rem; }
            .client-logo { width: 100px; height: 100px; }
            .client-logo img { width: 60px; height: 60px; }
            .parallax-text h2 { font-size: 2rem; }
            .parallax-text p { font-size: 1.1rem; }
            .footer-links { flex-direction: column; align-items: center; }
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.3);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #2d5016, #f5deb3, #ffffff);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #ffffff, #f5deb3, #2d5016);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #228b22, #f5deb3);
        }
    </style>
</head>
<body>
<?php include 'php/header.php' ?>

    <section class="hero" id="home">
        <div class="parallax-bg"></div>
        <div class="hero-content">
            <h1>Our Premium Clients</h1>
            <p>Trusted by industry leaders worldwide for innovative solutions</p>
        </div>
    </section>

    <section class="clients-section" id="clients">
        <div class="container">
            <h2 class="section-title">Our Valued Partners</h2>
            <div class="logos-container">
                <div class="logo-card">
                    <div class="client-logo">
                        <img src="https://logo.clearbit.com/google.com" alt="Google">
                    </div>
                    <h3 class="client-name">Google</h3>
                    <p class="client-desc">Global technology leader in search and cloud services</p>
                </div>
                <div class="logo-card">
                    <div class="client-logo">
                        <img src="https://logo.clearbit.com/microsoft.com" alt="Microsoft">
                    </div>
                    <h3 class="client-name">Microsoft</h3>
                    <p class="client-desc">Leading software and cloud computing company</p>
                </div>
                <div class="logo-card">
                    <div class="client-logo">
                        <img src="https://logo.clearbit.com/apple.com" alt="Apple">
                    </div>
                    <h3 class="client-name">Apple</h3>
                    <p class="client-desc">Innovation in consumer electronics and software</p>
                </div>
                <div class="logo-card">
                    <div class="client-logo">
                        <img src="https://logo.clearbit.com/amazon.com" alt="Amazon">
                    </div>
                    <h3 class="client-name">Amazon</h3>
                    <p class="client-desc">E-commerce and cloud computing pioneer</p>
                </div>
                <div class="logo-card">
                    <div class="client-logo">
                        <img src="https://logo.clearbit.com/netflix.com" alt="Netflix">
                    </div>
                    <h3 class="client-name">Netflix</h3>
                    <p class="client-desc">Streaming entertainment and content production</p>
                </div>
                <div class="logo-card">
                    <div class="client-logo">
                        <img src="https://logo.clearbit.com/tesla.com" alt="Tesla">
                    </div>
                    <h3 class="client-name">Tesla</h3>
                    <p class="client-desc">Electric vehicles and sustainable energy solutions</p>
                </div>
            </div>
        </div>
    </section>

    <section class="carousel-section">
        <div class="container">
            <h2 class="carousel-title">Trusted by Global Brands</h2>
        </div>
        <div class="carousel-track">
            <div class="carousel-item"><img src="https://logo.clearbit.com/spotify.com" alt="Spotify"></div>
            <div class="carousel-item"><img src="https://logo.clearbit.com/uber.com" alt="Uber"></div>
            <div class="carousel-item"><img src="https://logo.clearbit.com/airbnb.com" alt="Airbnb"></div>
            <div class="carousel-item"><img src="https://logo.clearbit.com/facebook.com" alt="Meta"></div>
            <div class="carousel-item"><img src="https://logo.clearbit.com/twitter.com" alt="Twitter"></div>
            <div class="carousel-item"><img src="https://logo.clearbit.com/linkedin.com" alt="LinkedIn"></div>
            <div class="carousel-item"><img src="https://logo.clearbit.com/adobe.com" alt="Adobe"></div>
            <div class="carousel-item"><img src="https://logo.clearbit.com/salesforce.com" alt="Salesforce"></div>
            
            <div class="carousel-item"><img src="https://logo.clearbit.com/spotify.com" alt="Spotify"></div>
            <div class="carousel-item"><img src="https://logo.clearbit.com/uber.com" alt="Uber"></div>
            <div class="carousel-item"><img src="https://logo.clearbit.com/airbnb.com" alt="Airbnb"></div>
            <div class="carousel-item"><img src="https://logo.clearbit.com/facebook.com" alt="Meta"></div>
            <div class="carousel-item"><img src="https://logo.clearbit.com/twitter.com" alt="Twitter"></div>
            <div class="carousel-item"><img src="https://logo.clearbit.com/linkedin.com" alt="LinkedIn"></div>
            <div class="carousel-item"><img src="https://logo.clearbit.com/adobe.com" alt="Adobe"></div>
            <div class="carousel-item"><img src="https://logo.clearbit.com/salesforce.com" alt="Salesforce"></div>
        </div>
    </section>

    <section class="parallax-content">
        <div class="parallax-bg-2"></div>
        <div class="parallax-text">
            <h2>Excellence in Partnership</h2>
            <p>We've built lasting relationships with industry leaders by delivering exceptional results and innovative solutions that drive business growth.</p>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <h3>Ready to Join Our Success Stories?</h3>
            <p>Let's create something amazing together</p>
            <div class="footer-links">
                <a href="#contact">Contact Us</a>
                <a href="#portfolio">Our Work</a>
                <a href="#services">Services</a>
                <a href="#about">About Us</a>
            </div>
            <div class="copyright">
                <p>&copy; 2025 ClientHub. All rights reserved. Crafted with passion and precision.</p>
            </div>
        </div>
    </footer>

    <script>
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxBg = document.querySelector('.parallax-bg');
            const parallaxBg2 = document.querySelector('.parallax-bg-2');
            const header = document.getElementById('header');

            if (scrolled > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            if (parallaxBg) {
                parallaxBg.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
            if (parallaxBg2) {
                parallaxBg2.style.transform = `translateY(${scrolled * 0.3}px)`;
            }
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all logo cards for animation
        document.querySelectorAll('.logo-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    </script>
</body>
</html>