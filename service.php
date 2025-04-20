<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Services | Web Dev Hub</title>
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

    /* Services Section */
    .services-container {
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
    
    /* Service Cards */
    .service-card {
      background-color: white;
      border-radius: 10px;
      overflow: hidden;
      margin-bottom: 30px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.07);
      transition: all 0.3s ease;
      position: relative;
      height: 100%;
      display: flex;
      flex-direction: column;
    }
    
    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    
    .service-icon {
      width: 70px;
      height: 70px;
      background: rgba(37, 99, 235, 0.1);
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0 auto 20px;
      color: var(--primary);
      font-size: 28px;
      transition: all 0.3s ease;
    }
    
    .service-card:hover .service-icon {
      background: var(--primary);
      color: white;
      transform: rotateY(180deg);
    }
    
    .service-content {
      padding: 30px 20px;
      text-align: center;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }
    
    .service-title {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 15px;
      color: var(--dark);
    }
    
    .service-description {
      color: var(--gray);
      margin-bottom: 25px;
      line-height: 1.6;
      flex-grow: 1;
    }
    
    .service-link {
      display: inline-block;
      padding: 10px 25px;
      background-color: var(--primary);
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-weight: 500;
      transition: all 0.3s ease;
      margin-top: auto;
    }
    
    .service-link:hover {
      background-color: var(--primary-dark);
      color: white;
      transform: translateY(-3px);
    }
    
    /* Process Section */
    .process-section {
      background-color: #f1f5f9;
      padding: 80px 0;
    }
    
    .process-item {
      text-align: center;
      padding: 20px;
      position: relative;
    }
    
    .process-item:not(:last-child)::after {
      content: '';
      position: absolute;
      top: 50px;
      right: -30px;
      width: 60px;
      height: 2px;
      background-color: var(--primary);
      z-index: 1;
    }
    
    .process-number {
      width: 60px;
      height: 60px;
      background-color: var(--primary);
      color: white;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 1.5rem;
      font-weight: 600;
      margin: 0 auto 20px;
      position: relative;
      z-index: 2;
    }
    
    .process-title {
      font-size: 1.3rem;
      font-weight: 600;
      margin-bottom: 15px;
      color: var(--dark);
    }
    
    .process-description {
      color: var(--gray);
      font-size: 0.95rem;
    }
    
    /* Testimonials Section */
    .testimonials-section {
      padding: 80px 0;
      background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
    }
    
    .testimonial {
      background-color: white;
      border-radius: 10px;
      padding: 30px;
      margin: 20px 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      position: relative;
    }
    
    .testimonial-quote {
      font-size: 3rem;
      color: var(--primary);
      opacity: 0.2;
      position: absolute;
      top: 20px;
      left: 20px;
    }
    
    .testimonial-text {
      font-style: italic;
      color: var(--gray);
      margin-bottom: 20px;
      position: relative;
      z-index: 1;
    }
    
    .testimonial-author {
      display: flex;
      align-items: center;
    }
    
    .testimonial-avatar {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      overflow: hidden;
      margin-right: 15px;
    }
    
    .testimonial-avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .testimonial-info h4 {
      margin: 0;
      font-size: 1.1rem;
      font-weight: 600;
    }
    
    .testimonial-info p {
      margin: 0;
      font-size: 0.9rem;
      color: var(--gray);
    }
    
    /* FAQ Section */
    .faq-section {
      padding: 80px 0;
    }
    
    .faq-item {
      margin-bottom: 20px;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    
    .faq-question {
      background-color: white;
      padding: 20px;
      cursor: pointer;
      font-weight: 600;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: all 0.3s ease;
    }
    
    .faq-question:hover {
      background-color: #f8f9fa;
    }
    
    .faq-question i {
      transition: transform 0.3s ease;
    }
    
    .faq-question.active i {
      transform: rotate(180deg);
    }
    
    .faq-answer {
      background-color: #f8f9fa;
      padding: 0 20px;
      max-height: 0;
      overflow: hidden;
      transition: all 0.3s ease;
    }
    
    .faq-answer.active {
      padding: 20px;
      max-height: 200px;
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

    /* Pricing Section */
    .pricing-section {
      padding: 80px 0;
    }
    
    .pricing-switch {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 40px;
    }
    
    .pricing-switch span {
      font-weight: 500;
    }
    
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
      margin: 0 15px;
    }
    
    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }
    
    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      transition: .4s;
      border-radius: 34px;
    }
    
    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      transition: .4s;
      border-radius: 50%;
    }
    
    input:checked + .slider {
      background-color: var(--primary);
    }
    
    input:focus + .slider {
      box-shadow: 0 0 1px var(--primary);
    }
    
    input:checked + .slider:before {
      transform: translateX(26px);
    }
    
    .pricing-card {
      background-color: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.07);
      transition: all 0.3s ease;
      margin-bottom: 30px;
      position: relative;
    }
    
    .pricing-card.featured {
      transform: scale(1.05);
      z-index: 2;
    }
    
    .pricing-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    
    .pricing-card.featured:hover {
      transform: scale(1.05) translateY(-10px);
    }
    
    .pricing-header {
      padding: 30px 20px;
      text-align: center;
      border-bottom: 1px solid #f1f5f9;
    }
    
    .pricing-title {
      font-size: 1.5rem;
      font-weight: 600;
      color: var(--dark);
      margin-bottom: 10px;
    }
    
    .pricing-badge {
      position: absolute;
      top: 15px;
      right: 15px;
      background-color: var(--secondary);
      color: white;
      padding: 5px 10px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 500;
    }
    
    .pricing-price {
      font-size: 3rem;
      font-weight: 700;
      color: var(--primary);
      margin-bottom: 10px;
    }
    
    .pricing-price span {
      font-size: 1rem;
      font-weight: 400;
      color: var(--gray);
    }
    
    .pricing-description {
      color: var(--gray);
      font-size: 0.9rem;
    }
    
    .pricing-features {
      padding: 30px 20px;
      text-align: center;
    }
    
    .pricing-features ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    
    .pricing-features li {
      padding: 10px 0;
      border-bottom: 1px solid #f1f5f9;
    }
    
    .pricing-features li:last-child {
      border-bottom: none;
    }
    
    .pricing-features i {
      margin-right: 5px;
      color: var(--primary);
    }
    
    .pricing-footer {
      padding: 20px;
      text-align: center;
      background-color: #f8fafc;
    }
    
    .pricing-btn {
      display: inline-block;
      width: 100%;
      padding: 12px 20px;
      background-color: var(--primary);
      color: white;
      border-radius: 5px;
      text-decoration: none;
      font-weight: 500;
      transition: all 0.3s ease;
    }
    
    .pricing-btn:hover {
      background-color: var(--primary-dark);
      color: white;
      transform: translateY(-3px);
      text-decoration: none;
    }
    
    .featured .pricing-btn {
      background-color: var(--secondary);
    }
    
    .featured .pricing-btn:hover {
      background-color: #e85d04;
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
      
      .process-item:not(:last-child)::after {
        display: none;
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
      
      .pricing-card.featured {
        transform: none;
      }
      
      .pricing-card.featured:hover {
        transform: translateY(-10px);
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
  <!-- <div class="preloader">
    <div class="spinner"></div>
  </div> -->

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
      <div class="header-badge" data-aos="fade-up" data-aos-delay="100">Our Services</div>
      <h1 data-aos="fade-up" data-aos-delay="200">Premium Solutions for Your Business Growth</h1>
      <p data-aos="fade-up" data-aos-delay="300">We provide comprehensive digital services to transform your ideas into powerful, engaging, and high-performance solutions.</p>
    </div>
  </header>

  <!-- Main Services Section -->
  <section class="services-container">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Our Core Services</h2>
        <p>Delivering excellence across multiple digital disciplines</p>
      </div>
      
      <div class="row">
        <!-- Web Development -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-card">
            <div class="service-content">
              <div class="service-icon">
                <i class="fas fa-code"></i>
              </div>
              <h3 class="service-title">Web Development</h3>
              <p class="service-description">We build custom websites, e-commerce platforms, and responsive designs that are optimized for performance, user experience, and conversions to boost your digital presence.</p>
              <a href="web-development.php" class="service-link">Learn More <i class="fas fa-arrow-right ml-2"></i></a>
            </div>
          </div>
        </div>
        
        <!-- 3D Rendering -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-card">
            <div class="service-content">
              <div class="service-icon">
                <i class="fas fa-cube"></i>
              </div>
              <h3 class="service-title">3D Rendering</h3>
              <p class="service-description">Experience photorealistic visuals for architecture, products, and animations with interactive 3D viewers that bring your concepts to life and captivate your audience.</p>
              <a href="web-development.php" class="service-link">Learn More <i class="fas fa-arrow-right ml-2"></i></a>
            </div>
          </div>
        </div>
        
        <!-- AI Automation -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-card">
            <div class="service-content">
              <div class="service-icon">
                <i class="fas fa-robot"></i>
              </div>
              <h3 class="service-title">AI Automation</h3>
              <p class="service-description">Automate tasks with AI tools like chatbots, content generation, and intelligent business workflows to enhance efficiency, reduce costs, and create smarter business processes.</p>
              <a href="web-development.php" class="service-link">Learn More <i class="fas fa-arrow-right ml-2"></i></a>
            </div>
          </div>
        </div>
        
        <!-- Mobile App Development -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-card">
            <div class="service-content">
              <div class="service-icon">
                <i class="fas fa-mobile-alt"></i>
              </div>
              <h3 class="service-title">Mobile App Development</h3>
              <p class="service-description">Create native and cross-platform mobile applications that provide seamless experiences across all devices, with intuitive interfaces and robust functionality.</p>
              <a href="web-development.php" class="service-link">Learn More <i class="fas fa-arrow-right ml-2"></i></a>
            </div>
          </div>
        </div>
        
        <!-- UI/UX Design -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-card">
            <div class="service-content">
              <div class="service-icon">
                <i class="fas fa-paint-brush"></i>
              </div>
              <h3 class="service-title">UI/UX Design</h3>
              <p class="service-description">Craft beautiful, intuitive user interfaces and meaningful user experiences that engage visitors, improve satisfaction, and drive conversions for your digital products.</p>
              <a href="web-development.php" class="service-link">Learn More <i class="fas fa-arrow-right ml-2"></i></a>
            </div>
          </div>
        </div>
        <!-- Digital Marketing -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-card">
            <div class="service-content">
              <div class="service-icon">
                <i class="fas fa-bullhorn"></i>
              </div>
              <h3 class="service-title">Digital Marketing</h3>
              <p class="service-description">Boost your online presence with comprehensive marketing strategies including SEO, content marketing, social media, and PPC campaigns to reach and engage your target audience.</p>
              <a href="web-development.php" class="service-link">Learn More <i class="fas fa-arrow-right ml-2"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Process Section -->
  <section class="process-section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Our Process</h2>
        <p>How we transform your ideas into reality</p>
      </div>
      
      <div class="row">
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="process-item">
            <div class="process-number">1</div>
            <h3 class="process-title">Discovery</h3>
            <p class="process-description">We start by understanding your business, goals, and requirements through detailed consultations and research.</p>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="process-item">
            <div class="process-number">2</div>
            <h3 class="process-title">Planning</h3>
            <p class="process-description">We create a comprehensive strategy and roadmap with clear milestones and deliverables for your project.</p>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="process-item">
            <div class="process-number">3</div>
            <h3 class="process-title">Creation</h3>
            <p class="process-description">Our team designs and develops your solution with regular updates and opportunity for feedback.</p>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="process-item">
            <div class="process-number">4</div>
            <h3 class="process-title">Launch & Support</h3>
            <p class="process-description">We deploy your solution and provide ongoing maintenance and support to ensure continued success.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing Section
  <section class="pricing-section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Transparent Pricing</h2>
        <p>Choose the perfect plan for your business needs</p>
      </div>
      
      <div class="pricing-switch" data-aos="fade-up">
        <span>Monthly</span>
        <label class="switch">
          <input type="checkbox" id="pricingToggle">
          <span class="slider"></span>
        </label>
        <span>Annually <small>(Save 20%)</small></span>
      </div>
      
      <div class="row">
       
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="pricing-card">
            <div class="pricing-header">
              <h3 class="pricing-title">Basic</h3>
              <div class="pricing-price monthly">$499<span>/mo</span></div>
              <div class="pricing-price annually" style="display: none;">$399<span>/mo</span></div>
              <p class="pricing-description">Perfect for small businesses and startups</p>
            </div>
            <div class="pricing-features">
              <ul>
                <li><i class="fas fa-check"></i> 5-page responsive website</li>
                <li><i class="fas fa-check"></i> Basic SEO setup</li>
                <li><i class="fas fa-check"></i> Contact form integration</li>
                <li><i class="fas fa-check"></i> Mobile optimization</li>
                <li><i class="fas fa-check"></i> 1 month of support</li>
                <li class="text-muted"><i class="fas fa-times"></i> E-commerce functionality</li>
                <li class="text-muted"><i class="fas fa-times"></i> Custom animations</li>
              </ul>
            </div>
            <div class="pricing-footer">
              <a href="#contact" class="pricing-btn">Get Started</a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="pricing-card featured">
            <div class="pricing-badge">Most Popular</div>
            <div class="pricing-header">
              <h3 class="pricing-title">Professional</h3>
              <div class="pricing-price monthly">$999<span>/mo</span></div>
              <div class="pricing-price annually" style="display: none;">$799<span>/mo</span></div>
              <p class="pricing-description">Ideal for growing businesses</p>
            </div>
            <div class="pricing-features">
              <ul>
                <li><i class="fas fa-check"></i> 10-page responsive website</li>
                <li><i class="fas fa-check"></i> Advanced SEO optimization</li>
                <li><i class="fas fa-check"></i> Custom contact forms</li>
                <li><i class="fas fa-check"></i> Mobile optimization</li>
                <li><i class="fas fa-check"></i> 3 months of support</li>
                <li><i class="fas fa-check"></i> Basic e-commerce (up to 50 products)</li>
                <li><i class="fas fa-check"></i> Basic animations</li>
              </ul>
            </div>
            <div class="pricing-footer">
              <a href="#contact" class="pricing-btn">Get Started</a>
            </div>
          </div>
        </div> -->
        
        <!-- Enterprise Plan -->
        <!-- <div class="col-lg-4 col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="300">
          <div class="pricing-card">
            <div class="pricing-header">
              <h3 class="pricing-title">Enterprise</h3>
              <div class="pricing-price monthly">$1999<span>/mo</span></div>
              <div class="pricing-price annually" style="display: none;">$1599<span>/mo</span></div>
              <p class="pricing-description">For established businesses with complex needs</p>
            </div>
            <div class="pricing-features">
              <ul>
                <li><i class="fas fa-check"></i> Unlimited pages</li>
                <li><i class="fas fa-check"></i> Premium SEO strategy</li>
                <li><i class="fas fa-check"></i> Advanced form systems</li>
                <li><i class="fas fa-check"></i> Mobile-first development</li>
                <li><i class="fas fa-check"></i> 12 months of priority support</li>
                <li><i class="fas fa-check"></i> Full e-commerce functionality</li>
                <li><i class="fas fa-check"></i> Custom animations & interactivity</li>
              </ul>
            </div>
            <div class="pricing-footer">
              <a href="#contact" class="pricing-btn">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Testimonials Section -->
  <section class="testimonials-section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>What Our Clients Say</h2>
        <p>Success stories from businesses we've helped</p>
      </div>
      
      <div class="row">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="testimonial">
            <div class="testimonial-quote"><i class="fas fa-quote-left"></i></div>
            <p class="testimonial-text">Web Dev Hub transformed our outdated website into a modern, responsive platform that's significantly increased our lead generation. Their team was professional and communicative throughout the process.</p>
            <div class="testimonial-author">
              <div class="testimonial-avatar">
                <img src="/api/placeholder/50/50" alt="Sarah Johnson">
              </div>
              <div class="testimonial-info">
                <h4>Sarah Johnson</h4>
                <p>Marketing Director, TechFlow Inc.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="testimonial">
            <div class="testimonial-quote"><i class="fas fa-quote-left"></i></div>
            <p class="testimonial-text">The 3D product renderings they created for our catalog were absolutely stunning. The attention to detail and quality exceeded our expectations, and helped boost our product sales by 40%.</p>
            <div class="testimonial-author">
              <div class="testimonial-avatar">
                <img src="/api/placeholder/50/50" alt="Michael Chen">
              </div>
              <div class="testimonial-info">
                <h4>Michael Chen</h4>
                <p>Product Manager, Infinite Designs</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="testimonial">
            <div class="testimonial-quote"><i class="fas fa-quote-left"></i></div>
            <p class="testimonial-text">The AI chatbot they developed for our customer service has reduced our response times by 80% and improved customer satisfaction ratings. They delivered on time and within budget.</p>
            <div class="testimonial-author">
              <div class="testimonial-avatar">
                <img src="/api/placeholder/50/50" alt="Emma Rodriguez">
              </div>
              <div class="testimonial-info">
                <h4>Emma Rodriguez</h4>
                <p>Customer Success, GlobalServe</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Common questions about our services</p>
      </div>
      
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
            <div class="faq-question">
              What types of businesses do you work with?
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              <p>We work with businesses of all sizes across various industries, from startups to established enterprises. Our expertise spans e-commerce, healthcare, education, finance, real estate, and more. We tailor our solutions to match each client's specific needs and industry requirements.</p>
            </div>
          </div>
          
          <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
            <div class="faq-question">
              How long does it take to complete a website project?
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              <p>Project timelines vary depending on complexity and scope. A basic website might take 4-6 weeks, while a complex e-commerce site could take 3-4 months. During our initial consultation, we'll provide a detailed timeline based on your specific requirements and goals.</p>
            </div>
          </div>
          
          <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
            <div class="faq-question">
              Do you provide ongoing maintenance and support?
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              <p>Yes, we offer various maintenance and support packages to ensure your digital solutions remain secure, up-to-date, and performing optimally. Our support plans include regular updates, security monitoring, content updates, backup services, and technical support.</p>
            </div>
          </div>
          
          <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
            <div class="faq-question">
              What makes your AI automation services unique?
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              <p>Our AI automation solutions are custom-built to address your specific business challenges. We combine industry expertise with cutting-edge AI technologies to create solutions that not only automate tasks but also continuously learn and improve over time, providing increasing value to your business.</p>
            </div>
          </div>
          
          <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
            <div class="faq-question">
              Do you offer custom packages beyond what's listed?
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              <p>Absolutely! We understand that every business has unique needs. We're happy to create custom packages that combine various services to meet your specific requirements and budget. Contact us to discuss your project, and we'll provide a tailored solution.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="cta-section">
    <div class="container">
      <div data-aos="fade-up">
        <h2>Ready to Transform Your Digital Presence?</h2>
        <p>Let's discuss how our services can help you achieve your business goals and stand out in the digital landscape.</p>
        <a href="#contact" class="cta-btn">Schedule a Free Consultation</a>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  
  <script>
    // Initialize AOS
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true
    });
    
    // Preloader
    $(window).on('load', function() {
      $('.preloader').fadeOut(500);
    });
    
    // Navbar scroll effect
    $(window).scroll(function() {
      if ($(this).scrollTop() > 50) {
        $('.navbar').addClass('scrolled');
        $('.back-to-top').addClass('show');
      } else {
        $('.navbar').removeClass('scrolled');
        $('.back-to-top').removeClass('show');
      }
    });
    
    // Back to top button
    $('.back-to-top').click(function() {
      $('html, body').animate({scrollTop: 0}, 800);
      return false;
    });
    
    // FAQ accordion
    $('.faq-question').click(function() {
      $(this).toggleClass('active');
      $(this).next('.faq-answer').toggleClass('active');
    });
    
    // Pricing toggle
    $('#pricingToggle').change(function() {
      if(this.checked) {
        $('.monthly').hide();
        $('.annually').show();
      } else {
        $('.monthly').show();
        $('.annually').hide();
      }
    });
  </script>
</body>
</html>