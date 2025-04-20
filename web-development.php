<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Development Services</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-color: #4361ee;
      --secondary-color: #3f37c9;
      --accent-color: #4cc9f0;
      --light-bg: #f8f9fa;
      --dark-text: #212529;
      --light-text: #f8f9fa;
      --transition: all 0.3s ease;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
      min-height: 100vh;
      padding-top: 80px;
      display: flex;
      flex-direction: column;
    }
    
    .main-content {
      flex: 1;
    }
    
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
    }
    
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: -3px;
      left: 0;
      width: 0;
      height: 2px;
      background-color: var(--accent-color);
      transition: var(--transition);
    }
    
    .nav-link:hover::after {
      width: 100%;
    }
    
    .page-title {
      font-weight: 700;
      color: var(--dark-text);
      margin-bottom: 1.5rem;
      position: relative;
      display: inline-block;
    }
    
    .page-title::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 0;
      width: 60px;
      height: 4px;
      background: var(--primary-color);
      border-radius: 2px;
    }
    
    .form-container {
      background-color: white;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
      margin-bottom: 50px;
      position: relative;
      overflow: hidden;
      border: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .form-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 5px;
      height: 100%;
      background: var(--primary-color);
    }
    
    .step-indicator {
      display: flex;
      justify-content: center;
      margin-bottom: 30px;
    }
    
    .step {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: #dee2e6;
      color: #6c757d;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      margin: 0 20px;
      position: relative;
    }
    
    .step.active {
      background-color: var(--primary-color);
      color: white;
    }
    
    .step::after {
      content: '';
      position: absolute;
      top: 50%;
      left: 100%;
      width: 40px;
      height: 2px;
      background-color: #dee2e6;
      transform: translateY(-50%);
    }
    
    .step:last-child::after {
      display: none;
    }
    
    .form-label {
      font-weight: 500;
      color: var(--dark-text);
      margin-bottom: 0.5rem;
    }
    
    .form-control {
      border-radius: 8px;
      padding: 12px 15px;
      border: 1px solid #ced4da;
      transition: var(--transition);
    }
    
    .form-control:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.25);
    }
    
    .btn {
      padding: 12px 24px;
      border-radius: 8px;
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
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
    }
    
    .btn-outline-primary {
      color: var(--primary-color);
      border-color: var(--primary-color);
    }
    
    .btn-outline-primary:hover {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
    }
    
    .form-group {
      margin-bottom: 1.5rem;
    }
    
    footer {
      background: rgba(33, 37, 41, 0.95);
      padding: 30px 0;
      color: white;
      margin-top: auto;
    }
    
    .social-icons i {
      font-size: 1.5rem;
      margin: 0 10px;
      cursor: pointer;
      transition: var(--transition);
    }
    
    .social-icons i:hover {
      color: var(--accent-color);
      transform: translateY(-3px);
    }
    
    .form-floating {
      margin-bottom: 1.5rem;
    }
    
    .form-floating .form-control {
      height: 60px;
      padding: 1.5rem 1rem;
    }
    
    .form-floating textarea.form-control {
      height: auto;
      min-height: 120px;
    }
    
    .card-animate {
      transition: var(--transition);
    }
    
    .card-animate:hover {
      transform: translateY(-5px);
    }

    /* Animation for form transition */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .animate-in {
      animation: fadeIn 0.5s ease forwards;
    }
  </style>
</head>
<body>

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

