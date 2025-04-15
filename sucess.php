<?php
session_start(); // Required to use $_SESSION

// Example: simulate a success message (you'd normally set this after form submit)
if (!isset($_SESSION['success'])) {
    $_SESSION['success'] = "✅ Your project inquiry was submitted successfully!";
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Success Message </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      padding-top: 70px;
    }
  </style>
</head>
<body>

<!-- ✅ Bootstrap Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Web Dev Hub</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#ai">AI Tools</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- ✅ Success Message -->
<div class="container mt-4">
  <?php
  if (isset($_SESSION['success'])) {
      echo '<div class="alert alert-success text-center">' . $_SESSION['success'] . '</div>';
      unset($_SESSION['success']);
  }
  ?>
</div>
<button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='index.php'">Go to Home</button>
<!-- Optional JS -->
 
  <!-- Footer -->
<footer class="bg-dark text-white py-4">
  <div class="container text-center">
    <p>&copy; 2025 Web Dev Hub. All rights reserved.</p>
    <p>📞 +233 55 123 4567</p>
    <a href="#contact" class="btn btn-outline-light mt-2">Email Us</a>
  </div>
</footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
