<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Portfolio | Web Dev Hub</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

  <style>
    :root {
      --primary: #2563eb;
      --primary-dark: #1d4ed8;
      --secondary: #f97316;
      --dark: #1e293b;
      --light: #f8fafc;
      --gray: #94a3b8;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color: var(--light);
      color: var(--dark);
      overflow-x: hidden;
    }

    /* Preloader */
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: white;
      z-index: 9999;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
    .preloader .spinner {
      width: 40px;
      height: 40px;
      border: 4px solid rgba(37, 99, 235, 0.2);
      border-top-color: var(--primary);
      border-radius: 50%;
      animation: spin 1s linear infinite;
    }
    
    @keyframes spin {
      to { transform: rotate(360deg); }
    }

    /* Navbar Styling */
    .navbar {
      padding: 20px 0;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }
    
    .navbar.scrolled {
      padding: 10px 0;
      background-color: rgba(15, 23, 42, 0.98) !important;
    }
    
    .navbar-brand {
      font-weight: 700;
      color: #ffffff !important;
      font-size: 1.5rem;
      position: relative;
    }
    
    .navbar-brand span {
      color: var(--secondary);
    }
    
    .navbar-brand::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 40px;
      height: 3px;
      background: var(--secondary);
      border-radius: 10px;
    }
    
    .navbar-nav .nav-link {
      color: rgba(255, 255, 255, 0.9) !important;
      font-weight: 500;
      margin: 0 5px;
      padding: 8px 16px;
      border-radius: 4px;
      transition: all 0.3s ease;
    }
    
    .navbar-nav .nav-link:hover {
      color: white !important;
      background-color: rgba(255, 255, 255, 0.1);
    }
    
    .navbar-nav .active .nav-link {
      color: white !important;
      background-color: var(--primary);
    }

    /* Header section */
    .header {
      padding: 120px 0 60px;
      background: linear-gradient(135deg, var(--dark) 0%, #0f172a 100%);
      color: white;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    
    .header .particles {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    
    .header h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 20px;
      position: relative;
      z-index: 1;
    }
    
    .header p {
      font-size: 1.2rem;
      max-width: 600px;
      margin: 0 auto 30px;
      opacity: 0.9;
      position: relative;
      z-index: 1;
    }
    
    .header-badge {
      display: inline-block;
      background-color: rgba(249, 115, 22, 0.2);
      color: var(--secondary);
      padding: 6px 12px;
      border-radius: 20px;
      font-size: 0.9rem;
      font-weight: 500;
      margin-bottom: 15px;
    }

    /* Projects Section */
    .projects-container {
      padding: 80px 0;
    }
    
    .section-title {
      text-align: center;
      margin-bottom: 60px;
      position: relative;
    }
    
    .section-title h2 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 15px;
      color: var(--dark);
    }
    
    .section-title p {
      color: var(--gray);
      max-width: 600px;
      margin: 0 auto;
    }
    
    .section-title::after {
      content: '';
      display: block;
      width: 80px;
      height: 4px;
      background: var(--primary);
      margin: 20px auto 0;
      border-radius: 2px;
    }
    
    .project-filter {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      margin-bottom: 40px;
    }
    
    .project-filter button {
      background: none;
      border: none;
      padding: 8px 15px;
      margin: 5px;
      font-weight: 500;
      color: var(--gray);
      border-radius: 4px;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    
    .project-filter button:hover {
      color: var(--primary);
    }
    
    .project-filter button.active {
      background-color: var(--primary);
      color: white;
    }

    /* Project Cards */
    .project {
      border-radius: 10px;
      overflow: hidden;
      background-color: white;
      margin-bottom: 30px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.07);
      transition: all 0.3s ease;
      position: relative;
    }
    
    .project:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    
    .project-image {
      position: relative;
      overflow: hidden;
      height: 250px;
    }
    
    .project-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    
    .project:hover .project-image img {
      transform: scale(1.1);
    }
    
    .project-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(37, 99, 235, 0.8);
      display: flex;
      justify-content: center;
      align-items: center;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    
    .project:hover .project-overlay {
      opacity: 1;
    }
    
    .project-details {
      padding: 25px;
    }
    
    .project-title {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 15px;
      color: var(--dark);
    }
    
    .project-description {
      color: var(--gray);
      margin-bottom: 20px;
      line-height: 1.6;
    }
    
    .project-tag {
      display: inline-block;
      background-color: rgba(37, 99, 235, 0.1);
      color: var(--primary);
      padding: 4px 10px;
      border-radius: 4px;
      font-size: 0.8rem;
      margin-right: 8px;
      margin-bottom: 15px;
    }
    
    .project-link {
      display: inline-block;
      padding: 10px 25px;
      background-color: var(--primary);
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-weight: 500;
      transition: all 0.3s ease;
    }
    
    .project-link:hover {
      background-color: var(--primary-dark);
      color: white;
      transform: translateY(-3px);
    }
    
    /* Call to Action */
    .cta-section {
      background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
      padding: 80px 0;
      color: white;
      text-align: center;
    }
    
    .cta-section h2 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 20px;
    }
    
    .cta-section p {
      max-width: 600px;
      margin: 0 auto 30px;
      opacity: 0.9;
    }
    
    .cta-btn {
      display: inline-block;
      background-color: white;
      color: var(--primary);
      padding: 14px 30px;
      border-radius: 5px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    
    .cta-btn:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      color: var(--primary);
      text-decoration: none;
    }

    /* Footer */
    footer {
      background-color: var(--dark);
      color: white;
      padding: 80px 0 20px;
    }
    
    .footer-heading {
      font-size: 1.3rem;
      font-weight: 600;
      margin-bottom: 25px;
      position: relative;
      padding-bottom: 10px;
    }
    
    .footer-heading::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 50px;
      height: 3px;
      background: var(--secondary);
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
      color: rgba(255, 255, 255, 0.8);
      text-decoration: none;
      transition: all 0.3s ease;
      display: inline-block;
    }
    
    .footer-links a:hover {
      color: var(--secondary);
      transform: translateX(5px);
    }
    
    .footer-info p {
      color: rgba(255, 255, 255, 0.7);
      margin-bottom: 15px;
    }
    
    .footer-info i {
      margin-right: 10px;
      color: var(--secondary);
    }
    
    .social-links {
      margin-top: 30px;
    }
    
    .social-links a {
      display: inline-block;
      width: 40px;
      height: 40px;
      background-color: rgba(255, 255, 255, 0.1);
      text-align: center;
      line-height: 40px;
      border-radius: 50%;
      color: white;
      margin-right: 10px;
      transition: all 0.3s ease;
    }
    
    .social-links a:hover {
      background-color: var(--secondary);
      transform: translateY(-5px);
    }
    
    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding-top: 20px;
      margin-top: 40px;
      text-align: center;
    }
    
    .footer-bottom p {
      color: rgba(255, 255, 255, 0.6);
    }

    /* Newsletter */
    .newsletter-form {
      position: relative;
      margin-top: 20px;
    }
    
    .newsletter-form input {
      padding: 12px 120px 12px 15px;
      border: none;
      border-radius: 5px;
      width: 100%;
      font-size: 14px;
    }
    
    .newsletter-form button {
      position: absolute;
      right: 0;
      top: 0;
      height: 100%;
      padding: 0 20px;
      background-color: var(--secondary);
      color: white;
      border: none;
      border-radius: 0 5px 5px 0;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    
    .newsletter-form button:hover {
      background-color: #e85d04;
    }

    /* Back to top button */
    .back-to-top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 50px;
      height: 50px;
      background-color: var(--primary);
      color: white;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 99;
    }
    
    .back-to-top.show {
      opacity: 1;
      visibility: visible;
    }
    
    .back-to-top:hover {
      background-color: var(--primary-dark);
      transform: translateY(-5px);
    }

    /* Responsive tweaks */
    @media (max-width: 991.98px) {
      .navbar-collapse {
        background-color: var(--dark);
        padding: 15px;
        border-radius: 5px;
        margin-top: 15px;
      }
      
      .header h1 {
        font-size: 2.5rem;
      }
      
      .project-image {
        height: 200px;
      }
    }
    
    @media (max-width: 767.98px) {
      .header {
        padding: 100px 0 50px;
      }
      
      .header h1 {
        font-size: 2rem;
      }
      
      .section-title h2 {
        font-size: 2rem;
      }
    }
    
    /* Animations */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    .fade-in-up {
      animation: fadeInUp 0.5s ease forwards;
    }
  </style>
