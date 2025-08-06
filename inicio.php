<?php
// inicio.php

// Start the session
session_start();

// Example: Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header('Location: login.php');
    exit();
}

// Example: Display a welcome message
echo "<h1>Bienvenido al sistema de registro</h1>";
echo "<p>Usuario ID: " . htmlspecialchars($_SESSION['user_id']) . "</p>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>