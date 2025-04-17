<?php 
session_start(); // Required to use $_SESSION  

// Example: simulate a success message (you'd normally set this after form submit) 
if (!isset($_SESSION['success'])) {     
    $_SESSION['success'] = "✅ Your project inquiry was submitted successfully!"; 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Success Message | Web Dev Hub</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <style>
    :root {
      --primary-color: #4e73df;
      --secondary-color: #2e59d9;
      --dark-color: #1a1a2d;
      --light-color: #f8f9fc;
      --hover-color: #3a5fcf;
      --success-color: #28a745;
      --card-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      --transition-speed: 0.3s;
    }
    
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin-top: 76px;
      background-color: var(--light-color);
      color: #333;
      line-height: 1.6;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* Navigation Bar */
    .navbar {
      box-shadow: 0 2px 15px rgba(0, 0, 0, 0.15);
      background-color: var(--dark-color) !important;
      padding: 0.8rem 1rem;
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
      color: white !important;
      letter-spacing: 0.5px;
    }

    .navbar-brand span {
      color: var(--primary-color);
    }

    .navbar-nav .nav-link {
      color: rgba(255, 255, 255, 0.9) !important;
      font-weight: 500;
      padding: 0.5rem 1rem;
      margin: 0 3px;
      border-radius: 4px;
      transition: all var(--transition-speed) ease;
    }

    .navbar-nav .nav-link:hover {
      background-color: rgba(255, 255, 255, 0.1);
      color: white !important;
      transform: translateY(-2px);
    }

    .navbar-nav .nav-link.active {
      background-color: var(--primary-color);
      color: white !important;
    }

    /* Main Content */
    .main-content {
      flex: 1;
      padding: 50px 0;
    }

    .success-container {
      max-width: 700px;
      margin: 0 auto;
    }

    .success-card {
      background-color: white;
      border-radius: 15px;
      box-shadow: var(--card-shadow);
      padding: 40px;
      text-align: center;
      margin-bottom: 30px;
    }

    .success-icon {
      font-size: 60px;
      color: var(--success-color);
      margin-bottom: 20px;
    }

    .success-title {
      font-size: 2rem;
      font-weight: 700;
      color: var(--dark-color);
      margin-bottom: 10px;
    }

    .success-message {
      font-size: 1.1rem;
      color: #6c757d;
      margin-bottom: 30px;
    }

    .alert-success {
      background-color: rgba(40, 167, 69, 0.1);
      border-color: rgba(40, 167, 69, 0.2);
      color: var(--success-color);
      font-weight: 500;
      border-radius: 10px;
      padding: 15px 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }

    /* Buttons */
    .btn {
      border-radius: 50px;
      padding: 12px 30px;
      font-weight: 600;
      letter-spacing: 0.5px;
      transition: all var(--transition-speed) ease;
    }

    .btn-primary {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
    }

    .btn-primary:hover {
      background-color: var(--hover-color);
      border-color: var(--hover-color);
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(78, 115, 223, 0.3);
    }

    .btn-outline-light {
      border-width: 2px;
    }

    .btn-outline-light:hover {
      transform: translateY(-2px);
    }

    .btn-group .btn {
      margin: 0 5px;
    }

    /* Footer */
    footer {
      background-color: var(--dark-color);
      color: white;
      padding: 40px 0 20px;
      margin-top: auto;
    }

    .footer-content {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
    }

    .footer-logo {
      font-weight: 700;
      font-size: 1.5rem;
      margin-bottom: 15px;
    }

    .footer-contact {
      margin: 15px 0;
    }

    .footer-contact i {
      margin-right: 10px;
      color: var(--primary-color);
    }

    .social-links {
      margin-top: 20px;
    }

    .social-links a {
      display: inline-block;
      width: 36px;
      height: 36px;
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      text-align: center;
      line-height: 36px;
      margin-right: 8px;
      color: white;
      transition: all var(--transition-speed) ease;
    }

    .social-links a:hover {
      background-color: var(--primary-color);
      transform: translateY(-3px);
    }

    .copyright {
      margin-top: 30px;
      padding-top: 20px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      color: rgba(255, 255, 255, 0.6);
      text-align: center;
    }

    /* Animations */
    .fade-in {
      animation: fadeIn 0.8s ease-in;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Responsiveness */
    @media (max-width: 768px) {
      .navbar {
        padding: 0.5rem 1rem;
      }
      
      .success-card {
        padding: 30px 20px;
      }
      
      .success-icon {
        font-size: 50px;
      }
      
      .success-title {
        font-size: 1.6rem;
      }
      
      .btn {
        padding: 10px 20px;
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

<!-- Main Content -->
<div class="main-content">
  <div class="container">
    <div class="success-container animate__animated animate__fadeIn">
      <!-- Success Card -->
      <div class="success-card">
        <div class="success-icon">
          <i class="fas fa-check-circle"></i>
        </div>
        <h1 class="success-title">Thank You!</h1>
        
        <?php
        if (isset($_SESSION['success'])) {
            echo '<div class="success-message">' . $_SESSION['success'] . '</div>';
            unset($_SESSION['success']);
        }
        ?>
        
        <p>We've received your information and will be in touch shortly.</p>
        
        <div class="btn-group d-flex flex-wrap justify-content-center">
          <a href="index.php" class="btn btn-primary mb-2 mb-md-0">
            <i class="fas fa-home mr-2"></i>Return to Home
          </a>
          <a href="services.php" class="btn btn-outline-secondary mb-2 mb-md-0">
            <i class="fas fa-cogs mr-2"></i>Browse Services
          </a>
        </div>
      </div>
      
      <!-- Next Steps -->
      <div class="card shadow-sm">
        <div class="card-body">
          <h4 class="mb-3">What happens next?</h4>
          <ol class="pl-3">
            <li class="mb-2">Our team will review your inquiry within 24 hours</li>
            <li class="mb-2">You'll receive a confirmation email with details</li>
            <li class="mb-2">A project consultant will contact you to discuss your needs</li>
          </ol>
          <p class="mb-0 text-muted">
            <i class="fas fa-info-circle mr-2"></i>Have questions? Contact us at <strong>info@webdevhub.com</strong>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer>
  <div class="container">
    <div class="footer-content">
      <div class="row w-100">
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="footer-logo">Web Dev Hub</div>
          <p>Providing innovative web solutions and AI-powered tools for modern businesses.</p>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        
        <div class="col-md-4 mb-4 mb-md-0">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="index.php" class="text-light">Home</a></li>
            <li><a href="services.php" class="text-light">Services</a></li>
            <li><a href="#ai" class="text-light">AI Tools</a></li>
            <li><a href="#contact" class="text-light">Contact Us</a></li>
          </ul>
        </div>
        
        <div class="col-md-4">
          <h5>Contact Us</h5>
          <div class="footer-contact">
            <p><i class="fas fa-map-marker-alt"></i> 123 Tech Street, Silicon Valley</p>
            <p><i class="fas fa-phone"></i> +233 55 123 4567</p>
            <p><i class="fas fa-envelope"></i> info@webdevhub.com</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="copyright">
      <p>&copy; <?php echo date("Y"); ?> Web Dev Hub. All Rights Reserved.</p>
    </div>
  </div>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  $(document).ready(function() {
    // Auto-dismiss success alert after 5 seconds
    setTimeout(function() {
      $('.alert-success').fadeOut('slow');
    }, 5000);
    
    // Add active class to current page nav item
    const currentLocation = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
      if (link.getAttribute('href') === currentLocation) {
        link.classList.add('active');
      }
    });
  });
</script>
</body>
</html>