</head>
<body>
  <!-- Preloader -->
  <div class="preloader">
    <div class="spinner"></div>
  </div>

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


  <!-- Header Section -->
  <header class="header">
    <div class="container">
      <div class="header-badge" data-aos="fade-up" data-aos-delay="100">Our Portfolio</div>
      <h1 data-aos="fade-up" data-aos-delay="200">Our Completed Projects</h1>
      <p data-aos="fade-up" data-aos-delay="300">Explore our diverse portfolio showcasing our expertise in creating stunning, functional, and engaging web solutions tailored to our clients' needs.</p>
    </div>
  </header>

  <!-- Projects Section -->
  <section class="projects-container">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Featured Projects</h2>
        <p>We transform ideas into impactful digital experiences.</p>
      </div>
      
      <div class="project-filter" data-aos="fade-up" data-aos-delay="100">
        <button class="active" data-filter="all">All Projects</button>
        <button data-filter="web">Web Design</button>
        <button data-filter="app">Mobile Apps</button>
        <button data-filter="ecommerce">E-commerce</button>
      </div>
      
      <div class="row">
        <?php
        // Array of projects with additional metadata
        $projects = [
          [
            'title' => 'Raakac',
            'image' => 'images/raakac.jpg',
            'link' => 'https://raakac.org',
            'description' => 'Raakac is a construction and architectural website designed to showcase the client\'s portfolio and services.',
            'tags' => ['Web Design', 'Architecture'],
            'category' => 'web'
          ],
          [
            'title' => 'Maricoz',
            'image' => 'images/maricoz.jpg',
            'link' => 'https://maricoz.vercel.app/',
            'description' => 'Maricoz is a vibrant and modern landing page designed for tech and SaaS startups. It s fast, clean, and built for conversions.',
            'tags' => ['UI/UX', 'SaaS','Web Design'],
            'category' => 'web'
          ],
          [
            'title' => 'Gra Flam savings',
            'image' => 'images/gra.jpg',
            'link' => 'https://graflamwelfaresavings.com/',
            'description' =>  'A secure and user-friendly savings platform designed to help members manage contributions, withdrawals, and track their financial growth with ease.',
            'tags' => ['Savings', 'Web App'],
            'category' => 'savings'
          ],
          [
            'title' => 'FitTrack',
            'image' => '/api/placeholder/400/320',
            'link' => '#',
            'description' => 'A comprehensive fitness tracking mobile application that helps users monitor workouts, nutrition, and progress.',
            'tags' => ['Mobile App', 'Health'],
            'category' => 'app'
          ],
          [
            'title' => 'GreenEats',
            'image' => '/api/placeholder/400/320',
            'link' => '#',
            'description' => 'A sustainable food marketplace connecting local farmers with consumers, featuring online ordering and delivery.',
            'tags' => ['E-commerce', 'Marketplace'],
            'category' => 'ecommerce'
          ],
          [
            'title' => 'Security',
            'image' => 'images/security.jpg',
            'link' => 'https://security-lilac-six.vercel.app/',
            'description' => 'An immersive travel planning platform with interactive maps, itinerary creation, and booking functionalities.',
            'tags' => ['Web App', 'security'],
            'category' => 'web'
          ]
        ];

        $delay = 100;
        foreach ($projects as $project) {
          echo '<div class="col-lg-4 col-md-6 mb-4 project-item ' . htmlspecialchars($project['category']) . '" data-aos="fade-up" data-aos-delay="' . $delay . '">';
          echo '<div class="project">';
          echo '<div class="project-image">';
          echo '<img src="' . htmlspecialchars($project['image']) . '" alt="' . htmlspecialchars($project['title']) . '">';
          echo '<div class="project-overlay">';
          echo '<a href="' . htmlspecialchars($project['link']) . '" target="_blank" class="project-link">View Project</a>';
          echo '</div>';
          echo '</div>';
          echo '<div class="project-details">';
          
          // Display tags
          foreach ($project['tags'] as $tag) {
            echo '<span class="project-tag">' . htmlspecialchars($tag) . '</span>';
          }
          
          echo '<h3 class="project-title">' . htmlspecialchars($project['title']) . '</h3>';
          echo '<p class="project-description">' . htmlspecialchars($project['description']) . '</p>';
          echo '<a href="' . htmlspecialchars($project['link']) . '" target="_blank" class="project-link">Visit Website <i class="fas fa-arrow-right ml-2"></i></a>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          
          $delay += 100;
        }
        ?>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="cta-section">
    <div class="container">
      <h2 data-aos="fade-up">Ready to start your project?</h2>
      <p data-aos="fade-up" data-aos-delay="100">Let's collaborate to bring your vision to life with our expertise in web development and design.</p>
      <a href="#contact" class="cta-btn" data-aos="fade-up" data-aos-delay="200">Get Started Today</a>
    </div>
  </section>

  <!-- Footer -->
  <footer id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-5">
          <h3 class="footer-heading">About Us</h3>
          <p>Web Dev Hub is a team of passionate developers and designers dedicated to creating exceptional digital experiences that drive business growth.</p>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        
        <div class="col-lg-2 col-md-6 mb-5">
          <h3 class="footer-heading">Quick Links</h3>
          <ul class="footer-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-5">
          <h3 class="footer-heading">Services</h3>
          <ul class="footer-links">
            <li><a href="#">Web Development</a></li>
            <li><a href="#">UI/UX Design</a></li>
            <li><a href="#">E-commerce Solutions</a></li>
            <li><a href="#">Mobile App Development</a></li>
            <li><a href="#">SEO Optimization</a></li>
          </ul>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-5 footer-info">
          <h3 class="footer-heading">Contact Us</h3>
          <p><i class="fas fa-map-marker-alt"></i> 123 Tech Park, Accra, Ghana</p>
          <p><i class="fas fa-phone-alt"></i> +233 55 123 4567</p>
          <p><i class="fas fa-envelope"></i> info@webdevhub.com</p>
          
          <div class="newsletter-form">
            <input type="email" placeholder="Enter your email">
            <button type="submit">Subscribe</button>
          </div>
        </div>
      </div>
      
      <div class="footer-bottom">
        <p>&copy; 2025 Web Dev Hub. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Back to top button -->
  <div class="back-to-top">
    <i class="fas fa-chevron-up"></i>
  </div>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  
  <script>
    // Initialize AOS animations
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize AOS
      AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
      });
      
      // Hide preloader when page is loaded
      setTimeout(function() {
        document.querySelector('.preloader').style.display = 'none';
      }, 500);
      
      // Navbar scroll effect
      window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
          navbar.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
        }
        
        // Show/hide back to top button
        const backToTop = document.querySelector('.back-to-top');
        if (window.scrollY > 300) {
          backToTop.classList.add('show');
        } else {
          backToTop.classList.remove('show');
        }
      });
      
      // Back to top button
      document.querySelector('.back-to-top').addEventListener('click', function() {
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
      
      // Project filtering
      const filterButtons = document.querySelectorAll('.project-filter button');
      const projectItems = document.querySelectorAll('.project-item');
      
      filterButtons.forEach(button => {
        button.addEventListener('click', function() {
          // Remove active class from all buttons
          filterButtons.forEach(btn => btn.classList.remove('active'));
          // Add active class to clicked button
          this.classList.add('active');
          
          const filter = this.getAttribute('data-filter');
          
          projectItems.forEach(item => {
            if (filter === 'all' || item.classList.contains(filter)) {
              item.style.display = 'block';
            } else {
              item.style.display = 'none';
            }
          });
        });
      });
    });
  </script>
</body>
</html>