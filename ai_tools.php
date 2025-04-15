<?php
// Start the session for success messages
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>AI & IT Tools Hub</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <style>
    :root {
      --primary-color: #4e73df;
      --secondary-color: #2e59d9;
      --dark-color: #1a1a2d;
      --light-color: #f8f9fc;
      --hover-color: #3a5fcf;
      --card-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      --transition-speed: 0.3s;
    }
    
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin-top: 76px;
      background-color: var(--light-color);
      color: #333;
      line-height: 1.6;
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

    /* Section Styling */
    section {
      padding: 70px 0;
    }

    .section-heading {
      position: relative;
      margin-bottom: 60px;
      font-weight: 700;
      color: var(--dark-color);
    }

    .section-heading:after {
      content: '';
      display: block;
      width: 80px;
      height: 4px;
      background: var(--primary-color);
      margin: 15px auto 0;
      border-radius: 2px;
    }

    /* Filter Buttons */
    .filter-container {
      background-color: white;
      padding: 12px;
      border-radius: 12px;
      box-shadow: var(--card-shadow);
      margin-bottom: 40px;
    }

    .filter-buttons {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 10px;
    }

    .filter-btn {
      padding: 8px 20px;
      border-radius: 50px;
      font-weight: 500;
      transition: all var(--transition-speed) ease;
      border: none;
    }

    .filter-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .filter-btn.active {
      background-color: var(--primary-color);
      color: white;
    }

    /* Card Styling */
    .tool-card {
      transition: all var(--transition-speed) ease;
    }

    .card {
      border: none;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: var(--card-shadow);
      transition: all var(--transition-speed) ease;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
    }

    .card-img-container {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      background-color: rgba(78, 115, 223, 0.1);
      transition: all var(--transition-speed) ease;
    }

    .card:hover .card-img-container {
      background-color: rgba(78, 115, 223, 0.2);
      transform: scale(1.1);
    }

    .card img {
      width: 42px;
      height: 42px;
    }

    .card-body {
      padding: 25px;
    }

    .card-title {
      font-weight: 600;
      margin-bottom: 12px;
      color: var(--dark-color);
    }

    .card-text {
      color: #6c757d;
      font-size: 0.95rem;
      margin-bottom: 20px;
    }

    .btn-primary {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
      border-radius: 50px;
      padding: 8px 22px;
      font-weight: 500;
      transition: all var(--transition-speed) ease;
    }

    .btn-primary:hover {
      background-color: var(--hover-color);
      border-color: var(--hover-color);
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(78, 115, 223, 0.25);
    }

    .btn-outline-secondary {
      color: #6c757d;
      border-color: #d1d3e2;
    }

    .btn-outline-secondary:hover {
      background-color: #f8f9fa;
      color: #333;
    }

    /* Footer */
    footer {
      background-color: var(--dark-color);
      color: white;
      padding: 40px 0 20px;
    }

    .footer-heading {
      color: white;
      font-weight: 600;
      margin-bottom: 20px;
      font-size: 1.2rem;
    }

    .footer-link {
      color: rgba(255, 255, 255, 0.7);
      transition: all 0.2s ease;
      display: block;
      margin-bottom: 10px;
    }

    .footer-link:hover {
      color: white;
      text-decoration: none;
      transform: translateX(5px);
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
    }

    /* Animations */
    .fade-in {
      animation: fadeIn 0.5s ease-in;
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
      
      .section-heading {
        font-size: 1.8rem;
      }
      
      .filter-btn {
        padding: 6px 15px;
        font-size: 0.9rem;
      }
      
      .card-img-container {
        width: 70px;
        height: 70px;
      }
      
      .card img {
        width: 36px;
        height: 36px;
      }
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Web <span>Dev Hub</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="portfolio.php">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#ai-tools">AI Tools</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section id="ai-tools" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center section-heading">AI & IT Tools Collection</h2>
    
    <!-- Filter Buttons -->
    <div class="filter-container">
      <div class="filter-buttons">
        <button class="filter-btn active" data-category="all">
          <i class="fas fa-th-large mr-2"></i>All Tools
        </button>
        <button class="filter-btn" data-category="chatbot">
          <i class="fas fa-comments mr-2"></i>Chatbots
        </button>
        <button class="filter-btn" data-category="assistant">
          <i class="fas fa-robot mr-2"></i>Assistants
        </button>
        <button class="filter-btn" data-category="media">
          <i class="fas fa-photo-video mr-2"></i>Media
        </button>
      </div>
    </div>

    <!-- Tool Cards -->
    <div class="row" id="toolCards">
      <?php
      $tools = [
        [
          'title' => 'Smart Chatbots',
          'icon' => 'https://img.icons8.com/fluency/48/chatbot.png',
          'desc' => 'AI-powered chatbots for handling customer queries and providing automated support 24/7.',
          'link' => 'service.php#chatbot',
          'category' => 'chatbot'
        ],
        [
          'title' => 'AI Assistant Tools',
          'icon' => 'https://img.icons8.com/fluency/48/artificial-intelligence.png',
          'desc' => 'Use AI as a virtual assistant to help with writing, planning, and everyday tasks.',
          'link' => 'service.php#assistant',
          'category' => 'assistant'
        ],
        [
          'title' => 'Text to Speech',
          'icon' => 'https://img.icons8.com/fluency/48/microphone.png',
          'desc' => 'Convert written content into natural, realistic voice using advanced AI technology.',
          'link' => 'service.php#tts',
          'category' => 'media'
        ],
        [
          'title' => 'AI Photo Editor',
          'icon' => 'https://img.icons8.com/fluency/48/photoshop.png',
          'desc' => 'Edit and enhance photos automatically using powerful AI-powered editing tools.',
          'link' => 'service.php#photoai',
          'category' => 'media'
        ],
        [
          'title' => 'Popular AI Tools',
          'icon' => 'https://img.icons8.com/fluency/48/bot.png',
          'desc' => 'Explore widely used tools like ChatGPT, DALL·E, MidJourney and more.',
          'link' => 'service.php#popularai',
          'category' => 'assistant'
        ],
        [
          'title' => 'Customer Support Bots',
          'icon' => 'https://img.icons8.com/fluency/48/customer-support.png',
          'desc' => 'Intelligent bots that handle frequently asked questions and provide instant support.',
          'link' => 'service.php#supportbots',
          'category' => 'chatbot'
        ]
      ];

      foreach ($tools as $tool) {
        echo '<div class="col-md-4 mb-4 tool-card" data-category="' . $tool['category'] . '">';
        echo '<div class="card h-100">';
        echo '<div class="card-body text-center">';
        echo '<div class="card-img-container">';
        echo '<img src="' . htmlspecialchars($tool['icon']) . '" alt="' . htmlspecialchars($tool['title']) . '" />';
        echo '</div>';
        echo '<h5 class="card-title">' . htmlspecialchars($tool['title']) . '</h5>';
        echo '<p class="card-text">' . htmlspecialchars($tool['desc']) . '</p>';
        echo '<a href="' . htmlspecialchars($tool['link']) . '" class="btn btn-primary">';
        echo 'Explore <i class="fas fa-arrow-right ml-1"></i></a>';
        echo '</div></div></div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
  <div class="container">
    <h2 class="text-center section-heading">Get In Touch</h2>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card shadow">
          <div class="card-body p-5">
            <form id="contactForm">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <label for="name" class="form-label">Your Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                </div>
                <div class="col-md-6 mb-4">
                  <label for="email" class="form-label">Email Address</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
              </div>
              <div class="mb-4">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" placeholder="Enter subject">
              </div>
              <div class="mb-4">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" required></textarea>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg px-5">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4">
        <h4 class="footer-heading">About Us</h4>
        <p>We provide cutting-edge AI and IT solutions to help businesses automate processes and improve customer experiences.</p>
        <div class="social-links mt-4">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <h4 class="footer-heading">Quick Links</h4>
        <a href="index.php" class="footer-link">Home</a>
        <a href="service.php" class="footer-link">Services</a>
        <a href="#ai-tools" class="footer-link">AI Tools</a>
        <a href="#contact" class="footer-link">Contact</a>
      </div>
      <div class="col-md-4 mb-4">
        <h4 class="footer-heading">Contact Info</h4>
        <p><i class="fas fa-map-marker-alt mr-2"></i> 123 Tech Street, Silicon Valley</p>
        <p><i class="fas fa-phone-alt mr-2"></i> +1 (555) 123-4567</p>
        <p><i class="fas fa-envelope mr-2"></i> info@webdevhub.com</p>
      </div>
    </div>
    <div class="text-center copyright">
      <p>&copy; <?php echo date("Y"); ?> Web Dev Hub. All Rights Reserved.</p>
    </div>
  </div>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  $(document).ready(function() {
    // Add active class to initial filter button
    $('.filter-btn[data-category="all"]').addClass('active');
    
    // Initialize with animation
    $('.tool-card').addClass('animate__animated animate__fadeInUp');
    
    // Filter functionality
    $('.filter-btn').on('click', function() {
      const category = $(this).data('category');
      
      // Update active button
      $('.filter-btn').removeClass('active');
      $(this).addClass('active');
      
      // Filter cards with animation
      if (category === 'all') {
        $('.tool-card').hide().removeClass('animate__fadeInUp')
          .addClass('animate__animated animate__fadeInUp')
          .show();
      } else {
        $('.tool-card').hide().removeClass('animate__fadeInUp');
        $('.tool-card[data-category="' + category + '"]')
          .addClass('animate__animated animate__fadeInUp')
          .show();
      }
    });
    
    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(e) {
      e.preventDefault();
      
      const target = this.hash;
      const $target = $(target);
      
      $('html, body').animate({
        'scrollTop': $target.offset().top - 80
      }, 800, 'swing');
    });
    
    // Contact form submission
    $('#contactForm').on('submit', function(e) {
      e.preventDefault();
      alert('Thanks for your message! We will get back to you soon.');
      this.reset();
    });
  });
</script>
</body>
</html>