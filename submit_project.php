<?php
require 'db.php'; // Database connection using PDO in db.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form data
    $name = trim($_POST['name']);
    $company_number = trim($_POST['company_number']);
    $email = trim($_POST['email']);
    $company_website = trim($_POST['company_website']);
    $project_summary = trim($_POST['project_summary']);
    $budget = floatval($_POST['budget']);
    $timeline = trim($_POST['timeline']);

    try {
        // Prepare SQL statement
        $stmt = $pdo->prepare("INSERT INTO project_inquiries
            (name, company_number, email, company_website, project_summary, budget, timeline) 
            VALUES (?, ?, ?, ?, ?, ?, ?)");

        // Execute the insert
        $stmt->execute([
            $name,
            $company_number,
            $email,
            $company_website,
            $project_summary,
            $budget,
            $timeline
        ]);

        // Redirect to thank you page
        header("Location: sucess.php");
        exit();

    } catch (PDOException $e) {
        echo "<h3 style='color: red;'>❌ Database Error: " . $e->getMessage() . "</h3>";
    }
} else {
    echo "<h3 style='color: red;'>❌ Invalid request method.</h3>";
}
?>
