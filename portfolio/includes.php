<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <nav>
    <a href="index.php">Home</a>
    <a href="about.php">About Me</a>
    <a href="projects.php">Projects</a>
    <a href="contact.php">Contact</a>
    <?php session_start(); if (isset($_SESSION['loggedin'])): ?>
      <a href="logout.php">Logout</a>
    <?php else: ?>
      <a href="login.php">Login</a>
    <?php endif; ?>
  </nav>
</header>
