<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the username and password (you would typically do more thorough validation and authentication here)
    if ($username === "admin" && $password === "password123") {
        // Authentication successful
        echo "Login successful! Welcome, $username!";
    } else {
        // Authentication failed
        echo "Invalid username or password. Please try again.";
    }
}
?>
