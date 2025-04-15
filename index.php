<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Dev Hub - Digital Agency</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-color: #4361ee;
      --secondary-color: #3f37c9;
      --accent-color: #4cc9f0;
      --dark-bg: #212529;
      --light-bg: #f8f9fa;
      --transition: all 0.3s ease;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      padding-top: 0;
      position: relative;
      overflow-x: hidden;
      color: #333;
    }
    
    /* Navbar Styles */
    .navbar {
      background: rgba(33, 37, 41, 0.95) !important;
      backdrop-filter: blur(10px);
      box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
      padding: 15px 0;
      transition: var(--transition);
    }
    
    .navbar-brand {
      font-weight: 700;
      color: var(--accent-color) !important;
      font-size: 1.5rem;
    }
    
    .nav-link {
      font-weight: 500;
      position: relative;
      margin: 0 8px;
      padding: 8px 12px;
      transition: var(--transition);
    }
    
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background-color: var(--accent-color);
      transition: var(--transition);
    }
    
    .nav-link:hover::after {
      width: 100%;
    }
    
    /* Hero Section */
    .hero-section {
      min-height: 100vh;
      background: linear-gradient(135deg, rgba(67, 97, 238, 0.9), rgba(63, 55, 201, 0.9)), url('/api/placeholder/1920/1080') center/cover no-repeat;
      display: flex;
      align-items: center;
      color: white;
      position: relative;
      overflow: hidden;
    }
    
    .hero-content {
      position: relative;
      z-index: 2;
    }
    
    .hero-title {
      font-size: 3.5rem;
      font-weight: 800;
      margin-bottom: 20px;
      opacity: 0;
      transform: translateY(30px);
      animation: fadeInUp 1s forwards;
      animation-delay: 0.3s;
    }
    
    .hero-subtitle {
      font-size: 1.3rem;
      margin-bottom: 30px;
      opacity: 0;
      transform: translateY(30px);
      animation: fadeInUp 1s forwards;
      animation-delay: 0.6s;
      max-width: 600px;
    }
    
    .hero-btn {
      opacity: 0;
      transform: translateY(30px);
      animation: fadeInUp 1s forwards;
      animation-delay: 0.9s;
    }
    
    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    /* Services Section */
    .services-section {
      padding: 100px 0;
      background-color: var(--light-bg);
    }
    
    .section-title {
      position: relative;
      margin-bottom: 50px;
      font-weight: 700;
    }
    
    .section-title::after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 0;
      width: 60px;
      height: 4px;
      background: var(--primary-color);
      border-radius: 2px;
    }
    
    .service-card {
      background: white;
      border-radius: 16px;
      padding: 30px;
      height: 100%;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      transition: var(--transition);
      border: 1px solid rgba(0, 0, 0, 0.05);
      overflow: hidden;
      position: relative;
    }
    
    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }
    
    .service-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 4px;
      height: 100%;
      background: var(--primary-color);
      transition: var(--transition);
    }
    
    .service-card:hover::before {
      width: 100%;
      height: 4px;
    }
    
    .service-icon {
      font-size: 3rem;
      color: var(--primary-color);
      margin-bottom: 20px;
    }
    
    /* About Section */
    .about-section {
      padding: 100px 0;
    }
    
    .about-img {
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    
    .feature-item {
      display: flex;
      margin-bottom: 30px;
    }
    
    .feature-icon {
      width: 50px;
      height: 50px;
      background: rgba(67, 97, 238, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 20px;
      color: var(--primary-color);
      flex-shrink: 0;
    }
    
    /* Portfolio Section */
    .portfolio-section {
      padding: 100px 0;
      background-color: var(--light-bg);
    }
    
    .portfolio-item {
      border-radius: 16px;
      overflow: hidden;
      position: relative;
      margin-bottom: 30px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      transition: var(--transition);
    }
    
    .portfolio-item:hover {
      transform: translateY(-10px);
    }
    
    .portfolio-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(67, 97, 238, 0.8);
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: var(--transition);
    }
    
    .portfolio-item:hover .portfolio-overlay {
      opacity: 1;
    }
    
    .portfolio-content {
      text-align: center;
      color: white;
      padding: 20px;
      transform: translateY(20px);
      transition: var(--transition);
    }
    
    .portfolio-item:hover .portfolio-content {
      transform: translateY(0);
    }
    
    /* Stats Section */
    .stats-section {
      padding: 80px 0;
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      color: white;
    }
    
    .stat-item {
      text-align: center;
      padding: 20px;
    }
    
    .stat-number {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 10px;
    }
    
    /* CTA Section */
    .cta-section {
      padding: 100px 0;
      background-color: #fff;
      text-align: center;
    }
    
    .cta-box {
      background: var(--light-bg);
      padding: 60px;
      border-radius: 16px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05);
    }
    
    /* Footer */
    footer {
      background: var(--dark-bg);
      color: white;
      padding: 80px 0 20px;
    }
    
    .footer-title {
      font-size: 1.3rem;
      font-weight: 600;
      margin-bottom: 25px;
      position: relative;
    }
    
    .footer-title::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 0;
      width: 40px;
      height: 3px;
      background: var(--accent-color);
    }
    
    .footer-links {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    
    .footer-links li {
      margin-bottom: 15px;
    }
    
    .footer-links a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      transition: var(--transition);
    }
    
    .footer-links a:hover {
      color: white;
      text-decoration: none;
      padding-left: 5px;
    }
    
    .social-icons {
      margin-top: 20px;
    }
    
    .social-icons a {
      display: inline-flex;
      width: 40px;
      height: 40px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      align-items: center;
      justify-content: center;
      color: white;
      margin-right: 10px;
      transition: var(--transition);
    }
    
    .social-icons a:hover {
      background: var(--accent-color);
      transform: translateY(-5px);
    }
    
    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding-top: 20px;
      margin-top: 50px;
    }
    
    /* Buttons */
    .btn {
      padding: 12px 30px;
      border-radius: 50px;
      font-weight: 600;
      transition: var(--transition);
    }
    
    .btn-primary {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
    }
    
    .btn-primary:hover {
      background-color: var(--secondary-color);
      border-color: var(--secondary-color);
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(67, 97, 238, 0.3);
    }
    
    .btn-outline-light:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(255, 255, 255, 0.1);
    }
    
    /* Additional Animation */
    .fadeIn {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.5s ease, transform 0.5s ease;
    }
    
    .fadeIn.active {
      opacity: 1;
      transform: translateY(0);
    }
    
    /* Responsive adjustments */
    @media (max-width: 767px) {
      .hero-title {
        font-size: 2.5rem;
      }
      
      .hero-subtitle {
        font-size: 1.1rem;
      }
      
      .cta-box {
        padding: 30px;
      }
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="fas fa-code me-2"></i>Web Dev Hub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-home me-1"></i> Home</a></li>
        <li class="nav-item"><a class="nav-link" href="service.php"><i class="fas fa-server me-1"></i> Services</a></li>
        <li class="nav-item"><a class="nav-link" href="portfolio.php"><i class="fas fa-briefcase me-1"></i> Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="ai_tools.php"><i class="fas fa-robot me-1"></i> AI Tools</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact"><i class="fas fa-envelope me-1"></i> Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero-section">
  <div class="container hero-content">
    <div class="row">
      <div class="col-lg-8">
        <h1 class="hero-title">Innovative Digital Solutions for Modern Business</h1>
        <p class="hero-subtitle">Your one-stop agency for Web Development, 3D Rendering, and AI Automation. We transform ideas into impactful digital experiences.</p>
        <div class="hero-btn">
          <a href="service.php" class="btn btn-light btn-lg me-3">Explore Services</a>
          <a href="#contact" class="btn btn-outline-light btn-lg">Get in Touch</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="services-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-6">
        <h2 class="section-title">Our Services</h2>
        <p>We offer comprehensive digital solutions tailored to your business needs.</p>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-laptop-code"></i>
          </div>
          <h4>Web Development</h4>
          <p>Custom websites and web applications built with cutting-edge technologies for exceptional user experiences.</p>
          <a href="service.php" class="btn btn-sm btn-outline-primary mt-3">Learn More</a>
        </div>
      </div>
      
      <div class="col-md-4 mb-4">
        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-cube"></i>
          </div>
          <h4>3D Rendering</h4>
          <p>Stunning 3D visualizations and models to bring your products and ideas to life with photorealistic quality.</p>
          <a href="service.php" class="btn btn-sm btn-outline-primary mt-3">Learn More</a>
        </div>
      </div>
      
      <div class="col-md-4 mb-4">
        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-robot"></i>
          </div>
          <h4>AI Automation</h4>
          <p>Intelligent automation solutions powered by AI to streamline your business processes and boost efficiency.</p>
          <a href="service.php" class="btn btn-sm btn-outline-primary mt-3">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="about-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="about-img">
          <img src="images/free.jpg" alt="About Web Dev Hub" class="img-fluid">
        </div>
      </div>
      
      <div class="col-lg-6">
        <h2 class="section-title">Why Choose Us</h2>
        <p class="mb-4">With over a decade of experience in digital solutions, we bring expertise and innovation to every project we undertake.</p>
        
        <div class="feature-item">
          <div class="feature-icon">
            <i class="fas fa-check"></i>
          </div>
          <div>
            <h5>Expert Team</h5>
            <p>Our professionals bring years of industry experience and technical expertise.</p>
          </div>
        </div>
        
        <div class="feature-item">
          <div class="feature-icon">
            <i class="fas fa-check"></i>
          </div>
          <div>
            <h5>Cutting-edge Technology</h5>
            <p>We utilize the latest technologies and frameworks to deliver modern solutions.</p>
          </div>
        </div>
        
        <div class="feature-item">
          <div class="feature-icon">
            <i class="fas fa-check"></i>
          </div>
          <div>
            <h5>Client-focused Approach</h5>
            <p>Your vision and requirements are our priority throughout the project lifecycle.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio Preview Section -->
<section class="portfolio-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-6">
        <h2 class="section-title">Featured Projects</h2>
        <p>Explore some of our recent work and see how we've helped businesses achieve their digital goals.</p>
      </div>
      <div class="col-lg-6 text-lg-end">
        <a href="portfolio.php" class="btn btn-outline-primary">View All Projects</a>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-4">
        <div class="portfolio-item">
          <img src="/api/placeholder/400/300" alt="Project 1" class="img-fluid">
          <div class="portfolio-overlay">
            <div class="portfolio-content">
              <h5>E-Commerce Platform</h5>
              <p>Web Development</p>
              <a href="portfolio.php" class="btn btn-sm btn-light">View Details</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="portfolio-item">
          <img src="/api/placeholder/400/300" alt="Project 2" class="img-fluid">
          <div class="portfolio-overlay">
            <div class="portfolio-content">
              <h5>Product Visualization</h5>
              <p>3D Rendering</p>
              <a href="portfolio.php" class="btn btn-sm btn-light">View Details</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="portfolio-item">
          <img src="/api/placeholder/400/300" alt="Project 3" class="img-fluid">
          <div class="portfolio-overlay">
            <div class="portfolio-content">
              <h5>AI Customer Service Bot</h5>
              <p>AI Automation</p>
              <a href="portfolio.php" class="btn btn-sm btn-light">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-6">
        <div class="stat-item">
          <div class="stat-number">250+</div>
          <div class="stat-title">Projects Completed</div>
        </div>
      </div>
      
      <div class="col-md-3 col-6">
        <div class="stat-item">
          <div class="stat-number">120+</div>
          <div class="stat-title">Happy Clients</div>
        </div>
      </div>
      
      <div class="col-md-3 col-6">
        <div class="stat-item">
          <div class="stat-number">15+</div>
          <div class="stat-title">Team Members</div>
        </div>
      </div>
      
      <div class="col-md-3 col-6">
        <div class="stat-item">
          <div class="stat-number">10+</div>
          <div class="stat-title">Years Experience</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
  <div class="container">
    <div class="cta-box">
      <h2 class="mb-4">Ready to Start Your Project?</h2>
      <p class="mb-4">Let's discuss how we can help you achieve your digital goals and transform your business.</p>
      <a href="#contact" class="btn btn-primary btn-lg">Get Started</a>
    </div>
  </div>
</section>

<!-- Footer -->
<footer id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mb-5 mb-lg-0">
        <h5 class="footer-title">About Web Dev Hub</h5>
        <p>We are a full-service digital agency specializing in web development, 3D rendering, and AI automation solutions tailored for businesses of all sizes.</p>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      
      <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
        <h5 class="footer-title">Quick Links</h5>
        <ul class="footer-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="service.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="ai_tools.php">AI Tools</a></li>
        </ul>
      </div>
      
      <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
        <h5 class="footer-title">Our Services</h5>
        <ul class="footer-links">
          <li><a href="service.php">Web Development</a></li>
          <li><a href="service.php">3D Rendering</a></li>
          <li><a href="service.php">AI Automation</a></li>
          <li><a href="service.php">Digital Marketing</a></li>
        </ul>
      </div>
      
      <div class="col-lg-3">
        <h5 class="footer-title">Contact Information</h5>
        <p><i class="fas fa-map-marker-alt me-2"></i> Accra, Ghana</p>
        <p><i class="fas fa-phone me-2"></i> +233 55 123 4567</p>
        <p><i class="fas fa-envelope me-2"></i> info@webdevhub.com</p>
        <a href="mailto:info@webdevhub.com" class="btn btn-outline-light mt-3">Email Us</a>
      </div>
    </div>
    
    <div class="footer-bottom text-center">
      <p>&copy; 2025 Web Dev Hub. All rights reserved.</p>
    </div>
  </div>
</footer>

<!-- Bootstrap JS Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
  // Scroll animation
  document.addEventListener('DOMContentLoaded', function() {
    const fadeElements = document.querySelectorAll('.fadeIn');
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
        }
      });
    }, { threshold: 0.1 });
    
    fadeElements.forEach(element => {
      observer.observe(element);
    });
  });
</script>
</body>
</html>