<div class="main-content">
  <!-- Form Wrapper -->
  <div class="container mt-5">
    <div class="text-center mb-5">
      <h1 class="page-title">Web Development Inquiry</h1>
      <p class="lead text-muted">Tell us about your project and let's start building something amazing together.</p>
    </div>
    
    <div class="step-indicator">
      <div class="step active" id="stepIndicator1">1</div>
      <div class="step" id="stepIndicator2">2</div>
    </div>
    
    <!-- Step 1 Form -->
    <div id="step1" class="form-container animate-in">
      <h2 class="mb-4">Project Details</h2>
      <form id="formStep1">
        <div class="row">
          <div class="col-md-6">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
              <label for="name">Your Name</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
              <label for="email">Email Address</label>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-6">
            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="company_number" name="company_number" placeholder="Company Number" required>
              <label for="company_number">Company Number</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-floating mb-3">
              <input type="url" class="form-control" id="company_website" name="company_website" placeholder="Company Website" required>
              <label for="company_website">Company Website (add the https before the website name)</label>
            </div>
          </div>
        </div> 
        
        <div class="form-floating mb-4">
          <textarea class="form-control" id="project_summary" name="project_summary" placeholder="Project Summary" rows="4" required></textarea>
          <label for="project_summary">Project Summary</label>
        </div>
        
        <div class="d-grid">
          <button type="button" class="btn btn-primary" onclick="goToStep2()">
            Next Step <i class="fas fa-arrow-right ms-2"></i>
          </button>
        </div>
      </form>
    </div>

    <!-- Step 2 Form (Hidden by default) -->
    <div id="step2" class="form-container" style="display: none;">
      <h2 class="mb-4">Budget & Timeline</h2>
      <form id="formStep2" action="submit_project.php" method="POST">
        <!-- Hidden fields from step 1 -->
        <input type="hidden" id="hidden_name" name="name">
        <input type="hidden" id="hidden_company_number" name="company_number">
        <input type="hidden" id="hidden_email" name="email">
        <input type="hidden" id="hidden_company_website" name="company_website">
        <input type="hidden" id="hidden_project_summary" name="project_summary">

        <div class="row">
          <div class="col-md-6">
            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="budget" name="budget" placeholder="Budget (USD)" required>
              <label for="budget">Budget (USD)</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="timeline" name="timeline" placeholder="Project Timeline (e.g., 3 months)" required>
              <label for="timeline">Project Timeline</label>
            </div>
          </div>
        </div>
        
        <div class="form-floating mb-4">
          <select class="form-select" id="priority" name="priority" required>
            <option value="" selected disabled>Select your priority</option>
            <option value="speed">Speed</option>
            <option value="quality">Quality</option>
            <option value="cost">Cost-efficiency</option>
          </select>
          <label for="priority">Project Priority</label>
        </div>
        
        <div class="mt-4">
          <div class="row">
            <div class="col-md-6 mb-3 mb-md-0">
              <button type="button" class="btn btn-outline-primary w-100" onclick="backToStep1()">
                <i class="fas fa-arrow-left me-2"></i> Back
              </button>
            </div>
            <div class="col-md-6">
              <button type="submit" class="btn btn-primary w-100">
                Submit Request <i class="fas fa-paper-plane ms-2"></i>
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white py-4" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4 mb-md-0">
        <h5 class="mb-3">Web Dev Hub</h5>
        <p class="mb-0">Expert web solutions for businesses of all sizes. Let's build something amazing together.</p>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <h5 class="mb-3">Contact Us</h5>
        <p><i class="fas fa-phone me-2"></i> +233 55 123 4567</p>
        <p><i class="fas fa-envelope me-2"></i> info@webdevhub.com</p>
        <p><i class="fas fa-map-marker-alt me-2"></i> Accra, Ghana</p>
      </div>
      <div class="col-md-4">
        <h5 class="mb-3">Connect With Us</h5>
        <div class="social-icons">
          <i class="fab fa-facebook"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-linkedin"></i>
        </div>
        <div class="mt-3">
          <a href="mailto:info@webdevhub.com" class="btn btn-outline-light">Email Us</a>
        </div>
      </div>
    </div>
    <hr class="my-4">
    <div class="text-center">
      <p class="mb-0">&copy; 2025 Web Dev Hub. All rights reserved.</p>
    </div>
  </div>
</footer>

<!-- Bootstrap JS Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<script>
  // Form validation and transition between steps
  function validateStep1() {
    const form = document.getElementById('formStep1');
    const inputs = form.querySelectorAll('input, textarea');
    let isValid = true;
    
    inputs.forEach(input => {
      if (!input.checkValidity()) {
        input.classList.add('is-invalid');
        isValid = false;
      } else {
        input.classList.remove('is-invalid');
      }
    });
    
    return isValid;
  }
  
  function goToStep2() {
    if (validateStep1()) {
      // Copy values from step 1 to hidden fields in step 2
      document.getElementById("hidden_name").value = document.getElementById("name").value;
      document.getElementById("hidden_company_number").value = document.getElementById("company_number").value;
      document.getElementById("hidden_email").value = document.getElementById("email").value;
      document.getElementById("hidden_company_website").value = document.getElementById("company_website").value;
      document.getElementById("hidden_project_summary").value = document.getElementById("project_summary").value;

      // Update step indicators
      document.getElementById("stepIndicator1").classList.remove("active");
      document.getElementById("stepIndicator2").classList.add("active");

      // Hide step 1, show step 2 with animation
      document.getElementById("step1").style.display = "none";
      const step2 = document.getElementById("step2");
      step2.style.display = "block";
      step2.classList.add("animate-in");
    }
  }
  
  function backToStep1() {
    // Update step indicators
    document.getElementById("stepIndicator2").classList.remove("active");
    document.getElementById("stepIndicator1").classList.add("active");
    
    // Show step 1, hide step 2
    document.getElementById("step2").style.display = "none";
    const step1 = document.getElementById("step1");
    step1.style.display = "block";
    step1.classList.add("animate-in");
  }
  
  // Form submission
  document.getElementById("formStep2").addEventListener("submit", function(event) {
    const form = this;
    const inputs = form.querySelectorAll('input, select');
    let isValid = true;
    
    inputs.forEach(input => {
      if (!input.checkValidity()) {
        input.classList.add('is-invalid');
        isValid = false;
      } else {
        input.classList.remove('is-invalid');
      }
    });
    
    if (!isValid) {
      event.preventDefault();
    }
  });
</script>
</body>
</html>